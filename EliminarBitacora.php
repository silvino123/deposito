<?php 
require('conec.php');


$idbit = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM bitacora WHERE id_bitacora ='$idbit'");



 ?>