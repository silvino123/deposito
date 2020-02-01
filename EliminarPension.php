<?php 
require('conec.php');


$idpension= $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM pension WHERE id_pension ='$idpension'");



 ?>