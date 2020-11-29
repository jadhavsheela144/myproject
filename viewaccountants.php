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
		<div class="viewaccountants">
			<h1 align="center">Accountants</h1>
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
				$records = $obj->viewAccountants();
				if($records!=null)
				{
					$i=1;
					while($r = mysqli_fetch_assoc($records)){
				?>	
					<tr>
					<form action="viewaccountant.php" method="post">
						<td><?php echo $i; ?><input type="hidden" name="id" value="<?php echo $r['acc_id']; ?>"></td>
						<td><?php echo $r['acc_fname']." ".$r['acc_lname'];  ?></td>
						<td><?php echo $r['acc_email']; ?></td>
						<td><?php echo $r['acc_mobile']; ?></td>
						<td><?php echo $r['acc_city']; ?></td>
						<td><input type="submit" value="Edit" class="btn"></td>
						<td><input type="submit" formaction="deleteaccountant.php" value="Delete" class="btn"></td>
						</form>
					</tr>
				<?php
				$i++;
				}
				}
				else
				{
					echo "<script>alert('Data Not Found');window.location='addaccountant.php';</script>";
				}
				?>	
				</table>
			</div>
		</div>
		<div class="footer">&copy; 2018, All Right Reserved</div>
	</body>
</html>