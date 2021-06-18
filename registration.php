<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from login where user = '$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo" Username alredy take";
}else{
    $reg = "insert into login(username, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo" Registration Successful";
}
?>