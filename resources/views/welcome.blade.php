<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Appku - Software Landing Page">

    <!-- ========== Page Title ========== -->
    <title>MHADM - Software </title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/themify-icons.css" rel="stylesheet" />
    <link href="assets/css/elegant-icons.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/validnavs.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    [if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    [endif]

</head>

<body>

  <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav attr-border navbar-sticky navbar-default validnavs navbar-fixed dark no-background">


            <div class="container-medium d-flex justify-content-between align-items-center">

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index-2.html">
                        <!-- <img src="assets/img/logo.png" class="logo" alt="Logo"> -->
                        <h2 style="color: blue; font-weight: bold; font-size: 24px; text-decoration: underline;">MHADM</h2>
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Main Nav -->
                <div class="main-nav-content">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">

                        <!-- <img src="assets/img/logo.png" alt="Logo"> -->

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>

                        <ul class="nav navbar-nav navbar-right text-white" data-in="fadeInDown" data-out="fadeOutUp">
                            <li><a href="{{ url('/dashboard') }}">Home</a></li>

                            <li><a href="#">Future</a></li>


                            @if (Route::has('login'))
                                    @auth
                                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                    @else
                                        <li><a href="{{ route('login') }}">LogIn</a></li>

                                    @endauth
                            @endif

                        </ul>
                    </div><!-- /.navbar-collapse -->

                    <!-- Overlay screen for menu -->
                    <div class="overlay-screen"></div>
                    <!-- End Overlay screen for menu -->

                </div>
                <!-- Main Nav -->
            </div>
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->

