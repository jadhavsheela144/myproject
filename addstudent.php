<html>
	<head>
		<title>Add Student</title>
		<link href="css/style.css" rel="stylesheet">
		<script src="js/main.js"></script>		
	</head>
	<body>
	
<?php
	session_start();
	if(!isset($_SESSION['acc_email']))
	{
		echo"<script>alert('Login First!');window.location='index.php';</script>";
	}
	?>
		<?php require "accountantmenu.php"; ?>
		<div class="addaccountant">
			<h1 align="center">Add Student</h1>
			<div class="accountant">
			<form action="addstudentcontroller.php" method="post">
				<div class="form-group">
					<input type="text" name="fname" placeholder="First Name">
					<input type="text" name="lname" placeholder="Last Name">
				</div>
				
				<div class="form-group">
					<input type="text" name="email"  placeholder="Email">
					<input type="text" name="mobile"  placeholder="Mobile">
				</div>
				
				<div class="form-group">
					<input type="text" name="course"  placeholder="Course">
					<input type="text" name="total">
				</div>
				
				<div class="form-group">
					<input type="text" name="paid" placeholder="Paid">
					<input type="text" name="due" placeholder="Due">
				</div>
				
				<div class="form-group">
					<input type="text" name="city" placeholder="City">
				</div>
				
				<div class="form-group">
					<input type="submit" value="Add Student" class="btn btn1">
					<input type="reset" value="Cancel" class="btn">
				</div>
			</form>
			</div>
		</div>
		<div class="footer">&copy; 2018, All Right Reserved</div>
	</body>
</html>