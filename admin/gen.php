<?php
include 'db.php';


    $quant=$_POST['quant'];
  
    $status="Available";
    $ustatus="Not used";
    $batch= date("Y");

    if (empty($quant)) {
        echo '
        
        <div id="mess" style="background-color:red;"><p>Please Quantity</p></div>        
        ';

        # code...
    }
    
    else {
      
      

            $def1="HCT";

            $gen=rand(123456,999999);
            
          
            for ($i=0; $i < $quant ; $i++) { 
                $gen=rand(123456,999999);
                $gen1=rand(1,10);

                $pi= rand(321356,999999);
                $pin=$pi;
                $tt=$def1.''.$gen;

                $check= mysqli_query($conn,"SELECT * FROM voucher WHERE serial='$tt'");
                $rch= mysqli_fetch_array($check);
                if ($rch>=1) {
                    $tt=$def1.''.$gen.''.$gen1;

                    $ins1=mysqli_query($conn,"INSERT INTO voucher(serial,pin,status,batch,ustatus) VALUES('$tt','$pin','$status','$batch','$ustatus')");
                    // echo $ins1;



                   
                }
                else {
                    $tt=$def1.''.$gen;
                    $ins2=mysqli_query($conn,"INSERT INTO voucher(serial,pin,status,batch,ustatus) VALUES('$tt','$pin','$status','$batch','$ustatus')");
                    // echo $ins2;
                }

            } 
                      

                        echo' <div id="mess"><p>Voucher generated and saved successfully</p></div>';
                        
                       
                       
                    

        




        

    }
    



?>