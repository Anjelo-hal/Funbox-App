<?php

	include 'Config.php';
	
	$username = $password = $pwd = '';

$username = $_POST['user'];
$pwd = $_POST['pass'];
$password = MD5($pwd);
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0)
{
	
	while($row = mysqli_fetch_assoc($result))
	{
		$id = $row["id"];
		$email = $row["username"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['user'] = $email;
	}
	
	header("Location: Page1.php");
}
else
{
	echo "Invalid username or password";
}
	
?>