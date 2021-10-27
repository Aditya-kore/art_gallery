<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'artgallery');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where username= '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    echo "username/email already taken";
}else{
    $reg = "insert into usertable(username,password) values ('$name','$pass')";
    $reg2 = "insert into admin(username,orders,total) values ('$name',0,0)";
    mysqli_query($con,$reg);
    mysqli_query($con,$reg2);
    echo "Registraion successful!";
}





?>