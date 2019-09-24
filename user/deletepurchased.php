<?php
include "db.php";
$id= $_GET['pid'];
$dl=mysqli_query($conn,"DELETE FROM  purchased  WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="viewpurchases.php"</script>';
} 
else 
{

    echo '<script>  window.location="viewpurchases.php"</script>';
}






?>