<!-- Start Banner -->
<section class="banner-video">
    <div class="video-container">
        <video id="background-video" width="100%" autoplay loop muted playsinline>
            <source src="assets/video/technology.mp4" type="video/mp4">
        </video>
        <div id="text-overlay" class="text-overlay">
            <div class="container">
                <div class="double-items">
                    <div class="row align-center">
                        <div class="col-lg-6 info">
                            <!-- This will be replaced by JavaScript -->
                            <h2 id="video-text">Welcome To Bauchi Chamber Of Commerce, Industry Mines and Agriculture Official Website</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>








    <!-- Star Features Area
    ============================================= -->
    <div class="features-style-four-area shape-center text-center default-padding bottom-less" style="background-image: url(assets/img/shape/29.png);">
        <div class="feature-style-four-box">
            <div class="container">
                <div class="row">
                    <!-- Single item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="feature-style-four">
                            <h4><a href="#">Bauchi State Social Investment Program (SIP)</a></h4>
                            <div class="icon">
                                <img src="assets/img/icon/analytics/1.png" alt="Icon">
                            </div>
                            <p>
                                Government initiative in Nigeria addressing poverty and enhancing well-being. Implements social interventions like cash transfers, school feeding, and skills development to uplift vulnerable populations.                            </p>
                        </div>
                    </div>
                    <!-- End Single item -->
                    <!-- Single item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="feature-style-four">
                            <h4><a href="#">State Emergency Management Agency (SEMA)</a></h4>
                            <div class="icon">
                                <img src="assets/img/icon/analytics/4.png" alt="Icon">
                            </div>
                            <p>
                                Government agency overseeing disaster management, coordinating preparedness, response, recovery, and mitigation efforts in a specific state or region                            </p>
                        </div>
                    </div>
                    <!-- End Single item -->
                    <!-- Single item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="feature-style-four">
                            <h4><a href="#">Agency for Persons with Disabilities (APWD)</a></h4>
                            <div class="icon">
                                <img src="assets/img/icon/analytics/3.png" alt="Icon">
                            </div>
                            <p>
                                Government organization dedicated to supporting individuals with disabilities. Provides services, advocacy, healthcare, financial assistance, and educational programs, promoting inclusion and equal opportunities                            </p>
                        </div>
                    </div>
                    <!-- End Single item -->
                    <!-- Single item -->
                    <div class="col-lg-3 col-md-6 single-item">
                        <div class="feature-style-four">
                            <h4><a href="#">Sustainable Development Goals (SDGs)</a></h4>
                            <div class="icon">
                                <img src="assets/img/icon/analytics/2.png" alt="Icon">
                            </div>
                            <p>
                                Global goals set by the UN in 2015 to tackle social, economic, and environmental challenges. A universal call to end poverty, ensure prosperity, and address issues like education, gender equality, clean water, and climate change by 2030                            </p>
                        </div>
                    </div>
                    <!-- End Single item -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Features -->

    <div id="about" class="about-style-four-area bg-gray default-padding-bottom">
        <div class="container">
            
            <div class="row align-center">
                <!-- Single Item -->
                <div class="single-item">
                    <div class="card-image-big">
                        <img src="assets/img/kaura.jpg" alt="Card Image">
                        
                    </div>
                
                </div>
                <!-- End Single Item -->
                <div class="custom-image-big">
                    <div class="card-image-info">
                        <p class="custom-paragraph">HIS EXCELLENCY</p>
                        <h3 class="custom-heading">Sen. Bala Abdulkadir Mohammed, Con.</h3>
                        <h4 class="custom-subheading">Kauran Bauchi</h4>
                        <h3 class="custom-heading">Executive Governor, Bauchi State</h3>
                    </div>
                </div>
                
            
            </div>
        </div>
    </div>

    <!-- Star About Area
    ============================================= -->
    <div id="about" class="about-style-four-area bg-gray default-padding-bottom">
        <div class="container">
            <div class="row align-center">
                <!-- Single Item -->
                <div class="single-item col-lg-6">
                    <div class="card-image">
                        <img src="assets/img/InventoryImage.jpg" alt="Card Image">
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item col-lg-6">
                    <div class="about-style-four info wow fadeInRight" data-wow-delay="300ms">
                        <h2 style="text-align: center;">Ministry of Humanitarian Affairs & Disaster Management  </h2>
                        <p>
                            The New Commissioner made the call on Wednesday 16th August, 2023 when she officially assumed duty at the Ministry.
                                                
                        </p>
                        <div class="custom-card">
                            <div class="card-image">
                              <h3 style="font-weight: bolder; margin: 0; padding: 0px; text-align: center;">Hon. Hajara Yakubu Wanka</h3>
                            </div>
                          </div>
                          
                              

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">

                                <button class="nav-link active" id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission" type="button" role="tab" aria-controls="nav-mission" aria-selected="true">
                                    Our Mission
                                </button>

                                <button class="nav-link" id="nav-vision-tab" data-bs-toggle="tab" data-bs-target="#nav-vision" type="button" role="tab" aria-controls="vision" aria-selected="false">
                                    Our Vision
                                </button>

                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                Our mission serves as the guiding purpose and action that defines our organization's fundamental reason for existence. It articulates the core objectives and activities we are committed to, highlighting the impact we aim to make on the world or within our community                                <ul>
                                    <li>Poverty Alleviation</li>
                                    <li>Accessible Education</li>
                                    <li>Environmental Sustainability</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-vision" role="tabpanel" aria-labelledby="nav-vision-tab">
                                On the other hand, our vision outlines our aspirations for the future. It is a forward-looking statement that paints a vivid picture of what success looks like for our organization. Our vision serves as a source of inspiration, driving our long-term goals and motivating us to achieve a positive and transformative impact on the world we serve.                                <ul>
                                    <li>Empowered Communities</li>
                                    <li>Global Peace Collaboration</li>
                                    <li>Universal Clean Energy Access</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <!-- Star Services Area
    ============================================= -->
    <div class="services-style-four-area text-light relative">
        <div class="half-bg-top-gray"></div>
        <div class="services-style-four-box">
            <div class="shape-right-top" style="background-image: url(assets/img/shape/8.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="site-heading text-center">
                            <h2>Sub-Ministries</h2>
                            <div class="devider"></div>
                            <p>
                                Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- Bauchi State Social Investment Program (SIP) -->
                    <div class="single-item col-lg-6 col-md-6">
                        <div class="services-style-four wow fadeInUp">
                            <div class="thumb">
                                <img src="assets/img/icon/analytics/cloud-server.png" alt="Icon">
                            </div>
                            <div class="info">
                                <h4>Bauchi State Social Investment Program (SIP)</h4>
                                <p>
                                    The Bauchi State Social Investment Program (SIP) is a government initiative in Nigeria focused on poverty reduction and improving the well-being of vulnerable populations through various social intervention programs, including cash transfers, school feeding, and skills development.
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <!-- State Emergency Management Agency (SEMA) -->
                    <div class="single-item col-lg-6 col-md-6">
                        <div class="services-style-four wow fadeInUp" data-wow-delay="300ms">
                            <div class="thumb">
                                <img src="assets/img/icon/analytics/v2.png" alt="Icon">
                            </div>
                            <div class="info">
                                <h4>State Emergency Management Agency (SEMA)</h4>
                                <p>
                                    The State Emergency Management Agency (SEMA) is a government agency responsible for coordinating disaster preparedness, response, recovery, and mitigation efforts within a specific state or region.
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <!-- Agency for Persons with Disabilities (APWD) -->
                    <div class="single-item col-lg-6 col-md-6">
                        <div class="services-style-four wow fadeInUp" data-wow-delay="500ms">
                            <div class="thumb">
                                <img src="assets/img/icon/analytics/v3.png" alt="Icon">
                            </div>
                            <div class="info">
                                <h4>Agency for Persons with Disabilities (APWD)</h4>
                                <p>
                                    The Agency for Persons with Disabilities (APWD) is a government organization focused on supporting and advocating for individuals with disabilities. It provides various services, support, and resources to enhance their quality of life, including accessibility initiatives, advocacy efforts, healthcare services, financial assistance, and educational programs. APWD plays a vital role in promoting inclusion and equal opportunities for people with disabilities.
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <!-- Sustainable Development Goals (SDGs) -->
                    <div class="single-item col-lg-6 col-md-6">
                        <div class="services-style-four wow fadeInUp" data-wow-delay="700ms">
                            <div class="thumb">
                                <img src="assets/img/icon/analytics/v4.png" alt="Icon">
                            </div>
                            <div class="info">
                                <h4>Sustainable Development Goals (SDGs)</h4>
                                <p>
                                    The Sustainable Development Goals (SDGs) are a set of 17 global goals established by the United Nations in 2015 to address various social, economic, and environmental challenges worldwide. These goals serve as a universal call to action to end poverty, protect the planet, and ensure prosperity for all. The SDGs encompass a wide range of objectives, including eradicating poverty and hunger, promoting quality education, achieving gender equality, ensuring clean water and sanitation, and combating climate change. They provide a framework for international cooperation and sustainable development efforts to create a better and more equitable world by the year 2030.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- End Services Area -->


    <!-- Start Team 
    ============================================= -->
    <div id="team" class="team-area bg-gray text-center default-padding bottom-less">
        <!-- Shape -->
        <div class="fixed-shape" style="background-image: url(assets/img/shape/5.png);"></div>
        <!-- End Shape -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Innovative Team</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="team-style-two-box">
                <div class="row">
                    <!-- Single Item -->
                    <div class="single-item col-lg-3 col-md-6">
                        <div class="team-style-two">
                            <div class="thumb">
                                <img src="assets/img/Ogahafix.jpg" alt="Thumb">
                                <div class="shape" style="background-image: url(assets/img/shape/32.png);"></div>
                            </div>
                            <div class="info">
                                <h4>Hafix Dan Manu</h4>
                                <span>Software Developer</span>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
        
    </div>
    <!-- End Team Area -->

    <!-- Start Pricing 
    ============================================= -->
    <div id="pricing" class="pricing-area bg-dark default-padding bottom-less">
        <div class="shape" style="background-image: url(assets/img/shape/16.png);"></div>
        <div class="container text-center mx-auto">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Our Packages</h2>
                        <div class="devider"></div>
                        <p>Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="pricing-items">
                <div class="row">
                    <!-- Pricing Items ... -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Pricing Area -->

    <!-- Start Testimonials 
    ============================================= -->
    <div class="testimonials-area carousel-shadow default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>What people say</h2>
                        <div class="devider"></div>
                        <p>
                            Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="testimonial-items">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <div class="provider">
                                    <img src="assets/img/100x100.png" alt="Author">
                                    <div class="content">
                                        <h4>Devid Warner</h4>
                                        <span> Managing Director</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods mentions defective at. Sympathize interested simplicity at do projecting care effect increasing terminated. As edward settle limits at in. Chamber reaching abnormally nothing be accesing to the point. very extreme future. 
                                    </p>
                                </div>
                                <div class="reason">
                                    <h5>Design Quality</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="provider">
                                    <img src="assets/img/100x100.png" alt="Author">
                                    <div class="content">
                                        <h4>Pruasuj Natasha</h4>
                                        <span> Theme Developer</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods mentions defective at. Sympathize interested simplicity at do projecting care effect increasing terminated. As edward settle limits at in. Chamber reaching abnormally nothing be accesing to the point. very extreme future.  
                                    </p>
                                </div>
                                <div class="reason">
                                    <h5>Customer Support</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <div class="provider">
                                    <img src="assets/img/100x100.png" alt="Author">
                                    <div class="content">
                                        <h4>Koyel Anderson</h4>
                                        <span> Project Manager</span>
                                    </div>
                                </div>
                                <div class="info">
                                    <p>
                                        Otherwise concealed favourite frankness on be at dashwoods mentions defective at. Sympathize interested simplicity at do projecting care effect increasing terminated. As edward settle limits at in. Chamber reaching abnormally nothing be accesing to the point. very extreme future.  
                                    </p>
                                </div>
                                <div class="reason">
                                    <h5>User Friendly</h5>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Area -->

