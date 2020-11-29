<html>
	<head>
		<title>Admin Home</title>
		<link href="css/style.css" rel="stylesheet">
		<script src="js/main.js"></script>		
	</head>
	<body>
	

		<?php require "adminmenu.php"; ?>
		<div class="addaccountant">
			<h1 align="center">Add Accountant</h1>
			<div class="accountant">
			<form action="addaccountantcontroller.php" method="post" onsubmit="return validate();">
				<div class="form-group">
					<input type="text" name="fname" id="fname" placeholder="First Name">
					<input type="text" id="lname" name="lname" placeholder="Last Name">
				</div>
				
				<div class="form-group">
					<input type="text" id="email" name="email"  placeholder="Email">
					<input type="password" id="pass" name="pass"  placeholder="Password">
				</div>
				
				<div class="form-group">
					<input type="text" id="mobile" name="mobile"  placeholder="Mobile">
					Gender : <input class="gen" type="radio" name="gender" value="male" checked>Male <input class="gen" type="radio" name="gender" value="female">Female 
				</div>
				
				<div class="form-group">
					<input type="text" id="city" name="city" placeholder="City">
					<input type="text" id="salary" name="salary" placeholder="Salary">
				</div>
				
				<div class="form-group">
					<input type="submit" value="Add Accountant" class="btn btn1">
					<input type="reset" value="Cancel" class="btn">
				</div>
			</form>
			</div>
		</div>
		<div class="footer">&copy; 2018, All Right Reserved</div>
	</body>
</html>