<?php

function sales_report() {
    include "db.php";

    $sql = "SELECT * FROM sales ORDER BY date_added DESC";
    $query = mysqli_query($conn, $sql);

    while ($results = mysqli_fetch_array($query)) {
        $sql_sr = "SELECT * FROM sales_report WHERE id = {$results['salesreportID']}";
        $query_sr = mysqli_query($conn, $sql_sr);
        $results_sr = mysqli_fetch_array($query_sr);

        $sql_p = "SELECT * FROM drugs WHERE id = {$results['product_name']}";
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
                <td>GH&#8373; '.$results['totalprice'].'</td>
                <td>'.$results_sr['invoice'].'</td>
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
        if($results['remaining'] == 0) {
            echo '
                <tr style="color: red">
                    <td>'.$results['id'].'</td>
                    <td>'.$results['bname'].'</td>
                    <td>'.$results['remaining'].'</td>
                    <td>Gh&#8373;'.$results['price'].'</td>
                    <td><div style="background: red" id="'.$results['id'].'" class="btn add">Out Of Stock</div></td>
                </tr>
            ';

        } elseif ($results['remaining'] <= 10) {
            echo '
                <tr style="color: red">
                    <td>'.$results['id'].'</td>
                    <td>'.$results['bname'].'</td>
                    <td>'.$results['remaining'].'</td>
                    <td>Gh&#8373;'.$results['price'].'</td>
                    <td><div id="'.$results['id'].'" class="btn add_to_cartProduct">Add</div></td>
                </tr>
            ';

        } else {
            echo '
                <tr>
                    <td>'.$results['id'].'</td>
                    <td>'.$results['bname'].'</td>
                    <td>'.$results['remaining'].'</td>
                    <td>Gh&#8373;'.$results['price'].'</td>
                    <td><div id="'.$results['id'].'" class="btn add_to_cartProduct">Add</div></td>
                </tr>
            ';
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
            $var = true;

            echo '
                <div style="box-shadow: 0 0 10px gray;margin-bottom: 5px;" class="widget-content widget-content-area">
                    <div class="row invoice-top-section">
                        <div class="col-sm-6 mb-4">
                            <h5 class="invoice-info-title">Invoice Info</h5>
                            <p class="invoice-serial-number">#1942784</p>
                        </div>
                        <div class="col-sm-6 mb-4 text-sm-right">
                            <p class="invoice-order-status"> 
                                <select name="cname" class="form-control-rounded form-control" id="exampleFormControlSelect1">
                                    <option value="">Select Customer</option>';
                        
                                        $getsup= mysqli_query($conn,"SELECT * FROM customers");
                                        while ($row= mysqli_fetch_array($getsup)) {
            
                                            $name=$row['name'];
                                            $id=$row['id'];
                                            $telephone= $row['telephone'];
                                            $both = $name.' -'.$telephone;
                                            echo '<option value="'.$id.'">'.$both.'   </option>';
                                        }
                                    
                                echo '
                                </select>  
                            </p>
                            <p class="invoice-order-date">Date: ###-##-##</p>
                        </div>
                    </div>

                    <div class="row mt-2 mb-2">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Item Name</th>
                                            <th class="text-right" scope="col">Unit Price</th>
                                            <th class="text-right" scope="col">Qty</th>
                                            <th class="text-right" scope="col">Total Price</th>    
                                        </tr>
                                    </thead>
                                    <tbody>';
                                        $gt = 0;
                                        foreach ($_POST['target'] as $key => $value) {

                                            $sql = "SELECT * FROM drugs WHERE id = $key";
                                            $query = mysqli_query($conn, $sql);
                                            $results = mysqli_fetch_array($query);

                                            $cost = $results['price'] * $value;

                                            if($results['remaining'] - $value <= 0) {
                                                $var = false;
                                                echo '
                                                    <tr id="'.$results["id"].'" class="product_details">
                                                        <td>'.$results["bname"].'</td>
                                                        <td class="text-right">Out Of Stock</td>
                                                        <td class="text-right">Out Of Stock</td>
                                                        <td class="text-right">Out Of Stock</td>
                                                    </tr>
                                                ';

                                            } else {
                                                echo '
                                                    <tr id="'.$results["id"].'" class="product_details">
                                                        <td>'.$results["bname"].'</td>
                                                        <td class="text-right">GH&#8373; '.$results["price"].'</td>
                                                        <td class="text-right quantity">'.$value.'</td>
                                                        <td class="text-right">GH&#8373; '.$cost.'</td>
                                                    </tr>
                                                ';
                                            }



                                            $gt = $gt + $cost;
                                        }

                            echo    '</tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-6">
                            <div class="invoice-total-amounts">
                                <div class="row">
                                    <div class="col-sm-4 col-7">
                                        <h4 class="mb-3">Grand Total: </h4>
                                    </div>
                                    <div class="col-sm-8 col-5">
                                        <h4 class="mb-3">GH&#8373; <span class="gtotal">'.$gt.'</span></h4>
                                    </div>
                                    <div class="col-sm-4 col-7">
                                        <p class="mb-3">Total Paid Amount: </p>
                                    </div>
                                    <div class="col-sm-8 col-5">
                                        <p class="mb-3">GH&#8373; 
                                        <input name="pa" type="text" class="form-control-rounded  form-control" placeholder="" value="0">
                                        </p>
                                    </div>
                                    <div class="col-sm-4 col-7">
                                        <p class="mb-3">Balance: </p>
                                    </div>
                                    <div class="col-sm-8 col-5">
                                        <p class="mb-3">GH&#8373; <span id="balance">0</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 text-sm-right">
                            <div class="row">
                                <div class="col-sm-12 col-12">
                                ';if($var) { echo'
                                <a class="submitreport btn btn-gradient-secondary btn-rounded mt-sm-0 mt-2 mb-2">Add Report and Print</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';} else {
                                echo'
                                <a class="btn btn-gradient-secondary btn-rounded mt-sm-0 mt-2 mb-2 outofstock">Remove Item Out of stock</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';

                }

                // <a class="btn btn-gradient-secondary print-invoice btn-rounded mt-sm-0 mt-2 mb-2" href="invoice-print.html" target="_blank">Add Report and Print</a>
        }


        if($_POST['func'] == 'submitReport') {
            $target = $_POST['target'];

            $res = array();

            $value = $target;

            if(empty($value['id'])) {
                $res[0] = 'empty';

            } else if(empty($value['pa'])) {
                $res[0] = 'empty';

            } else {
                extract($value);
                $balance = $gt - $pa;
                $date = date('Y-m-d');

                $sql = "INSERT INTO sales_report (invoice, Cname, gt, pa, balance, date_added) VALUES ('', '$id', '$gt', '$pa', '$balance',  '$date')";

                if(mysqli_query($conn, $sql)) {
                    $last_id = mysqli_insert_id($conn);

                    foreach ($stuff as $value) {

                        $index = array_search($value, $stuff);
        
                        $sql_d = "SELECT * FROM drugs WHERE id = {$value['product']}";
                        $query_d = mysqli_query($conn, $sql_d);
                        $res_d = mysqli_fetch_array($query_d);

                                
                        $quan =  $value['quantity'];
                        $pro = $value['product'];
        
                        if(($res_d['remaining'] - $quan) < 0) {
                            $res[0] = 'out';
        
                        } else {
                            $remain = $res_d['remaining'] - $value['quantity'];
        
                            $sql_dUp = "UPDATE drugs SET remaining = '$remain' WHERE id = {$value['product']}";
        
                            $totalprice = $res_d['price'] * $quan;

                            $sql1 = "INSERT INTO sales (salesreportID , product_name, totalprice, quantity, date_added) VALUES ('$last_id','$pro', $totalprice, '$quan', '$date')";
    
    
                            if(mysqli_query($conn, $sql1) && mysqli_query($conn, $sql_dUp)) {
                                $res[0] = 'success';
                                $res['return'] = $last_id;
    
                            } else {
                                $res[0] ='error';
    
                            }
        
                        }  
                    }

                } else {
                    $res[0] = 'error';

                }
                
            }
            
            echo json_encode($res);

        }
    }
}