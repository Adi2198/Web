<?php 
require '../common.php';
//$con = mysqli_connect("localhost","root","","ecommerse","3308") or die(mysqli_error($con));
$email = mysqli_real_escape_string($con,filter_input(INPUT_POST,'email'));
$pass = mysqli_real_escape_string($con,filter_input(INPUT_POST,'password'));
//$password = md('$pass');
$get_user = "SELECT * FROM users WHERE `email`='$email' AND `password`='$pass'";
$result = mysqli_query($con,$get_user);
$arr = mysqli_fetch_array($result);
$num = mysqli_num_rows($result);
if ($num == 0){
    echo 'No user found';
}else {

session_start();
//$email = ;
$_SESSION['email'] = $email;
$_SESSION['id'] = $arr['id'];
//echo $_SESSION['id'];
header('location: ../product.php');
}


?>



