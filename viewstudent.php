<html>
	<head>
		<title>View Accountants</title>
		<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
	<?php require "accountantmenu.php";
	
	session_start();
	if(!isset($_SESSION['acc_email']))
	{
		echo"<script>alert('Login First!');window.location='index.php';</script>";
	}
	?>
	
	<div class="addaccountant">
			<h1 align="center">Edit Accountant</h1>
			<div class="accountant">
<?php
require "db.php";
$id=$_POST['id'];
$obj=new DB();
$obj->db_connect();
$data = $obj->viewStudent($id);
if($data!=null)
{
	$r=mysqli_fetch_assoc($data);
?>
			<form action="editstudent.php" method="post">
				<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $r['student_id']; ?>">
					<input type="text" name="fname" placeholder="First Name" value="<?php echo $r['student_fname']; ?>">
					<input type="text" name="lname" placeholder="Last Name" value="<?php echo $r['student_lname']; ?>">
				</div>
				
				<div class="form-group">
					<input type="text" name="email"  placeholder="Email" value="<?php echo $r['student_email']; ?>">
					<input type="text" name="mobile"  placeholder="Mobile"  value="<?php echo $r['student_mobile']; ?>">
				</div>
				
				<div class="form-group">
					<input type="text" name="course"  placeholder="Course" value="<?php echo $r['student_course']; ?>">
					<input type="text" name="total"  placeholder="Total" value="<?php echo $r['student_totalfee']; ?>">


					</div>
				
				<div class="form-group">
					<input type="text" name="paid" placeholder="Paid Fee" value="<?php echo $r['student_paid']; ?>">
					<input type="text" name="due" placeholder="Due Fee" value="<?php echo $r['student_due']; ?>">
				</div>
				
				<div class="form-group">
					<input type="text" name="city" placeholder="City" value="<?php echo $r['student_city']; ?>">
				</div>
				
				
				
				<div class="form-group">
					<input type="submit" value="Edit Accountant" class="btn btn1">
					<input type="reset" value="Cancel" class="btn">
				</div>
			</form>
			</div>
		</div>
		<?php
}
		?>
		
		
		<div class="footer">&copy; 2018, All Right Reserved</div>

</body>
</html>