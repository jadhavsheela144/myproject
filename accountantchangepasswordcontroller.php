<?php

require "db.php";
session_start();
$pass=$_POST['pass'];
$obj=new DB();
$obj->db_connect();
$res = $obj->accountantChangePassword($_SESSION['acc_email'],$pass);
if($res)
{
echo"<script>alert('Password Changed Successfully');window.location='accountantlogout.php';</script>";
}
else
{
echo"<script>alert('Password Not Changed ');</script>";
}




?>