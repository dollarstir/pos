<?php
include "db.php";
$id= $_GET['pid'];
$dl=mysqli_query($conn,"DELETE FROM  drugs  WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="viewproduct.php"</script>';
} 
else 
{

    echo '<script>  window.location="viewproduct.php"</script>';
}






?>