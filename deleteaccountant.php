<?php
require "db.php";


	session_start();
	if(!isset($_SESSION['admin_username']))
	{
		echo"<script>alert('Login First!');window.location='index.php';</script>";
	}
	

$id=$_POST['id'];

$obj=new DB();
$obj->db_connect();
$obj->createTable();
if($obj->deleteAccountant($id))
{
	echo "<script>alert('Data Deleted Successfully.........!');window.location='viewaccountants.php';</script>";
}
else
{
	echo "<script>alert('Data Not Deleted');window.location='viewaccountants.php';</script>";
}



?>