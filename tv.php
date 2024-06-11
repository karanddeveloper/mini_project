<!-- tv cart php -->
<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Oneplus Y1S'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $tv1name = $row["name"];
        $tv1price = $row["price"];
        $tv1image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['tvcart1'])){

   $product_name = $tv1name;
   $product_price = $tv1price;
   $product_image = $tv1image;
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
<!-- tv product 1 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Redmi X43'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $tv2name = $row["name"];
        $tv2price = $row["price"];
        $tv2image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['tvcart2'])){

   $product_name = $tv2name;
   $product_price = $tv2price;
   $product_image = $tv2image;
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
<!-- tv product 2 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Acer TV'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $tv3name = $row["name"];
        $tv3price = $row["price"];
        $tv3image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['tvcart3'])){

   $product_name = $tv3name;
   $product_price = $tv3price;
   $product_image = $tv3image;
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
<!-- tv product 3 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Sony Bravia'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $tv4name = $row["name"];
        $tv4price = $row["price"];
        $tv4image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['tvcart4'])){

   $product_name = $tv4name;
   $product_price = $tv4price;
   $product_image = $tv4image;
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
<!-- tv product 4 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Samsung TV'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $tv5name = $row["name"];
        $tv5price = $row["price"];
        $tv5image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['tvcart5'])){

   $product_name = $tv5name;
   $product_price = $tv5price;
   $product_image = $tv5image;
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
<!-- tv product 5 -->
<!-- tv cart php -->
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
<title>TELEVISION</title> 
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
            width: 24%;
            background: linear-gradient(90deg,#ff0099,#ffff00);
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
            width: 60%;
            height: 60%;
            object-fit: cover;
        }

        
        .tvproduct1{
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
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .tvproduct2{
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
    </style>
<div class="header">
    <div class="name">
    <h1>Television</h1>
    </div>
</div>
<!-- product-card row1 start here-->
<form action="" method="post">
<div class="tvproduct1">
    <div class="product-card1">
        <img src="media_asset/tv1.jpg">
        <div class="product-info">
            <h2 class="name1">Oneplus Y1S</h2>
            <p class="des1">43'inch LED full HD. </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>49,833</div>
            <button class="add2cart" name="tvcart1"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card2">
        <img src="media_asset/tv2.jpg">
        <div class="product-info">
            <h2 class="name1">Redmi X43</h2>
            <p class="des1"> 43'inch 4K UHD</br>android smart LED (Black). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>22999</div>
            <button class="add2cart" name="tvcart2"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card3">
        <img src="media_asset/tv3.png">
        <div class="product-info">
            <h2 class="name1">Acer TV</h2>
            <p class="des1">50'inch 4K UHD<br> smart LED google tv (Black). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>28,999</div>
            <button class="add2cart" name="tvcart3"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    </div>
<!-- product-card row1 ends here-->
<!-- product-card row2 starts here-->
<div class="tvproduct2">
    <div class="product-card4">
        <img src="media_asset/tv4.jpg">
        <div class="product-info">
            <h2 class="name1">Sony Bravia</h2>
            <p class="des1">65'inch 4K UHD<br> smart LED google tv KD-65X74K (Black). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>75,990</div>
            <button class="add2cart" name="tvcart4"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card5">
        <img src="media_asset/tv5.jpeg">
        <div class="product-info">
            <h2 class="name1">Samsung TV</h2>
            <p class="des1">50'inch 4K UHD<br> Crystal iSmart (Black). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>42990</div>
            <button class="add2cart" name="tvcart5"><i class="fa-solid fa-cart-plus"></i>Add</button>
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