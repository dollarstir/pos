<?php
include "db.php";
$id= $_GET['oid'];
$dl=mysqli_query($conn,"UPDATE applicant SET  status='Approved' WHERE id='$id' ");

if ($dl) 
{

   echo '<script>  window.location="vap.php"</script>';
} 
else 
{

    echo '<script>  window.location="vap.php"</script>';
}






?>