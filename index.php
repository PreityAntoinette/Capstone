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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="lightbox.css">
</head>

<body>

<header>
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Lagring<span>Studio</span></a>

    <nav class="navbar">
        <a href="#home">Homee</a>
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
        <p>Something</p>
        <a href="#" class="btn">Schedule now</a>
    </div>
</section>


<!--home section ends-->


<!-- about section starts-->

<div class="heading" id="about">
    <h1 class="heading"> <span> about </span> us </h1>
    <p>About us</P>
</div>

<section class="about-us">
    <img src="sample_pic/pic1.jpg">
    <div class="content">
        <h2>About us</h2>
        <p>About us</p>
    </div>
</section>

<!-- about section ends-->

<!-- Gallery section starts -->

<div class="section" id="gallery">
<div class="container">
    <div class="gallery">
        <a href="sample_pic/pic1.jpg" data-lightbox="services" data-title="Caption1">
            <img src="sample_pic/pic1.jpg">
        </a>
        <a href="sample_pic/pic2.jpg" data-lightbox="services" data-title="Caption2">
            <img src="sample_pic/pic2.jpg">
        </a>
        <a href="sample_pic/pic3.jpg" data-lightbox="services" data-title="Caption3">
            <img src="sample_pic/pic3.jpg">
        </a>
        <a href="sample_pic/pic4.jpg" data-lightbox="services" data-title="Caption4">
            <img src="sample_pic/pic4.jpg">
        </a>
        <a href="sample_pic/pic5.jpg" data-lightbox="services" data-title="Caption5">
            <img src="sample_pic/pic5.jpg">
        </a>
        <a href="sample_pic/pic6.jpg" data-lightbox="services" data-title="Caption6">
            <img src="sample_pic/pic6.jpg">
        </a>
        <a href="sample_pic/pic7.jpg" data-lightbox="services" data-title="Caption7">
            <img src="sample_pic/pic7.jpg">
        </a>
        <a href="sample_pic/pic8.jpg" data-lightbox="services" data-title="Caption8">
            <img src="sample_pic/pic8.jpg">
        </a>   
        
    </div>
</div>
    <script src="lightbox-plus-jquery.js"></script>
</div>

<!-- Gallery section ends -->

</body>
</html>