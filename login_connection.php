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
	$username= $_POST['user'];
	$password= $_POST['pass'];
	
$sql= "SELECT * FROM userlogin WHERE username ='$username' AND password ='$password' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count==1)
	{

	header("location:welcome.php");
	}
else
	{
		echo '<script>
		window.location.href = "login.php";
		alert("login faiiled. Invalid username or password")
		</script>';
	}

}
?>