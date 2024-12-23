<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Youtube Monetization - The Design Spark</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/inner_pages.css" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/latest%20fav.png" />
    <link rel="icon" type="image/png" href="images/latest%20fav.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/latest%20fav.png" sizes="16x16" />

    <script src="ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.5.0/parallax.min.js"></script>

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
    <style>
    #emailinput {
        color: white;
    }

    .navigation,
    .submenu {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .navigation li:hover .submenu {
        display: block;
        max-height: 900px;
    }

    .submenu a:hover {
        background-color: #666;
    }

    .submenu {
        overflow: hidden;
        max-height: 0;
        -webkit-transition: all 0.5s ease-out;
    }
    
    
    
    
        .dropdown {
    display: none; /* Initially hide the dropdown */
    position: absolute; /* Position it below the Services item */
    background-color: #fff; /* Background color for dropdown */
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); /* Optional shadow for dropdown */
    z-index: 1000; /* Ensure dropdown is above other elements */
}

#menu li:hover .dropdown {
    display: block; /* Show dropdown on hover */
}

.dropdown li {
    width: 150px; /* Set width for dropdown items */
}

.dropdown a {
    display: block; /* Make links fill the dropdown items */
    padding: 10px; /* Add some padding */
    text-decoration: none; /* Remove underline */
    color: #333; /* Text color */
}

.dropdown a:hover {
    background-color: #f0f0f0; /* Background color on hover */
} 
    
    
    
    
    </style>
</head>

<body>
    <div class="boxed_wrapper">
        <!-- <div class="preloader"></div>  -->

        <!-- main header -->
        <header class="main-header style2 work" id="element-to-hide">
            <!--Start header top style2-->
            <div class="header-top-style2">
                <div class="container">
                    <div class="outer-box clearfix">
                        <!--Top Left-->
                    </div>
                </div>
            </div>
            <!--End header top style2-->
            <!--Start Header upper style2-->
            <div class="row text-center dcen">
                <div class="logo">
                    <a href="index.htm"><img src="images/latest%20logo.png" alt="Awesome Logo" title="" width="150"
                            style="margin-top: -2%; margin-left: -34%;" class="logg blsc"></a>
                </div>
            </div>
            <div class="row text-center dcen">
                <div class="header-upper-style header-upper-style2 badj">
                    <div class="nav-outer clearfix" style="width: 100%;">
                        <!-- Main Menu -->
                        <nav class="main-menu style2 navbar-expand-lg">
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix naval">
                                    <li><a href="{{route("index")}}" class="mrn">Home</a>

                                    </li>
                                    <li><a href="{{route("about")}}" class="mrn">About</a></li>

                                    <li class=""><a href="{{route("portfolio")}}" class="mrn">Portfolio</a>
                                    <li class="current"><a href="{{route("services")}}" class="mrn">Services</a>
                                        <ul class="submenu">
                                            <li><a href="{{route("websitedesign")}}">Web Design</a></li>
                                            <li><a href="{{route("websitedevelopment")}}">Web Development</a></li>
                                            <li><a href="{{route("graphicdesign")}}">Graphic Design</a></li>
                                            <li><a href="{{route("socialmediamarketing")}}">Social Media Services</a>
                                            </li>
                                            <li><a href="{{route("appdevelopment")}}">App Development</a></li>
                                            <li><a href="{{route("searchengineoptimization")}}">SEO</a></li>
                                            <li><a href="{{route("videoediting")}}">Video Editing</a></li>
                                            <li><a href="{{route("animation")}}">2D and 3D Animations</a></li>
                                            <li><a href="{{route("illustration")}}">Illustration</a></li>
                                            <li><a href="{{route("ecommerce")}}">E-Commerce</a></li>
                                            <li><a href="{{route("youtubemonetization")}}">Youtube Monetization</a></li>
                                            <li><a href="{{route("copywriting")}}">Copywriting</a></li>
                                            <li><a href="{{route("contentcreation")}}">Content Creation</a></li>
                                            <li><a href="{{route("gamedevelopment")}}">Game Development</a></li>
                                            <li><a href="{{route("branding")}}">Branding</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route("contact")}}" class="mrn">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
            </div>
        </header>

        <!-- End Main Header -->
