<?php
require "db.php";
session_start();
	if(!isset($_SESSION['admin_username']))
	{
		echo"<script>alert('Login First!');window.location='index.php';</script>";
	}
$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$salary=$_POST['salary'];

$obj=new DB();
$obj->db_connect();
$obj->createTable();
if($obj->updateAccountant($id,$fname,$lname,$email,$pass,$mobile,$gender,$city,$salary))
{
	echo "<script>alert('Data Edited Successfully.........!');window.location='viewaccountants.php';</script>";
}
else
{
	echo "<script>alert('Data Not Edited');window.location='viewaccountants.php';</script>";
}


?>