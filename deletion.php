<?php
include("del_confirm.php")
?>
<!DOCTYPE html>
<head>
<title>deletion page</title>
</head>
<body bgcolor="#add8e6">
<center>
<p>Tell us why you're closing your account</p>
<div>
<form name="myform" action="del_confirm.php" onsubmit="return del()"  method="POST">
<input type="radio" name="delete">Creating a new account.<br>
<input type="radio" name="delete">I already have another account.<br>
<input type="radio" name="delete">I don't find useful.<br>
<input type="radio" name="delete">Others.<br><br>
<p>Please confirm you're Username and Password</p>
  	<label>Username: </label>
	<input type="text" id="user" name="user"><br><br>
	<label>Password: </label>
	<input type="password" id="pass" name="pass"><br><br>
	<input type="submit" id="btn" value="DELETE" name="submit"/>
	<button>
	<a type="button" href="welcome.php">CANCEL</a>
	</button>
</form></center>
</div>
<script>
function del()
{
	var user = document.myform.user.value;
	var pass = document.myform.pass.value;

if(user.length == "" && pass.length == "")
{
	alert("username and password field is empty!!!");
	return false
}
else
{
if(user.length == "")
{
	alert("username field is empty!!!");
	return false
}
if(pass.length == "")
{
	alert("password field is empty!!!");
	return false
}
}
}
</script>
</body>
</html>




