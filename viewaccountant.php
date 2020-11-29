<html>
	<head>
		<title>View Accountants</title>
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
	
	<div class="addaccountant">
			<h1 align="center">Add Accountant</h1>
			<div class="accountant">
<?php
require "db.php";
$id=$_POST['id'];
$obj=new DB();
$obj->db_connect();
$data = $obj->viewAccountant($id);
if($data!=null)
{
	$r=mysqli_fetch_assoc($data);
?>
			<form action="editaccountant.php" method="post">
				<div class="form-group">
				<input type="hidden" name="id" value="<?php echo $r['acc_id']; ?>">
					<input type="text" name="fname" placeholder="First Name" value="<?php echo $r['acc_fname']; ?>">
					<input type="text" name="lname" placeholder="Last Name" value="<?php echo $r['acc_lname']; ?>">
				</div>
				
				<div class="form-group">
					<input type="text" name="email"  placeholder="Email" value="<?php echo $r['acc_email']; ?>">
					<input type="text" name="pass"  placeholder="Password"  value="<?php echo $r['acc_pass']; ?>" disabled>
				</div>
				
				<div class="form-group">
					<input type="text" name="mobile"  placeholder="Mobile" value="<?php echo $r['acc_mobile']; ?>">
					Gender : 
					<?php
					if($r['acc_gen']=='male')
					{
					?>									<input class="gen" type="radio" name="gender" value="male" checked>Male 
					<input class="gen" type="radio" name="gender" value="female">Female 
					<?php
					}
					else if($r['acc_gen']=='female'){
					?>
						<input class="gen" type="radio" name="gender" value="male">Male 
					<input class="gen" type="radio" name="gender" value="female" checked>Female 
					<?php }?>



					</div>
				
				<div class="form-group">
					<input type="text" name="city" placeholder="City" value="<?php echo $r['acc_city']; ?>">
					<input type="text" name="salary" placeholder="Salary" value="<?php echo $r['acc_salary']; ?>">
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