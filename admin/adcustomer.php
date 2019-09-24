<?php 
session_start();
include "db.php";



if (!isset($_SESSION['id']))

{


    echo '<script>window.location="index.php"</script>';

}



?>




<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Add Customer</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
    <?php include 'core.php';?>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/mess.css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
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
    </style>
    <!--  BEGIN CUSTOM STYLE FILE  -->

</head>
<body>
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

        <!-- <div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar" class="mCS_destroyed" style="position: relative; overflow: visible;">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <li class="nav-item d-flex">
                        <a href="index.html" class="navbar-brand">
                            <img src="assets/img/logo-3.png" class="img-fluid" alt="logo">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="index.html" class="nav-link"> Equation </a>
                    </li>
                </ul>


                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Dashboard</span>
                            </div>

                            <div>
                                <span class="badge badge-pill badge-secondary mr-2">7</span>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-parent="#accordionExample">
                            <li>
                                <a href="index.html"> <i class="flaticon-computer-4"></i> Default </a>
                            </li>
                            <li>
                                <a href="accounting_dashboard.html"> <i class="flaticon-chart-line"></i> Accounting </a>
                            </li>
                            <li>
                                <a href="analytics_dashboard.html"> <i class="flaticon-computer-2"></i> Analytics </a>
                            </li>
                            <li>
                                <a href="car_dashboard.html"> <i class="flaticon-car"></i> Car </a>
                            </li>
                            <li>
                                <a href="classic_dashboard.html"> <i class="flaticon-computer-8"></i> Classic </a>
                            </li>
                            <li>
                                <a href="stock_market_dashboard.html"> <i class="flaticon-up-chart"></i> Stock Market </a>
                            </li>
                            <li>
                                <a href="cryptocurrency_dashboard.html"> <i class="flaticon-bitcoin-circle"></i> Cryptocurrency </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu">
                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-cart-2"></i>
                                <span>Ecommerce</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ecommerce" data-parent="#accordionExample">
                            <li>
                                <a href="ecommerce_dashboard.html"> Dashboard </a>
                            </li>
                            <li>
                                <a href="ecommerce_orders.html"> Orders </a>
                            </li>
                            <li>
                                <a href="ecommerce_product.html"> Products </a>
                            </li>
                            <li>
                                <a href="ecommerce_product_catalog.html"> Product Catalog </a>
                            </li>
                            <li>
                                <a href="#product-details" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" data-parent="#ecommerce"> Product Details <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="product-details">
                                    <li>
                                        <a href="ecommerce_product_details_1.html"> Product Details 1 </a>
                                    </li>
                                    <li>
                                        <a href="ecommerce_product_details_2.html"> Product Details 2 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ecommerce_addedit_product.html"> Add/Edit Products </a>
                            </li>
                            <li>
                                <a href="ecommerce_addedit_categories.html"> Add/Edit Categories </a>
                            </li>
                            <li>
                                <a href="ecommerce_view_cart.html"> View Cart </a>
                            </li>
                            <li>
                                <a href="ecommerce_view_payments.html"> View Payments </a>
                            </li>
                            <li>
                                <a href="ecommerce_view_customers.html"> View Customers </a>
                            </li>
                            <li>
                                <a href="ecommerce_checkout.html"> Checkout </a>
                            </li>
                            <li>
                                <a href="ecommerce_invoices.html"> Invoice </a>
                            </li>
                            <li>
                                <a href="ecommerce_shipments.html"> Shipments </a>
                            </li>
                            <li>
                                <a href="ecommerce_products_cart.html"> Products in Cart </a>
                            </li>
                            <li>
                                <a href="ecommerce_coupons.html"> Coupons </a>
                            </li>
                            <li>
                                <a href="ecommerce_low_stock.html"> Low Stock </a>
                            </li>
                            <li>
                                <a href="ecommerce_best_sellers.html"> Best Sellers </a>
                            </li>
                            <li>
                                <a href="ecommerce_refunds.html"> Refunds </a>
                            </li>
                            <li>
                                <a href="ecommerce_search_terms.html"> Search Terms </a>
                            </li>
                            <li>
                                <a href="ecommerce_newsletters.html"> Newsletters </a>
                            </li>
                            <li>
                                <a href="ecommerce_wizards.html"> Payment Wizard </a>
                            </li>
                            <li>
                                <a href="ecommerce_reviews.html"> Reviews </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="menu">
                        <a href="#ui-features" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-elements"></i>
                                <span>UI Kit</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ui-features" data-parent="#accordionExample">
                            <li>
                                <a href="ui_helper_classes.html"> Helper Classes </a>
                            </li>
                            <li>
                                <a href="ui_color_library.html"> Color Library </a>
                            </li>
                            <li>
                                <a href="ui_grid.html"> Grid System </a>
                            </li>
                            <li>
                                <a href="ui_typography.html"> Typography </a>
                            </li>
                            <li>
                                <a href="ui_shadows.html"> Shadow </a>
                            </li>
                            <li>
                                <a href="ui_miscellaneous.html"> Miscellaneous </a>
                            </li>
                            <li>
                                <a href="ui_pagination.html">Pagination</a>
                            </li>
                            <li>
                                <a href="ui_alert.html"> Alerts </a>
                            </li>
                            <li>
                                <a href="ui_tooltips_and_popovers.html"> Tooltips And Popovers </a>
                            </li>
                            <li>
                                <a href="ui_loader.html"> Loaders </a>
                            </li>
                            <li>
                                <a href="#ui-buttons" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Buttons <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="ui-buttons" data-parent="#ui-features">
                                    <li>
                                        <a href="ui_buttons.html"> Bootstrap </a>
                                    </li>
                                    <li>
                                        <a href="ui_creative.html"> Creative </a>
                                    </li>
                                    <li>
                                        <a href="ui_switches.html"> Switches </a>
                                    </li>
                                    <li>
                                        <a href="ui_social_button.html"> Social </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ui_sweetalert.html"> Sweet Alerts </a>
                            </li>
                            <li>
                                <a href="#ui-font-icons" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Font Icons <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="ui-font-icons" data-parent="#ui-features">
                                    <li>
                                        <a href="ui_flaticon_icon.html"> Flaticon </a>
                                    </li>
                                    <li>
                                        <a href="ui_linea_icon.html"> Linea </a>
                                    </li>
                                    <li>
                                        <a href="ui_themify_icon.html"> Themify </a>
                                    </li>
                                    <li>
                                        <a href="ui_pixeden_icon.html"> Pixeden </a>
                                    </li>
                                    <li>
                                        <a href="ui_fontawesome_icon.html"> Fontawesome </a>
                                    </li>
                                    <li>
                                        <a href="ui_metro_icon.html"> Metro </a>
                                    </li>
                                    <li>
                                        <a href="ui_weather_icon.html"> Weather </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ui_tabs.html"> Tabs </a>
                            </li>
                            <li>
                                <a href="ui_accordion.html"> Accordions  </a>
                            </li>
                            <li>
                                <a href="ui_modal.html"> Modals </a>
                            </li>
                            <li>
                                <a href="ui_sliders.html"> Range Sliders </a>
                            </li>
                            <li>
                                <a href="ui_timeline.html"> Timeline </a>
                            </li>
                            <li>
                                <a href="ui_tree.html"> Tree View </a>
                            </li>
                            <li>
                                <a href="#ui-progress" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Progress Bar <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="ui-progress" data-parent="#ui-features">
                                    <li>
                                        <a href="ui_bootstrap_progress_bar.html"> Bootstrap </a>
                                    </li>
                                    <li>
                                        <a href="ui_material_progress_bar.html"> Custom </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#ui-notification" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Notifications <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="ui-notification" data-parent="#ui-features">
                                    <li>
                                        <a href="ui_toastr.html"> Toastr </a>
                                    </li>
                                    <li>
                                        <a href="ui_notification.html"> Creative </a>
                                    </li>
                                    <li>
                                        <a href="ui_snackbar.html"> Snackbar </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="ui_session_timeout.html"> Session Timeout </a>
                            </li>
                            <li>
                                <a href="ui_media_object.html"> Media Object </a>
                            </li>
                            <li>
                                <a href="ui_list_group.html"> List Group </a>
                            </li>
                            <li>
                                <a href="ui_nestable_list.html"> Nested List </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#components" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-3d-cube"></i>
                                <span>Components</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="components" data-parent="#accordionExample">
                            <li>
                                <a href="component_portlet.html"> Portlets </a>
                            </li>
                            <li>
                                <a href="component_keypad.html"> Keypad </a>
                            </li>

                            <li>
                                <a href="#component-carousel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Carousel <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-carousel" data-parent="#components">                                    
                                    <li>
                                        <a href="component_bootstrap_carousel.html">Bootstrap</a>
                                    </li>
                                    <li>
                                        <a href="component_carousel.html">Metro</a>
                                    </li>
                                    <li>
                                        <a href="component_sliders.html">Swiper</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="component_rating.html"> Rating </a>
                            </li>
                            <li>
                                <a href="component_blockui.html"> Block UI </a>
                            </li>
                            <li>
                                <a href="component_popup.html"> Popup </a>
                            </li>
                            <li>
                                <a href="component_scroll_bars_basic.html"> Scrollbar </a>
                            </li>
                            <li>
                                <a href="component_todo_list.html"> Todo List </a>
                            </li>
                            <li>
                                <a href="component_scrollspy.html"> Scrollspy </a>
                            </li>
                            <li>
                                <a href="component_countdown.html"> Countdown </a>
                            </li>

                            <li>
                                <a href="component_counter.html"> Counter </a>
                            </li>
                            <li>
                                <a href="component_datetime_picker.html"> Date &amp; Time Picker </a>
                            </li>
                            <li>
                                <a href="component_lightbox.html"> LightBox </a>
                            </li>
                            <li>
                                <a href="component_color_picker.html"> Color Picker </a>
                            </li>
                            <li>
                                <a href="#component-media" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Media <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-media" data-parent="#components"> 
                                    <li>
                                        <a href="component_video_player.html"> Video Player </a>
                                    </li>
                                    <li>
                                        <a href="component_audio_player.html"> Audio Player </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="component_clipboard.html"> Clipboard </a>
                            </li>
                            <li>
                                <a href="component_typeahead.html"> Typeahead </a>
                            </li>
                            <li>
                                <a href="#component-search" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Search <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-search" data-parent="#components"> 
                                    <li>
                                        <a href="component_search_multiple.html"> Multiple </a>
                                    </li>
                                    <li>
                                        <a href="component_search_web.html"> Web </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#component-animation" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Animations <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-animation" data-parent="#components"> 
                                    <li>
                                        <a href="component_animation_buttons.html"> Buttons </a>
                                    </li>
                                    <li>
                                        <a href="component_animation_css.html"> CSS </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#component-img-crop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Image Cropping <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="component-img-crop" data-parent="#components"> 
                                    <li>
                                        <a href="component_image_cropping_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="component_image_cropping_advanced.html"> Advanced </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#forms" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-copy-line"></i>
                                <span>Forms</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled show" id="forms" data-parent="#accordionExample">
                            <li>
                                <a href="#forms-bootstrap" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle"> Bootstrap <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu show" id="forms-bootstrap" data-parent="#forms"> 
                                    <li>
                                        <a href="form_bootstrap_basic.html"> Basic </a>
                                    </li>
                                    <li class="active">
                                        <a href="form_bootstrap_rounded.html"> Rounded </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#forms-input-group" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Input Group <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-input-group" data-parent="#forms"> 
                                    <li>
                                        <a href="form_input_group_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="form_input_group_rounded.html"> Rounded </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="form_bootstrap_material.html"> Material </a>
                            </li>
                            <li>
                                <a href="#forms-layout" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Layouts <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-layout" data-parent="#forms"> 
                                    <li>
                                        <a href="form_layouts.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="form_layouts_rounded.html"> Rounded </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#forms-validation" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Validation <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-validation" data-parent="#forms"> 
                                    <li>
                                        <a href="form_validation.html"> Bootstrap </a>
                                    </li>
                                    <li>
                                        <a href="form_jqvalidation.html"> jQuery </a>
                                    </li>
                                    <li>
                                        <a href="form_validation_material.html"> Custom </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="form_input_mask.html"> Input Mask </a>
                            </li>
                            <li>
                                <a href="form_bootstrap_select.html"> Bootstrap Select </a>
                            </li>
                            <li>
                                <a href="form_select2.html"> Select2 </a>
                            </li>
                            <li>
                                <a href="form_bootstrap_touchspin.html"> TouchSpin </a>
                            </li>
                            <li>
                                <a href="form_multiselect.html"> Multi Select </a>
                            </li>
                            <li>
                                <a href="form_maxlength.html"> Maxlength </a>
                            </li>
                            <li>
                                <a href="form_repeater.html"> Repeater </a>
                            </li>                           
                            <li>
                                <a href="form_checkbox_radio.html"> Checkbox and Radio </a>
                            </li>

                            <li>
                                <a href="#forms-wizard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Wizards <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="forms-wizard" data-parent="#forms"> 
                                    <li>
                                        <a href="form_bs_wizard.html"> Bootstrap </a>
                                    </li>
                                    <li>
                                        <a href="form_wizard.html"> jQuery Steps </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="form_fileupload.html"> File Upload </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-layers"></i>
                                <span>Elements</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                            <li>
                                <a href="element_steps.html"> Steps </a>
                            </li>
                            <li>
                                <a href="element_list.html"> List </a>
                            </li>
                            <li>
                                <a href="element_ribbon.html"> Ribbons </a>
                            </li>
                            <li>
                                <a href="element_overlays.html"> Overlays </a>
                            </li>
                            <li>
                                <a href="element_weatherapp.html"> Weather Apps </a>
                            </li>
                            <li>
                                <a href="element_testimonial.html"> Testimonials </a>
                            </li>
                            <li>
                                <a href="element_team.html"> Team </a>
                            </li>
                            <li>
                                <a href="element_contacts.html"> Contacts </a>
                            </li>
                            <li>
                                <a href="element_blog.html"> Blog Elements </a>
                            </li>
                            <li>
                                <a href="element_pricing_table.html"> Pricing Tables </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#editors" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-edit-2"></i>
                                <span>Editors</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="editors" data-parent="#accordionExample">
                            <li>
                                <a href="editor_tinymce.html"> Tinymce </a>
                            </li>
                            <li>
                                <a href="editor_quill.html"> Quill </a>
                            </li>
                            <li>
                                <a href="editor_markdown.html"> Markdown </a>
                            </li>
                            <li>
                                <a href="editor_contenttools.html"> ContentTools </a>
                            </li>
                            <li>
                                <a href="editor_summernote.html"> Summernote </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-table"></i>
                                <span>Tables</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tables" data-parent="#accordionExample">
                            <li>
                                <a href="table_basic.html"> Basic </a>
                            </li>
                            <li>
                                <a href="table_tablesaw.html"> Tablesaw</a>
                            </li>
                            <li>
                                <a href="table_sticky_table_header.html"> Sticky Headers</a>
                            </li>
                            <li>
                                <a href="#tables-editable" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Editable <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="tables-editable" data-parent="#tables"> 
                                    <li>
                                        <a href="table_jq_spreadsheet.html"> Spreadsheet </a>
                                    </li>
                                    <li>
                                        <a href="table_jquery_tabledit.html"> TableEdit </a>
                                    </li>
                                    <li>
                                        <a href="table_editablegrid.html"> Editable Grid </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#tables-data-tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> DataTables <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="tables-data-tables" data-parent="#tables"> 
                                    <li>
                                        <a href="table_dt_zero_configuration.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_ordering_sorting.html"> Order Sorting </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_multi-column_ordering.html"> Multi-Column </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_multiple_tables.html"> Multiple Tables</a>
                                    </li>
                                    <li>
                                        <a href="table_dt_alternative_pagination.html"> Alternative Pagination</a>
                                    </li>
                                    <li>
                                        <a href="table_dt_miscellaneous.html"> Miscellaneous </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_custom.html"> Custom </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_scrollable.html"> Scrollable </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_range_search.html"> Range Search </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_html5.html"> HTML5 Export </a>
                                    </li>
                                    <li>
                                        <a href="table_dt_live_dom_ordering.html"> Live DOM ordering </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-bar-chart-2"></i>
                                <span>Charts</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="charts" data-parent="#accordionExample">
                            <li>
                                <a href="#chart-amcharts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> amCharts <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="chart-amcharts" data-parent="#charts"> 
                                    <li>
                                        <a href="am_column_and_barchart.html"> Column &amp; Bar </a>
                                    </li>
                                    <li>
                                        <a href="am_line_and_areachart.html"> Line &amp; Area </a>
                                    </li>
                                    <li>
                                        <a href="am_pie_and_donutchart.html"> Pie &amp; Donut </a>
                                    </li>
                                    <li>
                                        <a href="am_gauge_and_otherchart.html"> Gauges  &amp; Other </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#chart-c3chart" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> C3 <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="chart-c3chart" data-parent="#charts"> 
                                    <li>
                                        <a href="charts_c3_chart.html"> Simple</a>
                                    </li>
                                    <li>
                                        <a href="charts_c3_api.html"> Api </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="charts_cssplot.html"> CSS Plot </a>
                            </li>
                            <li>
                                <a href="charts_morris.html"> Morris </a>
                            </li>
                            <li>
                                <a href="charts_flowchart.html"> Flowcharts </a>
                            </li>
                            <li>
                                <a href="charts_jQuery_sparklines.html"> jQuery Sparklines </a>
                            </li>
                            <li>
                                <a href="#chart-echart" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> eCharts <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="chart-echart" data-parent="#charts"> 
                                    <li>
                                        <a href="charts_echart_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="charts_echart_candlestick.html"> Candlestick </a>
                                    </li>
                                    <li>
                                        <a href="charts_echart_funnel_radar.html"> Funnel &amp; Radar </a>
                                    </li>
                                    <li>
                                        <a href="charts_echart_scatters.html"> Scatter </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#chart-chartist" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Chartist <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="chart-chartist" data-parent="#charts"> 
                                    <li>
                                        <a href="charts_chartist_bar.html"> Bar </a>
                                    </li>
                                    <li>
                                        <a href="charts_chartist_line.html"> Line &amp; Area </a>
                                    </li>
                                    <li>
                                        <a href="charts_chartist_pie.html"> Pie </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="charts_google.html"> Google </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#maps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-map-1"></i>
                                <span>Maps</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="maps" data-parent="#accordionExample">
                            <li>
                                <a href="#map-googleMaps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Google <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="map-googleMaps" data-parent="#maps"> 
                                    <li>
                                        <a href="map_google_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="map_google_event.html"> Event </a>
                                    </li>
                                    <li>
                                        <a href="map_google_controls_interaction.html"> Controls and Interaction </a>
                                    </li>
                                    <li>
                                        <a href="map_google_styles.html"> Styles </a>
                                    </li>
                                    <li>
                                        <a href="map_google_other.html"> Other </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#map-jqMapael" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> jquery Mapael <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="map-jqMapael" data-parent="#maps"> 
                                    <li>
                                        <a href="map_jquerymapael_basic.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="map_jquerymapael_advanced.html"> Advanced </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="map_jhere.html"> jhere </a>
                            </li>
                            <li>
                                <a href="map_open_layers.html"> OpenLayers </a>
                            </li>
                            <li>
                                <a href="#map-vMaps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Vector Maps <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="map-vMaps" data-parent="#maps"> 
                                    <li>
                                        <a href="map_amvector.html"> amVector</a>
                                    </li>
                                    <li>
                                        <a href="map_jvector.html"> jVector</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#mailing" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-mail-19"></i>
                                <span>Apps</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="mailing" data-parent="#accordionExample">
                            <li>
                                <a href="apps_chat.html"> Chat </a>
                            </li>
                            <li>
                                <a href="apps_mailbox.html"> Mailbox </a>
                            </li>
                            <li>
                                <a href="apps_mailbox_with_chat.html"> Mailbox With Chat </a>
                            </li>
                            <li>
                                <a href="apps_newsletter.html"> Newsletter </a>
                            </li>
                            <li>
                                <a href="apps_scheduler.html"> Scheduler </a>
                            </li>
                            <li>
                                <a href="#apps-calendars" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Calendar <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="apps-calendars" data-parent="#apps-calendars"> 
                                    <li>
                                        <a href="apps_basic_calendar.html"> Basic </a>
                                    </li>
                                    <li>
                                        <a href="apps_full_calendar.html"> Full Calendar </a>
                                    </li>
                                    <li>
                                        <a href="apps_drag_n_drop_calendar.html"> Drag n Drop </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#modules" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-computer-5"></i>
                                <span>Modules</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="modules" data-parent="#accordionExample">
                            <li>
                                <a href="modules_widgets.html"> Widgets </a>
                            </li>
                            <li>
                                <a href="modules_table_and_event.html"> Tables &amp; Events </a>
                            </li>
                            <li>
                                <a href="modules_charts_and_maps.html"> Charts &amp; Maps </a>
                            </li>
                            <li>
                                <a href="modules_weather_and_calendar.html"> Weather &amp; Calendar </a>
                            </li>
                            <li>
                                <a href="modules_cards.html"> Cards </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-user-group"></i>
                                <span>Users</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                            <li>
                                <a href="user_profile.html"> Profile </a>
                            </li>
                            <li>
                                <a href="user_account_setting.html"> Account Settings </a>
                            </li>

                            <li>
                                <a href="#user-login" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Login <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-login" data-parent="#users"> 
                                    <li>
                                        <a href="user_login_1.html"> Login 1 </a>
                                    </li>
                                    <li>
                                        <a href="user_login_2.html"> Login 2 </a>
                                    </li>
                                    <li>
                                        <a href="user_login_3.html"> Login 3 </a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="#user-register" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Register <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-register" data-parent="#users"> 
                                    <li>
                                        <a href="user_register_1.html"> Register 1 </a>
                                    </li>
                                    <li>
                                        <a href="user_register_2.html"> Register 2 </a>
                                    </li>
                                    <li>
                                        <a href="user_register_3.html"> Register 3 </a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="#user-passRecovery" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Password Recovery <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-passRecovery" data-parent="#users"> 
                                    <li>
                                        <a href="user_pass_recovery_1.html"> Password Recovery 1 </a>
                                    </li>
                                    <li>
                                        <a href="user_pass_recovery_2.html"> Password Recovery 2 </a>
                                    </li>
                                    <li>
                                        <a href="user_pass_recovery_3.html"> Password Recovery 3 </a>
                                    </li>
                                </ul>
                            </li>


                            <li>
                                <a href="#user-lockscreen" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Lockscreen <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="user-lockscreen" data-parent="#users"> 
                                    <li>
                                        <a href="user_lockscreen_1.html"> Lockscreen 1 </a>
                                    </li>
                                    <li>
                                        <a href="user_lockscreen_2.html"> Lockscreen 2 </a>
                                    </li>
                                    <li>
                                        <a href="user_lockscreen_3.html"> Lockscreen 3 </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-copy"></i>
                                <span>Pages</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
                            <li>
                                <a href="pages_blank_page.html"> Blank Page</a>
                            </li>
                            <li>
                                <a href="pages_helpdesk.html"> Helpdesk </a>
                            </li>
                            <li>
                                <a href="pages_contact_us.html"> Contact Form </a>
                            </li>
                            <li>
                                <a href="pages_faq.html"> FAQ </a>
                            </li>
                            <li>
                                <a href="pages_blog.html"> Blog </a>
                            </li>                            
                            <li>
                                <a href="pages_privacy.html"> Privacy Policy </a>
                            </li>
                            <li>
                                <a href="pages_cookie_consent.html"> Cookie Consent </a>
                            </li>
                            <li>
                                <a href="pages_landing_page.html" target="_blank"> Landing Page </a>
                            </li>
                            <li>
                                <a href="pages_coming_soon.html"> Coming Soon </a>
                            </li>

                            <li>
                                <a href="#pages-error" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Error <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="pages-error" data-parent="#pages"> 
                                    <li>
                                        <a href="pages_error404.html"> 404 1 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error404-2.html"> 404 2 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error500.html"> 500 1 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error500-2.html"> 500 2 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error503.html"> 503 1 </a>
                                    </li>
                                    <li>
                                        <a href="pages_error503-2.html"> 503 2 </a>
                                    </li>
                                    <li>
                                        <a href="pages_maintenence.html"> Maintanence </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#dragndrop" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-redo-1"></i>
                                <span>Drag and Drop</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dragndrop" data-parent="#accordionExample">
                            <li>
                                <a href="dragndrop_gridstack.html"> Grid Stack</a>
                            </li>
                            <li>
                                <a href="dragndrop_dragula.html"> Dragula</a>
                            </li>
                            <li>
                                <a href="#dragndrop-jqueryui" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> jQuery UI <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="dragndrop-jqueryui" data-parent="#dragndrop"> 
                                    <li>
                                        <a href="dragndrop_ui_product_cart.html"> Shopping Cart </a>
                                    </li>
                                    <li>
                                        <a href="dragndrop_scrumboard.html"> Scrum Task Board</a>
                                    </li>                                    
                                    <li>
                                        <a href="dragndrop_scroll_bars.html"> Scrollbar</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#menulevel" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-menu-4"></i>
                                <span>Menu Level</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="menulevel" data-parent="#accordionExample">
                            
                            <li>
                                <a href="javascript:void(0);"> Sample Link 1 </a>
                            </li>
                            <li>
                                <a href="#menulevel-sample-link1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Sub Menu 2 <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="menulevel-sample-link1" data-parent="#menulevel"> 
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 1 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 2 </a>
                                    </li>                                    
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 3 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#menulevel-sample-link2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> Sub Menu 3 <i class="flaticon-right-arrow"></i> </a>
                                <ul class="collapse list-unstyled sub-submenu" id="menulevel-sample-link2" data-parent="#menulevel"> 
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 1 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 2 </a>
                                    </li>                                    
                                    <li>
                                        <a href="javascript:void(0);"> Sample Link 3 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Sample Link 2 </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> Sample Link 3 </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div> -->
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

                    <div class="col-lg-12 col-md-12 col-sm-12 mb-4">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header widget-heading">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <p>Use <code>.form-control-rounded</code> to make input group rounded. </p>
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
                                        <h4>Input text</h4>
                                    </div>                 
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form method="post">
                                    <div class="form-group">
                                        <p>Use input <code>type="text"</code>.</p>
                                        <label for="t-text" class="sr-only">Text</label>
                                        <input id="t-text" type="text" name="txt" value="Some Text..." class="form-control-rounded form-control" required="">
                                        <input type="submit" name="txt" class="mt-4 btn btn-button-7 btn-rounded">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Password</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form method="post">
                                    <div class="form-group">
                                        <p>Use input <code>type="password"</code>.</p>
                                        <label for="p-text" class="sr-only">Password</label>
                                        <input id="p-text" type="password" name="pass" value="dummypassword" class="form-control-rounded form-control" required="">
                                        <input type="submit" name="pass" class="mt-4 btn btn-button-7 btn-rounded">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Email</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form method="post">
                                    <div class="form-group">
                                        <p>Use input <code>type="email"</code>.</p>
                                        <label for="e-text" class="sr-only">Email</label>
                                        <input id="e-text" type="email" name="email" value="email@mail.com" class="form-control-rounded form-control" required="">
                                        <input type="submit" name="email" class="mt-4 btn btn-button-7 btn-rounded">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Url</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form method="post">
                                    <div class="form-group">
                                        <p>Use input <code>type="url"</code>.</p>
                                        <label for="url-text" class="sr-only">Url</label>
                                        <input id="url-text" type="url" name="url" value="https://dummyurl.com" class="form-control-rounded form-control" required="">
                                        <input type="submit" name="url" class="mt-4 btn btn-button-7 btn-rounded">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Telephone Number</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form method="post">
                                    <div class="form-group">
                                        <p>Use input <code>type="tel"</code>.</p>
                                        <label for="tel-text" class="sr-only">Telephone</label>
                                        <input id="tel-text" type="tel" name="tel" value="6-(666)-111-7777" class="form-control-rounded form-control" required="">
                                        <input type="submit" name="tel" class="mt-4 btn btn-button-7 btn-rounded">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>Search</h4>
                                    </div>                                                                        
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form method="post">
                                    <div class="form-group">
                                        <p>Use input <code>type="search"</code>.</p>
                                        <label for="search-text" class="sr-only">Search</label>
                                        <input id="search-text" type="search" class="form-control-rounded form-control" required="">
                                        <input type="submit" name="search" class="mt-4 btn btn-button-7 btn-rounded">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>                    

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



                    <div class="col-lg-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing"   style="margin: auto;">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">                                
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                       <center> <u><h4>Add Customer</h4></u></center>
                                    </div>                                                      
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">
                                <form class="adcust">
                                   
                                    <div class="form-group mb-4">
                                        <!-- <label for="exampleFormControlInput1">Quantity</label> -->
                                        <input name="name" type="text" class="form-control-rounded form-control" id="exampleFormControlInput1" placeholder="Customer's Name">
                                    </div>


                                    <div class="form-group mb-4">
                                        <!-- <label for="exampleFormControlInput1">Quantity</label> -->
                                        <input name="address" type="text" class="form-control-rounded form-control" id="exampleFormControlInput1" placeholder="Address">
                                    </div>

                                    


                                 

                                    <div class="form-group mb-4">
                                        <!-- <label for="exampleFormControlInput1">Quantity</label> -->
                                        <input name="telephone" type="number" class="form-control-rounded form-control" id="exampleFormControlInput1" placeholder="Phone Number  ">
                                    </div>


                                    <div class="form-group mb-4">
                                        <!-- <label for="exampleFormControlInput1">Quantity</label> -->
                                        <input name="fax" type="number" class="form-control-rounded form-control" id="exampleFormControlInput1" placeholder="fax">
                                    </div>

                                    



                                    

                                    
                                   
                                    <input type="submit" name="subcus" class="mt-4 mb-4 btn btn-button-7 btn-rounded sub" value="Add Customer" style="margin-left:150px;background-color:green !important;">

                                    <div id="respo">
                                    <!-- <div id="mess"><p>Voucher generated and saved successfully</p></div> -->
                                    
                                    </div>
                                </form>
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
    
    <?php  so()?>

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
    <script src="assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY STYLES -->   

</body>
</html>