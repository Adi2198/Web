<?php 

$con = mysqli_connect("localhost","root","","ecommerse") or die(mysqli_error($con));

$email =mysqli_real_escape_string($con,filter_input(INPUT_POST,'email'));
$first_name=mysqli_real_escape_string($con,filter_input(INPUT_POST,'first_name'));
$last_name = mysqli_real_escape_string($con,filter_input(INPUT_POST,'last_name'));
$phone =filter_input(INPUT_POST,'phone');
$city = filter_input(INPUT_POST,'city');
$address = mysqli_real_escape_string($con,filter_input(INPUT_POST,'last_name'));
$pass = mysqli_real_escape_string($con,filter_input(INPUT_POST,'password'));
$password = $pass;
$get_detail = "SELECT email FROM users WHERE `email`='$email'";
$_result = mysqli_query($con,$get_detail);
$_num = mysqli_num_rows($_result);
if($_num == 0){
    mysqli_select_db($con, 'ecommerse');
$reg = "INSERT INTO users(email,first_name,last_name, phone,city,address,password) VALUES ('$email','$first_name','$last_name','$phone','$city','$address','$password')";
$submit = mysqli_query($con,$reg) or die(mysqli_error($con));
header('location: ../login.php');
} else{
    echo 'User already exist!';
}
?>




