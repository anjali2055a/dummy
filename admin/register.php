<?php
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$role=$_POST['role'];
	//making statement
	$stmt="INSERT INTO login (username,password,email,role,status) VALUES('$username','$password','$email','$role',0)";
	//making connection
	include('connection.php');
	//making query
	$qry=mysqli_query($conn,$stmt) or die(mysqli_error());
	//giving messege
	if($qry)
	{
		echo "user registered";
	}
	else{
		echo "something wents wrong while register user";
	}}
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-U-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title>user registration</title>
</head>
<body>
	<form method="post" action="" name="frmREgister" enctype="multipart/form-data">
		<input type="text" name="username" placeholder="username"></br>
		<input type="text" name="password" placeholder="password"></br>
		<input type="text" name="email" placeholder="email"></br>
		<input type="radio" name="role" value="1" >ADMIN</br>
		<input type="radio" name="role"  value='2' checked>user<br>

		<input type="submit" name="submit" value="register">
	</form>
</body>
</html>
