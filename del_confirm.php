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
	
$sql= "DELETE FROM userlogin WHERE username='$username' AND password='$password' ";
$del= mysqli_query($conn, $sql);
if($del)
	{
	header("location:del_comp.php");
	echo '<script> 
	alert("Profile deleted successfully...!")
	</script>';

	}
else
	{
		echo '<script>
		window.location.href = "deletion.php";
		alert("Invalid username or password")
		</script>';
	}	
}
?>
