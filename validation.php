<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'artgallery');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where username= '$name' && password = '$pass'";
$s2 = " select * from adminlogin where admin_username= '$name' && admin_password = '$pass'";

$result = mysqli_query($con, $s);
$result2 = mysqli_query($con, $s2);

$num = mysqli_num_rows($result);
$num2 = mysqli_num_rows($result2);

if ($num2 == 1){
    $_SESSION['username'] = $name;
    header('location:admin/dashboard.php');
} else {
    if ($num == 1){
        $_SESSION['username'] = $name;
        header('location:home.php');
    }else{
        header('location:login.php');
    }
}

?>