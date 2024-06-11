<?php
include("login_connection.php");
include("reg_connection.php");
?>
<!DOCTYPE html>
<head><center> 
<title>Userlogin</title>
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
            width: 350px;
            height: 400px;
            border-radius: 6px;
			border: black 4px solid;
            position: absolute; left: 550px; top: 150px;
		}

		.table{

			position: relative; left: -30px; top: 40px;

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
            position: relative; left: -10px; top: 40px;
		}
		.adminbtn{
            background-color: #73c2fb;
            color: black;
            padding: 10px 10px;
            border-radius: 12px;
			border: 0px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-family: HP Simplified Hans;
            font-size: 20px;
            position: absolute; left: 1200px; top: 30px;
        }
	</style>

	<h1> LOGIN PAGE </h1>
	<form name="form" action="login_connection.php" action="reg_connection.php" onsubmit="return invalid()" method="POST">
	
	<div class="box">
	</div>

	<table class="table">
		<tr>
  	<td><label>Username: </label></td><br>
		</tr>
		<tr>
	<td><input type="text" id="user" name="user"></td><br><br>
		</tr>
		<tr>
	<td><label>Password: </label></td><br>
		</tr>
		<tr>
	<td><input type="password" id="pass" name="pass"></td><br><br>
		</tr>
	</table>
	<input type="submit" class="btn" value="LOGIN" name="submit"/>
	
	<input type="button" onclick="admin()"name="adminbtn" class="adminbtn" value="ADMIN">
</form></center>
<script>
function invalid()
{
	var user = document.form.user.value;
	var pass = document.form.pass.value;
if(user.length == "" && pass.length == "")
{
	alert("Username and Password field is empty!!!");
	return false
}
else
{
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
}
}
function admin()
        {
            window.open("admin.php","_self");
        }
</script>
</body>
</html>