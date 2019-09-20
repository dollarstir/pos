<?php

function sales_report() {
    include "db.php";

    $sql = "SELECT * FROM sales_report ORDER BY date_added DESC";
    $query = mysqli_query($conn, $sql);

    while ($results = mysqli_fetch_array($query)) {
        echo '
            <tr>
                <td>'.$results['id'].'</td>
                <td>'.$results['product'].'</td>
                <td>'.$results['quantity'].'</td>
                <td>'.$results['unit_price'].'</td>
                <td>'.$results['gt'].'</td>
                <td>'.$results['pa'].'</td>
                <td>'.$results['balance'].'</td>
                <td>'.$results['date_added'].'</td>
            </tr>
        
        ';
    }
}


function product_sales() {
    include "db.php";

    $sql = "SELECT id, bname, price FROM drugs";
    $query = mysqli_query($conn, $sql);

    while ($results = mysqli_fetch_array($query)) {
        echo '
            <tr>
                <td>'.$results['id'].'</td>
                <td>'.$results['bname'].'</td>
                <td>'.$results['price'].'</td>
                <td><div id="'.$results['id'].'" class="btn add_to_cartProduct">Add</div></td>
            </tr>
        ';
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

    }
}