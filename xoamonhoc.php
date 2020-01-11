<?php
require('connect.php');

session_start();


$mamonhoc=$_GET['id'];
$sql="delete from monhoc where mamonhoc='$mamonhoc'  ";
$query=mysqli_query($con,$sql);
header('location:themmonhoc.php');

?>
