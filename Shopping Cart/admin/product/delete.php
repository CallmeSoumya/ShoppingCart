<?php


$idd = $_GET['ID'];
//  echo $idd;
include 'config.php';
$Record  = mysqli_query($con,"DELETE FROM `tbiproduct` WHERE  id = $idd");
header("location:index.php");

?>