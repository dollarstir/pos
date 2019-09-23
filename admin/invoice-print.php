<?php
include 'db.php';
if(isset($_GET)) {
    $target = $_GET['target'];

    $query = mysqli_query($conn, "SELECT * FROM sales_report WHERE id = $target");
    $sales_report = mysqli_fetch_array($query);

    $query2 = mysqli_query($conn, "SELECT * FROM customers WHERE id = {$sales_report['Cname']}");
    $customer = mysqli_fetch_array($query2);


} else {


}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Invoice-Print  </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="assets/css/ecommerce/invoice.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->    
</head>
<body>
    <div class="container">

        <div class="row mb-5">
            <div class="col-sm-12 col-12">
                <h3 class="in-heading">Invoice</h3>
            </div>
        </div>

        <div class="widget-content-area">
            <div class="row invoice-top-section">
                <div class="col-sm-6 mb-4">
                    <h5 class="invoice-info-title">Invoice Info</h5>
                    <p class="invoice-serial-number">#1942784</p>
                </div>
                <div class="col-sm-6 mb-4 text-sm-right">
                    <p class="invoice-order-status">Order Status: Pending</p>
                    <p class="invoice-order-date">Date: <?php echo date('Y-m-d');?></p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 col-sm-6 invoice-from">
                    <h5 class="invoice-from-title mb-3">Bill From</h5>
                    <div class="row">
                        <div class="col-12 mb-4">
                            <p>Pharmacy</p>  
                        </div>
                        <div class="col-12 mb-4">
                            <p>405 Mulberry Rd. Mc Grady,</p>
                            <p>NC, 28649</p>
                            
                        </div>
                        <div class="col-12 mb-4">
                            <p>Fax: +0(863) 228-7064</p>
                            <p>Phone: +(740) 927-9284</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 invoice-to text-sm-right">
                    <h5 class="invoice-to-title mb-3">Bill To</h5>
                    <div class="row">
                        <div class="col-12 mb-4">
                            <p><?php echo $customer['name'];?></p>
                        </div>
                        <div class="col-12 mb-4">
                            <p>86781 547th Ave. Osmond,</p>
                            <p>NE, 68765</p>
                        </div>
                        <div class="col-12 mb-4">
                            <p><?php echo $customer['fax'];?></p>
                            <p><?php echo $customer['telephone'];?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Item Name</th>
                                    <th class="text-right" scope="col">Cost</th>
                                    <th class="text-right" scope="col">Qty</th>
                                    <th class="text-right" scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query_sales = mysqli_query($conn, "SELECT * FROM sales WHERE salesreportID = $target");

                                    while ($row = mysqli_fetch_array($query_sales)) {
                                        $query_pro = mysqli_query($conn, "SELECT * FROM drugs WHERE id = {$row['product_name']}");
                                        $pro = mysqli_fetch_array($query_pro);

                                        echo '
                                        <tr>
                                            <td>'.$pro["bname"].'</td>
                                            <td class="text-right">GH&#8373; '.$pro["price"].'</td>
                                            <td class="text-right quantity">'.$row["quantity"].'</td>
                                            <td class="text-right">GH&#8373; '.$row["totalprice"].'</td>
                                        </tr>
                                    ';
                                    }
                                
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-12">
                    <div class="invoice-total-amounts float-right text-right">
                        <div class="row">
                            <div class="col-sm-9 col-7 text-right">
                                <h4>Grand Total: </h4>
                            </div>
                            <div class="col-sm-3 col-5">
                                <h4>GH&#8373; <?php echo $sales_report['gt'];?></h4>
                            </div>
                            <div class="col-sm-9 col-7 text-right">
                                <p>Total amount paid: </p>
                            </div>
                            <div class="col-sm-3 col-5">
                                <p>GH&#8373; <?php echo $sales_report['pa'];?></p>
                            </div>
                            <div class="col-sm-9 col-7 text-right">
                                <p>Balance: </p>
                            </div>
                            <div class="col-sm-3 col-5">
                                <p>GH&#8373; <?php echo $sales_report['balance'];?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-sm-12 col-12">
                    <center><h6>Designed By Purplesoft</h6></center>
                </div>
            </div>

        </div>

    </div>
    
    <div class="row mb-5">
        <div class="col-sm-12 col-12">
       
        </div>
    </div>
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <script>window.print();</script>
    <!-- END GLOBAL MANDATORY SCRIPTS --> 
    <a href="addpro.php"><div style="position: fixed; top: 10px; right: 20px;" class="btn btn-primary">Back</div></a>
</body>

<!-- Mirrored from designreset.com/preview-equation/default/invoice-print.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 May 2019 14:29:57 GMT -->
</html>