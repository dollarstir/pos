<?php
include "lib.php";

?>

<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Add Sales</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/mess.css">
    <?php include 'core.php';?>
    <link rel="stylesheet" href="plugins/fontawesome/css/all.css">
    <link rel="stylesheet" href="plugins/sweetalerts/sweetalert2.min.css">
    <link rel="stylesheet" href="plugins/sweetalerts/sweetalert.css">
    <!-- END GLOBAL MANDATORY STYLES -->






    

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
    <link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_html5.css">
    <style>
        .form-control {
            border: 1px solid #ccc;
            color: #888ea8;
            font-size: 15px;
        }
        code { color: #3862f5; }
        .form-control:disabled, .form-control[readonly] { background-color: #f1f3f9; border-color: #f1f3f1; }
        .btn-primary.disabled, .btn-primary:disabled { background-color: #3862f5; border-color: #3862f5; }
        label { color: #3b3f5c; margin-bottom: 14px; }
        .form-control::-webkit-input-placeholder { color: #888ea8; font-size: 15px; }
        .form-control::-ms-input-placeholder { color: #888ea8; font-size: 15px; }
        .form-control::-moz-placeholder { color: #888ea8; font-size: 15px; }
        .form-control:focus { border-color: #3862f5; }
        .input-group-text {
            background-color: #f3f4f7;
            border-color: #e9ecef;
            color: #6156ce;
        }
        select.form-control {
            display: inline-block;
            width: 100%;
            height: calc(2.25rem + 2px);
            vertical-align: middle;
            background: #fff url(assets/img/arrow-down.png) no-repeat right .75rem center;
            background-size: 13px 14px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        select.form-control::-ms-expand { display: none; }

        .btn:active {
            transform: translateY(2px);
        }

        .dataTables_filter {
            width: 70%;
        }

        .customCont {display: none;max-height: 90vh;position: fixed; z-index: 1059; margin: 20px 0; left: 50%; transform: translateX(-50%);overflow: auto;}

        .closePop:hover {
            box-shadow: 0 0 5px gray;
        }
    </style>
    <!--  BEGIN CUSTOM STYLE FILE  -->

</head>
<body>
    <div class="container customCont">
        <div class="closePop" style="background: lightgray; display: inline-block;padding: 2px 5px;border: 0.3px solid red"><i style="color: black" class="fa fa-times fa-2x"></i></div>

        <div class="return">

        </div>
        
    </div>

    <div id="eq-loader" style="display: none;">
      <div class="eq-loader-div">
          <div class="eq-loading dual-loader mx-auto mb-5"></div>
      </div>
    </div>
    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="index.html" class=""> <img src="assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none"> 
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <header class="header navbar fixed-top navbar-expand-sm">
        <a href="javascript:void(0);" class="sidebarCollapse d-none d-lg-block" data-placement="bottom"><i class="flaticon-menu-line-2"></i></a>
       


        


        <ul class="navbar-nav flex-row ml-lg-auto">
            
            <li class="nav-item  d-lg-block d-none">
                <form class="form-inline" role="search">
                    <input type="text" class="form-control search-form-control" placeholder="Search...">
                </form>
            </li>

            


            <li class="nav-item dropdown user-profile-dropdown ml-lg-0 mr-lg-2 ml-3 order-lg-0 order-1">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="flaticon-user-12"></span>
                </a>
                <div class="dropdown-menu  position-absolute" aria-labelledby="userProfileDropdown">
                    <a class="dropdown-item" href="user_profile.html">
                        <i class="mr-1 flaticon-user-6"></i> <span>My Profile</span>
                    </a>
                    <a class="dropdown-item" href="apps_scheduler.html">
                        <i class="mr-1 flaticon-calendar-bold"></i> <span>My Schedule</span>
                    </a>
                    <a class="dropdown-item" href="apps_mailbox.html">
                        <i class="mr-1 flaticon-email-fill-1"></i> <span>My Inbox</span>
                    </a>
                    <a class="dropdown-item" href="user_lockscreen_1.html">
                        <i class="mr-1 flaticon-lock-2"></i> <span>Lock Screen</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="logout.php">
                        <i class="mr-1 flaticon-power-button"></i> <span>Log Out</span>
                    </a>
                </div>
            </li>

            
        </ul>
    </header>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <?php include "sidebar.php";?>

        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <!-- <h3>Bootstrap <small>Rounded</small></h3> -->
                        <!-- <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                                <li><a href="#">Forms</a></li>
                                <li><a href="#">Bootstrap</a> </li>
                                <li class="active"><a href="#">Rounded</a> </li>
                            </ul>
                        </div> -->
                    </div>
                </div>

                <!-- <div class="row">                

                </div> -->

                <!-- <div class="row">

                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header widget-heading">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Helper Text</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Input with help text ( Default Left)</h4>
                                    </div>                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="form-group">
                                    <p>Use <code>small</code> tag and <code>.text-muted</code> for helper text. </p>
                                    <label for="h-text1" class="sr-only">Email address</label>
                                    <input type="text" class="form-control-rounded  form-control" id="h-text1" aria-describedby="h-text1" placeholder="">
                                    <small id="sh-text1" class="form-text text-muted">I am the helper text.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Input with help text (Center)</h4>
                                    </div>                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="form-group">
                                    <p>Use <code>.text-center</code> class to align center.</p>
                                    <label for="h-text2" class="sr-only">Email address</label>
                                    <input type="text" class="form-control-rounded  form-control" id="h-text2" aria-describedby="h-text2" placeholder="">
                                    <small id="sh-text2" class="form-text text-muted text-center">I am the helper text.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Input with help text (Right)</h4>
                                    </div>                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="form-group">
                                    <p>Use <code>.text-right</code> class to align right.</p>
                                    <label for="h-text3" class="sr-only">Email address</label>
                                    <input type="text" class="form-control-rounded  form-control" id="h-text3" aria-describedby="h-text3" placeholder="">
                                    <small id="sh-text3" class="form-text text-muted text-right">I am the helper text.</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Input with badge help text (Default Left)</h4>
                                    </div>                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="form-group">
                                    <p>Wrap the <code>small</code> tag inside the <code>span</code> tag with  <code>.badge</code></p>
                                    <label for="h-text4" class="sr-only">Email address</label>
                                    <input type="text" class="form-control-rounded  form-control" id="h-text4" aria-describedby="h-text4" placeholder="">
                                    <div class=" mt-1">
                                        <span class="badge badge-primary">
                                            <small id="sh-text4" class="form-text mt-0">I am the helper text.</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Input with badge help text (Center)</h4>
                                    </div>                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="form-group">
                                    <p>Use <code>.text-center</code> class to align center.</p>
                                    <label for="h-text5" class="sr-only">Email address</label>
                                    <input type="text" class="form-control-rounded  form-control" id="h-text5" aria-describedby="h-text5" placeholder="">
                                    <div class="text-center mt-1">
                                        <span class="badge badge-success">
                                            <small id="sh-text5" class="form-text mt-0">I am the helper text.</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Input with badge help text (Right)</h4>
                                    </div>                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="form-group">
                                    <p>Use <code>.text-right</code> class to align right.</p>
                                    <label for="h-text6" class="sr-only">Email address</label>
                                    <input type="text" class="form-control-rounded  form-control" id="h-text6" aria-describedby="h-text6" placeholder="">
                                    <div class="text-right mt-1">
                                        <span class="badge badge-warning">
                                            <small id="sh-text6" class="form-text mt-0">I am the helper text.</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Input with block badge help text (Default Left)</h4>
                                    </div>                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="form-group">
                                    <p>Use <code>.w-100</code> class to the <code>span</code> tag to make block.</p>
                                    <label for="h-text7" class="sr-only">Email address</label>
                                    <input type="text" class="form-control-rounded  form-control" id="h-text7" aria-describedby="h-text7" placeholder="">
                                    <div class="mt-1">
                                        <span class="badge badge-primary w-100">
                                            <small id="sh-text7" class="form-text mt-0 text-left">I am the helper text.</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Input with block badge help text (Center)</h4>
                                    </div>                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="form-group">
                                    <p>Use <code>.text-center</code> class to align center.</p>
                                    <label for="h-text8" class="sr-only">Email address</label>
                                    <input type="text" class="form-control-rounded  form-control" id="h-text8" aria-describedby="h-text8" placeholder="">
                                    <div class="mt-1">
                                        <span class="badge badge-success w-100">
                                            <small id="sh-text8" class="form-text mt-0 text-center">I am the helper text.</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Input with block badge help text (Right)</h4>
                                    </div>                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="form-group">
                                    <p>Use <code>.text-right</code> class to align right.</p>
                                    <label for="h-text9" class="sr-only">Email address</label>
                                    <input type="text" class="form-control-rounded  form-control" id="h-text9" aria-describedby="h-text9" placeholder="">
                                    <div class="mt-1">
                                        <span class="badge badge-warning w-100">
                                            <small id="sh-text9" class="form-text mt-0 text-right">I am the helper text.</small>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


                <div class="row layout-spacing">

                    <!-- <div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Form controls</h4>
                                    </div>                                                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlInput1">Email address</label>
                                        <input type="email" class="form-control-rounded form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlSelect1">Example select</label>
                                        <select class="form-control-rounded form-control" id="exampleFormControlSelect1">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="exampleFormControlTextarea1">Example textarea</label>
                                        <textarea class="form-control-rounded form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                    <div class="form-group mb-4 mt-3">
                                        <label for="exampleFormControlFile1">Example file input</label>
                                        <input type="file" class="form-control-file form-control-file-rounded" id="exampleFormControlFile1">
                                    </div>
                                    <input type="submit" name="time" class="mt-4 mb-4 btn btn-button-7 btn-rounded">
                                </form>
                            </div>
                        </div>
                    </div> -->



                    <div class="col-lg-7 col-lg-7 col-md-7 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                       <center> <u><h4>Add Sales</h4></u></center>
                                    </div>                                                      
                                </div>
                            </div>

                            <div class="widget-content widget-content-area">
                                <div class="table-responsive mb-4">
                                    <table id="html5-extension" class="table table-striped table-bordered table-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Product</th>
                                                <th>Remaining</th>
                                                <th>Unit Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            
                                            include "db.php";
                                            product_sales()
                                            
                                            
                                            ?>
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- <div class="widget-content widget-content-area">
                                <form class="subcourse">
                                    <div class="form-group mb-4">
                                      
                                      <select name="level" class="form-control-rounded form-control" id="exampleFormControlSelect1">
                                          <option value="">Choose Level</option>
                                          <option value="Beginner">Beginner  </option>
                                          <option value="Intermediate">Intermediate</option>
                                          <option value="Advanced">Advanced  </option>
                                      </select>
                                  </div>

                                </form>
                            </div> -->
                        </div>
                    </div>

                    <div class="col-lg-5 col-lg-5 col-md-5 col-sm-12 col-12 layout-spacing">

                        <div class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <form class="sales_cart">
                                        <div class="cart_sale">


                                            <!-- <div class="row mb-4">
                                                <div class="col">
                                                    Drug For Headache<br>
                                                    GH&#8373; <span class="partCost">1000</span>
                                                </div>
                                                <div class="col">
                                                    <input type="hidden" class="price" value="1000">
                                                    <input name="quan_input" type="number" class="form-control" value="1">
                                                </div>
                                                <i style="margin: 5px;" class="fa fa-times fa-2x iconBtn"></i>
                                            </div> -->
                                            <!-- <div class="row mb-4">
                                                <div class="col">
                                                    Drug For Headache<br>
                                                    GH&#8373; <span class="partCost">1500</span>
                                                </div>
                                                <div class="col">
                                                    <input type="hidden" class="price" value="1500">
                                                    <input name="quan_input" type="number" class="form-control" value="1">
                                                </div>
                                                <i style="margin: 5px;" class="fa fa-times fa-2x iconBtn"></i>
                                            </div> -->


                                        </div>
                                        <div class="row mb-4">
                                            <div class="col">
                                                Total Cost: GH&#8373; <span class="grandCost"></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <div style="width: 100%;" class="reportPopUp btn btn-primary">Continue to Sale</div>
                                </div>
                            </div>
                        </div>

                    </div>




                    

                    

                    <!-- <div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Form grid</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                               <form>
                                    <div class="row  mb-4">
                                        <div class="col">
                                            <input type="text" class="form-control-rounded form-control" placeholder="First name">
                                        </div>
                                        <div class="col">
                                            <input type="text" class="form-control-rounded form-control" placeholder="Last name">
                                        </div>
                                    </div>
                                    <input type="submit" name="time" class="mt-4 mb-4 btn btn-button-7 btn-rounded">
                                </form>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div>
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Form row</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                               <form>
                                    <div class="form-row  mb-4">
                                        <div class="col">
                                          <input type="text" class="form-control-rounded form-control" placeholder="First name">
                                        </div>
                                        <div class="col">
                                          <input type="text" class="form-control-rounded form-control" placeholder="Last name">
                                        </div>
                                    </div>
                                    <input type="submit" name="time" class="mt-4 mb-4 btn btn-button-7 btn-rounded">
                                </form>
                            </div>
                        </div>
                    </div>

                    

                    <div>
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Form groups</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
                                    <div class="form-group  mb-4">
                                        <label for="formGroupExampleInput">Example label</label>
                                        <input type="text" class="form-control-rounded form-control" id="formGroupExampleInput" placeholder="Example input">
                                    </div>
                                    <div class="form-group  mb-4">
                                        <label for="formGroupExampleInput2">Another label</label>
                                        <input type="text" class="form-control-rounded form-control" id="formGroupExampleInput2" placeholder="Another input">
                                    </div>
                                    <input type="submit" name="time" class="mt-4 mb-4 btn btn-button-7 btn-rounded">
                                </form>
                            </div>
                        </div>
                    </div>

                                        

                    <div>
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Help text</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <label for="inputPassword5">Password</label>
                                <input type="password" id="inputPassword5" class="form-control-rounded form-control" aria-describedby="passwordHelpBlock">
                                <small id="passwordHelpBlock" class="form-text text-muted mb-4 mt-3">
                                  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                                </small>
                                <input type="submit" name="time" class="mt-4 mb-4 btn btn-button-7 btn-rounded">
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Inline Help text</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form class="form-inline">
                                    <div class="form-group  d-block text-left">
                                        <label for="inputPassword6" class="d-block">Password</label>
                                        <input type="password" id="inputPassword6" class="form-control-rounded form-control mt-2" aria-describedby="passwordHelpInline">
                                        <small id="passwordHelpInline" class="text-muted">
                                            Min 8-20 char
                                        </small>
                                    </div>
                                </form>
                                <input type="submit" name="time" class="mt-4 mb-4 btn btn-button-7 btn-rounded">
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Disabled forms</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form>
                                    <fieldset disabled="">
                                        <div class="form-group mb-4">
                                            <label for="disabledTextInput">Disabled input</label>
                                            <input type="text" id="disabledTextInput" class="form-control-rounded  form-control" placeholder="Disabled input">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="disabledSelect">Disabled select menu</label>
                                            <select id="disabledSelect" class="form-control-rounded  form-control">
                                                <option>Disabled select</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-rounded mb-4 mt-2">Submit</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div> -->
                </div>

                <!-- <div class="row layout-spacing">
                    
                    <div class="col-lg-12">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header widget-heading">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Custom Forms</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Select menu</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <select class="custom-select form-control-rounded mb-4 ">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>File browser</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <div class="custom-file mb-4">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label custom-file-rounded" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Select menu sizing</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <select class="form-control-rounded custom-select custom-select-lg mb-4">
                                  <option selected="">Open this select menu</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>

                                <select class="form-control-rounded custom-select custom-select-sm mb-4">
                                  <option selected="">Open this select menu</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Multi select</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <select class="form-control-rounded custom-select mb-4" multiple="">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Select size</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <select class="form-control-rounded custom-select mb-4" size="4">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="3">Four</option>
                                    <option value="3">Five</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->
    
    <?php so();?>

    <!--  BEGIN CONTROL SIDEBAR  -->
    <aside class="control-sidebar control-sidebar-light-color cs-content mCustomScrollbar _mCS_1 mCS-autoHide" style="overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal mCSB_vertical mCSB_outside" style="max-height: none;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
        <div class="">

            <div class="row">
                <div class="col-md-12 text-right">
                    <div class="close-sidebar">
                        <i class="flaticon-close-fill p-3 toggle-control-sidebar"></i>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="usr-info text-center mb-5">
                        <img alt="admin-profile" src="assets/img/c-14.jpeg" class="img-fluid rounded-circle mb-3 mCS_img_loaded">
                        <div class=" mt-2">
                            <h5 class="usr-name mb-0">Linda Nelson</h5>
                            <p class="usr-occupation mb-0 mt-1">Developer</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-navigation-section text-center mb-5 mt-3">
                <ul class="nav nav-tabs nav-justified mx-2">
                    <li class="nav-item">
                        <a data-toggle="tab" href="#feeds-tab" class="nav-link rounded-circle active show">
                            <p class="mb-0">Task</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#friends-tab" class="nav-link rounded-circle">
                            <p class="mb-0">Friends</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a data-toggle="tab" href="#alerts-tab" class="nav-link rounded-circle">
                            <p class="mb-0">Settings</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">

                <div id="feeds-tab" class="tab-pane tab-1 fade show active">
                    
                    <div class="tasks">

                        <div class="recent">

                            <div class="d-flex justify-content-between mb-5">
                                
                                <div class="icon">
                                    <i class="flaticon-clock-1"></i>
                                </div>


                                <div>
                                    <span class="">Today</span> <span class="notification-count ml-2">12</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>

                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-13.jpeg" class="img-fluid mr-3 mCS_img_loaded">
                                <div class="media-body">
                                    <h6 class="mb-0">Sean Freeman</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-15.jpeg" class="img-fluid mr-3 mCS_img_loaded">
                                <div class="media-body">
                                    <h6 class="mb-0">Laurie Fox</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                            <div class="media system-notify">
                                <i class="flaticon-settings-7  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">System Notifications</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>


                            <div class="media mail-notify">
                                <i class="flaticon-folder-fill-1  mr-3"></i>
                                <div class="media-body">
                                    <h6 class="mb-0">Ricky Turner</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill remove-noti"></i>
                            </div>

                        </div>



                        <div class="today mt-5">
                            
                            <div class="d-flex justify-content-between mb-5">
                                
                                <div class="icon">
                                    <i class="flaticon-bell-fill-1"></i>
                                </div>
                                <div>
                                    <span>Yesterday</span> <span class="notification-count ml-2">8</span>
                                </div>

                                <div>
                                    <p class="r-view-all">See all</p>
                                </div>

                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-7.jpeg" class="img-fluid mr-3 mCS_img_loaded">
                                <div class="media-body">
                                    <h6 class="mb-0">Angie Lamb</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-5.jpeg" class="img-fluid mr-3 mCS_img_loaded">
                                <div class="media-body">
                                    <h6 class="mb-0">Amy Diaz</h6>
                                    <p>comment to your posts.</p>
                                    <p class="meta-time">13 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>

                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-7.jpeg" class="img-fluid mr-3 mCS_img_loaded">
                                <div class="media-body">
                                    <h6 class="mb-0">Irene Collins</h6>
                                    <p>has replied your mail.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>


                            <div class="media">
                                <img alt="admin-profile" src="assets/img/c-9.jpeg" class="img-fluid mr-3 mCS_img_loaded">
                                <div class="media-body">
                                    <h6 class="mb-0">Lila Perry</h6>
                                    <p>has replied your mails.</p>
                                    <p class="meta-time">7 mins ago</p>
                                </div>
                                <i class="flaticon-close-fill  remove-noti"></i>
                            </div>


                        </div>


                        <div class="task-stats mt-5">
                            
                            <div class="t-s-header mb-5">
                                <div class="row">
                                    <div class="col-md-10 text-center">
                                        <h6><span>Task Statistics</span></h6>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <i class="flaticon-close-fill"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="t-s-body">
                                
                                <div class="row">

                                    <div class="col-md-12">
                                        
                                        <div class="d-flex justify-content-between">
                                            <p>Feature Development</p>
                                            <p>70%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        
                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Uploading files</p>
                                            <p>30%</p>
                                        </div>

                                        <div class="progress  br-30 mb-4">
                                            <div class="progress-bar  br-30 bg-danger" role="progressbar" style="width: 30%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        
                                        <div class="d-flex justify-content-between mt-3">
                                            <p>Total Progress</p>
                                            <p>86%</p>
                                        </div>

                                        <div class="progress  br-30">
                                            <div class="progress-bar  br-30 bg-info" role="progressbar" style="width: 86%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>

                                    </div>

                                </div>

                                <div class="text-center mt-5 mb-5">
                                    <button class="btn btn-primary btn-rounded mb-5">See all</button>
                                </div>
                                
                            </div>

                        </div>

                    </div>
                </div>

                <div id="friends-tab" class="tab-pane tab-2 fade">

                    <div class="friends">

                        <div class="recent">

                            <div class="t-s-header mb-5">

                                <div class="row">
                                    
                                    <div class="col-md-8 text-center">
                                        <h6>
                                            <span>New Activity</span>
                                        </h6>
                                    </div>

                                    <div class="col-md-4">
                                        <div>
                                            <p>See all</p>
                                        </div>
                                    </div>


                                </div>

                            </div>

                            <ul class="list-inline text-center mb-5">
                                
                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-1.jpeg" class="mCS_img_loaded">
                                    <span class="badge badge-pill badge-new">8</span>
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-2.jpeg" class="mCS_img_loaded">
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-13.jpeg" class="mCS_img_loaded">
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-3.jpeg" class="mCS_img_loaded">
                                    <span class="badge badge-pill badge-new">5</span>
                                </li>

                                <li class="list-inline-item">
                                    <img alt="admin-profile" src="assets/img/c-4.jpeg" class="mCS_img_loaded">
                                </li>

                            </ul>


                            <div class="friend-request">
                                
                                <div class="d-flex justify-content-between header mb-5">
                                    
                                    <div class="media">
                                        <i class="flaticon-user-plus mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-1">Friend request</h6>
                                        </div>
                                    </div>

                                    <div>
                                        <p class="mb-0 mt-2">See all</p>
                                    </div>

                                </div>

                                <div class="media">
                                    <img alt="admin-profile" src="assets/img/c-15.jpeg" class="img-fluid mr-3 mCS_img_loaded">
                                    <div class="media-body">
                                        <h6>Kara Young</h6>
                                        <p>2 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/P-2.jpeg" class="img-fluid mr-3 mCS_img_loaded">
                                    <div class="media-body">
                                        <h6>Justin Cross</h6>
                                        <p>5 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/c-5.jpeg" class="img-fluid mr-3 mCS_img_loaded">
                                    <div class="media-body">
                                        <h6>Amy Diaz</h6>
                                        <p>7 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>


                                <div class="media mt-2">
                                    <img alt="admin-profile" src="assets/img/c-6.jpeg" class="img-fluid mr-3 mCS_img_loaded">
                                    <div class="media-body">
                                        <h6>Ernest Reeves</h6>
                                        <p>10 mins ago</p>
                                    </div>
                                    <i class="flaticon-fill-tick mr-2"></i>
                                    <i class="flaticon-close-fill"></i>
                                </div>

                            </div>


                        </div>



                        <div class="online mt-5">
                            
                            <div class="t-s-header mb-5">

                                <div class="row">
                                    
                                    <div class="col-md-8 text-center">
                                        <h6>
                                            <span>Online</span>
                                        </h6>
                                    </div>

                                    <div class="col-md-4">
                                        <div>
                                            <p class="mb-0 mt-0">See all</p>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 mCS_img_loaded" src="assets/img/c-7.jpeg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Irene Collins</span><span class="badge badge-info float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p><p class="meta-time">7 mins ago</p>
                                </div>
                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 rounded mCS_img_loaded" src="assets/img/c-8.jpeg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Thomas Granger</span><span class="badge badge-secondary float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p><p class="meta-time">13 mins ago</p>
                                </div>
                            </div>


                            <div class="media d-block d-sm-flex text-sm-left text-center">
                                <img alt="admin-profile" class="mr-sm-3 mb-sm-0 mb-3 rounded-circle mCS_img_loaded" src="assets/img/c-9.jpeg">
                                <div class="media-body mb-4">
                                    <h6 class="media-heading mt-0"><span class="media-title"> Grace Roberts</span><span class="badge badge-warning float-sm-right ml-2">9</span></h6>
                                    <p class="media-text">
                                        Cras sit amet gravida nulla.
                                    </p><p class="meta-time">7 mins ago</p>
                                </div>
                            </div>

                        </div>


                        <div class="away-stats">
                            

                            <div class="t-s-header mb-5 mt-5">

                                <div class="row">
                                        
                                    <div class="col-md-12">
                                        <h6>
                                            <span>Away</span>
                                        </h6>
                                    </div>

                                </div>

                            </div>

                            <div class="a-s-media mb-5">
                                    
                                <div class="media mb-3">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/profile-16.jpeg" class="img-fluid mCS_img_loaded">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Traci Lopez</h6>
                                    </div>
                                </div>
                                
                                <div class="media mb-3">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/c-11.jpeg" class="img-fluid mCS_img_loaded">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Kristen Beck</h6>
                                    </div>
                                </div>
                                
                                <div class="media mb-5">
                                    <div class="profile-img mr-3">
                                        <img alt="admin-profile" src="assets/img/c-12.jpeg" class="img-fluid mCS_img_loaded">
                                    </div>
                                    <div class="media-body">
                                        <h6 class="mt-2">Keith Foster</h6>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                </div>

                <div id="alerts-tab" class="tab-pane tab-3 fade">

                    <div class="settings">

                        <div class="admin-setting">


                            <div class="d-flex justify-content-between">
                                        
                                <div class="media">
                                    <i class="flaticon-gear-5 mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">Admin settings</h6>
                                    </div>
                                </div>

                                <div>
                                    <p class="mb-0 mt-2">See all</p>
                                </div>

                            </div>


                            <div class="mb-3 mt-5">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show notifications</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Enable auto logout</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show recent activity</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Chat history</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Users activity</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Orders history</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="mb-0 mt-1">Show task statistics</h6>
                                    <label class="custom-control material-switch mb-4 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="general-setting mt-5">


                            <div class="d-flex justify-content-between mb-5">
                                        
                                <div class="media">
                                    <i class="flaticon-gear-5 mr-3"></i>
                                    <div class="media-body">
                                        <h6 class="mt-2">General Settings</h6>
                                    </div>
                                </div>

                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-facebook-logo fb"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-dribbble-bold dribbble"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-linkedin-logo lin"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-twitter-logo tweet"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>


                            <div class="media mb-4">
                                <i class="flaticon-behance-logo behance"></i>
                                <div class="media-body d-flex justify-content-around">
                                    <h6 class="mb-0 mt-2">Show notfications</h6>
                                    <label class="custom-control material-switch mb-4  mt-2 material-s-rounded material-primary">
                                        <input type="checkbox" class="material-switch-control-input" checked="">
                                        <span class="material-switch-control-indicator"></span>
                                    </label>
                                </div>
                            </div>



                            


                            <div class="chk-settings mt-5">
                                
                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title">Report panel usage</span>
                                        </h6>
                                        <p class="media-text">
                                            Show information on any malicious activity
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked="">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title">Allow mail redirect</span>
                                        </h6>
                                        <p class="media-text">
                                            Redirect mail through exchange server
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Show author name in posts</span>
                                        </h6>
                                        <p class="media-text">
                                            Allow the user to show his name in blog posts
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked="">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                                <div class="media mb-4 ">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Sync phone when connected to the PC</span>
                                        </h6>
                                        <p class="media-text">
                                            Connect smart phone automatically and sync with user profile
                                        </p>
                                    </div>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-secondary mr-1">
                                          <input type="checkbox" class="new-control-input" checked="">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>

                            </div>


                            <div class="mt-5 delete-chat mb-5">
                                
                                <div class="media mb-4">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Delete chat history</span>
                                        </h6>
                                    </div>
                                    <i class="del-chat-his flaticon-delete-1 mb-4"></i>

                                </div>

                            </div>


                            

                            <div class="mt-5 usr-status mb-5">
                                
                                <div class="d-flex justify-content-between mb-5">
                                        
                                    <div class="media">
                                        <i class="flaticon-chat-fill mr-3"></i>
                                        <div class="media-body">
                                            <h6 class="mt-2">Status</h6>
                                        </div>
                                    </div>

                                </div>

                                <div class="media mb-2 stats">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Online</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label class="new-control new-checkbox  mr-1  checkbox-outline-success new-checkbox-rounded">
                                          <input type="checkbox" class="chb new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>

                                </div>


                                <div class="media mb-2 stats">
                                    <div class="media-body">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Offline</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label class="new-control new-checkbox  mr-1  checkbox-outline-default new-checkbox-rounded">
                                          <input type="checkbox" class="chb new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>



                                <div class="media mb-5 stats">
                                    <div class="media-body mb-5">
                                        <h6 class="media-heading mt-0"><span class="media-title"> Away</span>
                                        </h6>
                                    </div>

                                    <div class="n-chk">
                                        <label class="new-control new-checkbox  mr-1  checkbox-outline-warning new-checkbox-rounded">
                                          <input type="checkbox" class="chb new-control-input">
                                          <span class="new-control-indicator"></span><span class="invisible">C</span>
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 100px; display: block; height: 166px; max-height: 593.033px; top: 0px;"><div class="mCSB_dragger_bar" style="line-height: 100px;"></div></div><div class="mCSB_draggerRail"></div></div></div></aside>
    <!--  END CONTROL SIDEBAR  -->

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="ajax_gen.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/js/app.js"></script>
    
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
        <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
        <script src="plugins/table/datatable/datatables.js"></script>
    <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
    <script src="plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="plugins/table/datatable/button-ext/jszip.min.js"></script>    
    <script src="plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script>
        $('#html5-extension').DataTable( {
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5 mb-md-0 mb-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [
                    { extend: 'copy', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'excel', className: 'btn btn-default btn-rounded btn-sm mb-4' },
                    { extend: 'print', className: 'btn btn-default btn-rounded btn-sm mb-4' }
                ]
            },
            "language": {
                "paginate": {
                  "previous": "<i class='flaticon-arrow-left-1'></i>",
                  "next": "<i class='flaticon-arrow-right'></i>"
                },
                "info": "Showing page _PAGE_ of _PAGES_"
            }
        } );
    </script>
    <!-- END PAGE LEVEL CUSTOM SCRIPTS -->
    <script src="plugins/sweetalerts/sweetalert2.min.js"></script>
    <script src="plugins/sweetalerts/custom-sweetalert.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/custom.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->   

</body>
</html>