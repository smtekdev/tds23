<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Services - The Design Spark</title>

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- master stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="newcss/test.css">
    <link rel="stylesheet" href="newcss/layout.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="css/inner_pages.css" />
    <link rel="stylesheet" href="css/responsive.css">

    <link href="csspara/plugin.min.css" rel="stylesheet">
    <link href="csspara/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/latest%20fav.png">
    <link rel="icon" type="image/png" href="images/latest%20fav.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/latest%20fav.png" sizes="16x16">

    <script src="ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.5.0/parallax.min.js"></script>

    <link href="release/v4.0.0/css/line.css" rel="stylesheet">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="css2?family=Montserrat&family=Poppins&display=swap" rel="stylesheet">


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


        <!-- <section class="breadcrumb-area breadcrumb-area3 abbn ">
            <div class="container video_container">
                <video src="./images/newimg/Services.mp4" autoplay muted loop class="video"></video>
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
            <video src="./images/newimg/Services.mp4" autoplay muted loop class="video service_video"></video>
        </div>


        <!-- End Main Header -->


        <!-- Services Section -->
        <div style="margin-bottom:10%;font-family:system-ui">
            <section class="light-bg0 sw-service-blocks sw-sevefirst">
                <div class="container">
                    <div class="separateweb-grdt-1 separatewebserviceblock">
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="swss1">
                                    <div class="swserviceimg separateweb animation" data-rellax-speed="5"
                                        data-rellax-percentage="-0.1"><a href="design.html"> <img
                                                src="images/service/web-design.png" class="img-fluid" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="page-headings">
                                    <h2>Web Design</h2>
                                    <p class="mt15" id="mt">A Business or Brand who doesn't have website in 21st
                                        century
                                        doesn't
                                        exists on internet. Don't you want to be superior from your competitors?</p>
                                </div>
                                <div class="serviceparts mt50">
                                    <ul class="serviceslist" id="mt">
                                        <li>UI/UX Design</li>
                                        <li>Front-End Design</li>
                                        <li>Responsive Design</li>
                                        <li>Template Design</li>
                                        <li>Layout/Format Design</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="light-bg0 sw-service-blocks">
                <div class="container">
                    <div class="separateweb-grdt-2 separatewebserviceblock">
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="page-headings">
                                    <h2>Web Development</h2>
                                    <p class="mt15" id="mt">Whatever the idea or concept you have for your startup
                                        or
                                        business we
                                        can develop anything or everything just ask us.</p>
                                </div>
                                <div class="serviceparts mt50">
                                    <ul class="serviceslist" id="mt">
                                        <li>HTML Development</li>
                                        <li>PHP Development</li>
                                        <li>Nodejs Development</li>
                                        <li>Angular JS Development</li>
                                        <li>CodeIgniter Development</li>
                                        <li>CakePHP Development</li>
                                        <li>Laravel Development</li>
                                        <li>Vue JS Development</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="swss2">
                                    <div class="swserviceimg separateweb animation" data-rellax-speed="5"
                                        data-rellax-percentage="0.1"><a href="webdev.html"> <img
                                                src="images/service/web-development.png" class="img-fluid"
                                                alt="img"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="light-bg0 sw-service-blocks">
                <div class="container">
                    <div class="separateweb-grdt-5 separatewebserviceblock">
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="swss1">
                                    <div class="swserviceimg separateweb animation" data-rellax-speed="5"
                                        data-rellax-percentage="-0.1"><a href="graphic-design.html"> <img
                                                src="images/service/graphic-design.png" class="img-fluid" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="page-headings">
                                    <h2>Graphic & Branding</h2>
                                    <p class="mt15" id="mt">Good design is good business, whichever brands we see
                                        around
                                        us those
                                        are successful because of their design. Design way more than just some
                                        colorful
                                        shapes and stylish fonts.</p>
                                </div>
                                <div class="serviceparts mt50">
                                    <ul class="serviceslist" id="mt">
                                        <li>Logo Design</li>
                                        <li>Banner/Poster/Greetings</li>
                                        <li>Social Media Design</li>
                                        <li>Print & Packaging</li>
                                        <li>Branding Design</li>
                                        <li>Motion Graphics</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="light-bg0 sw-service-blocks">
                <div class="container">
                    <div class="separateweb-grdt-4 separatewebserviceblock">
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="page-headings">
                                    <h2>Mobile App Development</h2>
                                    <p class="mt15" id="mt">97% internet users access internet via smartphone,
                                        Amazon is
                                        biggest
                                        example of how powerful is mobile app. Have idea for mobile app reach us.
                                    </p>
                                </div>
                                <div class="serviceparts mt50">
                                    <ul class="serviceslist" id="mt">
                                        <li>iOS App</li>
                                        <li>Android App</li>
                                        <li>Cross Platform App</li>
                                        <li>IOT App</li>
                                        <li>Wearable App</li>
                                        <li>Flutter App</li>
                                        <li>React Native App</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="swss2">
                                    <div class="swserviceimg separateweb animation" data-rellax-speed="7"
                                        data-rellax-percentage="0.1"> <a href="appdevelopment.html"><img
                                                src="images/service/app-design.png" class="img-fluid" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="light-bg0 sw-service-blocks">
                <div class="container">
                    <div class="separateweb-grdt-3 separatewebserviceblock">
                        <div class="row justify-content-between">
                            <div class="col-lg-5">
                                <div class="swss1">
                                    <div class="swserviceimg separateweb animation" data-rellax-speed="5"
                                        data-rellax-percentage="-0.1"><a href="seo.html"> <img
                                                src="images/service/cms-design.png" class="img-fluid" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="page-headings">
                                    <h2>Search Engine Optimization</h2>
                                    <p class="mt15" id="mt">In today's digital world, having a strong online
                                        presence is
                                        crucial for business success. Is your website struggling to rank higher on
                                        search engine results pages? Are you missing out on valuable organic traffic
                                        and
                                        potential customers?</p>
                                </div>
                                <div class="serviceparts mt50">
                                    <ul class="serviceslist" id="mt">
                                        <li>Comprehensive Website Analysis</li>
                                        <li>Keyword Research and Optimization</li>
                                        <li>Content Optimization</li>
                                        <li>Link Building</li>
                                        <li>Technical SEO Enhancements</li>
                                        <li>Regular Reporting and Analysis</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="light-bg0 sw-service-blocks pb100">
                <div class="container">
                    <div class="separateweb-grdt-4 separatewebserviceblock">
                        <div class="row justify-content-between">
                            <div class="col-lg-6">
                                <div class="page-headings">
                                    <h2>Digital Marketing</h2>
                                    <p class="mt15" id="mt">If you want your brand to stand out from others you
                                        definetly need
                                        digital marketing strategy for your business and we are experts in the
                                        market.
                                    </p>
                                </div>
                                <div class="serviceparts mt50">
                                    <ul class="serviceslist" id="mt">
                                        <li>Search Engine Optimization</li>
                                        <li>Social Media Marketing</li>
                                        <li>Display Ads</li>
                                        <li>Lead Generation</li>
                                        <li>Email Marketing</li>
                                        <li>Content Marketing</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="swss2">
                                    <div class="swserviceimg separateweb animation" data-rellax-speed="5"
                                        data-rellax-percentage="-0.1"><a href="smm.html"> <img
                                                src="images/service/marketing.png" class="img-fluid" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!--
