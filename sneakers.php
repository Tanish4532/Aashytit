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
    <div class="d-flex flex-row bd-highlight mb-3">
        <div class="p-2 bd-highlight">
            <div class="item1">
                
                <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-interval="10000">
                        <img src="sneakers1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item" data-interval="2000">
                        <img src="sport1.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="sandals1.png" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
        
            </div>
        </div>
        <div class="p-2 bd-highlight">
            <div class="contentsneakers">
                <h2 class="head1"><span class="badge uk-badge">50% off</span>Sneakers</h2>
            </div>
            <div class="price1">
                <h3 class="sneakersprice">Price: ₹499</h3>
            </div>
            <div class="tax1">
                <p class="texts">Inclusive of all taxes</p>
            </div>
            <div class="selectsize">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Size:</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                     
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                    </select>
                  </div>
            </div>
            <div class="d-flex flex-row bd-highlight ">
                <div class="p-2 bd-highlight">
                    <div class="buy">
                        <a href="checkout.html"class="btn btn-warning btn-lg">Buy Now</a>
                   
                    </div>
                   
                </div>
                <div class="p-2 bd-highlight">
                    <button class="btn btn-danger addToCart btn-md" data-product-id="9">
                        <i class="fas fa-cart-plus"></i>&nbsp;Add to Wishlist
                    </button>
                </div>
               
               
              </div>
              <div class="text2">
                <p class="info">Sold Directly by <b>Ashytit Pvt Limited</b></p>
            </div>
            <hr class="uk-divider-icon">
            <div class="d-flex flex-row bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <div class="delivery">
                        <i class="bi bi-truck">&nbsp;&nbsp;Delivery By 22nd Oct</i>
                    </div>
                </div>
                <div class="p-2 bd-highlight">
                    <div class="cash">
                        <i class="bi bi-cash-stack">Cash on Delivery</i>
                    </div>
                </div>
                
              </div>
            
           
           
           
        </div>
        <!--<div class="p-2 bd-highlight">Flex item 3</div>-->

      </div>
      <div class="container">
        <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Product Description
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas cumque ab similique illo distinctio pariatur labore ratione, aspernatur cupiditate quo quaerat animi, veniam tempore nemo iste minima voluptatibus aliquam perspiciatis?
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Return & Refund
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut soluta perferendis aliquam quo eius, nesciunt maxime est minus? Eaque odio atque voluptate perferendis est consequuntur illo nulla saepe in neque.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Know More
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                 Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, magnam rem voluptatibus, sequi mollitia deserunt maxime quaerat obcaecati in eos exercitationem. Tempora ipsa dolorum veritatis eius minus illo harum eum.
                </div>
              </div>
            </div>


            <div class="card">
                <div class="card-header" id="headingFour">
                  <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Brand Info
                    </button>
                  </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                   Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, magnam rem voluptatibus, sequi mollitia deserunt maxime quaerat obcaecati in eos exercitationem. Tempora ipsa dolorum veritatis eius minus illo harum eum.
                  </div>
                </div>
              </div>
              
              
      </div>
      <div class="simprods">
        <h2 class="headings">Similar Products</h2>
    </div>
    <div class="similaritems">
        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                
                <div class="uk-animation-toggle" tabindex="0">
                    
                    <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down">
                        
                        <img src="sneakers1.jpg">
                       
                        <h4>Sneakers</h4>
                        <p>Price:₹500</p>
                        <a href="">Check Details</a>
                    </div>
                </div>
            </div>
                
            <div class="p-2 bd-highlight">
                <div class="p-2 bd-highlight">
                    <div class="uk-animation-toggle" tabindex="0">
                        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down">
                            <img src="sneakers1.jpg">
                            <h4>Sports</h4>
                            <p>Price:₹500</p>
                            <a href="">Check Details</a>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 bd-highlight">
                <div class="p-2 bd-highlight">
                    <div class="p-2 bd-highlight">
                        <div class="uk-animation-toggle" tabindex="0">
                            <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down">
                                <img src="sneakers1.jpg">
                                <h4>Sports</h4>
                                <p>Price:₹500</p>
                                <a href="">Check Details</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 bd-highlight">
                <div class="p-2 bd-highlight">
                    <div class="uk-animation-toggle" tabindex="0">
                        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down">
                            <img src="sneakers1.jpg">
                            <h4>Sports</h4>
                            <p>Price:₹500</p>
                            <a href="">Check Details</a>
                           
                        </div>
                    </div>
                </div>
            </div>
          </div>
          
    </div>

    <div class="freq">
        <h2 class="headings2">Frequently Brought Together</h2>
    </div>
    <div class="frequent">
        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                <div class="uk-animation-toggle" tabindex="0">
                    <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down">
                        <img src="sneakers1.jpg">
                        <h4>Sneakers</h4>
                        <p>Price:₹500</p>
                        <a href="">Check Details</a>
                    </div>
                </div>
            </div>
                
            <div class="p-2 bd-highlight">
                <div class="p-2 bd-highlight">
                    <div class="uk-animation-toggle" tabindex="0">
                        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down">
                            <img src="sneakers1.jpg">
                            <h4>Sports</h4>
                            <p>Price:₹500</p>
                            <a href="">Check Details</a>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 bd-highlight">
                <div class="p-2 bd-highlight">
                    <div class="p-2 bd-highlight">
                        <div class="uk-animation-toggle" tabindex="0">
                            <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down">
                                <img src="sneakers1.jpg">
                                <h4>Sports</h4>
                                <p>Price:₹500</p>
                                <a href="">Check Details</a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-2 bd-highlight">
                <div class="p-2 bd-highlight">
                    <div class="uk-animation-toggle" tabindex="0">
                        <div class="uk-card uk-card-default uk-card-body uk-animation-scale-down">
                            <img src="sneakers1.jpg">
                            <h4>Sports</h4>
                            <p>Price:₹500</p>
                            <a href="">Check Details</a>
                           
                        </div>
                    </div>
                </div>
            </div>
          </div>
    </div>
    <div class="alert alert-success" role="alert">
        <div class="d-flex flex-row bd-highlight mb-3">
            <div class="p-2 bd-highlight">
                We would like to hear from you.
            </div>
            <div class="p-2 bd-highlight">
                <a href="#modal-example" uk-toggle>Give Us a feedback</a>

