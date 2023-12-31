<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lagring Studio</title>

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--custom css file link-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="css/lightbox.css">
</head>

<body>

<header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Lagring<span>Studio</span></a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About us</a>
        <a href="#services">Services</a>
        <a href="#gallery">Gallery</a>
        <a href="Login.php">Log in</a>
    </nav>

    <div class="icons">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
        <a href="#" class="fas fa-user"></a>
    </div>

</header>


<!--header section end-->

<!--home section starts-->
<section class="home" id="home">
    <div class="content">
        <h3>Lagring studio</h3>
        <span>Photography</span>
        <p>Mama tarba</p>
        <a href="#" class="btn">Schedule now</a>
    </div>
</section>


<!--home section ends-->


<!-- about section starts-->

<div class="headingabout" id="about">
    <h1 class="headingabout"> about us </h1>
</div>

<section class="about-us">
    <img src="images/aboutus.jpg">
    <div class="content">
        <h2>Lagring Studio</h2>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;Backround of Lagring Studio Back in 2010, There a woman named Alegria Garcia Established a photo studio in Salitran named it Lagring Studio. Alegria “Lagring” Garcia is  mother to 4 child. The humble start of Lagring shows that persistence is important if you want to be successful. <br> &nbsp;&nbsp;&nbsp;&nbsp;It started with a small studio offering ID pictures, photo and video packages into events. They also sell frames in different size and photo enlargement. Through years of business, they establish their name in picture industry specially in Imus. They now covers almost 70% of public schools in Imus such as the big school of Imus National High School (INHS), Gen. Emilio Aguinald National High School (GEANHS), Malagasang 1,2,3 Elementary School, etc.. Until now, the business continues to grow.</p>
    </div>

    
</section>

<!-- about section ends-->

<!-- Gallery section starts -->

<div class="section" id="gallery">
<div class="container">
    <div class="gallery">
        <a href="images/pic1.jpg" data-lightbox="services" data-title="Caption1">
            <img src="images/pic1.jpg">
        </a>
        <a href="images/pic2.jpg" data-lightbox="services" data-title="Caption2">
            <img src="images/pic2.jpg">
        </a>
        <a href="images/pic3.jpg" data-lightbox="services" data-title="Caption3">
            <img src="images/pic3.jpg">
        </a>
        <a href="images/pic4.jpg" data-lightbox="services" data-title="Caption4">
            <img src="images/pic4.jpg">
        </a>
        <a href="images/pic5.jpg" data-lightbox="services" data-title="Caption5">
            <img src="images/pic5.jpg">
        </a>
        <a href="images/pic14.jpg" data-lightbox="services" data-title="Caption6">
            <img src="images/pic14.jpg">
        </a>
        <a href="images/pic7.jpg" data-lightbox="services" data-title="Caption7">
            <img src="images/pic7.jpg">
        </a>
        <a href="images/pic15.jpg" data-lightbox="services" data-title="Caption8">
            <img src="images/pic15.jpg">
        </a>   
        
    </div>
</div>
    <script src="lightbox-plus-jquery.js"></script>
</div>

<!-- Gallery section ends -->

</body>
</html>