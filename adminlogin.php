<?php
require "db.php";
session_start();
$u=$_POST['username'];
$p=$_POST['pass'];
$obj=new DB();
$obj->db_connect();
$obj->createTable();
$res = $obj->adminLogin($u,$p);
if($res==true)
{
	$_SESSION['admin_username']=$u;
	header('Location:adminhome.php');
}
else
{
	echo "<script>alert('Username or password is incorect');window.location='index.php';</script>";
}

?>