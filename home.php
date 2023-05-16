<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: signin.html');
	exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >

<head>

  <link  href ="css1.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./css/styleecom.css">
  <link rel="stylesheet" href="./css/style-prefix.css">
  <link rel="stylesheet" href="./css/all.min.css">
  <link rel="stylesheet" href="./css/fontawesome.min.css">

  <title>Alema Super Market</title>
</head>

<body>
    <div class="header-main">

      <div class="container">

        <a href="Test2.html" class="header-logo">
          <img src="" alt="Alema's logo" width="120" height="36">
        </a>

        <div class="header-search-container">

          <input type="search" name="search" class="search-field" placeholder="Enter your product name...">

          <button class="search-btn">
           <a href="#"><i class="fas fa-sharp fa-light fa-magnifying-glass fa-beat" style="color: #199717;"></i></a> 
          </button>

        </div>

        <div class="header-user-actions">

          <button class="action-btn">
            <a href="cart.html"><i class="fas fa-light fa-shopping-cart" style="color: #199717;"></i></a> 
            <span class="count">2</span>
          </button>

          <p>Welcome back, <?=$_SESSION['name']?>!</p>
          <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
        </div>

    
    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <!--  <li class="menu-category">
            <a href="Test2.html" class="menu-title">Home</a>
          </li> -->

          <li class="menu-category">
            <a href="#" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">FOOD</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="TraditionalFood.html">Traditional</a>
              </li>

              <li class="dropdown-item">
                <a href="MOdernFood.html">Modern</a>
              </li>

              

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Beverage</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="Alchohol.html">Alcohol</a>
              </li>

              <li class="dropdown-item">
                <a href="SoftDrink.html">Soft Drinks</a>
              </li>

              
            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Electronics</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="ComputerAcces.html">Computer Accsseries</a>
              </li>

              <li class="dropdown-item">
                <a href="HomeRem.html">Home remaidal</a>
              </li>

              

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Furniture</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="OfficeFurn.html">Office</a>
              </li>

              <li class="dropdown-item">
                <a href="HomeFurn.html">Home</a>
              </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="Stationary.html" class="menu-title">Stationary</a>

          </li>

          <li class="menu-category">
            <a href="Sanitation.html" class="menu-title">Sanitation</a>

          
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Beauty</a>
              <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="TraditionalCloth.html">Men</a>
              </li>

              <li class="dropdown-item">
                <a href="ModernCloth.html">Women</a>
              </li>

             
            </ul>
            
          </li>
          
          <li class="menu-category">
            <a href="#" class="menu-title">Cloth</a>

            <ul class="dropdown-list">

              <li class="dropdown-item">
                <a href="TraditionalCloth.html">Traditional</a>
              </li>

              <li class="dropdown-item">
                <a href="ModernCloth.html">Modern</a>
              </li>

             
            </ul>
          </li>

        </ul>

      </div>

    </nav>

 <main>
   <!-- <div class="banner">

      <div class="container">

        <div class="slider-container has-scrollbar">

          <div class="slider-item">

            <img src="./4Kilo.jpg" alt="women's latest fashion sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending item</p>

              <h2 class="banner-title">Women's latest fashion sale</h2>

              <p class="banner-text">
                starting at Birr <b>20</b>.00
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./4Kilo.jpg" alt="modern sunglasses" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Trending accessories</p>

              <h2 class="banner-title">Modern sunglasses</h2>

              <p class="banner-text">
                starting at Birr <b>15</b>.00
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

          <div class="slider-item">

            <img src="./4Kilo.jpg" alt="new fashion summer sale" class="banner-img">

            <div class="banner-content">

              <p class="banner-subtitle">Sale Offer</p>

              <h2 class="banner-title">New fashion summer sale</h2>

              <p class="banner-text">
                starting aat Birr  <b>29</b>.99
              </p>

              <a href="#" class="banner-btn">Shop now</a>

            </div>

          </div>

        </div>

      </div>

    </div> -->

    <div class="banner-slider">
      <img class="slide" src="./img/4Kilo.jpg">
      <img class="slide" src="./img/unitylogo2.jpg">
      <img class="slide" src="./img/4Kilo.jpg">
    </div>
    
    <h2 class="title">New Products</h2>
        <div class="scrollable-product">

          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge angle pink">new</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <i id="myButton" class="fa fa-solid fa-cart-plus"></i>
                      <div id="message" class="hidden">
                        <div class="message-content">
                          <span class="message-text"><strong>Added to cart</strong></span>
                          <span class="cart-subtotal">Cart subtotal (1 item): 359.00</span>
                        </div>
                        <div class="button-group">
                          <i id="close-button">Close</i>
                          <a href="cart.html" id="cart-button">View cart</a>
                        </div>
                      </div>
                     <!-- <a href="" id="add-to-cart-button"><i class="fa fa-solid fa-cart-plus"></i></a>-->
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa-regular fa-star-half-stroke" style="color: #e2d003;"></i>
                    <i class="fa-regular fa-star-half-stroke" style="color: #e2d003;"></i>
                  </div>
      
                  <div class="price-box">
                    <p class="price">48.00 birr</p>
                    <del>75.00 birr</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge angle pink">new</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <i id="myButton" class="fa fa-solid fa-cart-plus"></i>
                      <div id="message" class="hidden">
                        <div class="message-content">
                          <span class="message-text"><strong>Added to cart</strong></span>
                          <span class="cart-subtotal">Cart subtotal (1 item): 359.00</span>
                        </div>
                        <div class="button-group">
                          <i id="close-button">Close</i>
                          <a href="cart.html" id="cart-button">View cart</a>
                        </div>
                      </div>
                     <!-- <a href="" id="add-to-cart-button"><i class="fa fa-solid fa-cart-plus"></i></a>-->
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa-regular fa-star-half-stroke" style="color: #e2d003;"></i>
                    <i class="fa-regular fa-star-half-stroke" style="color: #e2d003;"></i>
                  </div>
      
                  <div class="price-box">
                    <p class="price">48.00 birr</p>
                    <del>75.00 birr</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge angle pink">new</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <i id="myButton" class="fa fa-solid fa-cart-plus"></i>
                      <div id="message" class="hidden">
                        <div class="message-content">
                          <span class="message-text"><strong>Added to cart</strong></span>
                          <span class="cart-subtotal">Cart subtotal (1 item): 359.00</span>
                        </div>
                        <div class="button-group">
                          <i id="close-button">Close</i>
                          <a href="cart.html" id="cart-button">View cart</a>
                        </div>
                      </div>
                     <!-- <a href="" id="add-to-cart-button"><i class="fa fa-solid fa-cart-plus"></i></a>-->
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa-regular fa-star-half-stroke" style="color: #e2d003;"></i>
                    <i class="fa-regular fa-star-half-stroke" style="color: #e2d003;"></i>
                  </div>
      
                  <div class="price-box">
                    <p class="price">48.00 birr</p>
                    <del>75.00 birr</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge angle pink">new</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <i id="myButton" class="fa fa-solid fa-cart-plus"></i>
                      <div id="message" class="hidden">
                        <div class="message-content">
                          <span class="message-text"><strong>Added to cart</strong></span>
                          <span class="cart-subtotal">Cart subtotal (1 item): 359.00</span>
                        </div>
                        <div class="button-group">
                          <i id="close-button">Close</i>
                          <a href="cart.html" id="cart-button">View cart</a>
                        </div>
                      </div>
                     <!-- <a href="" id="add-to-cart-button"><i class="fa fa-solid fa-cart-plus"></i></a>-->
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa-regular fa-star-half-stroke" style="color: #e2d003;"></i>
                    <i class="fa-regular fa-star-half-stroke" style="color: #e2d003;"></i>
                  </div>
      
                  <div class="price-box">
                    <p class="price">48.00 birr</p>
                    <del>75.00 birr</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge angle pink">new</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <i id="myButton" class="fa fa-solid fa-cart-plus"></i>
                      <div id="message" class="hidden">
                        <div class="message-content">
                          <span class="message-text"><strong>Added to cart</strong></span>
                          <span class="cart-subtotal">Cart subtotal (1 item): 359.00</span>
                        </div>
                        <div class="button-group">
                          <i id="close-button">Close</i>
                          <a href="cart.html" id="cart-button">View cart</a>
                        </div>
                      </div>
                     <!-- <a href="" id="add-to-cart-button"><i class="fa fa-solid fa-cart-plus"></i></a>-->
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa-regular fa-star-half-stroke" style="color: #e2d003;"></i>
                    <i class="fa-regular fa-star-half-stroke" style="color: #e2d003;"></i>
                  </div>
      
                  <div class="price-box">
                    <p class="price">48.00 birr</p>
                    <del>75.00 birr</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
      </div><br><br>
      

      <h2 class="title">Disscount Items</h2>
        <div class="scrollable-product">

          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      
                      <i id="myButton" class="fa fa-solid fa-cart-plus"></i>
                      <div id="message" class="hidden">
                        <div class="message-content">
                          <span class="message-text"><strong>Added to cart</strong></span>
                          <span class="cart-subtotal">Cart subtotal (1 item): 359.00</span>
                        </div>
                        <div class="button-group">
                          <i id="close-button">Close</i>
                          <a href="cart.html" id="cart-button">View cart</a>
                        </div>
                      </div>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                  </div>
      
                  <div class="price-box">
                    <p class="price">48.00 birr</p>
                    <del>75.00 birr</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./img/4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <i id="myButton" class="fa fa-solid fa-cart-plus"></i>
                      <div id="message" class="hidden">
                        <div class="message-content">
                          <span class="message-text"><strong>Added to cart</strong></span>
                          <span class="cart-subtotal">Cart subtotal (1 item): 359.00</span>
                        </div>
                        <div class="button-group">
                          <i id="close-button">Close</i>
                          <a href="cart.html" id="cart-button">View cart</a>
                        </div>
                      </div>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                  </div>
      
                  <div class="price-box">
                    <p class="price">48.00 birr</p>
                    <del>75.00 birr</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>

          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <a href=""><i class="fa fa-solid fa-cart-plus"></i></a>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                  </div>
      
                  <div class="price-box">
                    <p class="price">48.00 birr</p>
                    <del>75.00 birr</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <a href=""><i class="fa fa-solid fa-cart-plus"></i></a>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                  </div>
      
                  <div class="price-box">
                    <p class="price">48.00 birr</p>
                    <del>75.00 birr</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
      
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <a href=""><i class="fa fa-solid fa-cart-plus"></i></a>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                    <i class="fa fa-thin fa-star" style="color: #e2d003;"></i>
                  </div>
      
                  <div class="price-box">
                    <p class="price">48.00 birr</p>
                    <del>75.00 birr</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
      </div>

      <br><br>
      

      <h2 class="title">Disscount Items</h2>
        <div class="scrollable-product">

          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
      
                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
      
                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
      
                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
      
                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
      
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
      
                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
      </div>

      <br><br>
      

      <h2 class="title">Disscount Items</h2>
        <div class="scrollable-product">

          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
      
                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
      
                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
      
                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
      
                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
      
          <div class="Product-cont">
            <div class="product-grid">
      
              <div class="showcase">
      
                <div class="showcase-banner">
      
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                  <img src="./4Kilo.jpg" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
      
                  <p class="showcase-badge">15%</p>
      
                  <div class="showcase-actions">
      
                    <button class="btn-action">
                      <ion-icon name="heart-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="eye-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="repeat-outline"></ion-icon>
                    </button>
      
                    <button class="btn-action">
                      <ion-icon name="bag-add-outline"></ion-icon>
                    </button>
      
                  </div>
      
                </div>
      
                <div class="showcase-content">
      
                  <a href="#" class="showcase-category">jacket</a>
      
                  <a href="#">
                    <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                  </a>
      
                  <div class="showcase-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                    <ion-icon name="star-outline"></ion-icon>
                  </div>
      
                  <div class="price-box">
                    <p class="price">$48.00</p>
                    <del>$75.00</del>
                  </div>
      
                </div>
      
              </div>
            </div>
          </div>
         
      </div>
  </main>

  <footer>

  

    <div class="footer-nav">

      <div class="container">


        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Our Company</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Delivery</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Legal Notice</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Terms and conditions</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">About us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Secure payment</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">
        
          <li class="footer-nav-item">
            <h2 class="nav-title">Services</h2>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Prices drop</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">New products</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Best sales</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Contact us</a>
          </li>
        
          <li class="footer-nav-item">
            <a href="#" class="footer-nav-link">Sitemap</a>
          </li>
        
        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Contact</h2>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <address class="content">
              419 State 414 Rte
              Beaver Dams, New York(NY), 14812, USA
            </address>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="call-outline"></ion-icon>
            </div>

            <a href="tel:+607936-8058" class="footer-nav-link">+251 9 12878022</a>
          </li>

          <li class="footer-nav-item flex">
            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <a href="mailto:example@gmail.com" class="footer-nav-link">Alema@gmail.com</a>
          </li>

        </ul>

        <ul class="footer-nav-list">

          <li class="footer-nav-item">
            <h2 class="nav-title">Follow Us</h2>
          </li>

          <li>
            <ul class="social-link">

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
              </li>

              <li class="footer-nav-item">
                <a href="#" class="footer-nav-link">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
              </li>

            </ul>
          </li>

        </ul>

      </div>

    </div>

    <div class="footer-bottom">

      <div class="container">

        <img src="./assets/images/payment.png" alt="payment method" class="payment-img">

        <p class="copyright">
          Copyright &copy; <a href="#">Alema</a> all rights reserved.
        </p>

      </div>

    </div>

  </footer>

  <script src="./main.js"></script>
</body>
</html>
