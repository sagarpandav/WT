<?php
$connect=mysqli_connect('localhost','root','','wt');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

$uname=$_POST['uname'];
$pass=$_POST['pass'];

$query = mysqli_query($connect,"select * from login where password='$pass' AND username='$uname'");
//$rows = mysqli_num_rows($query);
//if ($rows == 1) {
	$_SESSION['login_user']=$username; // Initializing Session
	header("location: index.html"); // Redirecting To Other Page
//	}
//else {
//		$error = "Username or Password is invalid";
//		echo $error;
//	}
mysqli_close($connect); // Closing Connection

?>