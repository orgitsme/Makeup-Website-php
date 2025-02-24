<?php
session_start();
include('config.php');  
$message = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Makeup Shop - Home</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        /* Header Styles */
        header {
            background-color: #ff69b4;
            color: white;
            padding: 1rem 0;
            text-align: center;
            box-shadow: 0 4px 2px -2px gray;
        }
        
        header h1 {
            margin: 0;
            font-size: 2rem;
        }
        
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 1rem 0;
            display: flex;
            justify-content: center;
        }
        
        nav ul li {
            margin: 0 1rem;
        }
        
        nav ul li a {
            padding: 0.5rem 1rem;
            background-color: white;
            color: #ff69b4;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        
        nav ul li a:hover {
            background-color: #ff69b4;
            color: white;
        }
        
        /* Slideshow Container */
        .slideshow-container {
            position: relative;
            max-width: 100%;
            margin: auto;
            overflow: hidden;
        }
        
        .mySlides {
            display: none;
        }
        
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }
        
        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }
        
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
        
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }
        
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        
        .active, .dot:hover {
            background-color: #717171;
        }
        
        /* Advertisement Styles */
        .advertisement {
            text-align: center;
            padding: 2rem 0;
            background-color: #fff;
        }
        
        .advertisement h2, .advertisement p, .advertisement .hot-deal-product {
            margin-bottom: 1rem;
        }
        
        .hot-deal-product img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Makeup Shop</h1><br><br>
        <nav>
            <ul>
                <li><a href="index.PHP">Home</a></li>
                <li><a href="products.PHP">Products</a></li>
                <li><a href="cart.PHP">Cart</a></li>
                <li><a href="hotdeals.PHP">Hot Deals</a></li>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="input-container">
               
                <a href="LOGIN.PHP">
    <i   class="fa fa-user">&nbsp;LOGIN</i>
</a>

 

            </ul>
        </nav>
    </header>
    <main>
        <section class="slideshow-container">

            <div class="mySlides fade">
              <div class="numbertext">1 / 3</div>
              <img src="images/b4.jpg" style="width:100%">
               
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">2 / 3</div>
              <img src="images/b5.jpg" style="width:100%">
              
            </div>
          
            <div class="mySlides fade">
              <div class="numbertext">3 / 3</div>
              <img src="images/b6.jpg" style="width:100%">
              
            </div>
          
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
          
          </section>
          <br>
          
          <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>

        <section class="advertisement">
            <h2>Hot Deals</h2>
            <p>Get 50% off on selected products!</p>
            <div class="hot-deal-product">
                <img src="images/main.jpg"  width="6500px"  height="auto" alt="Hot Deal Product">
                
            </div>
        </section>
        <section>
            <h2>Featured Products</h2>
            <div class="product">
                <img src="images/p1.jpg" alt="Product 1">
                <h3>Full kit</h3>
                <p>$20.00</p>
                <button class="add-to-cart" data-name="Full kit" data-price="20.00">Add to Cart</button>
            </div>
            <div class="product">
                <img src="images/p2.jpg" height="185PX" alt="Product 2">
                <h3>Eye liner KIT</h3>
                <p>$15.00</p>
                <button class="add-to-cart" data-name="Eye liner KIT" data-price="15.00">Add to Cart</button>
            </div>
            <div class="product">
                <img src="images/P3.JPG" width="100%" height="185PX" alt="Product 3">
                <h3>Face Makeup</h3>
                <p>$20.00</p>
                <button class="add-to-cart" data-name="Face Makeup" data-price="20.00">Add to Cart</button>
            </div>
            <div class="product">
                <img src="images/p4.jpg" width="100%" alt="Product 4">
                <h3>Nail polish Set</h3>
                <p>$15.00</p>
                <button class="add-to-cart" data-name="Nail polish Set" data-price="15.00">Add to Cart</button>
            </div>
            <div class="product">
                <img src="images/p5.jpg" width="100%" alt="Product 5">
                <h3>Nails Kit Set</h3>
                <p>$20.00</p>
                <button class="add-to-cart" data-name="Nails Kit Set" data-price="20.00">Add to Cart</button>
            </div>
            <div class="product">
                <img src="images/p6.jpg" width="100%" alt="Product 6">
                <h3>Skin Care Set</h3>
                <p>$15.00</p>
                <button class="add-to-cart" data-name="Skin Care Set" data-price="15.00">Add to Cart</button>
            </div>
            <div class="product">
                <img src="images/p7.jpg" width="100%" alt="Product 7">
                <h3>Minerals Cream</h3>
                <p>$20.00</p>
                <button class="add-to-cart" data-name="Minerals Cream" data-price="20.00">Add to Cart</button>
            </div>
            <div class="product">
                <img src="images/P8.JPG" width="100%" alt="Product 8">
                <h3>9 IN 1 Makeup Kit</h3>
                <p>$15.00</p>
                <button class="add-to-cart" data-name="9 IN 1 Makeup Kit" data-price="15.00">Add to Cart</button>
            </div>
            <div class="product">
                <img src="images/p9.jpg" width="100%" alt="Product 9">
                <h3>Fenshine Cosmetic Make Up</h3>
                <p>$20.00</p>
                <button class="add-to-cart" data-name="Fenshine Cosmetic Make Up" data-price="20.00">Add to Cart</button>
            </div>
        </section>
    </main>
     
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);
        
        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        
        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            const dots = document.getElementsByClassName("dot");
            
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
        
        // Automatic slideshow
        let slideInterval = setInterval(function() {
            plusSlides(1);
        }, 3000); // Change image every 3 seconds
    </script>
</body>
</html>