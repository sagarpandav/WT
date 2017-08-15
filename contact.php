<?php
$connect=mysqli_connect('localhost','root','','wt');
 
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
 


$name=$_POST['FullName'];
$email=$_POST['Email'];
$Enquiry=$_POST['Enquiry'];

//Execute the query

mysqli_query($connect,"INSERT INTO contact(name,email,enquiry)
				VALUES('$name','$email','$Enquiry')");

echo "Data inserted succesfully.";

?>