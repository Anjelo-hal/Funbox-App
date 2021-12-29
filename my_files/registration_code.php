<!--
Here, we write code for registration.
-->
<?php
include 'Config.php';
$fname = $lname = $gender = $email = $password = $pwd = '';

$username = $_POST['username'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO users (Firstname,Lastname,Gender,Email,password,username) VALUES ('$fname','$lname','$gender','$email','$password','$username')";
$result = mysqli_query($conn, $sql);
if($result)
{
	header("Location: Page2.php");
}
else
{
	echo "Error :".$sql;
}
?>