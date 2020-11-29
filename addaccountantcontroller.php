<?php
require "db.php";
	session_start();
	if(!isset($_SESSION['admin_username']))
	{
		echo"<script>alert('Login First!');window.location='index.php';</script>";
	}
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
if($obj->addAccountant($fname,$lname,$email,$pass,$mobile,$gender,$city,$salary))
{
	echo "<script>alert('Data Addedd Successfully.........!');window.location='addaccountant.php';</script>";
}
else
{
	echo "<script>alert('Data Not Addedd');window.location='addaccountant.php';</script>";
}


?>