<div class="container-fluid mrtp">
    <div class="row">
        
      
      
      <div class="col-md-4 brrd rainbow2">
        <a href="https://thedesignspark.com/design">
        <div class="text-center">
          <img src="images/newimg/webdsgnn.jpg" alt="Image 2" class="img-fluid imgcvr">
          <h5 >Web Design</h5>
          <div class="hover-content">
            <img src="images/newimg/webdesgif.gif" alt="" class="img-fluid imgcvr">
          </div>
        </div>
        </a>
      </div>
      <div class="col-md-4 brrd rainbow">
        <a href="https://thedesignspark.com/webdev">
        <div class="text-center">
          <img src="images/newimg/webdevv.jpg" alt="Image 2" class="img-fluid imgcvr">
          <h5 >Web Development</h5>
          <div class="hover-content">
            <img src="images/newimg/webdevp.gif" alt="" class="img-fluid imgcvr">        
    </div>
        </div>
    </a>
      </div>
      <div class="col-md-4 brrd rainbow2">
        <a href="https://thedesignspark.com/graphic-design">
        <div class="text-center">
          <img src="images/newimg/ggd.jpg" alt="Image 2" class="img-fluid imgcvr" >
          <h5 >Graphic Design</h5>
          <div class="hover-content">
            <img src="images/newimg/gdgif.gif" alt="" class="img-fluid imgcvr">  
          </div>
        </div>
      </div>
    </a>
    </div>
    <br><br><br>
    <div class="row">
        
      
        <div class="col-md-4 brrd rainbow2">
            <a href="https://thedesignspark.com/smm">
          <div class="text-center">
            <img src="images/newimg/smmr.jpg" alt="Image 2" class="img-fluid imgcvr">
            <h5 >Social Media Services</h5>
            <div class="hover-content">
                <img src="images/newimg/smgif.gif" alt="Image 2" class="img-fluid imgcvr">
            </div>
          </div>
        </a>
        </div>
        <div class="col-md-4 brrd rainbow">
            <a href="https://thedesignspark.com/appdevelopment">
          <div class="text-center">
            <img src="images/newimg/apppdev.jpg" alt="Image 2" class="img-fluid imgcvr">
            <h5 >App Development</h5>
            <div class="hover-content">
                <img src="images/newimg/appdevgif.gif" alt="Image 2" class="img-fluid imgcvr">
            </div>
          </div>
        </a>
        </div>
        <div class="col-md-4 brrd rainbow2">
            <a href="https://thedesignspark.com/seo">
          <div class="text-center">
            <img src="images/newimg/seoo.jpg" alt="Image 2" class="img-fluid imgcvr" >
            <h5 >SEO</h5>
            <div class="hover-content">
                <img src="images/newimg/seogif.gif" alt="Image 2" class="img-fluid imgcvr">
            </div>
          </div>
        </a>
        </div>
        
      </div>
  </div>
  -->


        <!-- Globe Section -->


        <div class="container-fluid txtbn text-center">
            <div class="row">
                <div class="col-md-12 d-flex align-items-center onhv pad y cta_service">
                    <div>
                        <h2 class="padbn">Empower your brand with our digital expertise</h2>
                        <p class="padbn">
                            As a digital agency, we understand the importance of creating a strong online presence
                            in
                            today's fast-paced digital world. Our team of experts is dedicated to helping businesses
                            establish their brand identity and reach their target audience through innovative
                            digital
                            solutions. We offer a wide range of services including website design and development,
                            search engine optimization, social media marketing, email marketing, and more. </p>
                    </div>
                </div>
            </div>
        </div>



        <!-- Text Section -->


        <!-- <div class="container-fluid gifbk">
    <div class="row">
      <div class="col-md-6 d-flex align-items-center">
        <img src="images/newimg/agency.gif" alt="" class="img-fluid serimg">
      </div>
    </div>
