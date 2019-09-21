<?php

function sales_report() {
    include "db.php";

    $sql = "SELECT * FROM sales_report ORDER BY date_added DESC";
    $query = mysqli_query($conn, $sql);

    while ($results = mysqli_fetch_array($query)) {
        $sql_s = "SELECT * FROM sales WHERE invoice = {$results['id']}";
        $query_s = mysqli_query($conn, $sql_s);
        $results_s = mysqli_fetch_array($query_s);

        $results['quantity'] = $results_s['quantity'];

        $sql_p = "SELECT * FROM drugs WHERE id = {$results['product']}";
        $query_p = mysqli_query($conn, $sql_p);
        $results_p = mysqli_fetch_array($query_p);

        $results['unit_price'] = $results_p['price'];
        $results['product'] = $results_p['bname'];


        echo '
            <tr>
                <td>'.$results['id'].'</td>
                <td>'.$results['product'].'</td>
                <td>'.$results['quantity'].'</td>
                <td>GH&#8373; '.$results['unit_price'].'</td>
                <td>GH&#8373; '.$results['gt'].'</td>
                <td>GH&#8373; '.$results['pa'].'</td>
                <td>GH&#8373; '.$results['balance'].'</td>
                <td>'.$results['date_added'].'</td>
            </tr>
        
        ';
    }
}


function product_sales() {
    include "db.php";

    $sql = "SELECT id, bname, price, remaining FROM drugs";
    $query = mysqli_query($conn, $sql);

    while ($results = mysqli_fetch_array($query)) {
        if($results['remaining'] > 0) {
            if($results['remaining'] <= 3) {
                echo '
                    <tr style="color: red">
                        <td>'.$results['id'].'</td>
                        <td>'.$results['bname'].'</td>
                        <td>'.$results['remaining'].'</td>
                        <td>'.$results['price'].'</td>
                        <td><div id="'.$results['id'].'" class="btn add_to_cartProduct">Add</div></td>
                    </tr>
                ';
    
            } else {
                echo '
                    <tr>
                        <td>'.$results['id'].'</td>
                        <td>'.$results['bname'].'</td>
                        <td>'.$results['remaining'].'</td>
                        <td>'.$results['price'].'</td>
                        <td><div id="'.$results['id'].'" class="btn add_to_cartProduct">Add</div></td>
                    </tr>
                ';
    
            }
        }
    }
}


if(isset($_GET) || isset($_POST)) {
    
    include "db.php";

    if(isset($_POST['func'])) {
        if($_POST['func'] == 'addToCart') {
            $sql = "SELECT id, bname, price FROM drugs WHERE id = {$_POST['id']}";
            $query = mysqli_query($conn, $sql);
            $results = mysqli_fetch_array($query);
    
            echo json_encode($results);
        }


        if($_POST['func'] == 'reportPopUp') {

            foreach ($_POST['target'] as $key => $value) {

                $sql = "SELECT * FROM drugs WHERE id = $value[0]";
                $query = mysqli_query($conn, $sql);
                $results = mysqli_fetch_array($query);

                $cost = $results['price'] * $value[1];

                if($results['remaining'] < $value[1]) {
                    echo '
                        <div style="color: red;border: 1px solid lightgray;" class="row report">
                            <div style="margin: 5px 0;" class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <center><h4><b>'.$results['bname'].'</b></h4></center><br>
                                <center><h5><b>OUT OF STOCK</b></h5></center>
                                <input name="id" type="hidden" value="'.$results['id'].'">
                            </div>
                        </div>
                    ';

                } else {

                    echo '
                        <div style="border: 1px solid lightgray;" class="row report">
                            <div style="margin: 5px 0;" class="col-lg-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                <h4><b>'.$results['bname'].'</b></h4><br>
                                <input name="id" type="hidden" value="'.$results['id'].'">
                            </div>
                            <div style="margin: 5px 0;" class="col-lg-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                Quantity : <span>'.$value[1].'</span><br>
                                Amount To Be Paid : GH&#8373; <span>'.$cost.'</span>
                                <input name="quantity" type="hidden" value="'.$value[1].'">
                                <input name="gt" type="hidden" value="'.$cost.'">
                            </div>
                            <div style="margin: 5px 0;" class="col-lg-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                Customers Name : 
                                <input name="cname" type="text" class="form-control" placeholder="Customer\'s Name">
                            </div>
                            <div style="margin: 5px 0;" class="col-lg-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                Amount Paid : GH&#8373;
                                <input name="pa" type="number" class="form-control" value="0">
                            </div>
                        </div>
                    ';
                }
            }

        }


        if($_POST['func'] == 'submitReport') {
            $target = $_POST['target'];

            $res = array();

            foreach ($target as $key => $value) {

                if(empty($value['cname'])) {
                    $res[$key] = 'empty';

                } else if(empty($value['pa'])) {
                    $res[$key] = 'empty';

                } else if($value['pa'] <= 0) {
                    $res[$key] = 'invalid';

                } else {
                    extract($value);
                    $balance = $gt - $pa;
                    $date = date('Y-m-d');

                    $sql_d = "SELECT * FROM drugs WHERE id = $id";
                    $query_d = mysqli_query($conn, $sql_d);
                    $res_d = mysqli_fetch_array($query_d);

                    if(($res_d['remaining'] - $quantity) <= 0) {
                        $res[$key] = 'out';

                    } else {
                        $remain = $res_d['remaining'] - $quantity;
                        $sql_dUp = "UPDATE drugs SET remaining = '$remain' WHERE id = $id";

                        $sql = "INSERT INTO sales_report (product, Cname, gt, pa, balance, date_added) VALUES ('$id', '$cname', '$gt', '$pa', '$balance', '$date')";


                        if(mysqli_query($conn, $sql)) {
                            $last_id = mysqli_insert_id($conn);
    
                            $sql1 = "INSERT INTO sales (product_name, invoice, quantity, date_added) VALUES ('$id', '$last_id', '$quantity', '$date')";
    
                            if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql_dUp)) {
                                $res[$key] = 'success';
    
                            } else {
                                $res[$key] ='error';
    
                            }
                            
                        } else {
                            $res[$key] ='error';
                
                        }

                    }
                    
                }
            }

            echo json_encode($res);

        }
    }
}