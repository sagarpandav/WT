<?php
$connect=mysqli_connect('localhost','root','','wt');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 

// create a variable
$uname=$_POST['uname'];
$first_name=$_POST['fname'];
$last_name=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$mono=$_POST['mono'];

//Execute the query

mysqli_query($connect,"INSERT INTO signin(uname,fname,lname,email,password,mobile_no)
				VALUES('$uname','$first_name','$last_name','$email','$pass','$mono')");

echo "Data inserted succesfully.";
echo $uname;
$_SESSION['login_user']=$fname;
header("Location: index.html");
exit();
?>
