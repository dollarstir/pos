<?php 


function footer() {
    $dy=date("Y");

    echo' 					<p style="background-color:rgba(0, 0, 0, 0.836);">© '.$dy.' HCT. All rights reserved | Design by <a href="http://purplesofts.com/" target="blank">Purple Software.</a></p>';

}



function login($email,$password) 

{

    include "db.php";

    $log=mysqli_query($conn,"SELECT * FROM admin WHERE email='$email' AND password= '$password'");

    if ($row=mysqli_fetch_array($log)) {
     $_SESSION['id']=$row['id'];
     $_SESSION['name']=$row['name'];
     $_SESSION['email']=$row['email'];

     echo '<script>window.location= "home.php"</script>';
    } else {
        echo    "please enter correct details";
    }
}









function adprodu($bname,$gname,$spname,$category,$price,$remaining,$quantity,$date_added,$date_updated,$expire){

    include "db.php";

    $ccourse= mysqli_query($conn,"SELECT * FROM drugs WHERE bname= '$bname' AND gname='$gname' ");
    $rcourse= mysqli_fetch_array($ccourse);
        if ($rcourse >=1) {
            echo' <div id="mess" style="background-color:red;"><p>Sorry product already Exist</p></div>';
                        
            # code...
        } else {
           $adco= mysqli_query($conn,"INSERT INTO drugs (bname,gname,spname,category,price,remaining,quantity,date_added,date_updated,expire) VALUES ('$bname','$gname','$spname','$category','$price','$remaining','$quantity','$date_added','$date_updated','$expire')  ");
            
                if ($adco) {
                    echo' <div id="mess"><p>Product added successfully</p></div>';
                        
                } else {
                    echo' <div id="mess" style="background-color:red;"><p>Failed to add product/p></div>';
                }
                
        }
        


}


function adcatego($name,$shortname,$added_on){

    include "db.php";

    $ccat= mysqli_query($conn,"SELECT * FROM category WHERE name= '$name' AND shortname='$shortname' ");
    $rcourse= mysqli_fetch_array($ccat);
        if ($rcourse >=1) {
            echo' <div id="mess" style="background-color:red;"><p>Sorry Category already Exist</p></div>';
                        
            # code...
        } else {
           $adco= mysqli_query($conn,"INSERT INTO category (name,shortname,added_on) VALUES ('$name','$shortname','$added_on')  ");
            
                if ($adco) {
                    echo' <div id="mess"><p>Category added successfully</p></div>';
                        
                } else {
                    echo' <div id="mess" style="background-color:red;"><p>Failed to add Cateory/p></div>';
                }
                
        }
        


}






function adpurchas($bname,$gname,$spname,$category,$price,$remaining,$quantity,$date_added,$date_updated,$expire){

    include "db.php";

        
    $adco= mysqli_query($conn,"INSERT INTO purchased (bname,gname,spname,category,price,remaining,quantity,date_added,date_updated,expire) VALUES ('$bname','$gname','$spname','$category','$price','$remaining','$quantity','$date_added','$date_updated','$expire')  ");
            
        if ($adco) {
            echo' <div id="mess"><p>Product added successfully</p></div>';
                
        } else {
            echo' <div id="mess" style="background-color:red;"><p>Failed to add product/p></div>';
        }
        


}






function  adsupp($name,$address,$telephone,$fax,$added_date){

    include "db.php";

    $adsup= mysqli_query($conn,"INSERT INTO suppliers (name,address,telephone,fax,added_date) VALUES ('$name','$address','$telephone','$fax','$added_date')  ");
            
                if ($adsup) {
                    echo' <div id="mess"><p>Supplier added successfully</p></div>';
                        
                } else {
                    echo' <div id="mess" style="background-color:red;"><p>Failed to add Supplier</p></div>';
                }
        


}


function addcustomer($name,$address,$telephone,$fax,$added_date){
    include 'db.php';
    $cust= mysqli_query($conn,"INSERT INTO customers (name,address,telephone,fax,added_date) VALUES ('$name','$address','$telephone','$fax','$added_date')") ;
    if ($cust) {
        echo' <div id="mess"><p>Customer added successfully</p></div>';
    }
    else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to add Customer</p></div>';
    }
}










