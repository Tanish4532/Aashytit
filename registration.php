<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aashrey</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="styles.css" />
    <!-- UIkit CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/css/uikit.min.css"
    />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.2/dist/js/uikit-icons.min.js"></script>
    <script src="file.js"></script>
  </head>

  <body>
    <nav class="navi navbar sticky-top navbar-light navbar-expand-lg ">
      <a class="logo navbar-brand" href="index.html">Ashytit</a>
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
    <div class="registration-form">
      <form action=""method="POST">
        <div class="form-icon">
          <span><i class="bi bi-person"></i></span>
        </div>

        <div class="form-group">
          <input
            type="text"
            class="form-control item"
            id="user"
            placeholder="Name"
            name="user"
          />
        </div>

        <div class="form-group">
          <input
            type="text"
            class="form-control item"
            id="username"
            placeholder="Username"
            name="username"
            required
          />
        </div>
       
        <div class="form-group">
          <input
            type="password"
            class="form-control item"
            id="password"
            placeholder="Password"
            name="password"
            required
          />
        </div>
        <div class="form-group">
          <input
            type="text"
            class="form-control item"
            id="email"
            placeholder="Email"
            name="email"
            required
          />
        </div>
        <div class="form-group">
          <input
            type="number"
            class="form-control item"
            id="phone"
            placeholder="Phone Number"
            name="phone"
            required
          />
        </div>
       
        <div class="form-group">
          <button type="submit" class="btn btn-block create-account"name="submit">
            Create Account
          </button>
        </div>
      </form>
      <div class="social-media">
        <h5>Sign up with social media</h5>
        <div class="social-icons">
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-google"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
        </div>
      </div>
    </div>
  </body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['user'];
    $usernames=$_POST['username'];
    $passwords=$_POST['password'];
    $emails=$_POST['email'];
    $mobile=$_POST['phone'];
    $insertquery="insert into account(name,username,pwd,email,phone) values('$name','$usernames','$passwords','$emails','$mobile')";
    $res=mysqli_query($con,$insertquery);
  if($res){
    ?>
    <script>
      alert("data inserted properly");
    </script>
    <?php
  }
  else{
    ?>
    <script>
      alert("data not inserted properly");
    </script>
    <?php
  }
}
?>





