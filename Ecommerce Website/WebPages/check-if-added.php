<?php
//$con = mysqli_connect("localhost","root","","ecommerse","3308") ;
function check_if_added_to_cart($item_id,$user_id){
    
    $con = mysqli_connect("localhost","root","","ecommerse") or die(mysqli_error($con));
    $status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}

$get_detail="SELECT product_id FROM users_products WHERE product_id='$item_id' AND user_id ='$user_id' AND
status='Added to cart'";
$_result = mysqli_query($con,$get_detail) or die(mysqli_error($con));
$_num = mysqli_num_rows($_result);
if($_num >= 1){
    return 1;
}else{
    return 0;
}
}

?>