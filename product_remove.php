<?php

session_start();

$img_add = $_GET['img_add'];
$user = $_SESSION['user'];

$conn = mysqli_connect("localhost","root","","net_pay_shop");

$sql = "DELETE FROM cart WHERE img_address='$img_add' AND user_id='$user'";
$query = mysqli_query($conn,$sql);

header('Location:cart.php');
