<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "myproject";
$conn = new mysqli($servername, $username, $password, $db_name, 3306);
if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}

if(isset($_POST['submit']))
{
	$firstname= $_POST['firstname'];
	$lastname= $_POST['lastname'];
	$gender= $_POST['gender'];
	$dob= $_POST['dob'];
	$contact= $_POST['contact'];
	$email= $_POST['email'];
	$username= $_POST['user'];
	$password= $_POST['pass'];
	
$sql= "INSERT INTO userlogin (firstname,lastname,gender,dob,contact,email,username,password) VALUES ('$firstname','$lastname','$gender','$dob','$contact','$email','$username','$password')";
$sql_query= mysqli_query($conn, $sql);

if($sql_query)
	{
	header("location:welcome.php");
	}
}
?>