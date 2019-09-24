<?php

include 'db.php';
include 'core.php';

if (isset($_GET['dollar'])) {

    

    if ($_GET['dollar']=="addproduct") {


        $bname=$_POST['bname'];
        $gname=$_POST['gname'];
        $spname=$_POST['spname'];
        $category=$_POST['category'];
        $price = $_POST['price'];
        $quantity=$_POST['quantity'];
        $date_added= $_POST['date_added'];
        $expire= $_POST['expire'];
        $remaining= $_POST['quantity'];
        $date_updated= $date_added;

        if (empty($bname)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter Brand name</p></div>';
        }
        elseif (empty($gname)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Genetic Name</p></div>';
        }
        elseif (empty($spname)) {
            echo' <div id="mess" style="background-color:red;"><p>Select Suppliers Name</p></div>';
        }
        elseif (empty($category)) {
            echo' <div id="mess" style="background-color:red;"><p>Sorry you have to choose category</p></div>';
            # code...
        }
        elseif (empty($price)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Price of item</p></div>';
            # code...
        }
        elseif (empty($quantity)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter quantity of Item</p></div>';
            # code...
        }
        else {
           echo adprodu($bname,$gname,$spname,$category,$price,$remaining,$quantity,$date_added,$date_updated,$expire); 
        }

        # code...
    }






    if ($_GET['dollar']=="adcategory") {


        $name=$_POST['name'];
        $shortname=$_POST['shortname'];
        $added_on= date("m/d/Y");
       

        if (empty($name)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter Category name</p></div>';
        }
        elseif (empty($shortname)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Short Name </p></div>';
        }
        
        else {
           echo adcatego($name,$shortname,$added_on); 
        }

        # code...
    }



    if ($_GET['dollar']=="adpurches") {



        $bname=$_POST['bname'];
        $gname=$_POST['gname'];
        $spname=$_POST['spname'];
        $category=$_POST['category'];
        $price = $_POST['price'];
        $quantity=$_POST['quantity'];
        $date_added= $_POST['date_added'];
        $expire= $_POST['expire'];
        $remaining= $_POST['quantity'];
        $date_updated= $date_added;
        

        if (empty($bname)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter Brand name</p></div>';
        }
        elseif (empty($gname)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Genetic Name</p></div>';
        }
        elseif (empty($spname)) {
            echo' <div id="mess" style="background-color:red;"><p>Select Suppliers Name</p></div>';
        }
        elseif (empty($category)) {
            echo' <div id="mess" style="background-color:red;"><p>Sorry you have to choose category</p></div>';
            # code...
        }
        elseif (empty($price)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Price of item</p></div>';
            # code...
        }
        elseif (empty($quantity)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter quantity of Item</p></div>';
            # code...
        }
        else {
           echo adpurchas($bname,$gname,$spname,$category,$price,$remaining,$quantity,$date_added,$date_updated,$expire); 
        }









    }




    if ($_GET['dollar']=="adsupplier") {



        $name=$_POST['name'];
        $address=$_POST['address'];
        $telephone=$_POST['telephone'];
        $fax=$_POST['fax'];
        // $info=$_POST['info'];
        $added_date = date("Y-m-d");
        
        
        

        if (empty($name)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter  name</p></div>';
        }
        elseif (empty($address)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter address</p></div>';
        }
        elseif (empty($telephone)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Telephone number</p></div>';
        }
        
        else {
           echo  adsupp($name,$address,$telephone,$fax,$added_date); 
        }









    }


    if ($_GET['dollar']=="adcustom") {



        $name=$_POST['name'];
        $address=$_POST['address'];
        $telephone=$_POST['telephone'];
        $fax=$_POST['fax'];
        // $info=$_POST['info'];
        $added_date = date("Y-m-d");
        
        
        

        if (empty($name)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter  name</p></div>';
        }
        elseif (empty($address)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter address</p></div>';
        }
        elseif (empty($telephone)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Telephone number</p></div>';
        }
        
        else {
           echo  addcustomer($name,$address,$telephone,$fax,$added_date); 
        }









    }
   






    if ($_GET['dollar']=="updap") {



        $name=$_POST['name'];
        $location=$_POST['location'];
        $address=$_POST['address'];
        $telephone=$_POST['telephone'];

        
        
        
        

        if (empty($name)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter  Some Name</p></div>';
        }
        elseif (empty($location)) {
            echo' <div id="mess" style="background-color:red;"><p>Please Enter   Location</p></div>';

        }
        elseif (empty($address)) {
            echo' <div id="mess" style="background-color:red;"><p>Please Enter   Address</p></div>';

        }
        elseif (empty($telephone)) {
            echo' <div id="mess" style="background-color:red;"><p>Please Enter   Telephone number</p></div>';

        }
        
        
        
        else {
           echo  updateappname($name,$location,$address,$telephone); 
        }









    }




    if ($_GET['dollar']=="adduser") {



        $name=$_POST['name'];
        $email=$_POST['email'];
        $type=$_POST['type'];
        $password=$_POST['password'];
        // $info=$_POST['info'];
        $added_on = date("m/d/Y");
        
        
        

        if (empty($name)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter  name</p></div>';
        }
        elseif (empty($email)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Email Address</p></div>';
        }
        elseif (empty($type)) {
            echo' <div id="mess" style="background-color:red;"><p>Please Select User type</p></div>';
        }

        elseif (empty($password)) {
            echo' <div id="mess" style="background-color:red;"><p>Please enter password</p></div>';
        }
        
        else {
           echo  aduser($name,$email,$type,$password,$added_on); 
        }









    }



    if ($_GET['dollar']=="updpro") {

        $id = $_POST['id'];
        $bname=$_POST['bname'];
        $gname=$_POST['gname'];
        $spname=$_POST['spname'];
        $category=$_POST['category'];
        $price = $_POST['price'];
        $quantity=$_POST['quantity'];
        $date_added= $_POST['date_added'];
        $expire= $_POST['expire'];
        $remaining= $_POST['remaining'];
        $date_updated= date("m/d/Y");

        if (empty($bname)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter Brand name</p></div>';
        }
        elseif (empty($gname)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Genetic Name</p></div>';
        }
        elseif (empty($spname)) {
            echo' <div id="mess" style="background-color:red;"><p>Select Suppliers Name</p></div>';
        }
        elseif (empty($category)) {
            echo' <div id="mess" style="background-color:red;"><p>Sorry you have to choose category</p></div>';
            # code...
        }
        elseif (empty($price)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Price of item</p></div>';
            # code...
        }
        elseif (empty($quantity)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter quantity of Item</p></div>';
            # code...
        }
        else {
           echo updateprod($id,$bname,$gname,$spname,$category,$price,$remaining,$quantity,$date_added,$date_updated,$expire); 
        }

        # code...
    }



    if ($_GET['dollar']=="updpurcha") {

        $id = $_POST['id'];
        $bname=$_POST['bname'];
        $gname=$_POST['gname'];
        $spname=$_POST['spname'];
        $category=$_POST['category'];
        $price = $_POST['price'];
        $quantity=$_POST['quantity'];
        $date_added= $_POST['date_added'];
        $expire= $_POST['expire'];
        $remaining= $_POST['quantity'];
        $date_updated= date("m/d/Y");

        if (empty($bname)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter Brand name</p></div>';
        }
        elseif (empty($gname)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Genetic Name</p></div>';
        }
        elseif (empty($spname)) {
            echo' <div id="mess" style="background-color:red;"><p>Select Suppliers Name</p></div>';
        }
        elseif (empty($category)) {
            echo' <div id="mess" style="background-color:red;"><p>Sorry you have to choose category</p></div>';
            # code...
        }
        elseif (empty($price)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Price of item</p></div>';
            # code...
        }
        elseif (empty($quantity)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter quantity of Item</p></div>';
            # code...
        }
        else {
           echo updatepurchases($id,$bname,$gname,$spname,$category,$price,$remaining,$quantity,$date_added,$date_updated,$expire); 
        }

        # code...
    }



    if ($_GET['dollar']=="updatcateg") {

        $id =$_POST['id'];
        $name=$_POST['name'];
        $shortname=$_POST['shortname'];
        
       

        if (empty($name)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter Category name</p></div>';
        }
        elseif (empty($shortname)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Short Name </p></div>';
        }
        
        else {
           echo apdatecategories($id,$name,$shortname); 
        }

        # code...
    }


    if ($_GET['dollar']=="updatesup") {


        $id=$_POST['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $telephone=$_POST['telephone'];
        $fax=$_POST['fax'];
        // $info=$_POST['info'];
        
        
        
        

        if (empty($name)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter  name</p></div>';
        }
        elseif (empty($address)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter address</p></div>';
        }
        elseif (empty($telephone)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Telephone number</p></div>';
        }
        
        else {
           echo  updtaesuppliers($id,$name,$address,$telephone,$fax); 
        }









    }





    if ($_GET['dollar']=="updatecu") {


        $id=$_POST['id'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $telephone=$_POST['telephone'];
        $fax=$_POST['fax'];
        // $info=$_POST['info'];
        
        
        
        

        if (empty($name)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter  name</p></div>';
        }
        elseif (empty($address)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter address</p></div>';
        }
        elseif (empty($telephone)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Telephone number</p></div>';
        }
        
        else {
           echo  updtaecustomer($id,$name,$address,$telephone,$fax); 
        }









    }




    if ($_GET['dollar']=="updatecurren") {


        $id= 1;
        $name=$_POST['currency_name'];
        $symbol=$_POST['symbol'];
       
       
        
        
        
        

        if (empty($name)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter Currency name</p></div>';
        }
        elseif (empty($symbol)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Symbol</p></div>';
        }
       
        
        else {
           echo  updtatecurrency($id,$name,$symbol); 
        }









    }


    # code...
}
?>