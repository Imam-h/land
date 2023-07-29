<?php
include('connect.php');

$get_id=$_GET['id'];

mysqli_query($conn,"delete from applicant where appid='$get_id'")or die(mysqli_error($conn));
header('location:applicant.php');
?>
