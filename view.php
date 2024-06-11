<?php include "db_conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 70%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="adminhome.php">&#8592;</a>
     <?php 
	 	  $i = 1;
          $sql = "SELECT * FROM product ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($row = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
                <?php echo $i++; ?>
             	<img src="img/<?=$row['image']?>">
                <?php echo $row["name"]; ?>
                <?php echo $row["price"]; ?>
             </div>
          		
    <?php } }?>
</body>
</html>