<!-- audio cart php -->
<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Skullcandy Hesh2'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $audio1name = $row["name"];
        $audio1price = $row["price"];
        $audio1image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['audiocart1'])){

   $product_name = $audio1name;
   $product_price = $audio1price;
   $product_image = $audio1image;
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
<!-- audio product 1 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='boAt Airdopes 141'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $audio2name = $row["name"];
        $audio2price = $row["price"];
        $audio2image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['audiocart2'])){

   $product_name = $audio2name;
   $product_price = $audio2price;
   $product_image = $audio2image;
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
<!-- audio product 2 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='boAt basshead 105'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $audio3name = $row["name"];
        $audio3price = $row["price"];
        $audio3image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['audiocart3'])){

   $product_name = $audio3name;
   $product_price = $audio3price;
   $product_image = $audio3image;
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
<!-- audio product 3 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='JBL Flip 5'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $audio4name = $row["name"];
        $audio4price = $row["price"];
        $audio4image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['audiocart4'])){

   $product_name = $audio4name;
   $product_price = $audio4price;
   $product_image = $audio4image;
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
<!-- audio product 4 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Apple AirPods 2'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $audio5name = $row["name"];
        $audio5price = $row["price"];
        $audio5image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['mobilecart5'])){

   $product_name = $audio5name;
   $product_price = $audio5price;
   $product_image = $audio5image;
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
<!-- audio product 5 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Zebronics ZEB-JUKE bar'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $audio6name = $row["name"];
        $audio6price = $row["price"];
        $audio6image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['mobilecart6'])){

   $product_name = $audio6name;
   $product_price = $audio6price;
   $product_image = $audio6image;
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
<!-- audio product 6 -->
<!-- audio cart php -->
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
<title>AUDIO</title> 
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
            background: linear-gradient(90deg,#ff6600,#00ffff);
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
            width: 60%;
            height: 60%;
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
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        
        .audioproduct1{
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
            width: 60%;
            height: 60%;
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
            width: 50%;
            height: 50%;
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
    <h1>Audios</h1>
    </div>
</div>
<!-- product-card row1 start here-->
<form action="" method="post">
<div class="audioproduct1">
    <div class="product-card1">
        <img src="media_asset/audio1.jpeg">
        <div class="product-info">
            <h2 class="name1">Skullcandy Hesh2</h2>
            <p class="des1">Bluetooth Wireless Overear headphone</br>Black S6HBGY-374. </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 7,499</div>
            <button class="add2cart" name="audiocart1"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card2">
        <img src="media_asset/audio2.jpg">
        <div class="product-info">
            <h2 class="name1">boAt Airdopes 141</h2>
            <p class="des1"> TWS earbuds with 32db (42 hrs playback)</br> with mic, USB type-c, Black.</p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 1,599</div>
            <button class="add2cart" name="audiocart2"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card3">
        <img src="media_asset/audio3.jpg">
        <div class="product-info">
            <h2 class="name1">boAt basshead 105</h2>
            <p class="des1">wired in-ear earphone with mic<br> White. </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 499</div>
            <button class="add2cart" name="audiocart3"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    </div>
<!-- product-card row1 ends here-->
<!-- product-card row2 starts here-->
<div class="laptopproduct2">
    <div class="product-card4">
        <img src="media_asset/audio4.jpeg">
        <div class="product-info">
            <h2 class="name1">JBL Flip 5</h2>
            <p class="des1">wireless portable bluetooth speaker<br>20W, IPX7, Type-C, Blue.  </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 6,499</div>
            <button class="add2cart" name="audiocart4"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card5">
        <img src="media_asset/audio5.jpg">
        <div class="product-info">
            <h2 class="name1">Apple AirPods 2</h2>
            <p class="des1">2nd GEN (case)<br>White. </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i> 10,499</div>
            <button class="add2cart" name="audiocart5"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card6">
        <img src="media_asset/audio6.jpg">
        <div class="product-info">
            <h2 class="name1">Zebronics ZEB-JUKE bar </h2>
            <p class="des1">9700 PRO, Bluetooth Home Theater with woofer<br>450W, 2.1.2 Channel</p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>1,44,990</div>
            <button class="add2cart" name="audiocart6"><i class="fa-solid fa-cart-plus"></i>Add</button>
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