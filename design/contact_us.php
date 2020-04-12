<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>About us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
              <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sign_up.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="log_in.php">Sign In</a>
                </li>
              </ul>
            </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-10">
                    <br><br>
                    <h1 style="color:rgba(255,255,255,0.5)">LIVE SUPPORT</h1>
                    <h6 style="color:rgba(255,255,255,0.5)">24 hours|7 days a week|365 days a year Live Technical Support</h6>
                    <p style="color:rgba(255,255,255,0.5)">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                    The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages 
                    of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't 
                    look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing 
                    hidden in the middle of text.</p>
                </div>
            <div class="row">
                <div class="col-sm-10">
                    <h1 style="color:rgba(255,255,255,0.5)">CONTACT US</h1>
                    <form>
                        <label for="name" style="color:rgba(255,255,255,0.5)">Name:</label><br>
                        <input type="text" name="name" id="name"><br>
                        <label for="email" style="color:rgba(255,255,255,0.5)">Email:</label><br>
                        <input type="text" name="email" id="email"><br>
                        <label for="mess" style="color:rgba(255,255,255,0.5)">Message:</label><br>
                        <textarea id='mess' rows="4" cols="40"></textarea>
                    </form>
                </div>
                <div class="col-sm-2">
                    <h1 style="color:rgba(255,255,255,0.5)">Company Information</h1>
                    <p style="color:rgba(255,255,255,0.5)">New York, NY 10012, US<br>Email: info@example.com<br>Phone: + 01 234 567 88<br>Fax: + 01 234 567 89</p>
                </div>
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
                    <a style="color:rgba(255,255,255,0.5)" href="about_us.html!">About us</a>
                </p>
                <p>
                  <a style="color:rgba(255,255,255,0.5)" href="#!">Contact us</a>
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
