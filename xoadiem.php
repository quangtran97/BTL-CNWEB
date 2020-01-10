<?php
require('connect.php');

session_start();


$id_bangdiem=$_GET['id'];
$sql="delete from diem where id_bangdiem='$id_bangdiem'  ";
$query=mysqli_query($con,$sql);
header('location:quanlydiem.php');

?>
