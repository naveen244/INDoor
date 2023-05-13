<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>INDoor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.jpg" rel="icon">
  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">vatsaashish11@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +91 7982653996
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <a href="index.html" class="logo-pic"><img src="assets/img/logo.jpg" alt="" class="img-fluid"></a>
      <h1 class="logo"><a href="index.html">INDoor</a></h1>
    <div class="container d-flex align-items-center justify-content-between">
     

      

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#function">How it Works?</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Gallery</a></li>
          
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
      <h1>Welcome to INDoor</h1>
      <h2>We provide instant services at your door step.</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="about_container">
        <h3 class="heading">About Us</h3>
        <div class="row">
          <!-- <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left"> -->
            
          </div>
          <div class="about_content">
           
           
            <p class="content">
              INDoor aims at providing a platform to various services in the form of menial jobs along with providing employment 
              to the people carrying out these jobs. The services include carpentry, plumbing, electrical, cleaning work, 
              Pest-control, painting, etc. <br> <br>
              Booking a service on INDoor is simple—users need to sign up using either the website or via an application 
              by giving their name and mobile number and the specifications of the required category of work, description, 
              place, and preferred time.  Our team believes in continuous improvement and providing the best experience 
              through this brainchild. 
            </p>

            <!-- <p class="content">
            
            </p> -->
            <!-- <img src="assets/img/about.jpg" class="about_img" alt=""> -->
          </div>
        </div>

      </div>
    </section>

    <!-- ======= Why Us Section ======= -->
    <!-- <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box">
              <span>01</span>
              <h4>Lorem Ipsum</h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <span>02</span>
              <h4>Repellat Nihil</h4>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span>03</span>
              <h4> Ad ad velit qui</h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
          </div>

        </div>

      </div> -->
    <!-- </section>End Why Us Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row d-flex align-items-center">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div> -->
    <!-- </section>End Clients Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <span>Services</span>
          <h2>Services</h2>
          <p>Ease your life with quick door to door service</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box">
              <div class="icon"><i  class="bi bi-person-fill-gear"></a></i></div>
              <h4><a href="/carpentery.html">Carpenter</a></h4>
              <p>Fine carpenters, finer Wood Working</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="150">
            <div class="icon-box">
              <div class="icon"><i  class="bi bi-person-fill-gear"></i></div>
              <h4><a href="">Plumber</a></h4>
              <p>Entrust your plumbing services to us</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i  class="bi bi-person-fill-gear"></i></div>
              <h4><a href="">Electrician</a></h4>
              <p>Don’t pull the plug. Call us for exceptional electric service!</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
            <div class="icon-box">
              <div class="icon"><i  class="bi bi-person-fill-gear"></i></div>
              <h4><a href="">Cleaning</a></h4>
              <p>Expert house cleaning service you can trust!</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="icon-box">
              <div class="icon"><i  class="bi bi-person-fill-gear"></i></div>
              <h4><a href="">Pest Control</a></h4>
              <p>Say goodbye to pests for good with the help of a friendly professional pest control specialist</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i  class="bi bi-person-fill-gear"></i></div>
              <h4><a href="">Painting</a></h4>
              <p>Painters with a professional touch and a professional stroke</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i  class="bi bi-person-fill-gear"></i></div>
              <h4><a href="">Cooking</a></h4>
              <p>Painters with a professional touch and a professional stroke</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i  class="bi bi-person-fill-gear"></i></div>
              <h4><a href="">Mechanic</a></h4>
              <p>Painters with a professional touch and a professional stroke</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
            <div class="icon-box">
              <div class="icon"><i  class="bi bi-person-fill-gear"></i></div>
              <h4><a href="">Gardening</a></h4>
              <p>Painters with a professional touch and a professional stroke</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
   
      <div id="function"class="cta-container" data-aos="zoom-in">

        <div class="text-center">
           <h3>How it Works?</h3>
           <img class="grid-item"id="phone"src="assets/img/phone.gif" alt="phone">
           <img class="grid-item" id="arrow-1"src="assets/img/arrow.gif" alt="arrow">
           <img class="grid-item"id="worker"src="assets/img/worker.jpg" alt="worker">
           <img class="grid-item" id="arrow-2"src="assets/img/arrow.gif" alt="arrow">
           <img class="grid-item"id="tick"src="assets/img/Done.png" alt="tick">
          <!-- <p> Duis aute irure dolor in reprehenderit in .</p> -->
          <!-- <a class="cta-btn" href="#">Call To Action</a> -->
        </div>

      </div>
    <!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <span>Gallery</span>
          <h2>Gallery</h2>
          <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> -->
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <!-- <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul> -->
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>App 1</h4>
              <p>App</p> -->
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="CARPENTRY" style="font: size 40px;"><i class="bx bx-plus">CARPENTRY</i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Web 3</h4>
              <p>Web</p> -->
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PLUMBING"style="font: size 40px;"><i class="bx bx-plus">PLUMBING</i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>App 2</h4>
              <p>App</p> -->
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="CLEANING" style="font: size 40px;"><i class="bx bx-plus">CLEANING</i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Card 2</h4>
              <p>Card</p> -->
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="ELECTRICIAN"><i class="bx bx-plus">ELECTRICIAN</i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Web 2</h4>
              <p>Web</p> -->
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="CLEANING"><i class="bx bx-plus">CLEANING</i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>App 3</h4>
              <p>App</p> -->
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="COOKING"><i class="bx bx-plus">COOKING</i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Card 1</h4>
              <p>Card</p> -->
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PLUMBING"><i class="bx bx-plus">PLUMBING</i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Card 3</h4>
              <p>Card</p> -->
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="CARPENTRY"><i class="bx bx-plus">CARPENTRY</i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Web 3</h4>
              <p>Web</p> -->
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="ELECTRICIAN"><i class="bx bx-plus">ELECTRICIAN</i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/car-repair.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>Web 3</h4>
              <p>Web</p> -->
              <a href="assets/img/portfolio/car-repair.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="MECHANIC"><i class="bx bx-plus">MECHANIC</i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/paintre.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <!-- <h4>App 1</h4>
              <p>App</p> -->
              <a href="assets/img/portfolio/paintre.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PAINTER" style="font: size 40px;"><i class="bx bx-plus">PAINTER</i></a>
              <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
            </div>

        </div>
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <img src="assets/img/portfolio/Pest-control.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <!-- <h4>App 1</h4>
            <p>App</p> -->
            <a href="aassets/img/portfolio/Pest-control.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PEST-CONTROL" style="font: size 40px;"><i class="bx bx-plus">PEST-CONTROL</i></a>
            <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
          </div>

      </div>
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="assets/img/portfolio/cleaning.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <!-- <h4>Web 3</h4>
          <p>Web</p> -->
          <a href="assets/img/portfolio/cleaning.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="CLEANING"><i class="bx bx-plus">CLEANING</i></a>
          <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
        </div>
      </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing"> -->
      <!-- <div class="container">

        <div class="section-title">
          <span>Pricing</span>
          <h2>Pricing</h2>
          <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div> -->
    <!-- </section>End Pricing Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="section-title">
        <span>Our Team</span>
        <h2>Our Team</h2>
        <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> -->
      </div>

      <div class="container">

        <div class="row">
          <!-- 1st Member -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/aviral.jpeg" alt="">
              <h4> Aviral Srivastava</h4>
              <span>Android Developer</span>
              <!-- <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
              </p> -->
              <div class="social">
                <a href="https://twitter.com/Aviral_03"><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/aviral-3/"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/Aviral-3"><i class="bi bi-github"></i></a>
                
              </div>
            </div>
          </div>
           
          <!-- 2nd Member -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/Ashish.jpg" alt="Ashish">
              <h4>Ashish Vats</h4>
              <span>Web Developer</span>
              <!-- <p>
                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
              </p> -->
              <div class="social">
                <a href="https://twitter.com/AshishV77114614"><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/ashishvats11/"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/ashishvats11"><i class="bi bi-github"></i></a>
                
              </div>
            </div>
          </div>
            <!-- 3rd Member -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/Palak.jpg" alt="">
              <h4>Palak Garg</h4>
              <span>Web Developer</span>
              <!-- <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p> -->
              <div class="social">
                <a href="https://twitter.com/PalakGa17365579"><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/palak-garg-007/"><i class="bi bi-linkedin"></i></a>
                <a href="https://github.com/palakgarg007"><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>
            <!-- 4th Member -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/vatsal.jpg" alt="">
              <h4>Vatsal Agrawal</h4>
              <span>Web Developer</span>
              <!-- <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p> -->
              <div class="social">
                <a href="https://twitter.com/Vatsal0904"><i class="bi bi-twitter"></i></a>
                <a href="https://instagram.com/vatsalag_0904_"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/vatsal-agarwal-1431a6209/"><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>
              <!-- 5th Member -->
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/shubhi.jpg" alt="">
              <h4>Shubhi Agrawal</h4>
              <span>Android Developer</span>
              <!-- <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p> -->
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>
          <!-- 6th Member -->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/naveen.jpg" alt="Naveen">
              <h4>Naveen Bojja</h4>
              <span></span>
              <!-- <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p> -->
              <div class="social">
                <a href="https://twitter.com/BojjaNaveen9?t=LgqhNVD1l4jHPGbgT5irpA&s=09"><i class="bi bi-twitter"></i></a>
                <a href="https://instagram.com/naveen_tarakk_07?igshid=ZDdkNTZiNTM="><i class="bi bi-instagram"></i></a>
                <a href="http://www.linkedin.com/in/naveen994"><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>
           <!-- 7th Member -->
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/Priya Profile .jpg " alt="Priya Singh">
              <h4>Priya Singh</h4>
              <span></span>
              <!-- <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p> -->
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
               
                <a href="https://www.instagram.com/priyasingh_thakur123/"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/thakurpriyasingh/"><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>
           <!-- 8th Member -->
           <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
            <div class="member">
              <img src="assets/img/team/mrunmayee.jpg" alt="">
              <h4>MRUNMAYEE 
                MOHANTY</h4>
              <span></span>
              <!-- <p>
                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
              </p> -->
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                <a href=""><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <span>Contact</span>
          <h2>Contact</h2>
       
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>VIT Bhopal University,
                Bhopal-Indore Highway
                Kothrikalan, Sehore
                Madhya Pradesh - 466114</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <a href="#"></a> vatsaashish11@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+91 7982653996</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up">

          <div class="col-lg-6 ">
            
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.535869808488!2d76.84909305077937!3d23.07747148485124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397ce9ceaaaaaaab%3A0xa224b6b82b421f83!2sVellore%20Institute%20of%20Technology%20-%20VIT%20Bhopal!5e0!3m2!1sen!2sin!4v1677947239647!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-2">
                <input type="text" class="form-control col-lg-6" name="subject" id="phone" placeholder="Phone no." required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="How can we help you?" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>INDoor</h3>
              <p>
                VIT Bhopal University,
                Bhopal-Indore Highway
                Kothrikalan, Sehore
                Madhya Pradesh - 466114 <br>
                
                <strong>Phone:</strong> +91 7982653996<br>
                <strong>Email:</strong> vatsaashish11@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Carpenter</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Cleaning Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Electrician</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Painting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pest Control</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Plumber</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <!-- <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p> -->
            <form action="#" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>INDoor</span></strong>. All Rights Reserved
      </div>
      
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
 
  <script src="assets/js/main.js"></script>

</body>

</html>