function edic($id,$ctitle,$duration,$arequirement,$location,$level,$structure,$description,$fees){

    include 'db.php';
    $edip= mysqli_query($conn,"UPDATE programme SET ctitle ='$ctitle',duration='$duration',arequirement= '$arequirement',location= '$location',level='$level',structure='$structure',description='$description',fees='$fees' WHERE id = '$id' ");

    if ($edip) {

        echo' <div id="mess"><p>Course updated successfully</p></div>';
        # code...
    } else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update course</p></div>';

    }
    



}

function updateappname($name,$location,$address,$telephone){
    include 'db.php';
    $upap=mysqli_query($conn,"UPDATE title SET app_name='$name',location= '$location',address = '$address',telephone = '$telephone' WHERE id ='1' ");

    if ($upap) {

        echo' <div id="mess"><p>App titles updated successfully</p></div>';
        # code...
    } else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update app title</p></div>';

    }
}


function aduser($name,$email,$type,$password,$added_on){
    include 'db.php';
    if ($type =="admin") {
        $ckadmin = mysqli_query($conn,"SELECT * FROM admin WHERE email= '$email' ");
        $rc=mysqli_fetch_array($ckadmin);
        if ($rc>=1) {

            echo' <div id="mess" style="background-color:red;"><p>Sorry User already exist</p></div>'; 
        }
        else {
           $insuser= mysqli_query($conn,"INSERT INTO admin (name,email,password,added_on) VALUES ('$name','$email','$password','$added_on')");
           if ($insuser) {
               echo' <div id="mess"><p>Admin added successfully</p></div>';
           }
           else {
               echo' <div id="mess" style="background-color:red;"><p>Failed to add Admin</p></div>';
           }
        }

    } else {
        
        $ckuser = mysqli_query($conn,"SELECT * FROM user WHERE email= '$email' ");
        $rc1=mysqli_fetch_array($ckuser);
        if ($rc1>=1) {

            echo' <div id="mess" style="background-color:red;"><p>Sorry User already exist</p></div>'; 
        }
        else {
           $insuser= mysqli_query($conn,"INSERT INTO user (name,email,password,added_on) VALUES ('$name','$email','$password','$added_on')");
           if ($insuser) {
               echo' <div id="mess"><p>User added successfully</p></div>';
           }
           else {
               echo' <div id="mess" style="background-color:red;"><p>Failed to add user</p></div>';
           }
        }
    }
    
}


function viewproducts(){
    include 'db.php';
    $vp =mysqli_query($conn,"SELECT * FROM drugs");

    while ($vip= mysqli_fetch_array($vp)) {

        $id= $vip['id'];
        $bname= $vip['bname'];
        $gname = $vip['gname'];
        $sp = $vip['spname'];
        $cat=$vip['category'];
        $price = $vip['price'];
        $remaining = $vip['remaining'];
        $quantity = $vip['quantity'];
        $date_added = $vip['date_added'];
        $date_updated = $vip['date_updated'];
        $expire = $vip['expire'];



                                        $getsupp= mysqli_query($conn,"SELECT * FROM suppliers WHERE id ='$sp' ");
                                        $gets=mysqli_fetch_array($getsupp);
                                        $spname = $gets['name'];

                                        $getcupp= mysqli_query($conn,"SELECT * FROM category WHERE id ='$cat' ");
                                        $getc=mysqli_fetch_array($getcupp);
                                        $category = $getc['name'];

        echo '<tr>
        <td>'.$bname.'</td>
        <td>'.$gname.'</td>
        <td>'.$spname.'</td>
        <td>'.$category.'</td>
        <td>'.$price.'</td>
        <td>'.$remaining.'</td>
        <td>'.$quantity.'</td>
        <td>'.$date_added.'</td>
        <td>'.$date_updated.'</td>
        <td>'.$expire.'</td>
        <td><a href="editproduct.php?pid='.$id.'"><span class="flaticon-edit-7"></span> </a>| <a href="deleteproduct.php?pid='.$id.'" <span class="flaticon-delete"></span></td>

       
        
    </tr>';




        
    }

}



