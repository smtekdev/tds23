<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="ekr/snippet.js?key=a93ef8d6-8a88-420b-9ff9-955801aba3d5"></script>
    <!-- End of  Zendesk Widget script -->
    <!-- Start of  Zendesk Widget script -->
    <script id="ze-snippet" src="ekr/snippet.js?key=a93ef8d6-8a88-420b-9ff9-955801aba3d5"></script>
    <!-- End of  Zendesk Widget script -->
    <meta charset="UTF-8" />
    <title>Portfolio - The Design Spark</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/inner_pages.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/portfoliofilter.css" />
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/latest%20fav.png" />
    <link rel="icon" type="image/png" href="images/latest%20fav.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/latest%20fav.png" sizes="16x16" />

    <script src="ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- <link href="css1/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->

    <!--== animate -->
    <!-- <link href="css1/animate.css" rel="stylesheet" type="text/css" /> -->

    <!--== fontawesome -->
    <!-- <link href="css1/fontawesome-all.css" rel="stylesheet" type="text/css" /> -->

    <!--== magnific-popup -->
    <link href="css1/magnific-popup.css" rel="stylesheet" type="text/css" />

    <!--== owl.carousel -->
    <link href="css1/owl.carousel.css" rel="stylesheet" type="text/css" />

    <!--== lightslider -->
    <link href="css1/lightslider.min.css" rel="stylesheet" type="text/css" />

    <!--== spacing -->
    <link href="css1/spacing.css" rel="stylesheet" type="text/css" />

    <!--== base -->
    <link href="css1/base.css" rel="stylesheet" type="text/css" />

    <!--== shortcodes -->
    <link href="css1/shortcodes.css" rel="stylesheet" type="text/css" />

    <!--== style -->
    <!-- <link href="css1/style.css" rel="stylesheet" type="text/css" /> -->

    <!--== responsive -->
    <link href="css1/responsive.css" rel="stylesheet" type="text/css" />

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
    <style>
    /* @media only screen and (max-width: 767px) {
        .page-content {
          margin-top: -36%;
        }
      } */

    /* portfolio css */
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

    .portfolio-item {
        display: none;
    }

    .portfolio-item img {
        max-width: 100%;
        height: auto;
    }

    .portfolio-hover {
        margin-top: 10px;
    }

    .portfolio-menu {
        margin-bottom: 20px;
        text-align: center;
    }

    .portfolio-menu button {
        margin-right: 10px;
        padding: 10px 20px;
        cursor: pointer;
    }

    .portfolio-menu button.active {
        background-color: #007bff;
        /* Active button style */
        color: #fff;
    }

    /* end portfolio css */






    .dropdown {
        display: none;
        /* Initially hide the dropdown */
        position: absolute;
        /* Position it below the Services item */
        background-color: #fff;
        /* Background color for dropdown */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        /* Optional shadow for dropdown */
        z-index: 1000;
        /* Ensure dropdown is above other elements */
    }

    #menu li:hover .dropdown {
        display: block;
        /* Show dropdown on hover */
    }

    .dropdown li {
        width: 150px;
        /* Set width for dropdown items */
    }

    .dropdown a {
        display: block;
        /* Make links fill the dropdown items */
        padding: 10px;
        /* Add some padding */
        text-decoration: none;
        /* Remove underline */
        color: #333;
        /* Text color */
    }

    .dropdown a:hover {
        background-color: #f0f0f0;
        /* Background color on hover */
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
                                    <li><a href="{{route("index")}}" class="mrn">Home</a>

                                    </li>
                                    <li><a href="{{route("about")}}" class="mrn">About</a></li>

                                    <li class="current"><a href="{{route("portfolio")}}" class="mrn">Portfolio</a>
                                    <li><a href="{{route("services")}}" class="mrn">Services</a>
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

                                    <li><a href="#" class="mrn">Packages</a>
                                        <ul class="submenu">
                                            <li><a href="./webdesignpkg.html">Web Design</a></li>
                                            <li><a href="./webdevpkg.html">Web Development</a></li>
                                            <li><a href="./graphicdesignpkg.html">Graphic Design</a></li>
                                            <li><a href="./socialmediamarketingpkg.html">Social Media Services</a></li>
                                            <li><a href="./appdevelopmentpkg.html">App Development</a></li>
                                            <li><a href="./seopkg.html">SEO</a></li>
                                            <li><a href="./videoeditingpkg.html">Video Editing</a></li>
                                            <li><a href="./2d3danimation.html">2D and 3D Animations</a></li>
                                            <li><a href="./illustrationpkg.html">Illustration</a></li>
                                            <li><a href="./ecommercepkg.html">E-Commerce</a></li>
                                            <li><a href="./youtubemonetizationpkg.html">Youtube Monetization</a></li>
                                            <li><a href="./copywritingpkg.html">Copywriting</a></li>
                                            <li><a href="./contentcreationpkg.html">Content Creation</a></li>
                                            <li><a href="./gamedevelopmentpkg.html">Game Development</a></li>
                                            <li><a href="./brandingpkg.html">Branding</a></li>
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
                    <a href="{{route('index')}}">
                        <li>Home</li>
                    </a>
                    <a href="{{route('about')}}">
                        <li>About</li>
                    </a>
                    <a href="{{route('portfolio')}}">
                        <li>Portfolio</li>
                    </a>
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

                    <a href="{{route('contact')}}">
                        <li>Contact</li>
                    </a>
                </ul>
            </div>
        </nav>

        <!--The Hamburger Button in the Header-->
        <!-- End Main Header -->

        <!-- End Main Header -->


        <!-- <section class="breadcrumb-area breadcrumb-area3 abbn ">
        <div class="container video_container">
          <video src="./images/newimg/Portfolio.mp4" autoplay muted loop class="video"></video>
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
      </section> -->

        <div>
            <video src="./images/newimg/Portfolio.mp4" autoplay muted loop class="video" width="100%"></video>
        </div>







        <div id="main-page" class="page-content portfolio_container ">
            <div class="portfolio-menu">
                <button class="selected" onclick="filterPortfolio('WebDesign')">
                    Web Design
                </button>
                <button onclick="filterPortfolio('WebDevelopment')">
                    Web Development
                </button>

                <button onclick="filterPortfolio('GraphicDisign')">
                    Graphic Design
                </button>

                <button onclick="filterPortfolio('SocialMediaServices')">
                    Social Media Services
                </button>
                <button onclick="filterPortfolio('AppDevelopment')">
                    App Development
                </button>
                <button onclick="filterPortfolio('SEO')">SEO</button>

                <button onclick="filterPortfolio('VideoEditing')">
                    Video Editing
                </button>

                <button onclick="filterPortfolio('animations_3d_2d')">
                    2D & 3D Animations
                </button>

                <button onclick="filterPortfolio('Illustrations')">
                    Illustrations
                </button>

                <!-- Add more tabs as needed -->
            </div>

            <div class="portfolio-container portfolio">

                <div class="portfolio-item WebDesign">
                    <div class="portfolio-img">
                        <img src="images/portfolio/web-design/webdesign1.jpg" alt="Web Design 1"
                            onclick="openLightbox('images/portfolio/web-design/webdesign1.jpg')" />
                        <img src="images/portfolio/web-design/webdesign2.jpg" alt="Web Design 1"
                            onclick="openLightbox('images/portfolio/web-design/webdesign2.jpg')" />
                        <img src="images/portfolio/web-design/webdesign3.jpg" alt="Web Design 1"
                            onclick="openLightbox('images/portfolio/web-design/webdesign3.jpg')" />
                    </div>
                    {{-- <div class="portfolio-item WebDesign" style="margin-top:20px">
            <div class="portfolio-img">
              <img src="images/portfolio/web-design/webdesign1.jpg" alt="Graphic Design 1"
                onclick="openLightbox('images/portfolio/web-design/webdesign1.jpg')" />
              <img src="images/portfolio/web-design/webdesign2.jpg" alt="Graphic Design 1"
                onclick="openLightbox('images/portfolio/web-design/webdesign2.jpg')" />
              <img src="images/portfolio/web-design/webdesign3.jpg" alt="Graphic Design 1"
                onclick="openLightbox('images/portfolio/web-design/webdesign3.jpg')" />
            </div>
            <div class="portfolio-hover">
              <span>Graphic Design</span>
              <h5><a href="#">Graphic Design 1</a></h5>
            </div>
          </div> --}}
                    <div class="portfolio-item WebDevelopment">
                        <div class="portfolio-img">
                            <img src="images/portfolio/web-development/web-development1.jpg" alt="Web Development "
                                onclick="openLightbox('images/portfolio/web-development/web-development1.jpg')" />
                            <img src="images/portfolio/web-development/web-development12.jpg" alt="Web Development "
                                onclick="openLightbox('images/portfolio/web-development/web-development2.jpg')" />

                            <img src="images/portfolio/web-development/web-development3.jpg" alt="Web Development "
                                onclick="openLightbox('images/portfolio/web-development/web-development3.jpg')" />
                        </div>

                        <div class="portfolio-hover">
                            <span>Graphic Design</span>
                            <h5><a href="#">Graphic Design</a></h5>
                        </div>
                    </div>

                    <div class="portfolio-item GraphicDisign">
                        <img src="GraphicDisign.jpg" alt="Graphic Disign" onclick="openLightbox('images/web1.jpg')" />
                        <div class="portfolio-hover">
                            <span>Graphic Design</span>
                            <h5><a href="#">Graphic Design</a></h5>
                        </div>
                    </div>
                    <div class="portfolio-item SocialMediaServices">
                        <img src="SocialMediaServices.jpg" alt="Social Media Services"
                            onclick="openLightbox('SocialMediaServices.jpg')" />
                        <div class="portfolio-hover">
                            <span>Web Development</span>
                            <h5><a href="#">Web Development 2</a></h5>
                        </div>
                    </div>

                    <!-- App Development -->
                    <div class="portfolio-item AppDevelopment">
                        <img src="AppDevelopment.jpg" alt="App Development"
                            onclick="openLightbox('AppDevelopment.jpg')" />
                        <div class="portfolio-hover">
                            <span>App Development</span>
                            <h5><a href="#">App Development</a></h5>
                        </div>
                    </div>

                    <div class="portfolio-item SEO">
                        <img src="SEO.jpg" alt="SEO " onclick="openLightbox('SEO.jpg')" />
                        <div class="portfolio-hover">
                            <span>SEO</span>
                            <h5><a href="#">SEO </a></h5>
                        </div>
                    </div>

                    <div class="portfolio-item VideoEditing">
                        <img src="VideoEditing.jpg" alt="VideoEditing " onclick="openLightbox('SEO.jpg')" />
                        <div class="portfolio-hover">
                            <span>Video Editing</span>
                            <h5><a href="#">Video Editing </a></h5>
                        </div>
                    </div>

                    <div class="portfolio-item animations_3d_2d">
                        <img src="animations_3d_2d.jpg" alt="animations_3d_2d "
                            onclick="openLightbox('animations_3d_2d')" />
                        <div class="portfolio-hover">
                            <span>Animations_3d_2d</span>
                            <h5><a href="#">Animations_3d_2d </a></h5>
                        </div>
                    </div>

                    <div class="portfolio-item Illustrations">
                        <img src="animations_3d_2d.jpg" alt="Illustrations " onclick="openLightbox('Illustrations')" />
                        <div class="portfolio-hover">
                            <span>Illustrations</span>
                            <h5><a href="#">Illustrations </a></h5>
                        </div>
                    </div>

                    <!-- Lightbox Modal -->
                    <div id="lightbox" class="lightbox">
                        <span class="close" onclick="closeLightbox()">&times;</span>
                        <div class="lightbox-content">
                            <img id="lightbox-img" class="lightbox-img" src="" alt="Lightbox Image" />
                            <a class="prev" onclick="prevSlide()">&#10094;</a>
                            <a class="next" onclick="nextSlide()">&#10095;</a>
                        </div>
                    </div>
                </div>
                <div class="portfolio-item WebDevelopment">
                    <div class="portfolio-img">
                        <img src="images/portfolio/web-development/web-development1.jpg" alt="Web Development "
                            onclick="openLightbox('images/portfolio/web-development/web-development1.jpg')" />
                        <img src="images/portfolio/web-development/web-development12.jpg" alt="Web Development "
                            onclick="openLightbox('images/portfolio/web-development/web-development2.jpg')" />

                        <img src="images/portfolio/web-development/web-development3.jpg" alt="Web Development "
                            onclick="openLightbox('images/portfolio/web-development/web-development3.jpg')" />
                    </div>

                    <div class="portfolio-hover">
                        <span>Web Development</span>
                        <h5><a href="#">Web Development</a></h5>
                    </div>
                </div>
                <div class="portfolio-item GraphicDisign">
                    <div class="portfolio-img">
                        <img src="images/portfolio/logo-design/logodes1.png" alt="log design "
                            onclick="openLightbox('images/portfolio/logo-design/logodes1.png')" />
                        <img src="images/portfolio/logo-design/logodes2.png" alt="logo design "
                            onclick="openLightbox('images/portfolio/logo-design/logodes2.png')" />

                        <img src="images/portfolio/logo-design/logodes3.png" alt="logo design "
                            onclick="openLightbox('images/portfolio/logo-design/logodes3.png')" />
                    </div>

                    <div class="portfolio-hover">
                        <span>Graphic Design</span>
                        <h5><a href="#">Graphic Design</a></h5>
                    </div>
                </div>
                <div class="portfolio-item SocialMediaServices">
                    <div class="portfolio-img">
                        <img src="images/portfolio/smm/smm1.png" alt="Social Media Services "
                            onclick="openLightbox('images/portfolio/smm/smm1.png')" />
                        <img src="images/portfolio/smm/smm2.png" alt="Social Media Services "
                            onclick="openLightbox('images/portfolio/smm/smm2.png')" />

                        <img src="images/portfolio/smm/smm3.png" alt="Social Media Services "
                            onclick="openLightbox('images/portfolio/smm/smm3.png')" />
                    </div>

                    <div class="portfolio-hover">
                        <span>Social Media Services</span>
                        <h5><a href="#">Social Media Services</a></h5>
                    </div>
                </div>
                <div class="portfolio-item AppDevelopment">
                    <div class="portfolio-img">
                        <img src="images/portfolio/app-development/app1.jpg" alt="App Development "
                            onclick="openLightbox('images/portfolio/app-development/app1.jpg')" />
                        <img src="images/portfolio/app-development/app2.jpg" alt="App Development "
                            onclick="openLightbox('images/portfolio/app-development/app2.jpg')" />

                        <img src="images/portfolio/app-development/app3.jpg" alt="App Development "
                            onclick="openLightbox('images/portfolio/app-development/app3.jpg')" />
                    </div>

                    <div class="portfolio-hover">
                        <span>App Development</span>
                        <h5><a href="#">App Development</a></h5>
                    </div>
                </div>
                <div class="portfolio-item SEO">
                    <div class="portfolio-img">
                        <img src="images/portfolio/seo/seo1.png" alt="Search Engine Optimization "
                            onclick="openLightbox('images/portfolio/seo/seo1.png')" />
                        <img src="images/portfolio/seo/search2.png" alt="Search Engine Optimization "
                            onclick="openLightbox('images/portfolio/seo/search2.png')" />

                        <img src="images/portfolio/seo/search3.png" alt="Search Engine Optimization "
                            onclick="openLightbox('images/portfolio/seo/search3.png')" />
                    </div>

                    <div class="portfolio-hover">
                        <span>SEO</span>
                        <h5><a href="#">SEO</a></h5>
                    </div>
                </div>
                <div class="portfolio-item VideoEditing">
                    <div class="portfolio-img">
                        <img src="images/portfolio/video-editing/ve1.png" alt="Video Editing "
                            onclick="openLightbox('images/portfolio/video-editing/ve1.png')" />
                        <img src="images/portfolio/video-editing/ve2.png" alt="Search Engine Optimization "
                            onclick="openLightbox('images/portfolio/video-editing/ve2.png')" />

                        <img src="images/portfolio/video-editing/ve3.png" alt="Search Engine Optimization "
                            onclick="openLightbox('images/portfolio/video-editing/ve3.png')" />
                    </div>

                    <div class="portfolio-hover">
                        <span>Video Editing</span>
                        <h5><a href="#">Video Editing</a></h5>
                    </div>
                </div>
                <div class="portfolio-item animations_3d_2d">
                    <div class="portfolio-img">
                        <img src="images/portfolio/animations/3D1.png" alt="2D & 3D Animations "
                            onclick="openLightbox('images/portfolio/animations/3D1.png')" />
                        <img src="images/portfolio/animations/3D2.jpg" alt="2D & 3D Animations "
                            onclick="openLightbox('images/portfolio/animations/3D2.jpg')" />

                        <img src="images/portfolio/animations/3D3.png" alt="2D & 3D Animations "
                            onclick="openLightbox('images/portfolio/animations/3D3.png')" />
                    </div>

                    <div class="portfolio-hover">
                        <span>2D & 3D Animations</span>
                        <h5><a href="#">2D & 3D Animations</a></h5>
                    </div>
                </div>
                <div class="portfolio-item Illustrations">
                    <div class="portfolio-img">
                        <img src="images/portfolio/illustrations/illustration1.jpg" alt="Illustrations "
                            onclick="openLightbox('images/portfolio/illustrations/illustration1.jpg')" />
                        <img src="images/portfolio/illustrations/illustration2.jpg" alt="Illustrations "
                            onclick="openLightbox('images/portfolio/illustrations/illustration2.jpg')" />

                        <img src="images/portfolio/illustrations/il3.jpg" alt="Illustrations "
                            onclick="openLightbox('images/portfolio/illustrations/il3.jpg')" />
                    </div>

                    <div class="portfolio-hover">
                        <span>Illustrations</span>
                        <h5><a href="#">Illustrations</a></h5>
                    </div>
                </div>
                <div class="portfolio-item ">
                    <img src="GraphicDisign.jpg" alt="Graphic Disign" onclick="openLightbox('images/web1.jpg')" />
                    <div class="portfolio-hover">
                        <span>Graphic Design</span>
                        <h5><a href="#">Graphic Design</a></h5>
                    </div>
                </div>
                <div class="portfolio-item SocialMediaServices">
                    <img src="SocialMediaServices.jpg" alt="Social Media Services"
                        onclick="openLightbox('SocialMediaServices.jpg')" />
                    <div class="portfolio-hover">
                        <span>Web Development</span>
                        <h5><a href="#">Web Development 2</a></h5>
                    </div>
                </div>

                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="masonry row popup-gallery g-0" style="position: relative; height: 1116px">
                                    <div class="grid-sizer"></div>
                                    <div class="masonry-brick col-lg-4 col-md-6"
                                        style="position: absolute; left: 0px; top: 0px">
                                        <div class="portfolio-item">
                                            <img class="img-fluid w-100" src="images1/portfolio/01.jpg" alt="" />
                                            <a class="popup-img" href="images1/portfolio/large/01.jpg">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
                                            <div class="portfolio-hover">
                                                <span>Logo Design</span>
                                                <h5><a href="#">Stremmel Masonry</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-brick col-lg-8 col-md-6"
                                        style="position: absolute; left: 372px; top: 0px">
                                        <div class="portfolio-item">
                                            <img class="img-fluid w-100" src="images1/portfolio/glitzy.jpg" alt="" />
                                            <a class="popup-img" href="images1/portfolio/large/glitzy.jpg">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
                                            <div class="portfolio-hover">
                                                <span>Logo Design</span>
                                                <h5><a href="#">Glitzy</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-brick col-lg-4 col-md-6"
                                        style="position: absolute; left: 0px; top: 372px">
                                        <div class="portfolio-item">
                                            <img class="img-fluid w-100" src="images1/portfolio/flow.jpg" alt="" />
                                            <a class="popup-img" href="images1/portfolio/large/flow.jpg">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
                                            <div class="portfolio-hover">
                                                <span>Logo Design</span>
                                                <h5><a href="#">Flow</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-brick col-lg-4 col-md-6"
                                        style="position: absolute; left: 372px; top: 372px">
                                        <div class="portfolio-item">
                                            <img class="img-fluid w-100" src="images1/portfolio/wolf.jpg" alt="" />
                                            <a class="popup-img" href="images1/portfolio/large/wolf.jpg">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
                                            <div class="portfolio-hover">
                                                <span>Logo Design</span>
                                                <h5><a href="#">WolfGang</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-brick col-lg-8 col-md-6"
                                        style="position: absolute; left: 0px; top: 744px">
                                        <div class="portfolio-item">
                                            <img class="img-fluid w-100" src="images1/portfolio/sgt.jpg" alt="" />
                                            <a class="popup-img" href="images1/portfolio/large/sgt.jpg">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
                                            <div class="portfolio-hover">
                                                <span>Logo Design</span>
                                                <h5><a href="#">SGT</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-brick col-lg-4 col-md-6"
                                        style="position: absolute; left: 744px; top: 372px">
                                        <div class="portfolio-item">
                                            <img class="img-fluid w-100" src="images1/portfolio/matr.jpg" alt="" />
                                            <a class="popup-img" href="images1/portfolio/large/matr.jpg">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
                                            <div class="portfolio-hover">
                                                <span>Logo Design</span>
                                                <h5><a href="#">Back to the 80's</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="masonry-brick col-lg-4 col-md-6"
                                        style="position: absolute; left: 744px; top: 744px">
                                        <div class="portfolio-item">
                                            <img class="img-fluid w-100" src="images1/portfolio/hyper.jpg" alt="" />
                                            <a class="popup-img" href="images1/portfolio/large/hyper.jpg">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
                                            <div class="portfolio-hover">
                                                <span>Logo Design</span>
                                                <h5><a href="#">Hyper</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!--Start About Style3 Area-->

            <!--End About Style3 Area-->

            <!-- new text test -->

            <!-- one hour about work -->

            <!--Start Mission Vision Area-->

            <!--End Mission Vision Area-->

            <!--Start Featured Area-->

            <!--End Featured Area-->

            <!--Start Brand area-->
            <!-- <section class="brand-area">
      <div class="outer-container">
        <ul class="brand-items">
          <li class="single-brand-item">
            <a href="#">
              <img src="images/brand/brand-v1-1.png" alt="Awesome Brand Image">
              <div class="overlay">
                <div class="box">
                  <div class="inner">
                    <h6>Oneclick Photography</h6>
                  </div>
                </div>
              </div>
            </a>
          </li>

          <li class="single-brand-item">
            <a href="#">
              <img src="images/brand/brand-v1-2.png" alt="Awesome Brand Image">
              <div class="overlay">
                <div class="box">
                  <div class="inner">
                    <h6>Oneclick Photography</h6>
                  </div>
                </div>
              </div>
            </a>
          </li>

          <li class="single-brand-item">
            <a href="#">
              <img src="images/brand/brand-v1-3.png" alt="Awesome Brand Image">
              <div class="overlay">
                <div class="box">
                  <div class="inner">
                    <h6>Oneclick Photography</h6>
                  </div>
                </div>
              </div>
            </a>
          </li>

          <li class="single-brand-item">
            <a href="#">
              <img src="images/brand/brand-v1-4.png" alt="Awesome Brand Image">
              <div class="overlay">
                <div class="box">
                  <div class="inner">
                    <h6>Oneclick Photography</h6>
                  </div>
                </div>
              </div>
            </a>
          </li>

          <li class="single-brand-item">
            <a href="#">
              <img src="images/brand/brand-v1-5.png" alt="Awesome Brand Image">
              <div class="overlay">
                <div class="box">
                  <div class="inner">
                    <h6>Oneclick Photography</h6>
                  </div>
                </div>
              </div>
            </a>
          </li>

          <li class="single-brand-item">
            <a href="#">
              <img src="images/brand/brand-v1-6.png" alt="Awesome Brand Image">
              <div class="overlay">
                <div class="box">
                  <div class="inner">
                    <h6>Oneclick Photography</h6>
                  </div>
                </div>
              </div>
            </a>
          </li>

        </ul>
      </div>
    </section> -->

            <footer class="footer-area">
                <div class="parallax-scene parallax-scene-1">
                    <span data-depth="0.20" class="parallax-layer shape wow zoomInLeft"
                        data-wow-duration="2000ms"></span>
                    <span data-depth="0.10" class="parallax-layer shape2 wow zoomInRight"
                        data-wow-duration="2000ms"></span>
                    <span data-depth="0.20" class="parallax-layer shape3 wow zoomInRight"
                        data-wow-duration="2000ms"></span>
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
                                    <h3 class="usas">USA</h3>
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
                                                <a href="https://www.facebook.com/thedesignspark"><i
                                                        class="fa fa-facebook" aria-hidden="true"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.behance.net/thedesignspark"><i
                                                        class="fa fa-behance" aria-hidden="true"></i></a>
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

        <!-- portfolio script -->
        <!-- <script>
      // Show 'Logo Design' by default on page load
      window.onload = function () {
        setDefaultCategory(); // Show 'Logo Design' items
      };

      function setDefaultCategory() {
        const items = document.getElementsByClassName("portfolio-item");
        for (let i = 0; i < items.length; i++) {
          items[i].style.display = "none"; // Hide all items
        }
        // Show 'Logo Design' items by default
        const logoItems = document.getElementsByClassName("logo");
        for (let i = 0; i < logoItems.length; i++) {
          logoItems[i].style.display = "block";
        }

        // Set the 'Logo Design' button as active
        const buttons = document.querySelectorAll(".portfolio-menu button");
        buttons.forEach((button) => button.classList.remove("active"));
        document
          .querySelector(
            ".portfolio-menu button[onclick=\"filterPortfolio('logo')\"]"
          )
          .classList.add("active");
      }

      function filterPortfolio(category) {
        const items = document.getElementsByClassName("portfolio-item");

        // Hide all portfolio items
        for (let i = 0; i < items.length; i++) {
          items[i].style.display = "none";
        }

        // Show only the selected category items
        const selectedItems = document.getElementsByClassName(category);
        for (let i = 0; i < selectedItems.length; i++) {
          selectedItems[i].style.display = "block";
        }

        // Remove 'active' class from all buttons
        const buttons = document.querySelectorAll(".portfolio-menu button");
        buttons.forEach((button) => {
          button.classList.remove("active");
        });

        // Add 'active' class to the clicked button
        const activeButton = document.querySelector(
          `.portfolio-menu button[onclick="filterPortfolio('${category}')"]`
        );
        if (activeButton) {
          activeButton.classList.add("active");
        }
      }
    </script> -->
        <!-- end portfolio script -->


        <script src="js/portfoliofilter.js"></script>

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
        $(".ml16").each(function() {
            let text = $(this).text();
            let words = text.split(" ");

            // Clear current element
            this.innerHTML = "";

            // Loop through each word, wrap each letter in a span
            for (let word of words) {
                let word_split = word.replace(
                    /([^\x00-\x80]|\w)/g,
                    "<span class='letter'>$&</span>"
                );

                // Wrap another span around each word, add word to header
                this.innerHTML += '<span class="word">' + word_split + "</span>";
            }
        });

        anime
            .timeline({
                loop: true,
            })
            .add({
                targets: ".ml16 .letter",
                translateY: [100, 0],
                easing: "easeOutExpo",
                duration: 1400,
                delay: function(el, i) {
                    return 30 * i;
                },
            })
            .add({
                targets: ".ml16",
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000,
            });
        </script>

        <script>
        var textWrapper = document.querySelector(".ml6 .letters");
        textWrapper.innerHTML = textWrapper.textContent.replace(
            /\S/g,
            "<span class='letter'>$&</span>"
        );

        anime
            .timeline({
                loop: true
            })
            .add({
                targets: ".ml6 .line1 .letter",
                translateY: ["1.1em", 0],
                translateZ: 0,
                duration: 750,
                delay: (el, i) => 50 * i,
            })
            .add({
                targets: ".ml6 .line2 .letter",
                translateY: ["1.1em", 0],
                translateZ: 0,
                duration: 750,
                delay: (el, i) => 50 * i,
            })
            .add({
                targets: ".ml6",
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000,
            });
        </script>
        <script>
        window.onload = function() {
            filterPortfolio('WebDesign'); // This will trigger the function for 'Web Design' by default
        };
        </script>
        <script src="js1/theme.js"></script>

        <!--== owl-carousel -->
        <script src="js1/owl-carousel/owl.carousel.min.js"></script>

        <!--== magnific-popup -->
        <script src="js1/magnific-popup/jquery.magnific-popup.min.js"></script>

        <!--== isotope -->
        <script src="js1/isotope/isotope.pkgd.min.js"></script>

        <!--== counter -->
        <script src="js1/counter/counter.js"></script>

        <!--== countdown -->
        <script src="js1/countdown/jquery.countdown.min.js"></script>

        <!--== particles -->
        <script src="js1/particles.js"></script>

        <!--== parallaxie -->
        <script src="js1/parallaxie.js"></script>

        <!--== lightslider -->
        <script src="js1/lightslider.js"></script>

        <!--== typer -->
        <script src="js1/typer.js"></script>

        <!--== tilt jquery -->
        <script src="js1/tilt.jquery.js"></script>

        <!--== contact-form -->
        <script src="js1/contact-form/contact-form.js"></script>

        <!--== wow -->
        <script src="js1/wow.min.js"></script>

        <!--== theme-script -->
        <script src="js1/theme-script.js"></script>
</body>

</html>