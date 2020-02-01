<?php 
require('conec.php');


$idmp = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM mp WHERE id_mp ='$idmp'");



 ?>