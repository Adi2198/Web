<?php
include 'common.php';
$item_id = filter_input(INPUT_GET,'id');
$user_id = $_SESSION['id'];
//echo $_SESSION['id'];
$insert_into_cart = "INSERT INTO users_products(user_id, product_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$select_query_result = mysqli_query($con,$insert_into_cart) or die(mysqli_error($con));
header('location: product.php');
?>