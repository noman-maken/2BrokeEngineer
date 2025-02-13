﻿<?php
include('./inc/db.php');
include('./inc/function.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>2 broke engineers Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-phone d-flex align-items-center"><span>051-8467258</span></i>
        <i class="bi bi-clock d-flex align-items-center ms-4"><span> MON-SUN: 12AM - 12PM</span></i>
      </div>
      <!-- <div class="languages d-none d-md-flex align-items-center">
        <ul>
          <li>En</li>
          <li><a href="#"></a></li>
        </ul>
      </div> -->
    </div>
  </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <!-- <h1 class="logo me-auto me-lg-0"><a href="index.php"><img src="assets/img/Logo.png" alt=""></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo me-auto me-lg-3"><img src="assets/img/LOGO.JPG" alt="" class="img-fluid"></a>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Specials</a></li>
          <li><a class="nav-link scrollto" href="#events">Events</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li class="dropdown"><a href="#"><span>All in one</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#about">About</a></li>
              <li class="dropdown"><a href="#menu"><span>Menu</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#specials">Specials</a></li>
                  <li><a href="#events">Events</a></li>
                  <li><a href="#chefs">Chefs</a></li>
                  <li><a href="#gallery">Gallery</a></li>
                </ul>
              </li>
              <li><a href="#gallery">Gallery</a></li>
              <li><a href="#chefs">Chefs</a></li>
              <li><a href="#events">Events</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="./signIn.php" class="book-a-table-btn scrollto d-none d-lg-flex">Sign In</a>
    </div>
  </header><!-- End Header -->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Welcome to <span>2 broke engineers</span></h1>
          <h2>We are Broke but the food is totally premium!</h2>
          <div class="btns">
            <a href="./signUp.php" class="btn-menu animated fadeInUp scrollto">Sign Up</a>
            <a href="./signIn.php" class="btn-book animated fadeInUp scrollto">Sign In</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://youtu.be/bGGLF9z08kE" class="glightbox play-btn"></a>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Home of the best handcrafted recipes in the twin cities!</h3>
            <p class="fst-italic">
              Welcome to 2 Broke Engineers, a unique dining experience created by two food-loving engineers who understand the value of a delicious meal at an affordable price.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> We are engineers who are passionate about the science behind cooking and creating flavorful dishes that satisfy both the body and soul.</li>
              <li><i class="bi bi-check-circle"></i> Our menu is carefully crafted to offer a wide range of options that cater to different tastes and dietary requirements, using fresh, locally sourced ingredients.</li>
              <li><i class="bi bi-check-circle"></i> From our signature burgers to our vegetarian and gluten-free options, we have something for everyone at 2 Broke Engineers, all at an affordable price.</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Why Us</h2>
          <p>Why Choose Our Restaurant</p>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Affordable & Delicious Food</h4>
              <p>Enjoy affordable yet delicious food made with fresh, locally sourced ingredients at 2 Broke Engineers. From burgers to vegetarian dishes, there's something for everyone.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Engineering & Culinary Expertise </h4>
              <p>Our unique blend of engineering and culinary expertise sets us apart, resulting in visually appealing and flavorful dishes.</p>
            </div>
          </div>
          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> Exceptional & memorable service</h4>
              <p>Our team is dedicated to providing exceptional service and a memorable dining experience, whether you dine in or order takeout.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-soups">Soups</li>
              <li data-filter=".filter-chicken">Chicken</li>
              <li data-filter=".filter-beef">Beef</li>
              <li data-filter=".filter-fish">Fish</li>
            </ul>
          </div>
        </div>
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
          <!-- starters  -->
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/seasame-chicken-toast.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Sesame Chicken Toast</a><span>999</span>
            </div>
            <div class="menu-ingredients">
              Chicken Mince on toast, coated with egg and sesame seeds, deep fried to perfection
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/chicken-drumsticks.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chicken Drumsticks</a><span>895</span>
            </div>
            <div class="menu-ingredients">
              Mince Fried Chicken drumsticks, seasoned with chinese spices coated in our house made batter
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/stuffed-chili-chicken.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Stuffed Chilli Chicken</a><span>950</span>
            </div>
            <div class="menu-ingredients">
              Our super delicios chicken stuffed with chillies and cheese butter fried.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/bbq-honey-wing.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">BBQ Honey Wing</a><span>750</span>
            </div>
            <div class="menu-ingredients">
              Crispy Chicken Wings with BBQ honey sauce
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/nachos.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Nachos</a><span>750</span>
            </div>
            <div class="menu-ingredients">
              Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/maxican-loaded-fries.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Maxican Loaded Fries</a><span>650</span>
            </div>
            <div class="menu-ingredients">
              French fries loaded with our home made ranch sauce, salsa sauce and minced beef
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/dumpling.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Dumplings</a><span>899</span>
            </div>
            <div class="menu-ingredients">
              Juicy Dumplings with chicken mince and vegetables
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/cheesy-chicken-strips.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Cheesy Chicken Strips</a><span>750</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/pepperoni-and-cheese-fries.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Pepperoni And Cheese Fries</a><span>699</span>
            </div>
            <div class="menu-ingredients">
              What's better when they come with cheese and pepperoni.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/dynamite-prawns.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Dynamite Prawns</a><span>1450</span>
            </div>
            <div class="menu-ingredients">
              Butter Fried Prawns tossed in a special dynamite sauce you haven't tasted before
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/img/menu/french-fries.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">French Fries</a><span>400</span>
            </div>
            <div class="menu-ingredients">
            </div>
          </div>
          <!-- soups  -->
          <div class="col-lg-6 menu-item filter-soups">
            <img src="assets/img/menu/be-special-soup.JPG" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">2BE Special Soup</a><span>450/1050</span>
            </div>
            <div class="menu-ingredients">
              The Best!
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-soups">
            <img src="assets/img/menu/hot-and-sour-soap.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Hot and Sour Soup</a><span>399/1050</span>
            </div>
            <div class="menu-ingredients">
              Thick white soup with chicken and seasoned vegetables
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-soups">
            <img src="assets/img/menu/chef-special-soup.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chef Special Soup</a><span>399/1050</span>
            </div>
            <div class="menu-ingredients">
              Super delicious thick soup with chicken, seasonal vegetable and peanuts
              <!-- Super delicious thick soup with noodles, chicken, prawns, seasonal vegetables, white and black mushrooms. -->
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-soups">
            <img src="assets/img/menu/noodle-soup.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Noodle Soup</a><span>450/1050</span>
            </div>
            <div class="menu-ingredients">
              Super Delicious thick soup with noodles, chicken, prawns, seasonal vegetables, while and black mushrooms.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-soups">
            <img src="assets/img/menu/19B-soup.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">19B Soup</a><span>450/1050</span>
            </div>
            <div class="menu-ingredients">
              Thick Soup with chicken, prawns, seasonal vegetables and black mushroom.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-soups">
            <img src="assets/img/menu/thai-clear-soup.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Thai Clear Soup</a><span>399/1050</span>
            </div>
            <div class="menu-ingredients">
              Clear soup with chicken roasted rice and green chillies.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-soups">
            <img src="assets/img/menu/chicken-corn-soup.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chicken Corn Soup</a><span>399/1050</span>
            </div>
            <div class="menu-ingredients">
              Minced chicken and sweet corns, cooked in a thick chicken broth.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-soups">
            <img src="assets/img/menu/manchow-soup.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Manchow Soup</a><span>399/1050</span>
            </div>
            <div class="menu-ingredients">
            </div>
          </div>
          <!-- Chicken family Serving -->
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/crazy-chicken.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Crazy Chicken</a><span>1199</span>
            </div>
            <div class="menu-ingredients">
              Chicken with thai chillies and seasonal vegetable with just the right amount of sauce in it.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/chicken-cashewnut.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chicken Cashewnut</a><span>1250</span>
            </div>
            <div class="menu-ingredients">
              Stir fried chicken in a delicious sauce with Cashewnut and seasonal vegetables.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/chicken-chili-dry.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Chicken Chilli Dry</a><span>1199</span>
            </div>
            <div class="menu-ingredients">
              Spicy fried chicken with green chillies, green onion and red onion
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/szechuan-chicken.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Szechuan Chicken</a><span>1199</span>
            </div>
            <div class="menu-ingredients">
              Stir Fried Chicken in a spicy Szechuan sauce with chopped vegetables.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/dragon-chicken.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Dragon Chicken</a><span>1199</span>
            </div>
            <div class="menu-ingredients">
              Chicken fried and cooked in a delicious sweet and spicy sauce.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/frinco-fried.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Frinco Fried Chicken</a><span>1250</span>
            </div>
            <div class="menu-ingredients">
              Fried chicken with an imported capsicum in our delicious sauce.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/kungpao-chicken.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Kungpao Chicken</a><span>1250</span>
            </div>
            <div class="menu-ingredients">
              Stir fried chicken with roasted peanuts and seasonal vegetable cooked in a delicious brown sauce.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/garlic-chicken.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Garlic Chicken</a><span>1199</span>
            </div>
            <div class="menu-ingredients">
              Stir Fried Chicken in our Chef's special garlic sauce
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/cherry-chilli-chicken.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Cherry Chilli Chicken</a><span>1250</span>
            </div>
            <div class="menu-ingredients">
              Stir Fried Chicken cooked in a delicious sauce of tomatoes, cherries and sesame oil.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/sesame-honey-chicken.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Sesame Honey Chicken</a><span>1199</span>
            </div>
            <div class="menu-ingredients">
              Chicken tossed in a delicious honey sauce, topped with sesame seeds.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/three-seasoned-chicken.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Three Seasoned Chicken</a><span>1199</span>
            </div>
            <div class="menu-ingredients">
              Stir fried chicken and seasonal vegetables cooked in delicious brown sauce.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/manchurian-chicken.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Manchurian Chicken</a><span>1199</span>
            </div>
            <div class="menu-ingredients">
              Stir fried chicken with garlic and ginger, cooked in a delicious tomato sauce.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/flaming-chicken.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Flaming Chicken</a><span>1199</span>
            </div>
            <div class="menu-ingredients">
              Stir fried chicken coated in butter, button mushrooms, seasonal vegetable and cherries cooked in a mild sauce.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-chicken">
            <img src="assets/img/menu/thai-coconut-chicken.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Thai Coconut Chicken</a><span>1250</span>
            </div>
            <div class="menu-ingredients">
              Cooked in a coconut milk, chicken with vegetables and sauces.
            </div>
          </div>
          <!-- beef  -->
          <div class="col-lg-6 menu-item filter-beef">
            <img src="assets/img/menu/crispy-beef-chili-dry.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Crispy Beef Chili Dry</a><span>1499</span>
            </div>
            <div class="menu-ingredients">
              Crispy Beef glazed in our spicy sauce with green chillies and onions.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-beef">
            <img src="assets/img/menu/broke-special-beef.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Broke Special Beef</a><span>1499</span>
            </div>
            <div class="menu-ingredients">
              Crispy Beef glazed in our special sauce.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-beef">
            <img src="assets/img/menu/beef-chilli-dry.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Beef Chilli Dry</a><span>1550</span>
            </div>
            <div class="menu-ingredients">
              Stir fried beef glazed in our special sauce with green chillies and onions.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-beef">
            <img src="assets/img/menu/kungao-beef.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Kungao Beef</a><span>1499</span>
            </div>
            <div class="menu-ingredients">
              Stri fried beef with roasted peanuts and seasonal vegetables cooked in a delicious brown sauce.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-beef">
            <img src="assets/img/menu/honey-glazed-beef.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Honey Glazed Beef</a><span>1499</span>
            </div>
            <div class="menu-ingredients">
              Butter fried beef glazed in our delicious honey sauce.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-beef">
            <img src="assets/img/menu/mongolian-beef.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mongolian Beef</a><span>1499</span>
            </div>
            <div class="menu-ingredients">
              Stir fried beef tossed in ginger and green onions glazed in a dark brown sauce.
            </div>
          </div>
          <!-- fish -->
          <div class="col-lg-6 menu-item filter-fish">
            <img src="assets/img/menu/fish-chilli-dry.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Fish Chilli Dry</a><span>1999</span>
            </div>
            <div class="menu-ingredients">
              Stir fried fish seasoned wtih green chillies, green onions, and red onions.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-fish">
            <img src="assets/img/menu/szechuan-fish.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Szechuan Fish</a><span>1999</span>
            </div>
            <div class="menu-ingredients">
              Stir fried fish with seasoning vegetables and round chilliess in a spicy sauce.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-fish">
            <img src="assets/img/menu/sweet-and-sour-fish.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Sweet and Sour Fish</a><span>1999</span>
            </div>
            <div class="menu-ingredients">
              Stir fried fish with seasonal vegetables and pineapples in a sweet and sour fish.
            </div>
          </div>
          <div class="col-lg-6 menu-item filter-fish">
            <img src="assets/img/menu/crispy-fried-fish-whole.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Mongolian Beef</a><span>2999</span>
            </div>
            <div class="menu-ingredients">
              Crispy fried whole fish in a hot and spicy sauce with green onion, baby corn and button mushrooms.
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Menu Section -->
    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Specials</h2>
          <p>Check Our Specials</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Spaghetti Aglio e Olio </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Vegetable Stir-Fry</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Lentil Soup</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Shakshuka </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Quesadillas </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Spaghetti Aglio e Olio</h3>
                    <p class="fst-italic">This classic Italian dish is simple yet delicious. Cook spaghetti, sauté garlic and red pepper flakes in olive oil, and toss the cooked pasta with the garlic and oil. You can also add some grated parmesan cheese on top.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-1.jpg" alt="" class="img-fluid" style="border-radius: 50%;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Vegetable Stir-Fry </h3>
                    <p class="fst-italic"> A stir-fry is a great way to use up any veggies you have in your fridge. Chop up your veggies, sauté them in a pan with oil, and season with soy sauce and ginger. </p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-2.jpg" alt="" class="img-fluid" style="border-radius: 50%;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Lentil Soup</h3>
                    <p class="fst-italic"> Lentils are a great source of protein and are inexpensive to buy. Cook lentils with chopped vegetables, garlic, and herbs for a hearty and filling soup. You can also add some croutons or bread on the side.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-3.jpg" alt="" class="img-fluid" style="border-radius: 50%;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Shakshuka</h3>
                    <p class="fst-italic">This is a Mediterranean dish made with eggs poached in a spicy tomato sauce. Saute onions, garlic, and tomatoes in a pan with cumin and paprika, then crack eggs into the sauce and cook until the whites are set but the yolks are still runny. Serve with crusty bread.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-4.jpg" alt="" class="img-fluid" style="border-radius: 50%;">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3>Quesadillas</h3>
                    <p class="fst-italic">You can make quesadillas with just about anything! Just fill a tortilla with cheese, veggies, and/or meat, and cook in a pan until the cheese is melted and the tortilla is crispy. Serve with salsa and sour cream.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/specials-5.jpg" alt="" class="img-fluid" style="border-radius: 50%;">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Specials Section -->
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Events</h2>
          <p>Organize Your Events in our Restaurant</p>
        </div>
        <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Birthday Parties</h3>
                  <div class="price">
                    <p><span>$189</span></p>
                  </div>
                  <p class="fst-italic">
                    Looking to throw a memorable birthday party without breaking the bank? Look no further than 2 Broke Engineers Restaurant! With a budget of just $189, we can create a fun and festive atmosphere for your celebration.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> First, let's start with decorations. We'll set the mood with colorful balloons, streamers, and a personalized banner wishing the birthday guest a happy birthday. </li>
                    <li><i class="bi bi-check-circled"></i> Next, let's talk about food. Our restaurant offers a variety of delicious and affordable menu options, including pizzas, pastas, sandwiches, and more. </li>
                    <li><i class="bi bi-check-circled"></i> Finally, we'll add some fun and games to the party. We can organize activities such as trivia games, karaoke, or even a dance-off to get everyone moving and laughing. </li>
                  </ul>
                  <p>
                    With our affordable birthday party package, you can rest assured that your celebration will be a hit without breaking the bank. Contact us today to start planning your perfect party at 2 Broke Engineers Restaurant!
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Private Parties</h3>
                  <div class="price">
                    <p><span>$290</span></p>
                  </div>
                  <p class="fst-italic">
                    Looking to throw a memorable birthday party without breaking the bank? Look no further than 2 Broke Engineers Restaurant! With a budget of just $290, we can create a fun and festive atmosphere for your celebration.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> Our affordable birthday party package includes colorful balloons, streamers, and a personalized banner to set the mood. </li>
                    <li><i class="bi bi-check-circled"></i> Our restaurant offers a variety of delicious and affordable menu options, including pizzas, pastas, sandwiches, and more. </li>
                    <li><i class="bi bi-check-circled"></i> And of course, no birthday party is complete without a cake! We can provide a delicious and beautifully decorated cake for the guest of honor.</li>
                  </ul>
                  <p>
                    At 2 Broke Engineers Restaurant, we believe that every celebration should be special and stress-free. Contact us today to start planning your perfect party with our affordable birthday party package!
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="row event-item">
                <div class="col-lg-6">
                  <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content">
                  <h3>Custom Parties</h3>
                  <div class="price">
                    <p><span>$99</span></p>
                  </div>
                  <p class="fst-italic">
                    Looking to add a personal touch to your next party without breaking the bank? 2 Broke Engineers Restaurant has got you covered! With a budget of just $99, we can help you create a custom party decoration package that will make your celebration truly special.
                  </p>
                  <ul>
                    <li><i class="bi bi-check-circled"></i> We can work with you to design a personalized banner, balloons, and streamers to match your theme and color scheme. </li>
                    <li><i class="bi bi-check-circled"></i> Our photo booth area with customizable backdrops and props is perfect for capturing all the special moments of the day.</li>
                    <li><i class="bi bi-check-circled"></i> In addition to decorations, we can also provide delicious and affordable food options that cater to your specific taste and budget.</li>
                  </ul>
                  <p>
                    At 2 Broke Engineers Restaurant, we believe that every celebration should be as unique and special as the people we are celebrating. Contact us today to start designing your custom party decoration package and make your celebration one-of-a-kind!
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Events Section -->
    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>
        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" name="date" class="form-control" id="date" placeholder="Date" data-rule="minlen:4" data-msg="Please enter at least 4 chars" requried>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="text" class="form-control" name="time" id="time" placeholder="Time" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group mt-3">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" id="message" placeholder="Message"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button type="submit" onclick="openPopup()">Book a Table</button></div>
          <div class="popup" id="popup">
            <img src="/assets/img/tick.png" alt="">
            <h2>Thank you!</h2>
            <p>Your table is booked successfully</p>
            <button type="button" onclick="closePopup()">Ok</button>
          </div>
        </form>
      </div>
    </section><!-- End Book A Table Section -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I had an amazing time at 2 Broke Engineers Restaurant! The food was delicious and the service was exceptional. The cozy atmosphere and affordable prices make it the perfect spot for a night out with friends.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Muhammad Ahmed</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I highly recommend 2 Broke Engineers Restaurant for anyone looking for a great dining experience on a budget. The menu has a variety of options, and the staff are always friendly and welcoming. It's one of my favorite spots in town! <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Raza</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  2 Broke Engineers Restaurant is a hidden gem! The food is consistently delicious, and the prices are very reasonable. I love the cozy atmosphere and friendly staff. It's the perfect spot for a casual date night or a catch-up with friends. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Javaid Sajjad</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I recently hosted a party at 2 Broke Engineers Restaurant, and it was fantastic! The staff were extremely accommodating, and the custom decoration package they put together was perfect for our theme. Everyone loved the food, and the photo booth area was a big hit. I highly recommend this restaurant for any event! <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Muhammad Ijaz</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  I visit 2 Broke Engineers Restaurant regularly, and I am never disappointed. The pizzas are always fresh and tasty, and the drinks menu has a great selection. The service is top-notch, and the prices are unbeatable. I recommend this restaurant to anyone looking for a casual dining experience. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>Muhammad Arslan</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Some photos from Our Restaurant</p>
        </div>
      </div>
      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-0">
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Gallery Section -->
    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Chefs</h2>
          <p>Our Proffesional Chefs</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Master Chef</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Patissier</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Chefs Section -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>
      </div>
      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.6255640860763!2d73.0514369743221!3d33.71863657328439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfdd49bcd119%3A0x5e95e59e97744b09!2s2%20Broke%20Engineers!5e0!3m2!1sen!2sus!4v1683541340385!5m2!1sen!2sus" frameborder="0" allowfullscreen></iframe>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p> F-7 Jinnah Super Market</p>
              </div>
              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  12:00 AM - 12:00 PM
                </p>
              </div>
              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>brokeEngineer2@gmail.com</p>
              </div>
              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p> +92 51 8467258</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name1" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email1" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" id="message1" required></textarea>
              </div>
              <div class="text-center"><button type="submit" onclick="openPopup1()">Send Message</button></div>
              <div class="popup1" id="popup1">
                <img src="/assets/img/tick.png" alt="">
                <h2>Thank you!</h2>
                <p>Your message is send successfully</p>
                <button type="button" onclick="closePopup1()">Ok</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>2 broke engineers</h3>
              <p>
                F-7 Jinnah Super Market
                <br>
                Islamabad, Pakistan<br><br>
                <strong>Phone:</strong> +92 51 8467258<br>
                <strong>Email:</strong> brokeEngineer2@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#menu">Menu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#specials">Specials</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#events">Events</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Menu</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#chefs">Chefs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#specials">Speciality</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#events">Events</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">All</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Enter your email and Subscribe so we will inform you about the latest offers</p>
            <form action="" method="post">
              <input type="email" name="email" required>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2 broke engineers</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Afshan Yasmeen</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    let popup = document.getElementById("popup");
    function openPopup() {
      var name = document.getElementById("name");
      var email = document.getElementById("email");
      var phone = document.getElementById("phone");
      var date = document.getElementById("date");
      var time = document.getElementById("time");
      var people = document.getElementById("people");
      if (date.value === "")
        alert("Please enter the date");
      if (name.value !== "" && email.value !== "" && phone.value !== "" && date.value !== "" && date.value !== "" && time.value !== "" && people.value !== "") {
        popup.classList.add("open-popup");
      }
    }
    function closePopup() {
      popup.classList.remove("open-popup");
      window.location.href = "#hero";
    }
    let popup1 = document.getElementById("popup1");
    function openPopup1() {
      var name = document.getElementById("name1");
      var email = document.getElementById("email1");
      var subject = document.getElementById("subject");
      var message1 = document.getElementById("message1");
      if (message1.value === "")
        alert("Please enter the message");
      if (name.value !== "" && email.value !== "" && subject.value !== "") {
        popup1.classList.add("open-popup1");
      }
    }
    function closePopup1() {
      popup1.classList.remove("open-popup1");
      window.location.href = "#hero";
    }
  </script>
</body>
</html>