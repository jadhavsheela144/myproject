<?php
require "db.php";
session_start();
	if(!isset($_SESSION['admin_username']))
	{
		echo"<script>alert('Login First!');window.location='index.php';</script>";
	}
$obj=new DB();
$obj->db_connect();
$obj->createTable();
$records = $obj->viewAccountants();
if($records!=null)
{
	header('Location')
}
else
{
	echo "<script>alert('Data Not Addedd');window.location='addaccountant.php';</script>";
}


?>