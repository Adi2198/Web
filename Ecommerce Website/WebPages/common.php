<?php
 $con = mysqli_connect("localhost","root","","ecommerse") or die(mysqli_error($con));
 //session_start();
 $status = session_status();
if($status == PHP_SESSION_NONE){
    //There is no active session
    session_start();
}
?>


