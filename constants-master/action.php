<?php


$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect("$localhost","$root","");

if($con)
{
	echo"connected to DB server";
}

$uname=$_REQUEST('uname');
$email=$_REQUEST('email');
$psw=$_REQUEST('psw');
$rep=$_REQUEST('psw-repeat');

mysqli_select_db($conn,"hotel");

$query="INSERT INTO signup(username,email,password,repeat_password)VALUES('$uname','$email','$psw','$rep')";

mysqli_query($con,$query);

?>