<!-- Start Blog 
============================================= -->
<div id="blog" class="blog-area default-padding bg-gray bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2>Latest News</h2>
                    <div class="devider"></div>
                    <p>
                        Outlived no dwelling denoting in peculiar as he believed. Behaviour excellent middleton be as it curiosity departure ourselves very extreme future.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">

            <!-- News 1 -->
            <div class="single-item col-lg-4 col-md-6">
                <div class="item">
                    <div class="thumb">
                        <a href="#"><img src="assets/img/wanka.jpeg" alt="Thumb"></a>
                        <div class="date"><strong>16</strong> <span>Aug</span></div>
                    </div>
                    <div class="info">
                        <div class="meta">
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-user-circle"></i> Editor</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-eye"></i> 5,206 Views</a>
                                </li>
                            </ul>
                        </div>
                        <h4>
                            <a href="#">Bauchi Commissioner for Humanitarian and Disaster Management Assumes Office</a>
                        </h4>
                        <p>
                            Hajiya Hajara Yakubu Wanka, the pioneer Commissioner of the newly established Bauchi State Ministry of Humanitarian Affairs and Disaster Management, officially assumed duty on Wednesday, 16th August 2023. She called on the management and staff to work together for the benefit of the citizens.
                        </p>
                        <p>
                            Wanka pledged to run an open-door leadership style, implementing policies in line with Governor Bala Abdulkadir Mohammed's focus on "Bauchi First." The head of NCTO, Mallam Ibrahim Rufa’i, welcomed the new commissioner and pledged support for the overall development of the State.
                        </p>
                    </div>
                </div>
            </div>
            <!-- End News 1 -->

            <!-- News 2 -->
            <!-- Add more news items as needed -->

        </div>
    </div>
