<?php

require "db.php";
session_start();
$pass=$_POST['pass'];
$obj=new DB();
$obj->db_connect();
$res = $obj->changePassword($_SESSION['admin_username'],$pass);
if($res)
{
echo"<script>alert('Password Changed Successfully');window.location='adminlogout.php';</script>";
}
else
{
echo"<script>alert('Password Not Changed ');</script>";
}




?>