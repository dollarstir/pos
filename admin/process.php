<?php

include 'db.php';
include 'core.php';

if (isset($_GET['dollar'])) {

    

    if ($_GET['dollar']=="coursereg") {


        $ctitle=$_POST['ctitle'];
        $duration=$_POST['duration'];
        $arequirement=$_POST['arequirement'];
        $location=$_POST['location'];
        $level = $_POST['level'];
        $structure=$_POST['structure'];
        $description= $_POST['description'];
        $fees= $_POST['fees'];

        if (empty($ctitle)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter Course title</p></div>';
        }
        elseif (empty($duration)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter course duration</p></div>';
        }
        elseif (empty($arequirement)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter admission requirement</p></div>';
        }
        elseif (empty($level)) {
            echo' <div id="mess" style="background-color:red;"><p>Sorry you have to choose level</p></div>';
            # code...
        }
        elseif (empty($structure)) {
            echo' <div id="mess" style="background-color:red;"><p>Note down the course structure</p></div>';
            # code...
        }
        elseif (empty($description)) {
            echo' <div id="mess" style="background-color:red;"><p>Give a  brief description of your course</p></div>';
            # code...
        }
        else {
           echo adcourses($ctitle,$duration,$arequirement,$location,$level,$structure,$description,$fees); 
        }

        # code...
    }






    if ($_GET['dollar']=="teachreg") {


        $tname=$_POST['tname'];
        $tdob=$_POST['tdob'];
        $hometown=$_POST['hometown'];
        $address=$_POST['address'];
        $tcontact = $_POST['tcontact'];
        $temail=$_POST['temail'];
        $tgender= $_POST['tgender'];
        $mstatus= $_POST['mstatus'];
        $qualification= $_POST['qualification'];
        $dateadded= $_POST['dateadded'];

        if (empty($tname)) {

            echo' <div id="mess" style="background-color:red;"><p>Please Enter Teacher\'s name</p></div>';
        }
        elseif (empty($tdob)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter date of birth</p></div>';
        }
        elseif (empty($tcontact)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter phone number</p></div>';
        }
        elseif (empty($qualification)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter Qualification</p></div>';
            # code...
        }
        elseif (empty($temail)) {
            echo' <div id="mess" style="background-color:red;"><p>Enter email address</p></div>';
            # code...
        }
        elseif (empty($tgender)) {
            echo' <div id="mess" style="background-color:red;"><p>Choose gender</p></div>';
            # code...
        }
        elseif (empty($mstatus)) {
            echo' <div id="mess" style="background-color:red;"><p>Choose Marital Status</p></div>';
            # code...
        }
        else {
           echo adteacher($tname,$tdob,$hometown,$address,$tcontact,$temail,$tgender,$mstatus,$qualification,$dateadded); 
        }

        # code...
    }



    if ($_GET['dollar']=="edicos") {



        $id = $_POST['edid'];
        $ctitle=$_POST['ctitle'];
        $duration=$_POST['duration'];
        $arequirement=$_POST['arequirement'];
        $location=$_POST['location'];
        $level = $_POST['level'];
        $structure=$_POST['structure'];
        $description= $_POST['description'];
        $fees= $_POST['fees'];
        


        edic($id,$ctitle,$duration,$arequirement,$location,$level,$structure,$description,$fees);











    }
   
















    # code...
}




?>