</div> -->


        <!--Start About Style3 Area-->
        <section class="about-style3-area about-page zdxg">
            <div class="container-fluid">
                <div class="row">
                    <!-- <div class="col-xl-6">
                <div class="about-style3-image-box clearfix" style="background-image:url(images/G7L\ Mockup.png);">
                    <div class="text"><span>Since 2004</span></div>
                       
                </div>   
            </div> -->
                    <div class="col-xl-6">
                        <div class="about-style3-image-box clearfix video_service">
                            <video autoplay="" loop="" muted="" playsinline="" class="vwne video">
                                <source src="images/The%20Design%20Spark%20Promo.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <div class="text"><span>Since 2004</span></div>
                            eo_container
                        </div>
                    </div>
                    <!-- <div class="col-xl-1 col-lg-1 col-md-2">
                <div class="about-style3-title"><span>Story About Us</span></div>
            </div> -->
                    <div class="col-xl-5 col-lg-11 col-md-10 abtc" style="margin-left: 2%;">
                        <div class="about-style3-content-box style2">
                            <div class="inner-content incnt cta_service_text">
                                <!-- <div class="logo"><img src="images/icon/jexic-design-studio-v2.png" alt="Logo"></div> -->
                                <div class="title" style="margin-top: 4%;">
                                    <h1>What our digital services
                                        can do for you</h1>
                                </div>
                                <div class="text">
                                    <p>Our digital services can help take your online presence to the next level. We
                                        offer a range of solutions designed to help you reach and engage your target
                                        audience, build your brand, and grow your business. From website design and
                                        development to search engine optimization, social media marketing, email
                                        marketing, and more, our team of experts can help you achieve your goals. We
                                        use
                                        the latest technologies and proven strategies to create digital solutions
                                        that
                                        are tailored to your unique needs and preferences. With our digital
                                        services,
                                        you can expand your reach, increase your visibility, and connect with your
                                        customers in new and exciting ways.</p>
                                </div>
                                <div class="authorized-person">
                                    <!-- <h3>Jen Cathrine</h3>
                            <span>CEO of The Design Spark</span> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End About Style3 Area-->




        <!-- Unique Points -->
        <div class="container-fluid">
            <ul class="features-ul nmrg">
                <li class="animated bounceInLeft go service_unique_points" data-id="1">
                    <img src="images/newimg/satisfaction.png" alt="" style="width: 50px; height: 50px;">
                    <h5>100% Satisfaction <br>Guarantee</h5>
                    <div class="icn-tooltip">
                        <div class="tooltip-innr">To ensure your complete satisfaction, we have implemented an
                            effective
                            revision policy.</div>
                    </div>
                </li>
                <li class="animated bounceInLeft go service_unique_points" data-id="2">
                    <img src="images/newimg/uniquedesign.png" alt="" style="width: 50px; height: 50px;">
                    <h5>Unique Design <br>Guarantee</h5>
                    <div class="icn-tooltip">
                        <div class="tooltip-innr">We deliver nothing but the best for your brand. Each design is
                            distinctive and impactful.</div>
                    </div>
                </li>
                <li class="animated bounceInLeft go service_unique_points" data-id="3">
                    <img src="images/newimg/moneyguarentee.png" alt="" style="width: 50px; height: 50px;">
                    <h5>100% Money Back <br>Guarantee</h5>
                    <div class="icn-tooltip">
                        <div class="tooltip-innr">We have full confidence in our exceptional work. To ensure your
                            complete satisfaction, we offer a Money Back guarantee.</div>
                    </div>
                </li>
                <li class="animated bounceInLeft go service_unique_points" data-id="4">
                    <img src="images/newimg/support.png" alt="" style="width: 50px; height: 50px;">
                    <h5>24/7 Design <br>Consultancy</h5>
                    <div class="icn-tooltip">
                        <div class="tooltip-innr">We are available 24/7 to assist you. Feel free to reach out to us
                            for
                            any inquiries or concerns you may have.</div>
                    </div>
                </li>
                <li class="animated bounceInLeft go service_unique_points" data-id="5">
                    <img src="images/newimg/trophy.png" alt="" style="width: 50px; height: 50px;">
                    <h5>Award Winning <br>Designers &amp; Developers</h5>
                    <div class="icn-tooltip">
                        <div class="tooltip-innr">Our designers have been recognized with numerous awards for their
                            exceptional design and branding solutions.</div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Get Qoute Section -->

        <div class="container-fluid pb"
            style="background-image: url('images/newimg/serbn.jpg');  background-attachment: fixed; padding-top: 12.5%; padding-bottom: 4.5%; margin-top: -4.5%; background-size: cover;">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6" style="margin-top: -8%;">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body text-center">
                            <h2 class="text-light mb-4 mtpo" style="color: white !important;">Get a Quote</h2>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="emailInput"
                                        placeholder="Enter your email">
                                </div>
                                <a href="contactform.html">
                                    <button type="submit" class="btn btn-primary custom-btn ssbtn"
                                        style="padding: 2%;">Submit Request</button>
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
                                        width="175"></a>
                            </div>
                            <div class="footer-company-info-text">
                                <!--    <h3 class="usas">USA</h3> -->
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
    <button class="scroll-top scroll-to-target" data-target="html" style="rotate: 180deg;">
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
                var siteContent = $('#site-content');
                var siteContentHeight = siteContent.height();
                var siteContentWidth = siteContent.width();

                var siteFooter = $('#site-footer');
                var siteFooterHeight = siteFooter.height();
                var siteFooterWidth = siteFooter.width();

                console.log('Content Height = ' + siteContentHeight + 'px');
                console.log('Content Width = ' + siteContentWidth + 'px');
                console.log('Footer Height = ' + siteFooterHeight + 'px');
                console.log('Footer Width = ' + siteFooterWidth + 'px');

                siteContent.css({
                    "margin-bottom": siteFooterHeight + 50
                });
            };
        });
    </script>


    <!-- Below code to hide and show new added area of icons -->

    <script>
        var tooltips = document.querySelectorAll('.icn-tooltip');

        function showTooltip() {
            this.querySelector('.icn-tooltip').style.display = 'block';
        }

        function hideTooltip() {
            this.querySelector('.icn-tooltip').style.display = 'none';
        }

        tooltips.forEach(function(tooltip) {
            var parent = tooltip.parentNode;
            parent.addEventListener('mouseenter', showTooltip);
            parent.addEventListener('mouseleave', hideTooltip);
        });
    </script>


    <script src="jspara/sw.bundle.js"></script>



    <script src="jspara/main.js"></script>


</body>

</html>