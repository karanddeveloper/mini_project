
<!DOCTYPE html>
<head>
    <title>ABOUT US</title>
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
        <script>
                function admin()
        {
            window.open("admin.php","_self");
        }
        </script>
</head>
<body>
<style>
        body {
            background-image: linear-gradient(#fff01f,#04d9ff);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
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
            position: absolute; left: 700px; top: 300px;
        }
        .phara1{
            font-family: HP Simplified Hans;
            font-size: 20px;
            text-align: center;
        }
        .phara2{
            font-family: HP Simplified Hans;
            font-size: 20px;
            text-align: center;
        }
        ul{
            list-style-type: none;
            align-items: center;
        }
        li{
            font-family: HP Simplified Hans;
            font-size: 40px;
            text-align: center;
            float: left;
            padding: 10px;
        }
        .phara4{
            
            font-family: HP Simplified Hans;
            font-size: 27px;
            text-align: left;
            position: absolute; left: 100px; top: 350px;
    
        }
        .list{
            
            position: relative; left:10px; top:10px;
        }
        .fill-gradient-instagram{
            background-clip: text;
            background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
        }

        .footer{
         
            width: 100%;
            overflow:hidden;
            display:flex;
            flex-direction: row;
            position: relative; left: -80px; top: 250px;
        }
        .f-content{
            text-decoration: none;
            font-family: HP Simplified Hans;
            font-size: 16px;
            display: inline-block;
            padding-left: 200px;
        }
        .f-content a{
            color: black;
             text-decoration: none;
        }
        .coninfo li{
         
            font-family: HP Simplified Hans;
            font-size: 16px;
            text-decoration: none;
        }
</style>
<h1>ABOUT US</h1>
<form action="" method="post">
<p class="phara1">A Electronics online website that provides various electronics and their brands.
Here you can order Electronics gadgets through our official website</p>
<p class="phara2">our teccart electronic shop sells various products like</p>
<div class="list">
        <ul class="listname">
            <li><i class="fa-solid fa-laptop" style="color: #000000;"></i>LAPTOP</li>
            <li><i class="fa-solid fa-mobile" style="color: #000000;"></i>MOBILE</li>
            <li><i class="fa-solid fa-headphones" style="color: #000000;"></i>AUDIOS</li>
            <li><i class="fa-solid fa-tv" style="color: #000000;"></i>TELEVISION</li>  
            <li><i class="fa-solid fa-gamepad" style="color: #000000;"></i>CONSOLE/GAME ACCESSORIES</li>
        </ul>
    </div>
    </br>

    <input type="button" onclick="admin()"name="adminbtn" class="adminbtn" value="ADMIN">
    <p class="phara4">Here the ADMIN option is only for the admin who handles the web page, Only admin with special login can handle it</p>

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
</form>
</body>
</html>