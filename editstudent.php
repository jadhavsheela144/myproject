<?php
require "db.php";
session_start();
	if(!isset($_SESSION['acc_email']))
	{
		echo"<script>alert('Login First!');window.location='index.php';</script>";
	}
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$course=$_POST['course'];
$total=$_POST['total'];
$paid=$_POST['paid'];
$due=$_POST['due'];
$city=$_POST['city'];

$obj=new DB();
$obj->db_connect();
$obj->createStudentTable();
if($obj->updateStudent($id,$fname,$lname,$email,$mobile,$course,$total,$paid,$due,$city))
{
	echo "<script>alert('Data Edited Successfully.........!');window.location='viewstudents.php';</script>";
}
else
{
	echo "<script>alert('Data Not Edited');window.location='viewstudents.php';</script>";
}


?>