<?php 
require('conec.php');


$iddep2 = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM departamento2 WHERE id_departamento2 ='$iddep2'");



 ?>