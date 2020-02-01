<?php 
require('conec.php');


$idmo = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM motivo WHERE id_motivo ='$idmo'");



 ?>t