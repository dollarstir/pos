<?php  
include "db.php";


        $so=mysqli_query($conn,"SELECT * FROM sales_report");
        $result2=mysqli_num_rows($so);
             if ($result2 >= 1) {

             echo ' <div class="media">
                                <div class="icon ml-2">
                                <i class="flaticon-money"></i>
                                 </div>
                        <div class="media-body text-right">
                                 <p class="widget-text mb-0">Sales</p>
                
                
                                 <p class="widget-numeric-value">'.$result2.'</p>
                        </div>
                    </div>
                                <p class="widget-total-stats mt-2"> '.$result2.'   Sales</p>';
              
            
            }else {
            echo '  <div class="media">
                        <div class="icon ml-2">
                        <i class="flaticon-money"></i>
                        </div>
                        <div class="media-body text-right">
                                <p class="widget-text mb-0">Sales</p>
                
                
                
                                <p class="widget-numeric-value">0</p>
                         </div>
                    </div>
                                 <p class="widget-total-stats mt-2"> No available Sales </p>';
            }




        ?>