<nav role="navigation" class="hmhide">
            <div id="menuToggle">
                <!--
      A fake / hidden checkbox is used as click reciever,
      so you can use the :checked selector on it.
      -->
                <input type="checkbox">

                <!--
      Some spans to act as a hamburger.
      
      They are acting like a real hamburger,
      not that McDonalds stuff.
      -->
                <span></span>
                <span></span>
                <span></span>

                <!--
      Too bad the menu has to be inside of the button
      but hey, it's pure CSS magic.
      -->
  <ul id="menu" style="margin-left: -45%;">
        <a href="{{route('index')}}"><li>Home</li></a>
        <a href="{{route('about')}}"><li>About</li></a>
        <a href="{{route('portfolio')}}"><li>Portfolio</li></a>
        <li>
            <a href="#">Services</a>
            <ul class="dropdown">
                <li><a href="{{route('websitedesign')}}">Web Design</a></li>
    <li><a href="{{route('websitedevelopment')}}">Web Development</a></li>
     <li><a href="{{route('graphicdesign')}}">Graphic Design</a></li>
          <li><a href="{{route('socialmediamarketing')}}">Social Media Marketing</a></li>
           <li><a href="{{route('appdevelopment')}}">App Development</a></li>
                  <li><a href="{{route('searchengineoptimization')}}">SEO</a></li>
                    <li><a href="{{route('videoediting')}}">Video Editing</a></li>
                    <li><a href="{{route('animation')}}">2D & 3D Animations</a></li>
                     <li><a href="{{route('illustration')}}">Illustration</a></li>
                     <li><a href="{{route('ecommerce')}}">E-Commerce</a></li>
                            <li><a href="{{route("youtubemonetization")}}">Youtube Monetization</a></li>
                                            <li><a href="{{route("copywriting")}}">Copywriting</a></li>
                                            <li><a href="{{route("contentcreation")}}">Content Creation</a></li>
                                            <li><a href="{{route("gamedevelopment")}}">Game Development</a></li>
                                            <li><a href="{{route("branding")}}">Branding</a></li>
                                            
            </ul>
        </li>
        <a href="{{route('contact')}}"><li>Contact</li></a>
    </ul>
            </div>
        </nav>
        <!-- End Main Header -->

        <section class="breadcrumb-area breadcrumb-area3 abbn">
            <div class="container video_container">
                <video src="./images/newimg/youtube monetization.mp4" autoplay muted loop class="video"></video>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content text-center clearfix">
                            <div class="big-title" style="color: transparent">
                                We have designed<br />
                                for leading brands of USA
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Main Header -->

        <!-- Services Section -->

        <div class="container-fluid mrtp video_portfolio" style="margin-bottom: 32%;">
            <div class="row">
                <div class="col-md-4 brrd rainbow">
                    <div class="text-center" class="pppd">
                        <a href="#" class="image-modal img-fluid" data-modal-id="modal1">
                            <img src="images/newimg/ym3.webp" class="imgcvr" />
                        </a>
                        <div id="modal1" class="modal mlimg">
                            <img src="images/newimg/ym3.webp" alt="" class="mlimg1" />
                        </div>
                        <!-- <img src="images/newimg/app1.png" alt="Image 2" class="img-fluid imgcvr"> -->
                        <h5>Youtube Monetization</h5>
                    </div>
                </div>
                <div class="col-md-4 brrd rainbow2">
                    <div class="text-center">
                        <a href="#" class="image-modal img-fluid" data-modal-id="modal2">
                            <img src="images/newimg/ym1.webp" class="imgcvr" />
                        </a>
                        <div id="modal2" class="modal mlimg">
                            <img src="images/newimg/ym1.webp" alt="" class="mlimg1" />
                        </div>
                        <!-- <img src="images/newimg/app2.png" alt="Image 2" class="img-fluid imgcvr"> -->
                        <h5>Youtube Monetization</h5>
                    </div>
                </div>
                <div class="col-md-4 brrd rainbow">
                    <div class="text-center">
                        <a href="#" class="image-modal img-fluid" data-modal-id="modal3">
                            <img src="images/newimg/ym2.webp" class="imgcvr" />
                        </a>
                        <div id="modal3" class="modal mlimg">
                            <img src="images/newimg/ym2.webp" alt="" class="mlimg1" />
                        </div>
                        <!-- <img src="images/newimg/app3.png" alt="Image 2" class="img-fluid" class="imgcvr"> -->
                        <h5>Youtube Monetization</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content Section -->

        <div class="container-fluid txtbn text-center">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center onhv pad y cta_uper ">
                    <div>
                        <h2 class="padbn">
                            Maximize Your Earnings with YouTube Monetization Strategies
                        </h2>
                        <p class="padbn">
                            Are you ready to turn your passion for content creation into a
                            profitable venture? Our expert team provides comprehensive
                            strategies for YouTube monetization, helping you unlock multiple
                            revenue streams from your channel. From optimizing your videos
                            for ad placements to leveraging sponsorships and merchandise, we
                            guide you every step of the way. Let us help you grow your
                            audience, increase engagement, and maximize your earnings
                            through effective YouTube monetization techniques tailored to
                            your unique brand.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Get Qoute Section -->

        <div class="container-fluid pb quote quote_youtube">
            <div class=" row justify-content-center">
                <div class="col-md-8 col-lg-6" style="margin-top: -8%">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body text-center">
                            <h2 class="text-light mb-4 mtpo" style="
                    color: white !important;
                    text-shadow: -1px -1px 0 #000, 1px -1px 0 #000,
                      -1px 1px 0 #000, 1px 1px 0 #000;
                  ">
                                Get a Quote
                            </h2>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="emailInput"
                                        placeholder="Enter your email" />
                                </div>
                                <a href="contactform.html">
                                    <button type="submit" class="btn btn-primary custom-btn" style="
                        background-color: #a30529;
                        border: none;
                        border-radius: 50px;
                        padding: 2%;
                        width: 10rem;
                        padding-bottom: 1rem;
                      ">
                                        Submit Request
                                    </button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Start footer area-->
        <footer class="footer-area">
            <div class="parallax-scene parallax-scene-1">
                <span data-depth="0.20" class="parallax-layer shape wow zoomInLeft" data-wow-duration="2000ms"></span>
                <span data-depth="0.10" class="parallax-layer shape2 wow zoomInRight" data-wow-duration="2000ms"></span>
                <span data-depth="0.20" class="parallax-layer shape3 wow zoomInRight" data-wow-duration="2000ms"></span>
                <span class="shape4 wow zoomInRight" data-wow-duration="2000ms"></span>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="text-center">
                <img src="images/icontr.png" alt="" width="125" class="ictr">
            </div> -->
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="single-footer-widget marbtm50">
                            <div class="footer-logo">
                                <a href="index.htm"><img src="images/logowhite.png" alt="Awesome Logo" title="Logo"
                                        width="175" /></a>
                            </div>
                            <div class="footer-company-info-text">
                                <!-- <h3 class="usas">USA</h3> -->
                                <ul>
                                    <li>6578 Hyde Grove Ave,
                                        <br> Jacksonville, FL 32210
                                    </li>
                                    <li>(321) 407-4288</li>
                                    <li>jesse@thedesignspark.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp hdft" style="padding-left: 6%">
                        <div class="single-footer-widget martop30 marbtm50">
                            <div class="title">
                                <h3>Information</h3>
                            </div>
                            <ul class="information-links">
                                <li><a href="{{route("index")}}">Home</a></li>
                                <li><a href="{{route("about")}}">About</a></li>
                                <li><a href="{{route("portfolio")}}">Portfolio</a></li>
                                <li><a href="{{route("services")}}">Services</a></li>
                                <li><a href="{{route("contact")}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                        <div class="single-footer-widget martop30">
                            <div class="title">
                                <h3>Newsletter</h3>
                            </div>
                            <div class="subscribe-box">
                                <div class="text">
                                    <p>
                                        Subscribe us and get latest news,<br />
                                        updates and tips.
                                    </p>
                                </div>
                                <form class="subscribe-form" action="contact.html">
                                    <input type="email" name="email" placeholder="Email..." />
                                    <button type="submit">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </button>
                                </form>
                                <div class="footer-social-links">
                                    <ul class="sociallinks-style-two">
                                        <li>
                                            <a href="https://www.facebook.com/thedesignspark"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.behance.net/thedesignspark"><i class="fa fa-behance"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://dribbble.com/thedesignspark/"><i class="fa fa-dribbble"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="https://www.pinterest.com/thedesignsparkofficial/"><i
                                                    class="fa fa-pinterest" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                </div>
            </div>
            <div class="footer-bottom" style="margin-top: 2%">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="footer-bottom-content">
                                <div class="copyright-text">
                                    <p>
                                        Copyright &copy;<a href="contactform.html">The Design Spark</a>
                                        All Rights Reserved.
                                    </p>
                                </div>
                                <div class="footer-menu-style1">
                                    <ul>

                                        <li><a href="{{route("terms")}}">Terms of use</a></li>

                                        <li><a href="{{route("privacy")}}">Privacy Environmental Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End footer area-->
    </div>

    <!-- Scroll Top Button -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="icon-down-arrow"></span>
    </button>

    <script src="js/jquery.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/isotope.js"></script>
    <script src="js/jquery.bootstrap-touchspin.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.enllax.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/jquery.paroller.min.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/validation.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/aos.js"></script>

    <script src="assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
    <script src="assets/timepicker/timePicker.js"></script>
    <script src="assets/html5lightbox/html5lightbox.js"></script>
    <!-- jQuery ui js -->
    <script src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>

    <!-- thm custom script -->
    <script src="js/custom.js"></script>

    <script>
    // Get the element to hide/show
    var element = document.getElementById("element-to-hide");

    // Get the height of the area where the element should be hidden
    var hideHeight = 300; // for example, hide the element when user scrolls 300 pixels down

    // Add an event listener for scroll
    window.addEventListener("scroll", function() {
        // Get the current scroll position
        var scrollPosition = window.scrollY;

        // Check if the user has scrolled past the hide area
        if (scrollPosition > hideHeight) {
            // Hide the element
            element.style.display = "none";
        } else {
            // Show the element
            element.style.display = "block";
        }
    });
    </script>

    <script>
    $(document).ready(function() {
        // INITIATE THE FOOTER
        siteFooter();
        $(window).resize(function() {
            siteFooter();
        });

        function siteFooter() {
            var siteContent = $("#site-content");
            var siteContentHeight = siteContent.height();
            var siteContentWidth = siteContent.width();

            var siteFooter = $("#site-footer");
            var siteFooterHeight = siteFooter.height();
            var siteFooterWidth = siteFooter.width();

            console.log("Content Height = " + siteContentHeight + "px");
            console.log("Content Width = " + siteContentWidth + "px");
            console.log("Footer Height = " + siteFooterHeight + "px");
            console.log("Footer Width = " + siteFooterWidth + "px");

            siteContent.css({
                "margin-bottom": siteFooterHeight + 50,
            });
        }
    });
    </script>

    <script src="jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $(".image-modal").click(function() {
            var modalId = $(this).data("modal-id");
            $("#" + modalId).show();
        });

        $(".modal").click(function() {
            $(this).hide();
        });
    });
    </script>
</body>

</html>