<?php
    include("login_connection.php");
?>
<?php include("homeproduct.php"); ?>

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

 <!-- script starts here-->   
    <script> 
        function funclaptop()
        {
            window.open("laptop.php","_self");
        }
        function funcmobile()
        {
            window.open("mobile.php","_self");
        }
        function funcaudio()
        {
            window.open("audio.php","_self");
        }
        function functv()
        {
            window.open("tv.php","_self");
        }


    </script>
    <script src="search.js"></script>
<!-- script ends here-->
<title>HOME</title>
</head>
<body>
<!-- Style starts here-->
    <style>
        body{
			background-image: linear-gradient(#ffffff,#1261a0);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
		}

        h1{
            font-family: Gabriola;
            font-size: 170px;
            font-weight: -60;
            text-align: center;
            text-shadow: 4px 2px 7px black;
            color: blue;
            -webkit-text-fill-color: black;
            -webkit-text-stroke: 1px;
            -webkit-text-stroke-color: blue;
            position: relative; left: -250px; top: -130px;
        }
        img.logo{
            width: 170px;
            height: 230px;
            position: relative; left: 20px; top: -540px;
        }

        h3{
            font: bold 100px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 40px;
            -webkit-text-fill-color: #ffff00;
            -webkit-text-stroke: 2px;
            -webkit-text-stroke-color: black;
            word-spacing: -2px;
            position:  relative; left: 1100px; top: -560px;
        }

        .searchbar{
            position: relative; left: 400px; top: -550px;
        }

        input[type="search"]{
            width: 40%;
			padding: 12px 20px;
			margin: 8px 0px;
			border: 4px solid black;
			border-radius: 12px;
        }

        input[type="button"]{
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
        }

        .outer{
            overflow: scroll;
            width: 52%;
            position: relative; left: 320px; top: -200px; 
        }
        .outer::-webkit-scrollbar{
            display: none;
        }

        .outer .inner{
            width: 1500px;
            height: none;
        }

        .outer .inner .box{
            background-color: #73c2fb;
            width: 250px;
            height: 300px;
            float: left;
            margin: 0 4px 0 0;
            

        }

        .box button{
            width:200px;
            height: 200px;
            font-family: HP Simplified Hans;
            font-size: 20px;
            border: 4px solid black;
			border-radius: 12px;
            cursor: pointer;
            position: relative; left: 25px; top: 50px;
        }

        .box button img{
            width: 150px;
            height: 150px;
        }

        .txt1{
            font-family: Impact;
            font-size: 70px;
            position: relative; left: 300px; top: -600px;
        }


        .menubtn{
            position: relative;left: 50px; top:-900px; 
        }
        .menubtn .menu{
            background-color: #73c2fb;
            width: 65px;
            height: 55px;
            padding: 0px 10px;
            line-height: 30px;
            overflow: hidden;
            color:black;
            border: black 4px solid;
            border-radius: 25px;
            display: flex;
            transition: all .5s ease;
            cursor: pointer;

        }
        .menu li{
            font-family: HP Simplified Hans;
            font-size: 20px;
            display: inline-block;
            padding: 0px 10px;
            margin: 0 auto;
        }
        .menu:hover{
            width: 500px;
        }

        .txt2{
            font-family: Impact;
            font-size: 70px;
            position: relative; left: 300px; top: -300px;
        }

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
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
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
        .homeproduct{
            width: 100%;
            overflow: hidden;
            display:flex;
            flex-direction: row;
            position: relative; top: -230px;
        }
        .fill-gradient-instagram{
            background-clip: text;
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
        }

        .footer{
            background-color: #ffffff;
            opacity: 0.5;
            width: 100%;
            height: none;
            overflow:hidden;
            display:flex;
            flex-direction: row;
            position: relative; top: -1px;
        }
        .f-content{
            text-decoration: none;
            font-family: HP Simplified Hans;
            font-size: 14px;
            display: inline-block;
            padding-left: 200px;
        }
        .coninfo li{
            text-decoration: none;
        }

        .message{
   background-color: var(--blue);
   position: relative;
   top:0; left:0;
   z-index: 10000;
   border-radius: .5rem;
   background-color: var(--white);
   padding:1.5rem 2rem;
   margin:0 auto;
   max-width: 1200px;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1.5rem;
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
    position:relative; left: 1250px; top: -2000px;
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
.aboutus{
    color: black;
    text-decoration: none;
}
     </style>
<!-- Style ends here-->
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
<h1>TEC_CART</h1><br>
<img src="media_asset/logo.png" class="logo">
    <div class ="searchbar"> 
<input type="search" name="search" class="search" id="searchinput" placeholder="Search Product">
<input type="button" name="searchbtn" class="searchbtn" onclick="funcsearch()" value="SEARCH">
    </div>
    <!-- Scrollbar starts here -->
    <div class="outer">
        <div class="inner">
            <div class="box">
                <button onclick="funclaptop()">
                    <img src="media_asset/laptop.png" alt"">
                    Laptop
                </button>
            </div>
            <div class="box">
                <button onclick="funcmobile()">
                    <img src="media_asset/mobile.png" alt"">
                    Mobile
                </button>
            </div>
            <div class="box">
                <button onclick="funcaudio()">
                    <img src="media_asset/audio.png" alt"">
                    Audios
                </button>
            </div>
            <div class="box">
                <button onclick="functv()">
                    <img src="media_asset/tv.png" alt"">
                    TV
                </button>
            </div>
            <div class="box">
                <button>
                    <img src="media_asset/console.png" alt"">
                    Console/Games
                </button>
            </div>
        </div>
    </div>
    <!-- scrollbar ends here-->
    <span class="txt1">TOP CATEGORY</span>
    <!-- menu starts here-->
    <div class="menubtn">
        <ul class="menu">
            <li><i class="fa-solid fa-bars"></i>menu</li>
            <li><a class="aboutus" href="aboutus.php"><i class="fa-solid fa-address-card"></i>about us</a></li>
            <!-- <li><i class="fa-solid fa-user"></i>profile</li> -->
                <li><a class="aboutus" href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>logout</a></li>  
        </ul>
    </div>
    <!-- menu ends here-->
    <span class="txt2">TOP SELLING</span>
    <!-- product card starts here-->

    <form action="" method="post">
    <div class="homeproduct">
    <div class="product-card1">
        <img src="media_asset/laptop1.jpeg">
        <div class="product-info">
            <h2 class="name1">HP Chromebook</h2>
            <p class="des1">X360, i5 11th gen 1135G7</br>(8GB RAM/256GB SSD). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>49,833</div>
            <button class="add2cart" name="add_to_cart1"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card2">
        <img src="media_asset/audio1.jpeg">
        <div class="product-info">
            <h2 class="name1">Skullcandy Hesh2</h2>
            <p class="des1">Bluetooth Wireless Overear headphone</br>Black S6HBGY-374. </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>7,499</div>
            <button class="add2cart" name="add_to_cart2"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card3">
        <img src="media_asset/tv1.jpg">
        <div class="product-info">
            <h2 class="name1">Oneplus Y1S</h2>
            <p class="des1">43'inch LED full HD. </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>32,000</div>
            <button class="add2cart" name="add_to_cart3"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    <div class="product-card4">
        <img src="media_asset/mobile1.jpeg">
        <div class="product-info">
            <h2 class="name1">Samsung Galaxy S23</h2>
            <p class="des1">5G, (8GB RAM/128GB). </p>
            <div class="price"><i class="fa-solid fa-indian-rupee-sign"></i>74,999</div>
            <button class="add2cart" name="add_to_cart4"><i class="fa-solid fa-cart-plus"></i>Add</button>
        </div>
    </div>
    </div>
    </form>
    <!-- product card ends here-->
    <!-- footer detail start here-->
    <div class="footer">
        <div class="f-content">
            <h2>COMPANY INFO</h2><br>
            <p>Copyrights reserve @teccart 2013<br>
                All rights are reserved by teccart.<br>
                an ISO 9001-2008 company.
            </p>
        </div>
        <div class="f-content">
            <h2>CONTACT US</h2><br>
            <ul class="coninfo">
                <li>
                    <span><i class="fa-solid fa-location-dot"></i></span>
                    <span>no 199, 9th street,<br>
                        1st main road, Sharma Nagar,<br>
                        Vyasarpadi, Chennai 600039.<br>
                    </span>
                </li>
                <li>
                    <span><i class="fa-solid fa-phone"></i></span>
                    <span> 9080445424<br>044 2945 5542</span>
                </li>
                <li>
                    <span><i class="fa-solid fa-envelope"></i></span>
                    <span>teccartelectronics@gmail.com</span>
                </li>
            </ul>
        </div>
        <div class="f-content">
            <h2>FOLLOW US</h2><br>
            <a href="https://instagram.com/ig_mr.k?igshid=OGQ5ZDc2ODk2ZA=="><i class="fa-brands fa-square-instagram fill-gradient-instagram"></i>   Instagram </a><br>
            <a href="https://www.facebook.com/profile.php?id=100010239576135&mibextid=ZbWKwL"><i class="fa-brands fa-square-facebook" style="color: #1a70c7;"></i>   Facebook</a><br>
            <a href="https://youtube.com/@bombpakkiricod5147?si=o8mAk3LIp7CAp5f2"><i class="fa-brands fa-youtube" style="color: #ff0000;"></i>   Youtube</a>
        </div>
    </div>
  <!-- cart button -->
    <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart"><i class="fa-solid fa-bag-shopping"></i><span><?php echo $row_count; ?></span> </a>
</body>
</html>
