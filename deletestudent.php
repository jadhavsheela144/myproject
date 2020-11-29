<?php
require "db.php";


	session_start();
	if(!isset($_SESSION['acc_email']))
	{
		echo"<script>alert('Login First!');window.location='index.php';</script>";
	}
	

$id=$_POST['id'];

$obj=new DB();
$obj->db_connect();
$obj->createStudentTable();
if($obj->deleteStudent($id))
{
	echo "<script>alert('Data Deleted Successfully.........!');window.location='viewstudents.php';</script>";
}
else
{
	echo "<script>alert('Data Not Deleted');window.location='viewstudents.php';</script>";
}



?>