<?php
$Id = $_GET['ID'];
// echo $Id
$con = mysqli_connect('localhost','root','','ecommerce');
mysqli_query($con,"DELETE FROM `tbluser` WHERE id=$Id");
header("location:user.php");
?>