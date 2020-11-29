function validate()
{
var fname=document.getElementById('fname').value;
var lname=document.getElementById('lname').value;
var email=document.getElementById('email').value;
var pass=document.getElementById('pass').value;
var mobile=document.getElementById('mobile').value;
var city=document.getElementById('city').value;
var salary=document.getElementById('salary').value;
var size=email.length;
if(fname=="")
{
	alert('Enter firstname');
	return false;
}

if(fname.length<2 || fname.length>20)
{
	alert('Enter valid First name');
	return false;
}

if(lname=="")
{
	alert('Enter lastname');
	return false;
}

if(lname.length<2 || lname.length>20)
{
	alert('Enter valid Last name');
	return false;
}

if(email=="")
{
	alert('Enter email');
	return false;
}

if(email.length<11 || email.length>30)
{
	alert('Enter valid Email');
	return false;
}

if(email.indexOf('@')<0)
{
	alert('Enter valid email');
	return false;
}

if(email.charAt(size-4)!='.' && email.charAt(size-3)!='.')
{
	alert('Enter valid Email');
	return false;
}

if(pass=="")
{
	alert('Enter Password');
	return false;
}

if(pass.length<6 || pass.length>12)
{
	alert('Enter valid Password');
	return false;
}

if(mobile=="")
{
	alert('Enter Mobile Number');
	return false;	
}

if(mobile.length!=10)
{
	alert('Enter valid Mobile');
	return false;
}

if(isNaN(mobile))
{
	alert('Enter Valid Mobile Number');
	return false;
}

if(city=="")
{
	alert('Enter City');
	return false;
}

if(city.length<3 || city.length>20)
{
	alert('Enter valid City');
	return false;
}

if(salary=="")
{
	alert('Enter Salary');
	return false;
}
if(isNaN(salary))
{
	alert('Enter Valid Mobile Number');
	return false;
}
}