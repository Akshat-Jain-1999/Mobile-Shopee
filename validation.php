<?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'shopee');

$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from user where email = '$email' and password = '$password'";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1)
{
	$_SESSION['customer_email'] = $email;
	header("Location: index.php");
}
else
{
	header("Location: login_signup.html");
}

?>