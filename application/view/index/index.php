<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo Config::get('SITE_NAME'); ?> - Website</title>
        <!-- Bootstrap core CSS -->
        <link href="<?php echo Config::get('URL'); ?>show/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom fonts for this template -->
        <link href="<?php echo Config::get('URL'); ?>show/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo Config::get('URL'); ?>css/custom.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
        <!-- Custom styles for this template -->
        <link href="<?php echo Config::get('URL'); ?>css/agency.min.css" rel="stylesheet">
    </head>
    <body id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"> <?php echo Config::get('SITE_NAME'); ?> </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#aboutUs">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#portfolio">Competitions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#howto">How To</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
        <header class="masthead">
            <div class="container">
                <div class="intro-text">
                    <div class="intro-lead-in">Welcome To Unlimited Competition!</div>
                    <div class="intro-heading">It's Nice To Meet You</div>
                    <a class="btn btn-xl js-scroll-trigger" href="#aboutUs">Tell Me More</a>
                </div>
            </div>
        </header>
        <!-- About Us -->
        <section id="aboutUs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">About Us</h2>
                        <p class="text-muted">We believe that everyone should have the opportunity to achieve their dreams:  the aspirations of owning a car, a new phone, and other cool stuff. Being in control of their destiny, and making a positive difference in the financial future of themselves and others with this great oportunity !</p>
                    </div>
                </div>
            </div>
        </section> 
        <!-- Competitions -->
        <section class="bg-light" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Competitions</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo Config::get('URL'); ?>img/portfolio/01-thumbnail.jpg" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>BMV 530</h4>
                            <p class="text-muted">Illustration</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img class="img-fluid" src="<?php echo Config::get('URL'); ?>img/portfolio/02-thumbnail.jpg" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>Iphone 7 Plus</h4>
                            <p class="text-muted">Graphic Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Register -->
        <section id="register">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Register in competition</h2>
                        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    </div>
                </div>
                <!-- Register Button --> 
                <div class="col-lg-12 text-center">
                    <div id="success"></div>
                    <a class="portfolio-link" data-toggle="modal" href="#RegisterPopOutWindow">
                        <button id="registerButton" class="btn btn-xl" type="submit" >Register</button>
                    </a>
                </div>
            </div>
        </div>
    </section> 
    <!-- Contact -->
    <!--  <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-xl" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section> 
    -->
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- RegisterPopOutWindow -->

    <div class="portfolio-modal modal fade" id="RegisterPopOutWindow" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Enter the Competition.</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <!-- <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt=""> -->
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
       
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="registerForm" name="sentMessage" novalidate action="index.php" method="post">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input class="form-control" name="name" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                                                        <p class="help-block text-danger"></p>
                                                    </div>
                                                </div>

                                                <div class="clearfix"></div>
                                                <div class="col-lg-12 text-center">
                                                    <div id="success"></div>
                                                    <!-- <button  class="btn btn-xl" type="submit" >Register</button> -->
                                                    <input id="registerBoxButton" type="submit"  class="btn btn-xl"  value="Register">
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-lg-12 text-center">
                                        <div id="success"></div>

                                    </div>
                                    <button id = "closeButton" class="btn btn-primary text-center" data-dismiss="modal" type="button">
                                        <i class="fa fa-times"></i>
                                        Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap core JavaScript -->
        <script src="<?php echo Config::get('URL'); ?>show/jquery/jquery.min.js"></script>
        <script src="<?php echo Config::get('URL'); ?>show/popper/popper.min.js"></script>
        <script src="<?php echo Config::get('URL'); ?>show/bootstrap/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="<?php echo Config::get('URL'); ?>show/jquery-easing/jquery.easing.min.js"></script>

        <!-- Contact form JavaScript -->
        <script src="<?php echo Config::get('URL'); ?>js/jqBootstrapValidation.js"></script>
        <script src="<?php echo Config::get('URL'); ?>js/register.js"></script>

        <!-- Custom scripts for this template -->
        <script src="<?php echo Config::get('URL'); ?>js/agency.min.js"></script>

</body>

</html>
