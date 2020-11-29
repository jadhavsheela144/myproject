<?php

class DB{
static $host='localhost:3306';
static $usr='root';
static $pass='';
static $dbname='fee';
static $con;
public function db_connect()
{
self::$con=mysqli_connect(self::$host,self::$usr,self::$pass,self::$dbname);
return self::$con;
}

public function createTable()
{
$sql1="create table accountant(acc_id int primary key auto_increment,acc_fname varchar(50),acc_lname varchar(50),acc_email varchar(30),acc_pass varchar(30),acc_mobile varchar(30),acc_gen varchar(10),acc_city varchar(30),acc_salary int)";
if(!mysqli_query(self::$con,$sql1))
{
	echo mysqli_error(self::$con);
}
}

public function createStudentTable()
{
$sql1="create table student(student_id int primary key auto_increment,student_fname varchar(50),student_lname varchar(50),student_email varchar(30),student_mobile varchar(10),student_course varchar(30),student_totalfee int,student_paid int,student_due int,student_city varchar(30))";
if(!mysqli_query(self::$con,$sql1))
{
	echo mysqli_error(self::$con);
}
}



public function adminLogin($u,$p)
{
	$count=0;
	$sql="select * from admin";
	$r=mysqli_query(self::$con,$sql);
	if(mysqli_num_rows($r)>0)
	{
		while($r1=mysqli_fetch_assoc($r))
		{
			if($r1['admin_username']==$u && $r1['admin_password']==$p)
			{
				$count=1;
				break;
			}
		}
		if($count==1)
		{
		return true;
		}	
	else{
		return false;
	}
	}
}


public function addAccountant($fname,$lname,$email,$pass,$mobile,$gender,$city,$salary)
{
	$sql="insert into accountant(acc_fname,acc_lname,acc_email,acc_pass,acc_mobile,acc_gen,acc_city,acc_salary) values('".$fname."','".$lname."','".$email."','".$pass."','".$mobile."','".$gender."','".$city."',".$salary.")";	
	if(mysqli_query(self::$con,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

public function updateAccountant($id,$fname,$lname,$email,$pass,$mobile,$gender,$city,$salary)
{
	$sql="update accountant set acc_fname='".$fname."',acc_lname='".$lname."',acc_email='".$email."',acc_pass='".$pass."',acc_mobile='".$mobile."',acc_gen='".$gender."',acc_city='".$city."' where acc_id=".$id;	
	if(mysqli_query(self::$con,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

public function deleteAccountant($id)
{
	$sql="delete from accountant where acc_id=".$id;	
	if(mysqli_query(self::$con,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

public function viewAccountants()
{
	$sql="select * from accountant";	
	$rows = mysqli_query(self::$con,$sql);
	if(mysqli_num_rows($rows)>0)
	{
		return $rows;
	}
	else
	{
		return null;
	}
}

public function viewAccountant($id)
{
	$sql="select * from accountant where acc_id=".$id;	
	$rows = mysqli_query(self::$con,$sql);
	if(mysqli_num_rows($rows)>0)
	{
		return $rows;
	}
	else
	{
		return null;
	}
}

public function changePassword($user1,$pass1)
{
	$sql="update admin set admin_password='".$pass1."' where admin_username='".$user1."'";	
	if(mysqli_query(self::$con,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}




public function accountantLogin($u,$p)
{
	$count=0;
	$sql="select * from accountant";
	$r=mysqli_query(self::$con,$sql);
	if(mysqli_num_rows($r)>0)
	{
		while($r1=mysqli_fetch_assoc($r))
		{
			if($r1['acc_email']==$u && $r1['acc_pass']==$p)
			{
				$count=1;
				break;
			}
		}
		if($count==1)
		{
		return true;
		}	
	else{
		return false;
	}
	}
}


public function addStudent($fname,$lname,$email,$mobile,$course,$total,$paid,$due,$city)
{
	$sql="insert into student(student_fname,student_lname,student_email,student_mobile,student_course,student_totalfee,student_paid,student_due,student_city) values('".$fname."','".$lname."','".$email."','".$mobile."','".$course."',".$total.",".$paid.",".$due.",'".$city."')";	
	if(mysqli_query(self::$con,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

public function updateStudent($id,$fname,$lname,$email,$mobile,$course,$total,$paid,$due,$city)
{
	$sql="update student set student_fname='".$fname."',student_lname='".$lname."',student_email='".$email."',student_mobile='".$mobile."',student_course='".$course."',student_totalfee=".$total.",student_paid=".$paid.",student_due=".$due.",student_city='".$city."' where student_id=".$id;	
	if(mysqli_query(self::$con,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

public function deleteStudent($id)
{
	$sql="delete from student where student_id=".$id;	
	if(mysqli_query(self::$con,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}

public function viewStudents()
{
	$sql="select * from student";	
	$rows = mysqli_query(self::$con,$sql);
	if(mysqli_num_rows($rows)>0)
	{
		return $rows;
	}
	else
	{
		return null;
	}
}

public function viewStudent($id)
{
	$sql="select * from student where student_id=".$id;	
	$rows = mysqli_query(self::$con,$sql);
	if(mysqli_num_rows($rows)>0)
	{
		return $rows;
	}
	else
	{
		return null;
	}
}

public function accountantChangePassword($user1,$pass1)
{
	$sql="update accountant set acc_pass='".$pass1."' where acc_email='".$user1."'";	
	if(mysqli_query(self::$con,$sql))
	{
		return true;
	}
	else
	{
		return false;
	}
}





}

?>