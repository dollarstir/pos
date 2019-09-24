<?php
include "db.php";
$id= $_GET['oid'];
$dl=mysqli_query($conn,"UPDATE  voucher  SET ustatus='Not used' WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="vvol.php"</script>';
} 
else 
{

    echo '<script>  window.location="vvol.php"</script>';
}






?>