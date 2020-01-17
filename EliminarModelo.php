<?php 
require('conec.php');


$id = $_POST['delete_id'];

$rs = mysqli_query($con,"DELETE FROM modelos WHERE id_modelo ='$id'");



 ?>