<?php 
require('conec.php');


$iddeposi= $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM deposi WHERE id_deposi ='$iddeposi'");



 ?>