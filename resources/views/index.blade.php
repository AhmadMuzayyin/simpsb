<!DOCTYPE html>
<html lang="zxx">

   <head>
      <!--Meta Tags-->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content=""/>
      <meta name="keywords" content=""/>

      <!--Favicons-->
      <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/img/favicon.ico') }}" />

      <!--Page Title-->
      <title>Nekaton - Responsive School Template</title>
      
      <!-- Bootstrap core CSS -->
      <link href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Google Font  -->
      <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800|Roboto:300,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
      <!-- Icofont CSS --> 
      <link rel="stylesheet" href="{{ url('assets/css/icofont.min.css') }}">
      <!-- Meanmenu CSS --> 
      <link rel="stylesheet" href="{{ url('assets/css/meanmenu.min.css') }}">
      <!--- owl carousel Css-->
      <link rel="stylesheet" href="{{ url('assets/owlcarousel/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ url('assets/owlcarousel/css/owl.theme.default.min.css') }}">
      <!-- animate CSS -->
      <link rel="stylesheet" href="{{ url('assets/css/animate.css') }}">
      <!-- venobox -->
      <link rel="stylesheet" href="{{ url('assets/venobox/css/venobox.min.css') }}" />
      <!-- Style CSS --> 
      <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
      <!-- Responsive  CSS -->
      <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}">
   </head>

   <body id="main">
      
      <!-- START PRELOADER -->
      <div id="page-preloader">
         <div class="loader"></div>
         <div class="loa-shadow"></div>
      </div>
      <!-- END PRELOADER -->

      <!-- START HEADER SECTION -->
      <header class="main-header">
         <!-- START TOP AREA -->
         <div class="top-area">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12 col-12 text-lg-left text-center">
                     <div class="header-social">
                        <ul>
                           <li><a href="#"><i class="icofont-facebook"></i></a></li>
                           <li><a href="#"><i class="icofont-twitter"></i></a></li>
                           <li><a href="#"><i class="icofont-youtube"></i></a></li>
                           <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-8 col-md-12 col-sm-12 col-12 text-lg-right text-center">
                     <div class="top-menu">
                        <ul>
                           <li><a href="#"><i class="icofont-location-pin"></i>Myers Street, Brooklyn, NY 1212</a></li>
                           <li><a href="#"><i class="icofont-phone"></i>+88 0675 1034</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- end col -->
               </div>
            </div>
         </div>
         <!-- END TOP AREA -->

         <!-- START LOGO AREA -->
         <div class="logo-area">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-3 col-12 mx-auto text-lg-left text-center pl-0 mb-lg-0 mb-4">
                     <div class="logo">
                        <a href="index.html">
                        <img class="img-fluid" src="assets/img/logo.png" alt="">
                        </a>
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-9 col-12">
                     <div class="header-info-box">
                        <div class="header-info-icon">
                           <i class="icofont-envelope"></i>
                        </div>
                        <h5>Connect With Us</h5>
                        <p>info@yoursite.com</p>
                     </div>
                     <div class="header-info-box">
                        <div class="header-info-icon">
                           <i class="icofont-headphone-alt-3"></i>
                        </div>
                        <h5>Call For Inquiry</h5>
                        <p>123-456-789</p>
                     </div>
                     <div class="header-info-box">
                        <div class="header-info-icon">
                           <i class="icofont-eye-open"></i>
                        </div>
                        <h5>Opening hours</h5>
                        <p>Mon - Sun : 09:00 - 16:00</p>
                     </div>
                  </div>
                  <!-- end col -->
               </div>
            </div>
         </div>
         <!-- END LOGO AREA -->

         <!-- START NAVIGATION AREA -->
         <div class="sticky-menu">
            <div class="mainmenu-area">
               <div class="auto-container">
                  <div class="row">
                     <div class="col-lg-9 d-none d-lg-block d-md-none">
                        <nav class="navbar navbar-expand-lg justify-content-left">
                           <ul class="navbar-nav">
                              <li class="active"><a href="index.html" class="nav-link">Home</a></li>
                              <li><a href="about.html" class="nav-link">About Us</a></li>
                              <li class="dropdown"><a class="nav-link" href="services.html">Services</a>
                                 <ul class="dropdown-menu">
                                    <li><a href="services.html">Services List</a></li>
                                    <li><a href="single-service.html">Books & Library</a></li>
                                    <li><a href="single-service.html">Day Care Facilities</a></li>
                                    <li><a href="single-service.html">Transport Service</a></li>
                                    <li><a href="single-service.html">Online Admission</a></li>
                                 </ul>    
                              </li>
                              <li><a href="gallery.html" class="nav-link">Gallery</a></li>
                              <li class="dropdown"><a class="nav-link" href="#">Pages</a>
                                 <ul class="dropdown-menu">
                                    <li><a href="testimonial.html">Testimonial</a></li>
                                    <li><a href="teachers.html">Teachers</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="404.html">404</a></li>
                                 </ul>
                              </li>
                              <li class="dropdown"><a class="nav-link" href="blog.html">Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                </ul>
                              </li>
                              <li><a href="contact.html" class="nav-link">Contact</a></li>
                           </ul>
                        </nav>
                     </div>
                     <div class="col-lg-3 d-none d-lg-block d-md-none text-right">
                        <a href="#" class="header-search"  data-toggle="modal" data-target=".header-search-modal"><i class="icofont-search-2"></i></a>
                     </div>

                     <!-- search modal -->
                     <div class="modal fade header-search-modal" tabindex="-1" role="dialog">
                       <div class="modal-dialog modal-lg">
                         <div class="modal-content">
                           <div class="modal-body">
                              <button type="button" class="close" data-dismiss="modal"><i class="icofont-close-line"></i></button>
                              <form class="header-search-box">
                                <div class="header-search-body row no-gutters align-items-center">
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control" type="search" placeholder="Search...">
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-lg header-search-btn" type="submit"><i class="icofont-search-2"></i></button>
                                    </div>
                                </div>
                              </form>
                           </div>
                         </div>
                       </div>
                     </div>
                     <!-- end search modal -->

                  </div>
               </div>
            </div>
         </div>
         <!-- END NAVIGATION AREA --> 
      </header>
      <!-- END HEADER SECTION -->

      <!-- START SLIDER SECTION -->
      <section class="slider-section">
         <div class="home-slides owl-carousel owl-theme">
            <div class="home-single-slide" data-background="assets/img/bg/slide1.jpg">
               <div class="home-single-slide-overlay"></div>
               <div class="home-single-slide-inner">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="home-single-slide-dec">
                              <h4>Small class sizes</h4>
                              <h2>Mindful Curriculum</h2>
                              <p>we provide three teachers per section<br>to take class.</p>
                              <div class="home-single-slide-button mt-4">
                                 <a href="#" class="slide-btn-one mb-lg-0 mb-md-0 mb-2">Learn More <i class="icofont-long-arrow-right"></i></a>
                                 <a href="#" class="slide-btn-two">Contact Us</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end single slider -->
            <div class="home-single-slide" data-background="assets/img/bg/slide2.jpg">
               <div class="home-single-slide-overlay"></div>
               <div class="home-single-slide-inner">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="home-single-slide-dec">
                              <h4>Send message to parents</h4>
                              <h2>Message Notification</h2>
                              <p>notify parents by studied subjects and details<br>on daily basis.</p>
                              <div class="home-single-slide-button mt-4">
                                 <a href="#" class="slide-btn-two mb-lg-0 mb-md-0 mb-2">Our Services</a>
                                 <a href="#" class="slide-btn-one">Read More <i class="icofont-long-arrow-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end single slider -->
            <div class="home-single-slide" data-background="assets/img/bg/slide3.jpg">
               <div class="home-single-slide-overlay"></div>
               <div class="home-single-slide-inner">
                  <div class="container">
                     <div class="row">
                        <div class="col-lg-8">
                           <div class="home-single-slide-dec">
                              <h4>New opportunity to learn</h4>
                              <h2>Comfort Daycare</h2>
                              <p>notify parents by studied subjects and details<br>on daily basis.</p>
                              <div class="home-single-slide-button mt-4">
                                 <a href="#" class="slide-btn-one mb-lg-0 mb-md-0 mb-2">Learn More <i class="icofont-long-arrow-right"></i></a>
                                 <a href="#" class="slide-btn-two">Contact Us</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- end single slider -->
         </div>
      </section>
      <!-- END SLIDER SECTION  -->

      <!-- START WELCOME SECTION -->
      <section id="habout" class="welcome-section-padding">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-lg-0 mb-5">
                  <div class="about-wel-des">
                     <h6 class="theme-color"><i class="icofont-plus"></i> Nekaton School Info</h6>
                     <h2 class="my-4">Invest in Your Student’s Future</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt utd labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco lab nisi ut aliquip ex ea commodo consequat.</p>
                     <p class="my-4"><b>Pellentesque Sed ut perspiciatis unde omnis iste nat error sitre voluptatem accusantium udema doloremque laudantium, totarmd aperiam.</b></p>
                     <div class="about-btn wow fadeInUp">
                        <a href="#" class="about-us-into-btn-2 mr-2">Read More</a>
                        <a href="#" class="about-us-into-btn-icon"><i class="icofont icofont-caret-right"></i></a>
                     </div>
                  </div>
               </div>
               <!-- end col -->
               <div class="col-lg-6 col-md-6 col-12">
                  <div class="about-wel-img-sec img-overlay">
                     <a class="venobox" data-autoplay="true" data-vbtype="video" data-title="Intro Video" data-gall="videoh" href="https://www.youtube.com/embed/Oq61TxejZ5g"><i class="icofont-play-alt-2"></i></a>
                     <div class="img-wrap">
                        <img class="img-fluid" src="assets/img/bg/home-about-img.jpg" alt="">
                     </div>
                  </div>
               </div>
               <!-- end col -->
            </div>
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END WELCOME SECTION -->

      <!-- START SERVICES SECTION -->
      <section id="services" class="section-padding">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-7 col-md-7 col-12 mx-auto text-center">
                  <div class="section-title">
                     <h6 class="theme-color">Think Out Side The Box</h6>
                     <h2>Why Choose Nekaton</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
               </div>
            </div>
            <!-- end section title -->
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center mb-lg-0 mb-md-0 mb-sm-4 mb-4">
                  <div class="single-service-item shadow bg-white">
                     <div class="icon-holder mb-3">
                        <div class="service-item-icon-bg">
                           <i class="icofont-read-book"></i> 
                        </div>
                     </div>
                     <div class="service-item-text-holder">
                        <h4>Books & Library</h4>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
                        <a class="thm-btn" href="#">READ MORE</a>
                     </div>
                  </div>
               </div>
               <!-- End single service item -->
               <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center mb-lg-0 mb-md-0 mb-sm-4 mb-4">
                  <div class="single-service-item shadow bg-white">
                     <div class="icon-holder mb-3">
                        <div class="service-item-icon-bg">
                           <i class="icofont-teacher"></i>
                        </div>
                     </div>
                     <div class="service-item-text-holder">
                        <h4>Quality Teachers</h4>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
                        <a class="thm-btn" href="#">READ MORE</a>
                     </div>
                  </div>
               </div>
               <!-- End single service item -->
               <div class="col-lg-4 col-md-4 col-sm-12 col-12 text-center mb-lg-0 mb-md-0">
                  <div class="single-service-item shadow bg-white">
                     <div class="icon-holder mb-3">
                        <div class="service-item-icon-bg">
                           <i class="icofont-certificate-alt-1"></i>
                        </div>
                     </div>
                     <div class="service-item-text-holder">
                        <h4>Great Certification</h4>
                        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod facer possim assum.</p>
                        <a class="thm-btn" href="#">READ MORE</a>
                     </div>
                  </div>
               </div>
               <!-- End single service item -->
            </div>
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END SERVICES SECTION -->

      <!-- START COUNTER SECTION -->
      <section id="counter" class="counter-padding overlay section-back-image" data-background="assets/img/bg/counter-bg.jpg">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-8 col-md-8 col-12 mx-lg-auto mx-md-auto mx-0">
                  <div class="counter-info">
                     <div class="counter-icon">
                        <i class="icofont-history"></i>
                     </div>
                     <div class="counter-des">
                        <h2><span>Doing the right thing, </span> <br> at the right time</h2>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row mt-5 wow fadeInUp">
               <div class="col-lg-8 col-md-8 col-12 mx-lg-auto mx-md-auto mx-0 text-lg-left text-md-left text-center">
                  <div class="row">
                     <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-lg-0 mb-md-0 mb-sm-4 mb-4">
                        <div class="single-counter-item">
                           <h4 class="timer">121</h4>
                           <p>Quality Teachers</p>
                        </div>
                     </div>
                     <!-- End single counter item -->
                     <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-lg-0 mb-md-0 mb-sm-4 mb-4">
                        <div class="single-counter-item">
                           <h4 class="timer">342</h4>
                           <p>Enrolled Students</p>
                        </div>
                     </div>
                     <!-- End single counter item -->
                     <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-4">
                        <div class="single-counter-item">
                           <h4 class="timer">434</h4>
                           <p>Satisfied Parents</p>
                        </div>
                     </div>
                     <!-- End single counter item -->
                     <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="single-counter-item">
                           <h4 class="timer">562</h4>
                           <p>Successful Events</p>
                        </div>
                     </div>
                     <!-- End single counter item -->
                  </div>
               </div>
            </div>
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END COUNTER SECTION -->

      <!-- START TEAM SECTION -->
      <section id="team" class="section-padding">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-7 col-md-7 col-12 mx-auto text-center">
                  <div class="section-title">
                     <h6 class="theme-color">We love what we do</h6>
                     <h2>Our Experts Teachers</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
               </div>
            </div>
            <!-- end section title -->
            <div class="row mb-5">
               <div class="col">
                  <div class="team-slides owl-carousel owl-theme">
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="assets/img/team/1.jpg" alt="">
                           <div class="single-team-member-content">
                              <ul class="single-team-member-social">
                                 <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                 <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                 <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                 <li><a href="#"><i class="icofont-youtube"></i></a></li>
                              </ul>
                              <div class="single-team-member-text">
                                 <h4>Jone Doe</h4>
                                 <p>Swimming Teacher</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="assets/img/team/2.jpg" alt="">
                           <div class="single-team-member-content">
                              <ul class="single-team-member-social">
                                 <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                 <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                 <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                 <li><a href="#"><i class="icofont-youtube"></i></a></li>
                              </ul>
                              <div class="single-team-member-text">
                                 <h4>Jony Smith</h4>
                                 <p>Drawing Teacher</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="assets/img/team/3.jpg" alt="">
                           <div class="single-team-member-content">
                              <ul class="single-team-member-social">
                                 <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                 <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                 <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                 <li><a href="#"><i class="icofont-youtube"></i></a></li>
                              </ul>
                              <div class="single-team-member-text">
                                 <h4>Mark Hasen</h4>
                                 <p>Cultural Teacher</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="assets/img/team/4.jpg" alt="">
                           <div class="single-team-member-content">
                              <ul class="single-team-member-social">
                                 <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                 <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                 <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                 <li><a href="#"><i class="icofont-youtube"></i></a></li>
                              </ul>
                              <div class="single-team-member-text">
                                 <h4>Makaya Mgupo</h4>
                                 <p>Computer Teacher</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                     <div class="single-team-wrapper">
                        <div class="single-team-member">
                           <img class="img-fluid" src="assets/img/team/5.jpg" alt="">
                           <div class="single-team-member-content">
                              <ul class="single-team-member-social">
                                 <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                 <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                 <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                                 <li><a href="#"><i class="icofont-youtube"></i></a></li>
                              </ul>
                              <div class="single-team-member-text">
                                 <h4>Bredon Jesam</h4>
                                 <p>Poetry Teacher</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End single team item -->
                  </div>
               </div>
            </div>
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END TEAM SECTION -->

      <!-- START TESTIMONIAL & FAQ SECTION -->
      <section id="testimonial" class="section-padding overlay section-back-image" data-background="assets/img/bg/faq-bg.jpg">
         <div class="auto-container">
            <div class="row ml-lg-4 ml-md-4 ml-0 mr-lg-4 mr-md-4 mr-0">
               <div class="col-lg-6 col-md-12 col-12 mb-lg-0 mb-md-5 mb-5">
                  <div class="section-title white-title section-title-left">
                     <h2>Our Happy Parents</h2>
                  </div>
                  <!-- end section title -->
                  <div class="owl-carousel owl-theme testimonial-wrapper">
                     <div class="item" data-dot="<img class='testimonial-thumb rounded' src='assets/img/testimonial/1.png'/>">
                        <div class="testimonial-inner">
                           <div class="tes-quote">
                              <i class="icofont-quote-left"></i>
                           </div>
                           <div class="tes-dec">
                              <h4>I love this Nursery school was the best decision</h4>
                              <p class="author-des">Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema doloremque laudantium, totarmd aperiam, eaque ipsa quae ab illa inventore veritatis et quasi lorem architecto beatae vitae dicta sun explicabo.</p>
                              <p class="tes-author"><strong>Jone Doe</strong> - Artist</p>
                           </div>
                        </div>
                     </div>
                     <!-- end single item -->
                     <div class="item" data-dot="<img class='testimonial-thumb rounded' src='assets/img/testimonial/2.png'/>">
                        <div class="testimonial-inner">
                           <div class="tes-quote">
                              <i class="icofont-quote-left"></i>
                           </div>
                           <div class="tes-dec">
                              <h4>A wonderful environment! i am so impressed at all</h4>
                              <p class="author-des">Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema doloremque laudantium, totarmd aperiam, eaque ipsa quae ab illa inventore veritatis et quasi lorem architecto beatae vitae dicta sun explicabo.</p>
                              <p class="tes-author"><strong>Mark Doe</strong> - Doctor</p>
                           </div>
                        </div>
                     </div>
                     <!-- end single item -->
                     <div class="item" data-dot="<img class='testimonial-thumb rounded' src='assets/img/testimonial/3.png'/>">
                        <div class="testimonial-inner">
                           <div class="tes-quote">
                              <i class="icofont-quote-left"></i>
                           </div>
                           <div class="tes-dec">
                              <h4>Everything is just wonderful! teachers staff all work together</h4>
                              <p class="author-des">Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema doloremque laudantium, totarmd aperiam, eaque ipsa quae ab illa inventore veritatis et quasi lorem architecto beatae vitae dicta sun explicabo.</p>
                              <p class="tes-author"><strong>Mahan Selon</strong> - Lawyer</p>
                           </div>
                        </div>
                     </div>
                     <!-- end single item -->
                  </div>
               </div>
               <!-- end col -->
               <div class="col-lg-6 col-md-12 col-12 mt-lg-0 mt-4">
                  <div class="section-title white-title section-title-left">
                     <h2>Frequently Asked Question</h2>
                  </div>
                  <!-- end section title -->
                  <div class="panel-group faq-home-accor" id="accordion">
                     <div class="panel panel-default mb-3">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel1">Where will I find the teachers list? <i class=" text-white icofont icofont-minus"></i></a>
                           </h5>
                        </div>
                        <div id="panel1" class="panel-collapse collapse show">
                           <div class="panel-body text-white">
                              <p>Cras sit amet nibh libero, in gravida nulla. Nulla velmetus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate.</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default mb-3">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel2">What can I expect on the first day? <i class=" text-white icofont icofont-plus"></i></a>
                           </h5>
                        </div>
                        <div id="panel2" class="panel-collapse collapse">
                           <div class="panel-body text-white">
                              <p>Cras sit amet nibh libero, in gravida nulla. Nulla velmetus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate.</p>
                           </div>
                        </div>
                     </div>
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <h5 class="panel-title">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#panel3">Where do I drop off my child? <i class=" text-white icofont icofont-plus"></i></a>
                           </h5>
                        </div>
                        <div id="panel3" class="panel-collapse collapse">
                           <div class="panel-body text-white">
                              <p>Cras sit amet nibh libero, in gravida nulla. Nulla velmetus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end col -->
            </div>
            <!--  end row -->
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END TESTIMONIAL & FAQ SECTION -->

      <!-- START PORTFOLIO SECTION -->
      <section id="portfolio" class="section-padding">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-7 col-md-7 col-12 mx-auto text-center">
                  <div class="section-title">
                     <h6 class="theme-color">We love our work</h6>
                     <h2>Image Gallery</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
               </div>
            </div>
            <!-- end section title -->
            <div class="row mb-5">
               <div class="col-12 mx-auto text-center wow fadeInDown">
                  <div class="portfolio-filter-menu">
                     <ul>
                        <li class="filter active"  data-filter="*">All Works</li>
                        <li class="filter"  data-filter=".one">Learning</li>
                        <li class="filter"  data-filter=".two">Games</li>
                        <li class="filter"  data-filter=".three">School</li>
                        <li class="filter"  data-filter=".four">Class</li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- end portfolio menu list -->
            <div class="row project-list">
               <div class="col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-4 mb-4 two">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="assets/img/gallery/5.jpg" alt="" />
                     <figcaption>
                        <h3>Portfolio Title</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="assets/img/gallery/5.jpg" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-4 mb-4 four">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="assets/img/gallery/2.jpg" alt="" />
                     <figcaption>
                        <h3>Portfolio Title</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="assets/img/gallery/2.jpg" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 mb-lg-4 mb-md-4 mb-4 two four">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="assets/img/gallery/6.jpg" alt="" />
                     <figcaption>
                        <h3>Portfolio Title</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="assets/img/gallery/6.jpg" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 two mb-md-4 mb-4 one three">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="assets/img/gallery/1.jpg" alt="" />
                     <figcaption>
                        <h3>Portfolio Title</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="assets/img/gallery/1.jpg" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 mb-4 two one">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="assets/img/gallery/4.jpg" alt="" />
                     <figcaption>
                        <h3>Portfolio Title</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="assets/img/gallery/4.jpg" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
               <div class="col-lg-4 col-md-6 col-12 one three four">
                  <figure class="portfolio-sin-item">
                     <img class="img-fluid" src="assets/img/gallery/3.jpg" alt="" />
                     <figcaption>
                        <h3>Portfolio Title</h3>
                        <div class="port-icon mt-3">
                           <a class="icon-ho venobox" href="assets/img/gallery/3.jpg" data-title="PORTFOLIO TITTLE" data-gall="gall1"><i class="icofont-eye"></i></a>
                           <a class="icon-ho" href="#"><i class="icofont-link"></i></a>
                        </div>
                     </figcaption>
                  </figure>
               </div>
               <!--  end single item -->
            </div>
            <div class="row mt-4">
               <div class="col-12 mx-auto text-center wow fadeInDown">
                  <a href="#" class="port-btn">Load More <i class="icofont-bubble-right"></i></a>
               </div>
            </div>
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END PORTFOLIO SECTION -->

      <!-- START BLOG SECTION -->
      <section id="blog" class="section-padding bg-gray">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-7 col-md-7 col-12 mx-auto text-center">
                  <div class="section-title">
                     <h6 class="theme-color">Sometime we want to share</h6>
                     <h2>Latest Blog Post</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  </div>
               </div>
            </div>
            <!-- end section title -->
            <div class="row mb-5">
               <div class="col">
                  <div class="blog-slides owl-carousel owl-theme">
                     <div class="blog-home-single">
                        <div class="blog-home-image">
                           <img class="img-fluid" src="assets/img/blog/1.jpg" alt=""/>
                           <div class="blog-home-post-date">
                              <i class="icofont-clock-time"></i>
                              <span>May 18, 2021</span>
                           </div>
                        </div>
                        <div class="blog-home-des-wrap">
                           <div class="blog-home-des-left">
                              <ul>
                                 <li><i class="icofont-comment"></i> <br> 3</li>
                                 <li><i class="icofont-heart"></i> <br> 125</li>
                                 <li><i class="icofont-eye"></i> <br> 354</li>
                              </ul>
                           </div>
                           <div class="blog-home-des-right">
                              <div class="havator">
                                 <img class="img-fluid" src="assets/img/testimonial/1.png" alt=""/>
                              </div>
                              <div class="blog-home-meta">
                                 <span>Post By<a href="#">Nekaton</a></span>
                                 <span>School,Learn</span>
                              </div>
                              <div class="blog-home-content">
                                 <h4><a href="#">Nice Designing Classroom</a></h4>
                                 <p>Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema…</p>
                              </div>
                              <div class="blog-home-btn">
                                 <a href="#"> Read More <i class="icofont-double-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--  end single item -->
                     <div class="blog-home-single">
                        <div class="blog-home-image">
                           <img class="img-fluid" src="assets/img/blog/2.jpg" alt=""/>
                           <div class="blog-home-post-date">
                              <i class="icofont-clock-time"></i>
                              <span>May 17, 2021</span>
                           </div>
                        </div>
                        <div class="blog-home-des-wrap">
                           <div class="blog-home-des-left">
                              <ul>
                                 <li><i class="icofont-comment"></i> <br> 2</li>
                                 <li><i class="icofont-heart"></i> <br> 156</li>
                                 <li><i class="icofont-eye"></i> <br> 237</li>
                              </ul>
                           </div>
                           <div class="blog-home-des-right">
                              <div class="havator">
                                 <img class="img-fluid" src="assets/img/testimonial/2.png" alt=""/>
                              </div>
                              <div class="blog-home-meta">
                                 <span>Post By<a href="#">Nekaton</a></span>
                                 <span>School,Learn</span>
                              </div>
                              <div class="blog-home-content">
                                 <h4><a href="#">Environment for learning</a></h4>
                                 <p>Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema…</p>
                              </div>
                              <div class="blog-home-btn">
                                 <a href="#"> Read More <i class="icofont-double-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--  end single item -->
                     <div class="blog-home-single">
                        <div class="blog-home-image">
                           <img class="img-fluid" src="assets/img/blog/4.jpg" alt=""/>
                           <div class="blog-home-post-date">
                              <i class="icofont-clock-time"></i>
                              <span>May 16, 2021</span>
                           </div>
                        </div>
                        <div class="blog-home-des-wrap">
                           <div class="blog-home-des-left">
                              <ul>
                                 <li><i class="icofont-comment"></i> <br> 5</li>
                                 <li><i class="icofont-heart"></i> <br> 244</li>
                                 <li><i class="icofont-eye"></i> <br> 682</li>
                              </ul>
                           </div>
                           <div class="blog-home-des-right">
                              <div class="havator">
                                 <img class="img-fluid" src="assets/img/testimonial/3.png" alt=""/>
                              </div>
                              <div class="blog-home-meta">
                                 <span>Post By<a href="#">Nekaton</a></span>
                                 <span>School,Learn</span>
                              </div>
                              <div class="blog-home-content">
                                 <h4><a href="#">Kids are enjoying their class</a></h4>
                                 <p>Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema…</p>
                              </div>
                              <div class="blog-home-btn">
                                 <a href="#"> Read More <i class="icofont-double-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--  end single item -->
                     <div class="blog-home-single">
                        <div class="blog-home-image">
                           <img class="img-fluid" src="assets/img/blog/3.jpg" alt=""/>
                           <div class="blog-home-post-date">
                              <i class="icofont-clock-time"></i>
                              <span>May 15, 2021</span>
                           </div>
                        </div>
                        <div class="blog-home-des-wrap">
                           <div class="blog-home-des-left">
                              <ul>
                                 <li><i class="icofont-comment"></i> <br> 7</li>
                                 <li><i class="icofont-heart"></i> <br> 149</li>
                                 <li><i class="icofont-eye"></i> <br> 352</li>
                              </ul>
                           </div>
                           <div class="blog-home-des-right">
                              <div class="havator">
                                 <img class="img-fluid" src="assets/img/testimonial/1.png" alt=""/>
                              </div>
                              <div class="blog-home-meta">
                                 <span>Post By<a href="#">Nekaton</a></span>
                                 <span>School,Learn</span>
                              </div>
                              <div class="blog-home-content">
                                 <h4><a href="#">Children day celebration</a></h4>
                                 <p>Pellentesque Sed ut perspiciatis unde omnis iste natus error sitre voluptatem accusantium udema…</p>
                              </div>
                              <div class="blog-home-btn">
                                 <a href="#"> Read More <i class="icofont-double-right"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--  end single item -->
                  </div>
               </div>
            </div>
         </div>
         <!--- END CONTAINER -->
      </section>
      <!-- END BLOG SECTION -->

      <!-- START NEWSLETTER SECTION -->
      <section id="hnewsletter" class="hnewslettr-padding bg-theme">
         <div class="auto-container">
            <div class="row">
               <div class="col-lg-7 col-12 mb-lg-0 mb-4">
                  <div class="hnewslettr-left">
                     <h2>Subscribe to our Newsletter</h2>
                     <p>Enter your email and we'll send you details about new courses and events.</p>
                  </div>
               </div>
               <!-- end col -->
               <div class="col-lg-5 mt-3">
                  <div class="hnewslettr-form">
                     <form action="#" method="post">
                        <div class="form-group">
                           <span class="form-icon"><i class="icofont-envelope"></i></span>
                           <input name="semail" class="form-control" placeholder="Your Email Address" type="email">
                           <button type="submit" class="btn news-btn">Subscribe</button>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- end col -->
            </div>
         </div>
      </section>
      <!-- START NEWSLETTER SECTION -->

      <!-- START FOOTER -->
      <footer class="footer-section">
         <div id="top-footer" class="overlay-2 section-back-image-2" data-background="assets/img/bg/footer-bg.jpg">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                     <div class="footer-widget-title col-12 p-0">
                        <div class="logo">
                           <a href="index.html">
                              <img class="img-fluid" src="assets/img/logo.png" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="footer-widget-inner">
                        <p>Pellentesque Sed ut perspiciatisd oms iste natus error sitr undelr voluptateml accusantium udema dolore lomquede laudantium, totarmd aperiam, eaquere ipsa quae ab illa inventore veritatis etr quasi lorem architecto.</p>
                        <div class="img-menu float-lg-left float-none mt-3">
                           <div class="footer-social">
                              <ul>
                                 <li><a class="social-fb" href="#"><i class="icofont-instagram"></i></a></li>
                                 <li><a class="social-tw" href="#"><i class="icofont-twitter"></i></a></li>
                                 <li><a class="social-gp" href="#"><i class="icofont-youtube"></i></a></li>
                                 <li><a class="social-fb" href="#"><i class="icofont-linkedin"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
                     <div class="footer-widget-title col-12 p-0">
                        <h4>Latest Post</h4>
                     </div>
                     <div class="footer-widget-inner">
                        <div class="singleRecpost">
                           <img src="assets/img/blog/1.jpg" alt="" class="img-fluid">
                           <h6 class="recTitle">
                              <a href="#">Designing Learner-Centered Classroom</a>
                           </h6>
                           <p class="posted-on">18 MAY 2021</p>
                        </div>
                        <div class="singleRecpost">
                           <img src="assets/img/blog/2.jpg" alt="" class="img-fluid">
                           <h6 class="recTitle">
                              <a href="#">Building an environment for learning</a>
                           </h6>
                           <p class="posted-on">17 MAY 2021</p>
                        </div>
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-5 mb-5">
                     <div class="footer-widget-title col-12 p-0">
                        <h4>Useful Links</h4>
                     </div>
                     <div class="footer-widget-inner">
                        <ul>
                           <li><a href="#"><i class="icofont-circled-right"></i> Our Classes</a></li>
                           <li><a href="#"><i class="icofont-circled-right"></i> Latest Services</a></li>
                           <li><a href="#"><i class="icofont-circled-right"></i> Our Teachers</a></li>
                           <li><a href="#"><i class="icofont-circled-right"></i> Image Gallery</a></li>
                           <li><a href="#"><i class="icofont-circled-right"></i> Frequently Question</a></li>
                           <li><a href="#"><i class="icofont-circled-right"></i> Client Testimonial</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-3 col-md-6 col-sm-12 col-12 mb-lg-0 mb-md-0 mb-sm-0 mb-0">
                     <div class="footer-widget-title col-12 p-0">
                        <h4>Get In Touch</h4>
                     </div>
                     <div class="footer-widget-inner">
                        <div class="footer-contact-widget">
                           <div class="footer-contact-sin">
                              <div class="footer-contact-sin-left">
                                 <i class="icofont-pin"></i>
                              </div>
                              <div class="footer-contact-sin-right">
                                 <p>Brooklyn, NY 11212</p>
                              </div>
                           </div>
                           <div class="footer-contact-sin">
                              <div class="footer-contact-sin-left">
                                 <i class="icofont-smart-phone"></i>
                              </div>
                              <div class="footer-contact-sin-right">
                                 <p>123-456-0975</p>
                              </div>
                           </div>
                           <div class="footer-contact-sin">
                              <div class="footer-contact-sin-left">
                                 <i class="icofont-envelope"></i>
                              </div>
                              <div class="footer-contact-sin-right">
                                 <p>info@yoursite.com</p>
                              </div>
                           </div>
                           <div class="footer-contact-sin">
                              <div class="footer-contact-sin-left">
                                 <i class="icofont-clock-time"></i>
                              </div>
                              <div class="footer-contact-sin-right">
                                 <p>Mon - Sun : 09:00 - 18:00</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- end col -->
               </div>
            </div>
         </div>
         <div id="bottom-footer" class="bg-gray">
            <div class="auto-container">
               <div class="row mb-lg-0 mb-md-4 mb-4">
                  <div class="col-lg-6 col-md-12 col-12">
                     <p class="copyright-text">Copyright © 2021 <a href="#">Nekaton</a> | All Rights Reserved</p>
                  </div>
                  <!-- end col -->
                  <div class="col-lg-6 col-md-12 col-12">
                     <div class="footer-menu">
                        <ul>
                           <li><a href="#">Home</a></li>
                           <li><a href="#">About Us</a></li>
                           <li><a href="#">Contact Us</a></li>
                           <li><a href="#">Privacy Policy</a></li>
                        </ul>
                     </div>
                  </div>
                  <!-- end col -->
               </div>
            </div>
         </div>
      </footer>
      <!-- END FOOTER -->

      <!-- Latest jQuery -->
      <script src="{{ url('assets/js/jquery-2.2.4.min.js') }}"></script>
      <!-- popper js -->
      <script src="{{ url('assets/bootstrap/js/popper.min.js') }}"></script>
      <!-- Latest compiled and minified Bootstrap -->
      <script src="{{ url('assets/bootstrap/js/bootstrap.min.js') }}"></script>
      <!-- Meanmenu Js -->
      <script src="{{ url('assets/js/jquery.meanmenu.js') }}"></script>
      <!-- Sticky JS -->
      <script src="{{ url('assets/js/jquery.sticky.js') }}"></script>
      <!-- owl-carousel min js  -->
      <script src="{{ url('assets/owlcarousel/js/owl.carousel.min.js') }}"></script>
      <!-- isotope js -->
      <script src="{{ url('assets/js/isotope.3.0.6.min.js') }}"></script>
      <!-- venobox js -->
      <script src="{{ url('assets/venobox/js/venobox.min.js') }}"></script>    
      <!-- jquery appear js  -->
      <script src="{{ url('assets/js/jquery.appear.js') }}"></script>
      <!-- countTo js -->
      <script src="{{ url('assets/js/jquery.inview.min.js') }}"></script>
      <!-- scrolltopcontrol js -->
      <script src="{{ url('assets/js/scrolltopcontrol.js') }}"></script>
      <!-- WOW - Reveal Animations When You Scroll -->
      <script src="{{ url('assets/js/wow.min.js') }}"></script>
      <!-- scripts js -->
      <script src="{{ url('assets/js/scripts.js') }}"></script>
   </body>
</html>