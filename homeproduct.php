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

if(isset($_POST['add_to_cart1'])){

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

<!-- addtocart for product1 -->

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

if(isset($_POST['add_to_cart2'])){

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

<!-- addtocart for product2 -->

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

if(isset($_POST['add_to_cart3'])){

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

<!-- addtocart for product3 -->

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

if(isset($_POST['add_to_cart4'])){

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

<!-- addtocart for product4 -->