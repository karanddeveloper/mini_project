<?php
include("reg_connection.php");
?>
<!DOCTYPE html>
<head><center>
<title>Registeration Form</title>
</head>
<body>
	<style>

	body{
			background-image: linear-gradient(#fff01f,#04d9ff);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
		}

		h1{
			font-family: Arial, Helvetica, sans-serif;
            font-size: 40px;
		}

	.box{
			background-color: ghostwhite;
            opacity: 0.7;
            width: 400px;
            height: 700px;
            border-radius: 6px;
			border: black 4px solid;
            position: absolute; left: 550px; top: 150px;
		}

		.table{

			position: relative; left: -1px; top: -300px;

		}

		input[type=text]{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0px;
			border: 4px solid #73c2fb;
			border-radius: 12px;
		}

		input[type=password]{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0px;
			border: 4px solid #73c2fb;
			border-radius: 12px;
		}
		input[type=radio]{
			width: 5%;
			padding: 5px;
		}

		input[type=date]{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0px;
			border: 4px solid #73c2fb;
			border-radius: 12px;
		}

		input[type=email]{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0px;
			border: 4px solid #73c2fb;
			border-radius: 12px;
		}

		.btn{
			background-color: #73c2fb;
            color: black;
            padding: 10px 10px;
            border-radius: 12px;
            border: black 4px solid;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-family: HP Simplified Hans;
            font-size: 20px;
            position: relative; left: 20px; top: -300px;
		}
	</style>

	<h1> REGISTRATION </h1>
	<form name="form" onsubmit="return con()" method="POST">

	<div class="box">
	</div>

	<table class="table">
		<tr>
	<td><label>First Name:</label></td><br>
	<td><input type="text" id="firstname" name="firstname"></td><br><br>
		</tr>
		<tr>
	<td><label> Last Name:</label></td><br>
	<td><input type="text" id="lastname" name="lastname"></td><br><br>
		</tr>
		<tr>
	<td><label> Gender:</label></td><br>
	<td><input type="radio" name="gender" value="male">Male	
	<input type="radio" name="gender" value="female">Female
	<input type="radio" name="gender" value="others">Others<br><br>
		</tr>
		<tr>
	<td><label> DOB:</label></td><br>
	<td><input type="date" id="dob" name="dob"></td><br><br>
		</tr>
		<tr>
	<td><label> Contact:</label></td><br>
	<td><input type="text" id="contact" name="contact"></td><br><br>
		</tr>
		<tr>
	<td><label> Email:</label></td><br>
	<td><input type="email" id="email" name="email"></td><br><br>
		</tr>
		<tr>
	<td><label> Username:</label></td><br>
	<td><input type="text" id="user" name="user"></td><br><br>
		</tr>
		<tr>
	<td><label> Password:</label></td><br>
	<td><input type="password" id="pass" name="pass"></td><br><br>
		</tr>
	</table>

	<input type="submit" class="btn" value="REGISTER" name="submit">
	</form></center>

<script>
function con()
{ 
	var firstname = document.form.firstname.value;
	var lastname = document.form.lastname.value;
	var gender = document.form.gender.value;
	var dob = document.form.dob.value;
	var contact = document.form.contact.value;
	var email = document.form.email.value;
	var user = document.form.user.value;
	var pass = document.form.pass.value;

if(firstname.length=="" && lastname.length=="" && dob.length=="" && contact.length=="" && email.length=="" &&gender.length=="" && user.length=="")
{
	alert("Please fill the required fields!!!");
	return false
}
else
{
if(firstname.length == "")
{
	alert("Name cannot be empty!!!");
	return false
}
if(email.length == "")
{
	alert("Email is required!!!");
	return false
}
if(gender.length == "")
{
	alert("Gender is required!!!");
	return false
}
if(user.length == "")
{
	alert("Username field is empty!!!");
	return false
}
if(pass.length == "")
{
	alert("Password field is empty!!!");
	return false
}
if(pass.length <6)
{
	alert("Password must be atleast 7 characters long");
}
}
}
</script>
</body>
<html>


	