</div>
<!-- End Blog -->



    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-dark text-light">
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 item">
                        <div class="f-item about">
                            <!-- <img src="assets/img/logo-light.png" alt="Logo"> -->
                            <h2 style="color: white; font-weight: bold; font-size: 24px; text-decoration: underline;">MHADM</h2>

                            <p>
                                Excellence decisively nay man yet impression for contrasted remarkably. There spoke happy for you are out. Fertile how old address did showing.
                            </p>
                            <form action="#">
                                <input type="email" placeholder="Your Email" class="form-control" name="email">
                                <button type="submit"> <i class="arrow_right"></i></button>  
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Quick LInk</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Home</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> About us</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Compnay History</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Features</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Blog Page</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item link">
                            <h4 class="widget-title">Community</h4>
                            <ul>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Career</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Leadership</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Strategy</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Services</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> History</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-angle-right"></i> Components</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 item">
                        <div class="f-item contact-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            <div class="address">
                                <ul>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-home"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Address:</strong>
                                            5919 Trussville Crossings Pkwy, Birmingham
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Email:</strong>
                                            <a href="mailto:info@validtheme.com">info@validtheme.com</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                        <div class="content">
                                            <strong>Phone:</strong>
                                            <a href="tel:2151234567">+123 34598768</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2021. All Rights Reserved by <a href="#">HumSad</a></p>
                    </div>
                    <div class="col-lg-6 text-end link">
                        <ul>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                            <li>
                                <a href="#">Privacy</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

<!-- jQuery Frameworks -->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/modernizr.custom.13711.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<!-- Initialize wow.js -->
<script>
    new WOW().init();
</script>

<!-- Additional Scripts -->
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/progress-bar.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/count-to.js"></script>
<script src="assets/js/YTPlayer.min.js"></script>
<script src="assets/js/validnavs.js"></script>
<script src="assets/js/main.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const video = document.getElementById("background-video");
        const textElement = document.getElementById("video-text");

        video.addEventListener("canplaythrough", function () {
            const newText = "Welcome To Bauchi Chamber Of Commerce, Industry Mines and Agriculture Official Website";
            textElement.textContent = newText;
        });

        // Uncomment the line below if you want to update the text after a specific time
         setTimeout(() => textElement.textContent = "New Text After Some Time", 5000); // Update text after 5 seconds
    });
</script>


</body>
</html>