function viewpurchasess(){
    include 'db.php';
    $vp =mysqli_query($conn,"SELECT * FROM purchased");

    while ($vip= mysqli_fetch_array($vp)) {

        $id= $vip['id'];
        $bname= $vip['bname'];
        $gname = $vip['gname'];
        $spname = $vip['spname'];
        $category =$vip['category'];
        $price = $vip['price'];
        $remaining = $vip['remaining'];
        $quantity = $vip['quantity'];
        $date_added = $vip['date_added'];
        $date_updated = $vip['date_updated'];
        $expire = $vip['expire'];

        echo '<tr>
        <td>'.$bname.'</td>
        <td>'.$gname.'</td>
        <td>'.$spname.'</td>
        <td>'.$category.'</td>
        <td>'.$price.'</td>
        
        <td>'.$quantity.'</td>
        <td>'.$date_added.'</td>
        <td>'.$date_updated.'</td>
        <td>'.$expire.'</td>
        <td><a href="editpurchased.php?pid='.$id.'"><span class="flaticon-edit-7"></span> </a>| <a href="deletepurchased.php?pid='.$id.'" <span class="flaticon-delete"></span></td>

       
        
    </tr>';




        
    }

}



function viewallcategories(){
    include 'db.php';
    $vp =mysqli_query($conn,"SELECT * FROM category");

    while ($vip= mysqli_fetch_array($vp)) {

        $id= $vip['id'];
        $name= $vip['name'];
        $shortname = $vip['shortname'];
        

        echo '<tr>
        <td>'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$shortname.'</td>
       
        <td><a href="editcategory.php?pid='.$id.'"><span class="flaticon-edit-7"></span> </a>| <a href="deletecategory.php?pid='.$id.'" <span class="flaticon-delete"></span></td>

       
        
    </tr>';




        
    }

}


function viewallsuplliers(){
    include 'db.php';
    $vp =mysqli_query($conn,"SELECT * FROM suppliers");

    while ($vip= mysqli_fetch_array($vp)) {

        $id= $vip['id'];
        $name= $vip['name'];
        $address = $vip['address'];
        $telephone= $vip['telephone'];
        $fax= $vip['fax'];
        $added_date= $vip['added_date'];
        

        echo '<tr>
        <td>'.$name.'</td>
        <td>'.$address.'</td>
        <td>'.$telephone.'</td>
        <td>'.$fax.'</td>
        <td>'.$added_date.'</td>
       
        <td><a href="editsupplier.php?pid='.$id.'"><span class="flaticon-edit-7"></span> </a>| <a href="deletesup.php?pid='.$id.'" <span class="flaticon-delete"></span></td>

       
        
    </tr>';




        
    }

}




function viewallcustomers(){
    include 'db.php';
    $vp =mysqli_query($conn,"SELECT * FROM customers");

    while ($vip= mysqli_fetch_array($vp)) {

        $id= $vip['id'];
        $name= $vip['name'];
        $address = $vip['address'];
        $telephone= $vip['telephone'];
        $fax= $vip['fax'];
        $added_date= $vip['added_date'];
        

        echo '<tr>
        <td>'.$name.'</td>
        <td>'.$address.'</td>
        <td>'.$telephone.'</td>
        <td>'.$fax.'</td>
        <td>'.$added_date.'</td>
       
        <td><a href="editcustomer.php?pid='.$id.'"><span class="flaticon-edit-7"></span> </a>| <a href="deletecust.php?pid='.$id.'" <span class="flaticon-delete"></span></td>

       
        
    </tr>';




        
    }

}






function updateprod($id,$bname,$gname,$spname,$category,$price,$remaining,$quantity,$date_added,$date_updated,$expire){
    include 'db.php';
    $updprodu= mysqli_query($conn,"UPDATE drugs SET bname= '$bname', gname= '$gname',spname= '$spname',category= '$category',price= '$price',remaining= '$remaining',quantity= '$quantity',date_added= '$date_added',date_updated= '$date_updated',expire= '$expire' WHERE id = '$id' ");
    if ($updprodu) {
        echo' <div id="mess"><p>Product updated successfully</p></div>';
    }
    else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update  product</p></div>';
    }
}




function updatepurchases($id,$bname,$gname,$spname,$category,$price,$remaining,$quantity,$date_added,$date_updated,$expire){
    include 'db.php';
    $updprodu= mysqli_query($conn,"UPDATE purchased SET bname= '$bname', gname= '$gname',spname= '$spname',category= '$category',price= '$price',remaining= '$remaining',quantity= '$quantity',date_added= '$date_added',date_updated= '$date_updated',expire= '$expire' WHERE id = '$id' ");
    if ($updprodu) {
        echo' <div id="mess"><p>Product updated successfully</p></div>';
    }
    else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update  product</p></div>';
    }
}


