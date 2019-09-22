<?php
include "db.php";
$id= $_GET['pid'];
$dl=mysqli_query($conn,"DELETE FROM  suppliers  WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="viewsuppliers.php"</script>';
} 
else 
{

    echo '<script>  window.location="viewsuppliers.php"</script>';
}






?>