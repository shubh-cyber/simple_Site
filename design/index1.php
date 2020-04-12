<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo'Welcome'; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
     
    </head>
    <body style="background-color: black;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
            <a class="navbar-brand" href="#">Drivers Stop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <?php echo'<a class="nav-link" href="contact_us.php">Contact Us</a>'; ?>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../users/logout.php">Logout</a>
                </li>
                <li class="nav-item">
                    <p style="color:rgba(255,255,255,0.5); padding: 5px;margin-top: 1px;"> <?php session_start();
                    echo $_SESSION["name"];?></p>
                </li>
              </ul>
            </div>
        </nav>
        
            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img style="width:100%; height:500px;" src="../images/head5.jpg" alt="Los Angeles">
                  </div>
                  <div class="carousel-item">
                      <img style="width:100%; height:500px;" src="../images/head6_Fotor.jpg" alt="Chicago">
                  </div>
                  <div class="carousel-item">
                      <img style="width:100%; height:500px;" src="../images/head10_Fotor.png" alt="New York">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        <div class="container" style="color:rgba(255,255,255,0.5);">
            <div class="row" style="margin-top:10px;">
                <div class="col-sm-6">
                    <img style="width:100%; height:250px;" src="../images/head8_Fotor.jpg">
                </div>
                <div class="col-sm-5 col-sm-offset-1" style="margin-left:25px; margin-top: 50px;">
                    <h4>BASS YOU CAN FEEL</h4>
                    <p>ISK let's you feel your music with enhanced sensory bass that you can easily adjust.</p>
                    <form action="../users/btnclick.php" method="GET">
                        <button type="submit" class="btn btn-outline-light text-muted" name="on" value="on">SHOP NOW</button>
                    </form>  
                </div>
            </div>
        </div>
        <div class="container" style="color:rgba(255,255,255,0.5);">
            <div class="row" style="margin-top:10px;">
                 <div class="col-sm-5 col-sm-offset-1" style="margin-left:25px; margin-top: 50px;">
                    <h4>UNLEASH YOUR WORKOUT</h4>
                    <p>Be free with super-light, sweat-resistant, and secure wireless drivers that bring the noise when you're pushing your limits.</p>
                    <form action="../users/btnclick.php" method="GET">
                        <button type="submit" class="btn btn-outline-light text-muted" name="on" value="on">SHOP NOW</button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <img style="width:100%; height:250px;" src="../images/head4_Fotor.jpg">
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="page-footer font-small unique-color-dark">
            <div style="background-color: rgba(255,255,255,0.1);">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0" style="color:rgba(255,255,255,0.5)">Get connected with us on social networks!</h6>
                        </div>
                        <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!-- Facebook -->
                            <a class="fb-ic">
                                <i class="fab fa-facebook-f white-text mr-4" style="color:rgba(255,255,255,0.5)"> </i>
                            </a>
                        <!-- Twitter -->
                            <a class="tw-ic">
                            <i class="fab fa-twitter white-text mr-4" style="color:rgba(255,255,255,0.5)"> </i>
                            </a>
                        <!-- Google +-->
                            <a class="gplus-ic">
                            <i class="fab fa-google-plus-g white-text mr-4" style="color:rgba(255,255,255,0.5)"> </i>
                            </a>
                        <!--Linkedin -->
                            <a class="li-ic">
                            <i class="fab fa-linkedin-in white-text mr-4" style="color:rgba(255,255,255,0.5)"> </i>
                            </a>
                        <!--Instagram-->
                            <a class="ins-ic">
                            <i class="fab fa-instagram white-text" style="color:rgba(255,255,255,0.5)"> </i>
                            </a>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row-->
                </div>
          </div>

          <!-- Footer Links -->
          <div class="container text-center text-md-left mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
              <!-- Grid column -->
              <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold" style="color:rgba(255,255,255,0.5)">Company name</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p style="color:rgba(255,255,255,0.5)">Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,consectet adipisicing elit.</p>
              </div>
              <!-- Grid column -->
              <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold" style="color:rgba(255,255,255,0.5)">Information</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a style="color:rgba(255,255,255,0.5)" href="about_us.php">About us</a>
                </p>
                <p>
                  <?php echo'<a style="color:rgba(255,255,255,0.5)" href="contact_us.php">Contact us</a>'; ?>
                </p>
              </div>
              <!-- Grid column -->
              <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold" style="color:rgba(255,255,255,0.5)">My Account</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; color:rgba(255,255,255,0.5);">
                <p>
                    <a style="color:rgba(255,255,255,0.5)" href="sign_up.php">Sign in</a>
                </p>
                <p>
                    <a style="color:rgba(255,255,255,0.5)" href="log_in.php">Sign up</a>
                </p>
              </div>
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold" style="color:rgba(255,255,255,0.5)">Contact</h6>
                <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p style="color:rgba(255,255,255,0.5)">
                  <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                <p style="color:rgba(255,255,255,0.5)">
                  <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                <p style="color:rgba(255,255,255,0.5)">
                  <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                <p style="color:rgba(255,255,255,0.5)">
                  <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
              </div>
              <!-- Grid column -->
            </div>
            <!-- Grid row -->
          </div>
          <!-- Footer Links -->
          <!-- Copyright -->
          <div class="footer-copyright text-center py-3">© 2020 Copyright
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </body>
</html>