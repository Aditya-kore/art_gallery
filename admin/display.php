<?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'artgallery');

$s = " select * from admin";

$query = mysqli_query($con, $s);

$num = mysqli_num_rows($query);

while($res = mysqli_fetch_array($query)){
    echo $res['username'] . "<br>";
}

?>