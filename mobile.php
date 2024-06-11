<!-- mobile cart php -->
<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Samsung Galaxy S23'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $mobile1name = $row["name"];
        $mobile1price = $row["price"];
        $mobile1image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['mobilecart1'])){

   $product_name = $mobile1name;
   $product_price = $mobile1price;
   $product_image = $mobile1image;
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
<!-- mobile product 1 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Apple iPhone 15 plus'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $mobile2name = $row["name"];
        $mobile2price = $row["price"];
        $mobile2image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['mobilecart2'])){

   $product_name = $mobile2name;
   $product_price = $mobile2price;
   $product_image = $mobile2image;
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
<!-- mobile product 2 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Oneplus Nord 3'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $mobile3name = $row["name"];
        $mobile3price = $row["price"];
        $mobile3image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['mobilecart3'])){

   $product_name = $mobile3name;
   $product_price = $mobile3price;
   $product_image = $mobile3image;
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
<!-- mobile product 3 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Realme Narzo 60X'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $mobile4name = $row["name"];
        $mobile4price = $row["price"];
        $mobile4image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['mobilecart4'])){

   $product_name = $mobile4name;
   $product_price = $mobile4price;
   $product_image = $mobile4image;
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
<!-- mobile product 4 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='iQOO 9 pro'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $mobile5name = $row["name"];
        $mobile5price = $row["price"];
        $mobile5image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['mobilecart5'])){

   $product_name = $mobile5name;
   $product_price = $mobile5price;
   $product_image = $mobile5image;
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
<!-- mobile product 5 -->

<?php

@include 'config.php';

$sql="SELECT name,price,image FROM `product` WHERE name='Redmi 12'";
$result = mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $mobile6name = $row["name"];
        $mobile6price = $row["price"];
        $mobile6image = $row["image"];
    }
}
else{
    echo '<script> alert("No results found") </script>';
}

if(isset($_POST['mobilecart6'])){

   $product_name = $mobile6name;
   $product_price = $mobile6price;
   $product_image = $mobile6image;
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
<!-- mobile product 6 -->
<!-- mobile cart php -->
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
<title>MOBILE</title> 
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
            background: linear-gradient(90deg,#ffcc00,#006600);
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
            width: 100%;
            height: 100%;
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

        
        .mobileproduct1{
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
            width: 100%;
            height: 100%;
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

        .mobileproduct2{
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
    <h1>Mobiles</h1>
    </div>
</div>
<!-- product-card row1 start here-->
<form action="" method="post">
<div class="mobileproduct1">
    <div class="product-card1">
        <img src="media_asset/mobile1.jpeg">
        <div class="product-info">
            <h2 class="name1">Samsung Galaxy S23</h2>
            <p class="des1">5G, (8GB RAM/128GB). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>74,999</div>
            <button class="add2cart" name="mobilecart1"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card2">
        <img src="media_asset/mobile2.jpeg">
        <div class="product-info">
            <h2 class="name1">Apple iPhone 15 plus</h2>
            <p class="des1"> A16 Bionic chip</br>(128GB). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>89,900</div>
            <button class="add2cart" name="mobilecart2"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card3">
        <img src="media_asset/mobile3.jpg">
        <div class="product-info">
            <h2 class="name1">Oneplus Nord 3</h2>
            <p class="des1">5G, Dimensity 9000<br>(8GB RAM/128GB). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>33,999</div>
            <button class="add2cart" name="mobilecart3"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    </div>
<!-- product-card row1 ends here-->
<!-- product-card row2 starts here-->
<div class="mobileproduct2">
    <div class="product-card4">
        <img src="media_asset/mobile4.jpg">
        <div class="product-info">
            <h2 class="name1">Realme Narzo 60X</h2>
            <p class="des1">5G, Dimensity 6100+<br>(6GB RAM/128GB). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>14,499</div>
            <button class="add2cart" name="mobilecart4"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card5">
        <img src="media_asset/mobile5.jpg">
        <div class="product-info">
            <h2 class="name1">iQOO 9 pro</h2>
            <p class="des1">5G, SnapDragon 8Gen 1<br>(12GB RAM/256GB). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>44,990</div>
            <button class="add2cart" name="mobilecart5"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card6">
        <img src="media_asset/mobile6.jpg">
        <div class="product-info">
            <h2 class="name1">Redmi 12</h2>
            <p class="des1">5G, SnapDragon 4Gen 2<br>(8Gb RAM/256GB).</p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>15,499</div>
            <button class="add2cart" name="mobilecart6"><i class="fa-solid fa-cart-plus"></i>Add</button>
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