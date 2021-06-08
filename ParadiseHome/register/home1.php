<?php
session_start();
?>
<?php

require("config.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="register/style1.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YouApiKeyHere"></script>
    <script src="/dist/location-picker.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>

        <div class="navbar navbar-inverse" id="nav">
          <a href="#" class="navbar-brand" style="text-align:center">PARADISE HOME</a>

          <div class="navbar-header">
              <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
              <div class="alert alert-success">
                <strong>You have successfully logged in!</strong>
                <?php print "<strong> Welcome, "   .$_SESSION['userid']. "</strong>";?>

             </div>

          </div>
                <div class="container-fluid" id="navcont">
                    <div class="row">
                        <div class="col-lg-12">

                           <div class="navbar-collapse collapse" id="mobile_menu">
                             <ul class="nav navbar-nav">
                                 <li class="active"><a href="home.php">Home</a></li>
                                 <li><a href="aboutus.html">Why Us?</a></li>
                                 <li><a href="privatehouse.html">Private Houses</a></li>
                                 <li><a href="apartment.html">Apartments</a></li>
                                 <li><a href="contact.html">Contact Us</a></li>
                             </ul>

                                <ul class="nav navbar-nav navbar-right">

                                    <button type="button" class="btn btn-success"><a href="profile.php">Profile</button>
                                    <button type="button" class="btn btn-warning"> <a href="logout.php">Logout</a></button>



                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav navbar-nav">
                        <li>

                            <form action="" class="navbar-form">
                                <div class="form-group">
                                  <div class="input-group" style="length:500px; width:1000px; padding: 45px; left:20%">
                                      <input type="search" name="search" id="" placeholder="Search Your Paradise Nearby..." class="form-control">

                                      <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>


                                  </div>
                                </div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12096.86506441031!2d-73.75954175!3d40.7132554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e6!4m0!4m0!5e0!3m2!1sen!2sus!4v1622008296559!5m2!1sen!2sus" width="1430" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </form>

                        </li>
                    </ul>
                </div>

              </div>


              <div class="container my-4">

          <hr class="my-4">
          <h2>Get your paradise anywhere you want</h2>
          <br>

          <!--Carousel Wrapper-->
          <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
              <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
              <a class="btn-floating" href="#multi-item-example" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
              <li data-target="#multi-item-example" data-slide-to="1"></li>
              <li data-target="#multi-item-example" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

              <!--First slide-->
              <div class="carousel-item active">

                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <img class="card-img-top" height="350px" width="350px" src="assets/aprt1.jpg" alt="Card image cap">
                      <div class="card-body">
                        <h4 class="card-title">1 Bedroom House</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                          sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                        <a class="btn btn-primary" href="privatehouse.html">Explore</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top" height="350px" width="350px" src="assets/multhome.jpg" alt="Card image cap">

                      <div class="card-body">
                        <h4 class="card-title">2 Bedroom House</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                          sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                        <a class="btn btn-primary" href="privatehouse.html">Explore</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top" height="350px" width="350px" src="assets/home3.jpg" alt="Card image cap">

                      <div class="card-body">
                        <h4 class="card-title">3 bedroom House</h4>
                        <p class="card-text"><p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                          sunt in culpa qui officia deserunt mollit anim id est laborum..</p></p>
                        <a class="btn btn-primary" href="privatehouse.html">Explore</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!--/.First slide-->

              <!--Second slide-->
              <br>
              <br>
              <div class="carousel-item">

                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <img class="card-img-top" height="350px" width="350px" src="assets/home4.jpg" alt="Card image cap">

                      <div class="card-body">
                        <h4 class="card-title">1 bedroom Apartments</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                          sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                        <a class="btn btn-primary" href="apartment.html">Explore</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top" height="350px" width="350px" src="assets/home5.jpg" alt="Card image cap">

                      <div class="card-body">
                        <h4 class="card-title">2 bedroom Apartments</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                          sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                        <a class="btn btn-primary" href="apartment.html">Explore</a>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-4 clearfix d-none d-md-block">
                    <div class="card mb-2">
                      <img class="card-img-top" height="350px" width="350px" src="assets/home6.jpg" alt="Card image cap">

                      <div class="card-body">
                        <h4 class="card-title">3 bedroom Apartments</h4>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                          sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                        <a class="btn btn-primary" href="apartment.html">Explore</a>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
              <!--/.Second slide-->



            </div>
            <!--/.Slides-->

          </div>
          <!--/.Carousel Wrapper-->


          </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<br>
<br>
<br>
<br>
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Paradise Home
          </h6>
          <p>
          There are many variations of passages of Lorem Ipsum available,
          but the majority have suffered alteration in some form,
          by injected humour, or randomised words which don't look even slightly believable.
          If you are going to use a passage of Lorem Ipsum,
          you need to be sure there isn't anything embarrassing hidden in the middle of text.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Houses</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Houses</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Apartments</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Apartments</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Explore</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Booking</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">paradisehome.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

  </body>
</html>

<?php

mysqli_close($conn);

?>
