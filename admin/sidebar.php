
<?php 
include 'db.php';
$getname=mysqli_query($conn,"SELECT * FROM title ");
$row =mysqli_fetch_array($getname);
$appname=$row['app_name'];

echo '<div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                   
                    <li class="nav-item theme-text">
                        <a href="home.php" class="nav-link">'.$appname.'</a>
                    </li>
                </ul>


                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu" style="color:white;">
                        <a href="home.php">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Home</span>
                            </div>

                            <div>
                               
                            </div>
                        </a>
                        
                    </li>
                   
                    

                   

                    

                    <li class="menu">
                        <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <i class="fa fa-user"></i>
                                <span>Products</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="pages" data-parent="#accordionExample">
                           
                            <li>
                                <a href="adproduct.php"> Add products </a>
                            </li>
                            <li>
                            <a href="viewproduct.php"> View products </a>
                        </li>

                           
                           

                            
                        </ul>
                    </li>


                   



                <li class="menu">
                    <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                        <i class="flaticon-money"></i>
                            <span>Sales</span>
                        </div>
                        <div>
                            <i class="flaticon-right-arrow"></i>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                        <li>
                            <a href="addpro.php"> Add Sales </a>
                        </li>
                        <li>
                            <a href="view_pro.php"> View Sales </a>
                        </li>

                        



                       

                       
                    </ul>
                </li>




                <li class="menu">
                        <a href="#ecommerce" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <i class="flaticon-edit-2"></i>
                                <span>Category</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ecommerce" data-parent="#accordionExample">
                            <li>
                                <a href="adcategory.php"> Add Category </a>
                            </li>
                            <li>
                                <a href="viewcategory.php"> View Category </a>
                            </li>
                            
                           
                            
                           
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#ui-features" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-elements"></i>
                                <span>Suppliers</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="ui-features" data-parent="#accordionExample">
                            <li>
                                <a href="adsupplier.php">Add Suppliers</a>
                            </li>
                            <li>
                                <a href="viewsuppliers.php"> View  Suppliers</a>
                            </li>

                           
                            
                            
                           
                           
                        </ul>
                    </li>



                    <li class="menu">
                        <a href="#elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-layers"></i>
                                <span>Customers</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="elements" data-parent="#accordionExample">
                            <li>
                                <a href="adcustomer.php"> Add Customers </a>
                            </li>
                            <li>
                                <a href="viewcustomers.php"> View Customers </a>
                            </li>
                           
                        </ul>
                    </li>




                    <li class="menu">
                        <a href="#editors" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-edit-2"></i>
                                <span>Purchases</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="editors" data-parent="#accordionExample">
                            <li>
                                <a href="adpurchase.php"> Add Purchases </a>
                            </li>
                            <li>
                                <a href="viewpurchases.php">View  Purchases </a>
                            </li>
                            
                        </ul>
                    </li>


                    <li class="menu">
                        <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i class="flaticon-user-group"></i>
                                <span>Reports</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="tables" data-parent="#accordionExample">
                            <li>
                                <a href="addt.php"> Sales Report </a>
                            </li>
                            <li>
                                <a href="preport.php"> Purchased Report</a>
                            </li>
                            <li>
                                <a href="viewtea.php"> Customer   Report</a>
                            </li>
                            
                            
                            
                        </ul>
                    </li>


                    
                     <li class="menu">
                        <a href="#maps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                            <i class="fa fa-cog"></i>
                                <span>Settings</span>
                            </div>
                            <div>
                                <i class="flaticon-right-arrow"></i>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="maps" data-parent="#accordionExample">
                            
                            
                            <li>
                                <a href="apptitle.php"> App title </a>
                            </li>
                            <li>
                                <a href="user.php"> User </a>
                            </li>

                          
                            <li>
                                <a href="currency.php"> Currency </a>
                            </li>
                            
                            
                            
                        </ul>
                    </li>
                    
                </ul>
            </nav>

        </div>'
               ;?>