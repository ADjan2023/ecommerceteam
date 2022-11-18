<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Profile</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/dashbord-mobile-menu.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/default.css">
</head>

<body class="maxw1600 m0a dashboard-bd">
    <div id="wrapper" class="int_main_wraapper">
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <div id="header">
                    <div class="container-fluid">
                        <!-- Left Side Content -->
                        <div class="left-side">
                            <!-- Logo -->
                           
                            <!-- Mobile Navigation -->
                            <div class="mmenu-trigger">
                                <button class="hamburger hamburger--collapse" type="button">
                                    <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                            <!-- Main Navigation -->
                            <nav id="navigation" class="style-1">
                                <ul id="responsive">
                                <li style="margin-left:100px"><a href="../index.php">Home</a></li> 
                                </ul>
                            </nav>
                            <div class="clearfix"></div>
                        </div>
                        <div class="header-user-menu user-menu">
                            <div class="header-user-name">
                                <span><img src="images/icons/user.png" alt=""></span>Hi,<?php

if (!empty($_SESSION['name'])){

    echo $_SESSION['name'];

}?>
                            </div>
                            <ul>
                                <li><a href="user_profile.php"> Edit profile</a></li>
                                <li><a href="log_out.php">Log Out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION USER PROFILE -->
        <section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                        <div class="user-profile-box mb-0">
                        <div class="sidebar-header" style="text-align:center; font-size:40px; color:white"><span style="color:#52b765">Laundry</span>Men </div>
                            <div class="header clearfix">
                                <img src="images/icons/icons.png" alt="avatar" class="img-fluid profile-img">
                            </div>
                            <div class="active-user">
                                <h2><?php

                                                if (!empty($_SESSION['name'])){

                                                    echo $_SESSION['name'];

                                                }?></h2>
                            </div>
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    <li>
                                        <a href="dashboard.php">
                                            <i class="fa fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="user_profile.php">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="subscriptions.php">
                                            <i class="fas fa-credit-card" aria-hidden="true"></i>Subscriptions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.php">
                                            <i class="fa fa-lock"></i>Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="log_out.php">
                                            <i class="fas fa-sign-out-alt"></i>Log Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-6 widget-boxed mt-33 mt-0 offset-lg-2 offset-md-3">
                       <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                    <li>
                                        <a href="dashboard.php">
                                            <i class="fa fa-map-marker"></i> Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a class="active" href="user_profile.php">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="subscriptions.php">
                                            <i class="fas fa-credit-card" aria-hidden="true"></i>Subscriptions
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.php">
                                            <i class="fa fa-lock"></i>Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="log_out.php">
                                            <i class="fas fa-sign-out-alt"></i>Log Out
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="widget-boxed-header">
                            <h4>Profile Details</h4>
                        </div>
                        <div class="sidebar-widget author-widget2">
                            <div class="author-box clearfix">
                                <img src="images/icons/icons.png" alt="author-image" class="author__img">
                                <h4 class="author__title"><?php

if (!empty($_SESSION['name'])){

    echo $_SESSION['name'];

}?></h4>
                            </div>
                            <ul class="author__contact">
                                <li><span class="la la-map-marker"><i class="fa fa-id-card-o"></i></span><?php

if (!empty($_SESSION['name'])){

    echo $_SESSION['name'];

}?></li>
                                <li><span class="la la-phone"><i class="fa fa-phone" aria-hidden="true"></i></span><span style="color:#007bff"><?php

if (!empty($_SESSION['contact'])){

    echo $_SESSION['contact'];

}?></span></li>
                                <li><span class="la la-envelope-o"><i class="fa fa-envelope" aria-hidden="true"></i></span><span style="color:#007bff"><?php

if (!empty($_SESSION['email'])){

    echo $_SESSION['email'];

}?></span></li>
                            </ul>
                            <div class="agent-contact-form-sidebar">
                                <h4>Update Your Information</h4>
                                <form name="contact_form" action="" method="post">
                                <div class="form-group">
                                    <label>Hostel Name</label>
                                    <input type="text" name="hostel" class="form-control"value="<?php

if (!empty($_SESSION['hostel'])){

    echo $_SESSION['hostel'];

}?>">
                                        </div>
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="full_name" class="form-control"value="<?php

                                            if (!empty($_SESSION['name'])){

                                                echo $_SESSION['name'];

                                            }?>">
                                        </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" value="<?php

                                            if (!empty($_SESSION['email'])){

                                                echo $_SESSION['email'];

                                            }?>">
                                        </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="tel" name="phone" class="form-control"value="<?php

                                        if (!empty($_SESSION['contact'])){

                                            echo $_SESSION['contact'];

                                        }?>">
                                    
                                        </div>
                                    <input type="submit" value="submit" class="multiple-send-message">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>

        <!-- ARCHIVES JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/moment.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/swiper.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/slick2.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/lightcase.js"></script>
        <script src="js/search.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/newsletter.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/searched.js"></script>
        <script src="js/dashbord-mobile-menu.js"></script>
        <script src="js/forms-2.js"></script>
        <script src="js/color-switcher.js"></script>

        <!-- MAIN JS -->
        <script src="js/script.js"></script>

        <script>
            $(".header-user-name").on("click", function() {
                $(".header-user-menu ul").toggleClass("hu-menu-vis");
                $(this).toggleClass("hu-menu-visdec");
            });

        </script>

    </div>
</body>
</html>
