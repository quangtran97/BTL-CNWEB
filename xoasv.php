<?php
require('connect.php');

session_start();

$name=$_SESSION['username'];
$msv=$_GET['id'];
$sql="delete from sinhvien where masv='$msv' and masv!='$name' ";
$query=mysqli_query($con,$sql);
header('location:quanlysv.php');

?>
