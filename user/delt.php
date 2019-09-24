<?php
include "db.php";
$id= $_GET['oid'];
$dl=mysqli_query($conn,"DELETE FROM  teachers  WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="view_pro.php"</script>';
} 
else 
{

    echo '<script>  window.location="view_pro.php"</script>';
}






?>