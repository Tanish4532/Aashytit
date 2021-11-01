<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ashytit</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="styles.css" />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit-icons.min.js"></script>
    <script src="JS/jquery-3.5.1.min.js"></script>
    <script src="JS/multislider.min.js"></script>
</head>

<body>
    <nav class="navi navbar sticky-top navbar-light navbar-expand-lg ">
        <a class="logo navbar-brand" href="#">Ashytit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


       <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <!--<a class="foot nav-link" href="#">Footwear <span class="sr-only">(current)</span></a>-->
                </li>
                <li class="nav-item">
                    <!--<a class="sum nav-link" href="summer.html">Summer Wear</a>-->
                </li>

                <li class="nav-item">
                    <!--<a class="win nav-link" href="winter.html">Winter Wear</a>-->
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="search form-control" id="myInput" type="text" placeholder="Search..">
                <a href="registration.html" class="acc btn btn-danger"><i class="bi bi-person"></i>Account</a>&nbsp;
                <a href="login.html" class="sign btn btn-success"><i class="bi bi-box-arrow-in-right"></i>&nbsp;Sign
          In</span></a>&nbsp;

                <div class="navbar-top">
                    <div>
                        <div class="shopping-cart">
                            <div class="sum-prices">
                                <!--Shopping cart logo-->
                                <i class="cart-shop fas fa-shopping-cart shoppingCartButton" onclick="openCart()" id="open-cart"></i>
                                <!--The total prices of products in the shopping cart -->
                                <h6 id="sum-prices"></h6>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="close-cart" class="hide">
                    <div class="producstOnCart">
                        <div class="overlay"></div>
                        <div class="top">
                            <button id="closeButton" onclick="closeCart()">
                <i class="fas fa-times-circle"></i>
              </button>
                            <h3>Cart</h3>
                        </div>
                        <ul id="buyItems">
                            <h4 class="empty">Your shopping cart is empty</h4>
                            <li class="buyItem">
                                <img src="">
                                <div>
                                    <h5 class="white">Products Name</h5>
                                    <h6 class="white">$199</h6>
                                    <div>
                                        <button class="button-minus" data-id="1">-</button>
                                        <span class="countOfProduct">1</span>
                                        <button class="button-plus" data-id="1">+</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- <button class="btn checkout hidden">Check out</button>-->
                        <a href="checkout.html"class="btn checkout hidden">Checkout</a>
                    </div>
                </div>


            </form>
        </div>
    </nav>
    
    <!--<section class="slider mt-3">

        <div class=" carouselss uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade">
            <ul class="uk-slideshow-items">
                <li>
                    <img src="image1.jpg" alt="" uk-cover />
                </li>
                <li>
                    <img src="image2.jpg" alt="" uk-cover />
                </li>
                <li>
                    <img src="image3.jpg" alt="" uk-cover />
                </li>
            </ul>

            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
        </div>

    </section>-->

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
            <div class="p-4 pt-5">
              <h1><a href="index.html" class="logo">Ashytit</a></h1>
        <ul class="list-unstyled components mb-5">
          <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" >Home</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
            <!--<li>
                <a href="#">Home 1</a>
            </li>
            <li>
                <a href="#">Home 2</a>
            </li>
            <li>
                <a href="#">Home 3</a>
            </li>-->
            </ul>
          </li>
          <li>
              <a href="#">About</a>
          </li>
          <li>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" >Men</a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <!--<li>
                <a href="#">Page 1</a>
            </li>
            <li>
                <a href="#">Page 2</a>
            </li>
            <li>
                <a href="#">Page 3</a>
            </li>-->
          </ul>
          </li>
          <li>
          <a href="#">Women</a>
          </li>
          <li>
          <a href="#">Unisex</a>
          </li>

          <li>
            <a href="#">Clearance</a>
            </li>

            <li>
                <a href="#">Sale</a>
                </li>

                <li>
                    <a href="#">Studio</a>
                    </li>
        </ul>

        <div class="mb-5">
                    <h3 class="h6">Follow Us On</h3>
                    <div class="icons">
                        <div class="icon1">
                            <a href=""class="insta"><i class="bi bi-instagram"></i>&nbsp;Instagram</a>
                        </div>
                        <div class="icon2">
                            <a href=""class="fb"><i class="bi bi-facebook"></i>&nbsp;Facebook</a>
                        </div>
                    </div>
                </div>

        <!--<div class="footer">
            <p><Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                      Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.</p>
        </div>-->

      </div>
    </nav>

    <!-- Page Content  -->
  <div id="content" class="p-4 p-md-5 pt-5">

    <h2 class="mb-4">
        <div class="sliders">
            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: scale">

                <ul class="uk-slideshow-items">
                    <li>
                        <a href=""><img src="sale1.jpg" alt="" uk-cover></a>
                    </li>
                    <li>
                        <a href=""><img src="sale2.jpg" alt="" uk-cover></a>
                    </li>
                    <li>
                        <a href=""><img src="sale3.jpg" alt="" uk-cover></a>
                    </li>
                </ul>
    
                <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    
            </div>
    
        </div>
        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <div class="poster mt-4">
                    <a href=""><img src="men.jpg"></a>
                </div>
            </div>
            <div class="p-2 bd-highlight">
                <div class="poster mt-4 ml-4">
                    <a href=""><img src="women1.png"></a>
                </div>
            </div>
            
          </div>

          <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <div class="poster mt-4">
                    <a href=""><img src="unisex2.jpg"></a>
                </div>
            </div>
            <div class="p-2 bd-highlight">
                <div class="poster mt-4 ml-4">
                    <a href=""><img src="unisex3.jpg"></a>
                </div>
            </div>
            
          </div>
        
    </h2>
   
    </div>
   
   
    <script src="main.js"></script>
    
</body>

</html>