function apdatecategories($id,$name,$shortname){
    include 'db.php';

    $updca= mysqli_query($conn,"UPDATE category SET name='$name', shortname= '$shortname'  WHERE id = '$id' ");

    if ($updca) {
        echo' <div id="mess"><p>Category updated successfully</p></div>';
    }
    else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update  cateogry</p></div>';
    }
}



function updtaesuppliers($id,$name,$address,$telephone,$fax){
    include 'db.php';
    $updsupp= mysqli_query($conn,"UPDATE suppliers SET name= '$name',address = '$address',telephone = '$telephone',fax = '$fax' WHERE id= '$id' ");

    if ($updsupp) {
        echo' <div id="mess"><p>Supplier updated successfully</p></div>';
    }
    else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update  Supplier</p></div>';
    }
}


function updtaecustomer($id,$name,$address,$telephone,$fax){
    include 'db.php';
    $updsupp= mysqli_query($conn,"UPDATE customers SET name= '$name',address = '$address',telephone = '$telephone',fax = '$fax' WHERE id= '$id' ");

    if ($updsupp) {
        echo' <div id="mess"><p>Customer updated successfully</p></div>';
    }
    else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update  Customer</p></div>';
    }
}




function updtatecurrency($id,$name,$symbol){
    include 'db.php';
    $updcure = mysqli_query($conn,"UPDATE currency SET currency_name= '$name',symbol ='$symbol' WHERE id = '$id' ");
    if ($updcure) {
        echo' <div id="mess"><p>Currency updated successfully</p></div>';
    }
    else {
        echo' <div id="mess" style="background-color:red;"><p>Failed to update  Currency</p></div>';
    }
}



function so(){

    include 'db.php';
    $gefo= mysqli_query($conn,"SELECT * FROM title WHERE id = '1' ");
    $getf= mysqli_fetch_array($gefo);
    $app = $getf['app_name'];

    echo'
    <footer class="footer-section theme-footer">

        <div class="footer-section-1 sidebar-theme">
            
        </div>

        <div class="footer-section-2 container-fluid">
            <div class="row">
                
                <div class="col-xl-5 col-md-6 col-sm-6 col-12">
                    <ul class="list-inline mb-0 d-flex justify-content-sm-end justify-content-center mr-sm-3 ml-sm-0 mx-3">
                        <li class="list-inline-item  mr-3">
                            <p class="bottom-footer">© '.date("Y"). ' POS <a target="_blank" href="http://www.purplesofts.com">Designed by Purple Software</a></p>
                        </li>
                        <li class="list-inline-item align-self-center">
                            <div class="scrollTop"><i class="flaticon-up-arrow-fill-1"></i></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    ';
}




function preport($fro,$to){

    include 'db.php';
    $vp =mysqli_query($conn,"SELECT * FROM purchased WHERE date_added >= '$fro' AND date_added <= '$to' ");

    while ($vip= mysqli_fetch_array($vp)) {

        $id= $vip['id'];
        $bname= $vip['bname'];
        $gname = $vip['gname'];
        $spname = $vip['spname'];
        $category =$vip['category'];
        $price = $vip['price'];
        $remaining = $vip['remaining'];
        $quantity = $vip['quantity'];
        $date_added = $vip['date_added'];
        $date_updated = $vip['date_updated'];
        $expire = $vip['expire'];

        echo '<tr>
        <td>'.$bname.'</td>
        <td>'.$gname.'</td>
        <td>'.$spname.'</td>
        <td>'.$category.'</td>
        <td>'.$price.'</td>
        
        <td>'.$quantity.'</td>
        <td>'.$date_added.'</td>
        <td>'.$date_updated.'</td>
        <td>'.$expire.'</td>
        <td><a href="editpurchased.php?pid='.$id.'"><span class="flaticon-edit-7"></span> </a>| <a href="deletepurchased.php?pid='.$id.'" <span class="flaticon-delete"></span></td>

       
        
    </tr>';




        
    }


}



?>












































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































































