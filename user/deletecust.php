<?php
include "db.php";
$id= $_GET['pid'];
$dl=mysqli_query($conn,"DELETE FROM  customers  WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="viewcustomers.php"</script>';
} 
else 
{

    echo '<script>  window.location="viewcustomers.php"</script>';
}






?>