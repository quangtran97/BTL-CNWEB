<?php
session_start();
require('connect.php');
$quyen=$_SESSION['quyen'];
$id=$_GET['id'];
$sql="delete from user where id='$id' and quyen!='$quyen' ";
$query=mysqli_query($con,$sql);
header('location:quanlyuser.php');
?>