<?php
require "db.php";
session_start();
$u=$_POST['username'];
$p=$_POST['pass'];
$obj=new DB();
$obj->db_connect();
$res = $obj->accountantLogin($u,$p);
if($res==true)
{
	$_SESSION['acc_email']=$u;
	header('Location:accountanthome.php');
}
else
{
	echo "<script>alert('Username or password is incorect');window.location='index.php';</script>";
}

?>