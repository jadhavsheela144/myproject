<html>
	<head>
		<title>Change Password</title>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
	<?php require "adminmenu.php";
	session_start();
	if(!isset($_SESSION['admin_username']))
	{
		echo"<script>alert('Login First!');window.location='index.php';</script>";
	}
	?>
	<div class="changepass">
	<h1 align="center">Change Password</h1>
<form action="adminchangepasswordcontroller.php" method="post">		
<input type="password" name="pass" placeholder="Password"><br>
<input type="password" name="" placeholder="Confirm Password"><br>
<input type="submit" value="Submit" class="btn">
</form>
	</div>
	</body>
	<div class="footer">&copy; 2018, All Right Reserved</div>
	</html>