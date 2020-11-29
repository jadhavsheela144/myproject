<?php
require "db.php";
	session_start();
	if(!isset($_SESSION['acc_email']))
	{
		echo"<script>alert('Login First!');window.location='index.php';</script>";
	}
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
if($obj->addStudent($fname,$lname,$email,$mobile,$course,$total,$paid,$due,$city))
{
	echo "<script>alert('Data Addedd Successfully.........!');window.location='addstudent.php';</script>";
}
else
{
	echo "<script>alert('Data Not Addedd');window.location='addstudent.php';</script>";
}


?>