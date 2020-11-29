<html>
	<head>
		<title>View Students</title>
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
		<div class="viewaccountants">
			<h1 align="center">Students</h1>
			<div class="acc-records">
				
				<table>
					<tr>
						<th>SR.NO</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>City</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					
		
			<?php
				require "db.php";
				$obj=new DB();
				$obj->db_connect();
				$records = $obj->viewStudents();
				if($records!=null)
				{
					$i=1;
					while($r = mysqli_fetch_assoc($records)){
				?>	
					<tr>
					<form action="viewstudent.php" method="post">
						<td><?php echo $i; ?><input type="hidden" name="id" value="<?php echo $r['student_id']; ?>"></td>
						<td><?php echo $r['student_fname']." ".$r['student_lname'];  ?></td>
						<td><?php echo $r['student_email']; ?></td>
						<td><?php echo $r['student_mobile']; ?></td>
						<td><?php echo $r['student_city']; ?></td>
						<td><input type="submit" value="Edit" class="btn"></td>
						<td><input type="submit" formaction="deletestudent.php" value="Delete" class="btn"></td>
						</form>
					</tr>
				<?php
				$i++;
				}
				}
				else
				{
					echo "<script>alert('Data Not Found');window.location='addstudent.php';</script>";
				}
				?>	
				</table>
			</div>
		</div>
		<div class="footer">&copy; 2018, All Right Reserved</div>
	</body>
</html>