<!-- This is the modal -->
<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Feedback</h2>
        <form action=""method="POST">
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" class="form-control" id="user" placeholder="Your name" name="user" required>
              </div>

              <div class="form-group">
                <label for="exampleFormControlInput1">Email </label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Your Email"required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Phone Number</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Your Phone Number"required>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Your Feedback</label>
                <textarea class="form-control" id="message" rows="4"name="message"></textarea>
              </div>
              <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary" type="submit" name="submit">Save</button>
        </p>
        </form>
       
    </div>
</div>
            </div>
           
          </div>
        
      </div>

    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-6"></h1>
            </div>
        </div> <!-- End -->
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card ">
                    <div class="card-header">
                        <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                            <!-- Credit card form tabs -->
                            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                <li class="nav-item"> <a data-toggle="pill" href="#howtostyle" class="nav-link active "><i class="bi bi-border-style"></i>How To Style</a> </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#sizechart" class="nav-link "><i class="bi bi-border-style"></i>Size Chart</a> </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#description" class="nav-link "><i class="bi bi-clipboard-data"></i>Description</a> </li>
                            </ul>
                        </div> <!-- End -->
                        <!-- Credit card form content -->
                        <div class="tab-content">
                            <!-- credit card info-->
                            <div id="howtostyle" class="tab-pane fade show active pt-3">
                                
                                <!--<form role="form" onsubmit="event.preventDefault()">
                                    <div class="form-group"> <label for="username">
                                            <h6>Card Owner</h6>
                                        </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div>
                                    <div class="form-group"> <label for="cardNumber">
                                            <h6>Card number</h6>
                                        </label>
                                        <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid card number" class="form-control " required>
                                            <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group"> <label><span class="hidden-xs">
                                                        <h6>Expiration Date</h6>
                                                    </span></label>
                                                <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                    <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                </label> <input type="text" required class="form-control"> </div>
                                        </div>
                                    </div>
                                    <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                                </form>-->
                            </div>
                        </div> <!-- End -->
                        <!-- Paypal info -->
                        <div id="sizechart" class="tab-pane fade pt-3">
                            
                            <!--<h6 class="pb-2">Select your paypal account type</h6>
                            <div class="form-group "> <label class="radio-inline"> <input type="radio" name="optradio" checked> Domestic </label> <label class="radio-inline"> <input type="radio" name="optradio" class="ml-5">International </label></div>
                            <p> <button type="button" class="btn btn-primary "><i class="fab fa-paypal mr-2"></i> Log into my Paypal</button> </p>
                            <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                        </div>  End -->
                        <!-- bank transfer info -->
                        <div id="description" class="tab-pane fade pt-3">
                            
                            <!--<div class="form-group "> <label for="Select Your Bank">
                                    <h6>Select your Bank</h6>
                                </label> <select class="form-control" id="ccmonth">
                                    <option value="" selected disabled>--Please select your Bank--</option>
                                    <option>Bank 1</option>
                                    <option>Bank 2</option>
                                    <option>Bank 3</option>
                                    <option>Bank 4</option>
                                    <option>Bank 5</option>
                                    <option>Bank 6</option>
                                    <option>Bank 7</option>
                                    <option>Bank 8</option>
                                    <option>Bank 9</option>
                                    <option>Bank 10</option>
                                </select> </div>
                            <div class="form-group">
                                <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                            </div>
                            <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                        </div> End -->
                        <!-- End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
        
      <script src="main.js"></script>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['submit'])){
    $name=$_POST['user'];
    $emails=$_POST['email'];
    $mobile=$_POST['phone'];
    $feedback=$_POST['message'];
    $insertquery="insert into feedback (name,email,phone,message) values('$name','$emails','$mobile','$feedback')";
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



}
