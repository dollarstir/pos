<?php
include "db.php";
$id= $_GET['pid'];
$dl=mysqli_query($conn,"DELETE FROM  category  WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="viewcategory.php"</script>';
} 
else 
{

    echo '<script>  window.location="viewcategory.php"</script>';
}






?>