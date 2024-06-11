<!-- laptop cart php -->
<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='HP Chromebook'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $laptop1name = $row["name"];
        $laptop1price = $row["price"];
        $laptop1image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['laptopcart1'])){

   $product_name = $laptop1name;
   $product_price = $laptop1price;
   $product_image = $laptop1image;
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
<!-- laptop product 1 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Xiaomi Notebook pro'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $laptop2name = $row["name"];
        $laptop2price = $row["price"];
        $laptop2image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['laptopcart2'])){

   $product_name = $laptop2name;
   $product_price = $laptop2price;
   $product_image = $laptop2image;
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
<!-- laptop product 2 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Acer Aspire 5'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $laptop3name = $row["name"];
        $laptop3price = $row["price"];
        $laptop3image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['laptopcart3'])){

   $product_name = $laptop3name;
   $product_price = $laptop3price;
   $product_image = $laptop3image;
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
<!-- laptop product 3 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Apple MacBook Air'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $laptop4name = $row["name"];
        $laptop4price = $row["price"];
        $laptop4image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['laptopcart4'])){

   $product_name = $laptop4name;
   $product_price = $laptop4price;
   $product_image = $laptop4image;
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
<!-- laptop product 4 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='HP Victus'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $laptop5name = $row["name"];
        $laptop5price = $row["price"];
        $laptop5image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['laptopcart5'])){

   $product_name = $laptop5name;
   $product_price = $laptop5price;
   $product_image = $laptop5image;
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
<!-- laptop product 5 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Acer Predator Helios'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $laptop6name = $row["name"];
        $laptop6price = $row["price"];
        $laptop6image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['laptopcart6'])){

   $product_name = $laptop6name;
   $product_price = $laptop6price;
   $product_image = $laptop6image;
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>
<!-- laptop product 6 -->
<!-- laptop cart php -->
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        html,body{
            width: 100%;
            height: 100%;
            margin: 0px;
            padding: 0px;
            overflow-x: hidden;
        }
        </style>
<title>LAPTOP</title> 
</head>
<body>
<!-- Style start here-->
    <style>
        body{
			background-image: linear-gradient(#ffffff,#1261a0);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
		} 	

        .header{
            background-color: #1261a0;
            opacity: 0.7;
            width: 100%;
            height: 25%;
            position: relative; top: -45px;
        }
        .name{
            width: 15%;
            background: linear-gradient(90deg,#04d9ff,#fe001b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-family: Impact;
            font-size: 40px;
            position: relative; left: 100px; top: 20px;
        }
/* product-card row1 */
        .product-card1{
            width: 300px;
            height: 400px;
            overflow: hidden;
            display: flex;
            margin: 30px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #f9f9f9;
            box-shadow: 0px 5px 10px black;
        }
        .product-card1 img{
            width: 80%;
            height: 80%;
            object-fit: cover;
        }
        .product-info{
            width: 100%;
            padding: 20px;
        }
        .product-info .name1{
            font-family: HP Simplified Hans;
            text-align: center;
        }
        .product-info .price{
            font-family: HP Simplified Hans;
            font-size: 20px;
        }
        .product-info .add2cart{
            background-color: #73c2fb;
            color: black;
            padding: 10px 10px;
            border-radius: 12px;
            border: black 4px solid;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            cursor: pointer;
            font-family: HP Simplified Hans;
            font-size: 20px;
            position:relative; left: 150px;
        }
        .product-card2{
            width: 300px;
            height: 400px;
            overflow: hidden;
            display: flex;
            margin: 30px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #f9f9f9;
            box-shadow: 0px 5px 10px black;
        }
        .product-card2 img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .product-card3{
            width: 300px;
            height: 400px;
            overflow: hidden;
            display: flex;
            margin: 30px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #f9f9f9;
            box-shadow: 0px 5px 10px black;
        }
        .product-card3 img{
            width: 60%;
            height: 60%;
            object-fit: cover;
        }

        
        .laptopproduct1{
            width: 100%;
            overflow: hidden;
            display:flex;
            flex-direction: row;
            padding-left: 10%;
            position: relative; top: -50px;
        }
/* product-card row1 end */
/* product-card row2 */
        .product-card4{
            width: 300px;
            height: 400px;
            overflow: hidden;
            display: flex;
            margin: 30px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #f9f9f9;
            box-shadow: 0px 5px 10px black;
        }
        .product-card4 img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .product-card5{
            width: 300px;
            height: 400px;
            overflow: hidden;
            display: flex;
            margin: 30px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #f9f9f9;
            box-shadow: 0px 5px 10px black;
        }
        .product-card5 img{
            width: 60%;
            height: 60%;
            object-fit: cover;
        }
        .product-card6{
            width: 300px;
            height: 400px;
            overflow: hidden;
            display: flex;
            margin: 30px;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #f9f9f9;
            box-shadow: 0px 5px 10px black;
        }
        .product-card6 img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .laptopproduct2{
            width: 100%;
            overflow: hidden;
            display:flex;
            flex-direction: row;
            position: relative; top: 10px;
            padding-left: 10%;
        }
/* product-card row2 end */  
.message span{
   font-size: 2rem;
   color: black;
}

.message i{
   font-size: 2.5rem;
   color: black;
   cursor: pointer;
}

.message i:hover{
   color: red;
}  

.cart{
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
    position:relative; left: 1250px; top: -1050px;
}

.cart:hover{
   color:red;
}

.cart span{
   padding:.1rem .5rem;
   border-radius: .5rem;
   background-color: var(--white);
   color:var(--blue);
   font-size: 2rem;
}
    </style>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
<div class="header">
    <div class="name">
    <h1>Laptops</h1>
    </div>
</div>
<!-- product-card row1 start here-->
<form action="" method="post">
<div class="laptopproduct1">
    <div class="product-card1">
        <img src="media_asset/laptop1.jpeg">
        <div class="product-info">
            <h2 class="name1">HP Chromebook</h2>
            <p class="des1">X360, i5 11th gen 1135G7</br>(8GB RAM/256GB SSD). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>49,833</div>
            <button class="add2cart" name="laptopcart1"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card2">
        <img src="media_asset/laptop2.jpg">
        <div class="product-info">
            <h2 class="name1">Xiaomi Notebook pro</h2>
            <p class="des1"> i5-11300H 11th gen</br>(8GB RAM/512GB SSD). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>44,999</div>
            <button class="add2cart" name="laptopcart2"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card3">
        <img src="media_asset/laptop3.jpeg">
        <div class="product-info">
            <h2 class="name1">Acer Aspire 5</h2>
            <p class="des1">i5 12th gen RTX2050<br>(16GB RAM/512GB SSD). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>52,990</div>
            <button class="add2cart" name="laptopcart3"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    </div>
<!-- product-card row1 ends here-->
<!-- product-card row2 starts here-->
<div class="laptopproduct2">
    <div class="product-card4">
        <img src="media_asset/laptop4.jpg">
        <div class="product-info">
            <h2 class="name1">Apple MacBook Air</h2>
            <p class="des1">M1 chip<br>(8GB RAM/256GB SSD). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>79,990</div>
            <button class="add2cart" name="laptopcart4"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card5">
        <img src="media_asset/laptop5.jpeg">
        <div class="product-info">
            <h2 class="name1">HP Victus</h2>
            <p class="des1">i5-11400H 11th gen<br>(16GB RAM/512GB SSD). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>57,990</div>
            <button class="add2cart" name="laptopcart5"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card6">
        <img src="media_asset/laptop6.jpg">
        <div class="product-info">
            <h2 class="name1">Acer Predator Helios</h2>
            <p class="des1">neo 16, i9 13th gen<br>(16Gb RAM/1TB SSD).</p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>1,44,990</div>
            <button class="add2cart" name="laptopcart6"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    </div>
</form>

      <!-- cart button -->
      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart"><i class="fa-solid fa-bag-shopping"></i><span><?php echo $row_count; ?></span> </a>
</body>
</html>