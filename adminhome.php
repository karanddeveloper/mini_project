<?php 
$conn = mysqli_connect("localhost","root","","myproject",3306);
if($conn->connect_error)
{
	die("connection failed".$conn->connect_error);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<style>
		html,body{
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }
		body{
			background-image: linear-gradient(#ffffff,#fe347e);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
		}
		h2{
            font: bold 100px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 40px;
            -webkit-text-fill-color: #ffff00;
            -webkit-text-stroke: 2px;
            -webkit-text-stroke-color: black;
            word-spacing: -2px;
            position:  relative; left: 600px; top: 50px;
        }
		input[type=text]{
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
            position: relative; left: 565px; top: -230px;
		}
		.btn1{
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
            position: relative; left: 305px; top: -150px;
		}
		.btn2{
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
            position: relative; left: 680px; top: -10px;
		}
		.box{
			background-color: ghostwhite;
            opacity: 0.7;
            width: 430px;
            height: 450px;
            border-radius: 6px;
			border: black 4px solid;
            position: relative; left: 550px; top: 150px;
		}
		.table{

		position: relative; left: 630px; top: -250px;

		}
		.note1{
			font-family: HP Simplified Hans;
            font-size: 27px;
            text-align: left;
			position: relative; left: 300px; top: -20px;
		}
		.container{
			max-width: 900px;
			margin: 100px auto;
			width: 100px;
			position: relative; left: -300px; top: 5px;
		}
		.table1{
			border-collapse:collapse;
			width: 100%;

		}
		.table1 th{
			border: 1px solid black;
			background-color: darkcyan;
			color:black;
			padding: 10px;
		}
		.table1 td{
			color:black;
			padding: 12px;
			font-size: 16px;
			text-align: center;
		}
		.table1 tr{
			background-color: darkgray;

		}
		.txt1{
            font-family: Impact;
            font-size: 70px;
            position: relative; left: 300px; top: -15px;
        }
		.container1{
			max-width: 900px;
			margin: 100px auto;
			width: 100px;
			position: relative; left: -500px; top: 40px;
		}
		.txt2{
            font-family: Impact;
            font-size: 70px;
            position: relative; left: 300px; top: 15px;
        }
	</style>
</head>
<body>
<h2> WELCOME! ADMIN</h2>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">
		   <div class="box">
	</div>
		   <table class="table">
			<tr>
		   <td><label for="name">Name : </label></td>
			</tr>
			<tr>
      		<td><input type="text" name="name" id = "name" required value=""> <br></td>
			</tr>
			<tr>
			<td><label for="name">Price : </label></td>
			</tr>
			<tr>
      		<td><input type="text" name="price" id = "price" required value=""> <br></td>
			</tr>
			<tr>
			</table>
           <input type="file" 
                  name="my_image"
				  class="btn">
			
		
           <input type="submit" 
                  name="submit"
				  class="btn1"
                  value="Upload">
		<p class="note1">NOTE: the above box is to add and to view all product available,click (view database)</p>	
		   

			
     	
     </form>
	 <a type="button" class="btn2" href="view.php">view database</a>

	 <p class="txt1">USERS DETAILS</p>
	 <div class="container">
		<table class="table1">
			<tr>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Gender</th>
				<th>D.O.B</th>
				<th>Contact</th>
				<th>Email</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
			<?php 
         
         $tabledata = mysqli_query($conn, "SELECT * FROM `userlogin`");
         if(mysqli_num_rows($tabledata) > 0){
            while($fetch_data = mysqli_fetch_assoc($tabledata)){
         ?>
			<tr>
			<td><?php echo $fetch_data['firstname']; ?></td>
			<td><?php echo $fetch_data['lastname']; ?></td>
			<td><?php echo $fetch_data['gender']; ?></td>
			<td><?php echo $fetch_data['dob']; ?></td>
			<td><?php echo $fetch_data['contact']; ?></td>
			<td><?php echo $fetch_data['email']; ?></td>
			<td><?php echo $fetch_data['username']; ?></td>
			<td><?php echo $fetch_data['password']; ?></td>
			</tr>
		<?php	
			}
		}
		?>		
				
			
			
		</table>
	 </div>

	 <p class="txt2">ORDER DETAILS</p>
	 <div class="container1">
		<table class="table1">
			<tr>
				<th>Name</th>
				<th>Number</th>
				<th>Email</th>
				<th>Payment-mode</th>
				<th>Flat</th>
				<th>Street</th>
				<th>City</th>
				<th>State</th>
				<th>Country</th>
				<th>Pin Code</th>
				<th>Total Products</th>
				<th>Total Price</th>
			</tr>
			<?php 
         
         $tabledata1 = mysqli_query($conn, "SELECT * FROM `order`");
         if(mysqli_num_rows($tabledata1) > 0){
            while($fetch_data1 = mysqli_fetch_assoc($tabledata1)){
         ?>
			<tr>
			<td><?php echo $fetch_data1['name']; ?></td>
			<td><?php echo $fetch_data1['number']; ?></td>
			<td><?php echo $fetch_data1['email']; ?></td>
			<td><?php echo $fetch_data1['method']; ?></td>
			<td><?php echo $fetch_data1['flat']; ?></td>
			<td><?php echo $fetch_data1['street']; ?></td>
			<td><?php echo $fetch_data1['city']; ?></td>
			<td><?php echo $fetch_data1['state']; ?></td>
			<td><?php echo $fetch_data1['country']; ?></td>
			<td><?php echo $fetch_data1['pin_code']; ?></td>
			<td><?php echo $fetch_data1['total_products']; ?></td>
			<td><?php echo $fetch_data1['total_price']; ?></td>
			</tr>
		<?php	
			}
		}
		?>		
				
			
			
		</table>
	 </div>
</body>
</html>