<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="ekr/snippet.js?key=a93ef8d6-8a88-420b-9ff9-955801aba3d5"> </script>
    <!-- End of  Zendesk Widget script -->
    <meta charset="UTF-8">
    <title>Contact Us - The Design Spark</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/inner_pages.css" />
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/latest%20fav.png">
    <link rel="icon" type="image/png" href="images/Favicon">
    <link rel="icon" type="image/png" href="images/latest%20fav.png">

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
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FHG55FEFNT"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-FHG55FEFNT');
</script>

<body>
    <div class="boxed_wrapper">


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
                    <a href=" {{route('index')}}"><img src="images/latest%20logo.png" alt="Awesome Logo" title=""
                            width="150" style="margin-top: -2%; margin-left: -34%;" class="logg blsc"></a>
                </div>
            </div>
            <div class="row text-center dcen">
                <div class="header-upper-style header-upper-style2 badj">
                    <div class="nav-outer clearfix" style="width: 100%;">
                        <!-- Main Menu -->
                        <nav class="main-menu style2 navbar-expand-lg">
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix naval">
                                    <li ><a href="{{route('index')}}" class="mrn">Home</a>

                                    </li>
                                    <li><a href="{{route("about")}}" class="mrn">About</a></li>

                                    <li class=""><a href="{{route("portfolio")}}" class="mrn">Portfolio</a>
                                    <li class=""><a href="{{route("services")}}" class="mrn">Services</a>
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

                       
                                    <li class="current"><a href="{{route("contact")}}" class="mrn">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                        <!-- Main Menu End-->
                    </div>
                </div>
            </div>
        </header>
        <!-- Hamburger Starts -->
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

        <!--The Hamburger Button in the Header-->

        <!-- End Main Header -->


        <!-- End Main Header -->

        <!-- <section class="breadcrumb-area breadcrumb-area3"
            style="background: url('images/contactusbanimate.gif'); background-size: contain; background-repeat: no-repeat; background-position: center; padding-bottom: 17%;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content text-center clearfix">
                            <div class="big-title" style="color: transparent;">We have designed<br> for leading brands
                                of USA</div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="breadcrumb-area breadcrumb-area3 abbn ">
            <div class="container video_container">
                <video src="./images/newimg/Contact.mp4" autoplay muted loop class="video"></video>
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



        <!--Start contact form area-->
        <section class="contact-form-area contactpage">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12">
                        <div class="contact-social-links sovr">
                            <!-- <div class="image-box" style="background-image: url(images/cont.jpg);">
                        <div class="big-title">
                        </div>
                    </div> -->
                            <ul class="social-new">
                                <a href="https://dribbble.com/thedesignspark/">
                                    <img src="images/Dribbble-Full-Screen.gif" alt="Dribbble" width="60">
                                </a>

                                <li>
                                    <a href="https://www.behance.net/thedesignspark">
                                        <img src="images/Behance-Full-Screen.gif" alt="Behance" width="60">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com/thedesignsparkofficial/">
                                        <img src="images/Pinterest-Full-Screen.gif" alt="Instagram" width="60">
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/thedesignspark">
                                        <img src="images/Facebook-Full-Screen.gif" alt="Facebook" width="60">
                                    </a>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 text-center cntpg ">
                        <div class="contact-form marquee34">
                            <div class="inner-box">
                                <div>
                                    <div>


                                        <p>Message and Data Rates may apply. You can STOP messaging by sending STOP and
                                            get more help by sending HELP. Our privacy policy is located at Privacy
                                            Policy.</p>
                                    </div>
                                </div>
                                @if(session()->has('message'))
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get('message') }}
                                </div>
                                @endif
                                <form action="{{route('contact.send')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 mtpo">
                                            <div class="input-box input-boxs">
                                                <input type="text" name="name" value="" placeholder="Name" required="">
                                            </div>
                                            <div class="input-box input-boxs">
                                                <input type="email" name="email" value="" placeholder="Email"
                                                    required="">
                                            </div>
                                            <div class="input-box input-boxs">
                                                <input type="text" name="phone" value="" placeholder="Phone">
                                            </div>
                                            <!-- <div class="input-box"> 
                                        <input type="text" name="website" value="" placeholder="Website">
                                    </div>  -->
                                            <!-- <div class="input-box input-boxs"> 
                                        <input type="text" name="subject" value="" placeholder="Subject">
                                    </div> -->
                                            <div class="input-box input-boxs">
                                                <textarea name="msg" placeholder="Your Message..."
                                                    required=""></textarea>
                                            </div>
                                            <button type="submit" class="axil-btn btn-borderd btn-fluid btn-primary"
                                                name="submit-btn" style="">Get Pricing Now</button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End contact form area-->




        <!--Start Contact Address Area-->
        <section class="">
            <div class="container-fluid mbne">

                <div class="column calign">
                    <!--Start Single Contact Address Box-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box text-center" >
                            <div class="icon-holder">
                                <span class="flaticon-global"></span>
                            </div>
                            <h3>Visit Our Office</h3>
                            <p>6578 Hyde Grove Ave,<br>
                                Jacksonville, FL 32210</p>
                        </div>
                    </div>
                    <!--End Single Contact Address Box-->
                    <!--Start Single Contact Address Box-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box active text-center">
                            <div class="icon-holder">
                                <span class="flaticon-support"></span>
                            </div>
                            <h3>Call Us</h3>
                            <p>(321) 407-4288</p>
                        </div>
                    </div>
                    <!--End Single Contact Address Box-->
                    <!--Start Single Contact Address Box-->
                    <div class="col-xl-4 col-lg-4">
                        <div class="single-contact-address-box text-center">
                            <div class="icon-holder">
                                <span class="flaticon-shipping-and-delivery"></span>
                            </div>
                            <h3>Mail Us</h3>
                            <p>info@thedesignspark.com</p>
                        </div>
                    </div>
                    <!--End Single Contact Address Box-->
                </div>
            </div>
        </section>
        <!--End Contact Address Area-->




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
                                        width="175"></a>
                            </div>
                            <div class="footer-company-info-text">
                                <!--     <h3 class="usas">USA</h3> -->
                                <ul>
                                    <li>6578 Hyde Grove Ave,
                                        <br> Jacksonville, FL 32210
                                    </li>
                                    <li>(321) 407-4288</li>
                                    <li>info@thedesignspark.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End single footer widget-->
                    <!--Start single footer widget-->
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp hdft" style="padding-left: 6%;">
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
                                    <p>Subscribe us and get latest news,<br> updates and tips.</p>
                                </div>
                                <form class="subscribe-form" action="contact.html">
                                    <input type="email" name="email" placeholder="Email...">
                                    <button type="submit"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
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
            <div class="footer-bottom" style="margin-top: 2%;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="footer-bottom-content">
                                <div class="copyright-text">
                                    <p>Copyright &copy;<a href="contactform.html">The Design Spark</a> All Rights
                                        Reserved.</p>
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


    <script src="http://maps.google.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM"></script>
    <script src="js/gmaps.js"></script>
    <script src="js/map-helper.js"></script>


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

</body>

</html>