<?php 
    session_start();
    include './dbconn.php';
    
    if(isset($_SESSION['login_email'])){
        header('location: home_after_login.php');
        exit();
    }else{
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Webpage Title -->
    <title>WebPage for Resume</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="./images/icon.png">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Sync</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="./home.php"><img src="./images/icon.png" style="height: 0%; width: 20%" alt="alternative"></a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#description">DESCRIPTION <span class="sr-only">(current)</span></a>
                    </li>
                    <!-- Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle page-scroll" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false">USER</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="./login.php"><span class="item-text">LOGIN</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="./signup.php"><span class="item-text">SIGNUP</span></a>

                        </div>
                    </li>
                    <!-- end of dropdown menu -->
                </ul>
            </div>
        </div>
        <!-- end of container -->
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>Resume Building Page</h1>
                        <p class="p-large p-heading">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, ratione! Incidunt atque necessitatibus consequatur distinctio. Cumque maiores consequuntur culpa beatae!</p>
                        <!-- <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>DOWNLOAD</a>
                        <a class="btn-solid-lg" href="#your-link"><i class="fab fa-google-play"></i>DOWNLOAD</a> -->
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="image-container">
                        <img class="img-fluid" src="images/7.png" alt="alternative">
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
        <div class="deco-white-circle-1">
            <img src="images/decorative-white-circle.svg" alt="alternative">
        </div>
        <!-- end of deco-white-circle-1 -->
        <div class="deco-white-circle-2">
            <img src="images/decorative-white-circle.svg" alt="alternative">
        </div>
        <!-- end of deco-white-circle-2 -->
        <div class="deco-blue-circle">
            <img src="images/decorative-blue-circle.svg" alt="alternative">
        </div>
        <!-- end of deco-blue-circle -->
        <div class="deco-yellow-circle">
            <img src="images/decorative-yellow-circle.svg" alt="alternative">
        </div>
        <!-- end of deco-yellow-circle -->
        <div class="deco-green-diamond">
            <img src="images/decorative-green-diamond.svg" alt="alternative">
        </div>
        <!-- end of deco-yellow-circle -->
    </header>
    <!-- end of header -->


    <!-- Description 1 -->
    <div id="description" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="./images/Resume 1.jpg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                </div>
                <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Resume 1</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam facere vero nihil perferendis hic fuga tempora suscipit quis incidunt esse.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Analyse and evaluate your current status and productivity</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Begin monitoring your day to day routine with Sync app</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">See the improved results in no more than a couple of weeks</div>
                            </li>
                        </ul>
                        <a href="./1st Resume form.php" class="btn-solid-reg popup-with-move-anim">Build Resume</a>
                    </div>
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of basic-1 -->
    <!-- end of description 1 -->


    <!-- Description 2 -->
    <div id="description" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-container">
                        <h2>Resume 2</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam facere vero nihil perferendis hic fuga tempora suscipit quis incidunt esse.</p>
                        <ul class="list-unstyled li-space-lg">
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Analyse and evaluate your current status and productivity</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">Begin monitoring your day to day routine with Sync app</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-square"></i>
                                <div class="media-body">See the improved results in no more than a couple of weeks</div>
                            </li>
                        </ul>
                        <a class="btn-solid-reg popup-with-move-anim" href="./2nd resume form.php">Build Resume</a>
                    </div>

                </div>
                <!-- end of col -->
                <div class="col-lg-6">
                    <div class="image-container">
                        <img class="img-fluid" src="./images/Resume 2.jpg" alt="alternative">
                    </div>
                    <!-- end of image-container -->
                    <!-- end of text-container -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>





<?php
    ?>
    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h5>About Us</h5>
                        <p class="p-small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, quia?</p>
                    </div>
                    <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h5>Contact Info</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li class="media">
                                <i class="fas fa-map-marker-alt"></i>
                                <div class="media-body">xyz ,NIIT</div>
                            </li>
                            <li class="media">
                                <i class="fas fa-envelope"></i>
                                <div class="media-body"><a href="#your-link">office@niit.com</a></div>
                            </li>
                            <li class="media">
                                <i class="fas fa-phone-alt"></i>
                                <div class="media-body"><a href="#your-link">+91 0000000000</a></div>
                            </li>
                        </ul>
                    </div>
                    <!-- end of footer-col -->
                    <div class="footer-col third">
                        <h5>Value Links</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="article-details.html">Article Details</a></li>
                        </ul>
                    </div>
                    <!-- end of footer-col -->
                    <div class="footer-col fourth">
                        <h5>Other Apps</h5>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li><a href="#your-link">Scientific Calculator</a></li>
                            <li><a href="#your-link">Advanced Timer</a></li>
                            <li><a href="#your-link">Music Store</a></li>
                        </ul>
                    </div>
                    <!-- end of footer-col -->
                    <div class="footer-col fifth">
                        <span class="fa-stack">
                            <a href="#">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                    </div>
                    <!-- end of footer-col -->
                </div>
                <!-- end of col -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of footer -->
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2022 <a href="#">NIIT</a> - All rights reserved</p>
                </div>
                <!-- end of col -->
            </div>
            <!-- enf of row -->
        </div>
        <!-- end of container -->
    </div>
    <!-- end of copyright -->
    <!-- end of copyright -->


    <!-- Scripts -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script>
    <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/scripts.js"></script>
    <!-- Custom scripts -->
</body>

</html>

<?php
    }
?>