<html>
	<head>
	<?php
	session_start();
	if(!isset($_SESSION['acc_email']))
	{
		echo"<script>alert('Login First!');window.location='index.php';</script>";
	}
	?>
		<title>Accountant Home</title>
		<link href="css/style.css" rel="stylesheet">
		<script src="js/main.js"></script>		
	</head>
	<body>
	<?php require "accountantmenu.php"; ?>
		<div class="admin-info">
			<div class="left">
				<img src="images/ddd.jpg">
			</div>
			<div class="right">
				This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. This is info. 
			</div>
		</div>
		<div class="footer">&copy; 2018, All Right Reserved</div>
	</body>
</html>