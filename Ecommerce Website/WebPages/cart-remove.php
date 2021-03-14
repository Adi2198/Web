<?php
include 'common.php';
$user = $_SESSION['id'];
$ritem_id = filter_input(INPUT_GET,'id');
//echo '$ritem_id';
$delete = "DELETE FROM users_products WHERE user_id = '$user' AND product_id = '$ritem_id'";
$run = mysqli_query($con,$delete) or die($con);
header('location: cart.php');
?>