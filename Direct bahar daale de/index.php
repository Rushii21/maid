<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;600;800&family=Fredoka:wght@300;400;500;600&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- /.google fonts -->
    <!-- fonts awesome -->
    <script src="https://kit.fontawesome.com/e2991dfebd.js" crossorigin="anonymous"></script>   
    <!-- /.fonts awesome -->
    <title>Allo Menage</title>
</head>
<body>
<?php require_once("navbar.php"); ?>


     <!--start home-->
    <div class="header">
        <div class="home" id="Home">
             <div class="container">
                <div class="text">
                        <h1>MAKE YOUR WORLD </h1>  
                        <h1>AS <span> CLEAN </span> AS <span> NEW </span></h1>
                        <div class="rapide">
                            <a href="reserverapidement.php"> BOOK NOW </a>
                            <a href="#Services"> MORE <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                          
                </div>                  
             </div>
            <a href="#AboutUs"> <i class="fa-solid fa-angles-down"></i></a>

         </div>
        
    </div>
        <!--end home-->
    <!--end header-->

    
<!--start aboutus -->

<div class="aboutus" id="AboutUs">
    <div class="title">
        <h2>ABOUT US</h2>
    </div>
    <div class="details">
        <div class="quote">
            <div class="container">
                <div class="quotetxt">
                    <h1>Make your daily life easier and enjoy advantages and privileges with (company name)!</h1>
                </div>
            </div>
        </div>
        <div class="text">
            <div class="container">
                <div class="txtleft">
                    <p>offers you a professional home cleaning service, perfectly suited to your lifestyle.</p>
                </div>
                <div class="txtright">
                    <p>By entrusting your home to a cleaning lady, you benefit from a fully personalized service provided by 
                        cleaning experts with extra care for your well-being!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end aboutus -->


<!--Start Services -->


<div class="services" id="Services">
    <div class="title">
        <h2>SERVICES</h2>
    </div>
    <div class="product">
        <div class="container">
            <div class="service">
                <img src="images/service1.png" alt="">    
                <div class="text">
                    <h3>Babysitting</h3>
                    <p>Reliable and caring babysitting services for your little ones, ensuring their safety and comfort while you’re away.</p>
                </div>
                <a href="login.php">MORE <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="service">
                <img src="images/service2.png" alt="">    
                <div class="text">
                    <h3>Deep Cleaning</h3>
                    <p>Comprehensive cleaning that goes beyond the surface, ensuring every corner of your home is spotless and sanitized.</p>
                </div>
                <a href="login.php">MORE <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="service">
                <img src="images/service3.png" alt="">    
                <div class="text">
                    <h3>Pre-Move Cleaning</h3>
                    <p>Ensure your new home is spotless before moving in with our pre-move cleaning services. Fresh start guaranteed!</p>
                </div>
                <a href="login.php">MORE <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="service">
                <img src="images/service4.png" alt="">    
                <div class="text">
                    <h3>Shifting Services</h3>
                    <p>Hassle-free moving services to help you with packing, transporting, and settling into your new place.</p>
                </div>
                <a href="login.php">MORE <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="service">
                <img src="images/service5.png" alt="">    
                <div class="text">
                    <h3>Carpet Cleaning</h3>
                    <p>Professional carpet cleaning to remove dirt, stains, and allergens, restoring your carpets to their best condition.</p>
                </div>
                <a href="login.php">MORE <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="service">
                <img src="images/service6.png" alt="">    
                <div class="text">
                    <h3>Upholstery Cleaning</h3>
                    <p>Revitalize your furniture with our upholstery cleaning service, removing stains and odors for a fresh and clean look.</p>
                </div>
                <a href="login.php">MORE <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
</div>
<!--end services-->




    
<!-- Start contact us-->

<div class="contact" id="Contact">
    <div class="title">
        <h2>CONTACT US</h2>
    </div>
    <div class="container">
        <div class="livechat"  >
            <a href="#Home">LIVE CHAT</a>
        </div>
        <form action="">
            <input type="text" class="cont" placeholder="Name" name="" id="">
            <input type="email" class="cont" placeholder="Email" name="" id="">
            <textarea name="MEssage" id="" placeholder="Message" cols="20" rows="6"></textarea>
            <input type="submit" value="SEND MESSAGE">
        </form>
        <div class="info">
             <h4>PHONE</h4>
             <span>+00 123.456.789</span>
             <span>+00 123.456.789</span>
             <h4>ADDRESS</h4>
             <address>
                 Awesome Address 17
                 <br>
                 New York, NYC
                 <br>
                 123-4567-890
                 <br>
                 USA
             </address>
        </div>
    </div>
</div>
<!-- end contact us-->


<!-- start footer-->

<div class="footer">
    <div class="container">
        <img src="images/logogifwhite.gif" alt="">
        <p>WE ARE SOCIAL</p>
        <div class="so-icons">
            <a href=""><i class="fab fa-facebook-f"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href="#Home"><i class="fas fa-home"></i></a>
            <a href=""><i class="fab fa-linkedin"></i></a>
        </div>
        <p>© 2022 <span>ALLOMENAGE</span> All rights reserved </p>
    </div>
</div>
<!-- end footer-->

<script src="js/script.js"></script>


    
</body>
</html>
