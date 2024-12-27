<?php 
$cn = mysqli_connect("localhost", "root", "", "caradmin"); 

if (isset($_POST["file"])) {
    // Sanitize form data
    $image_path = mysqli_real_escape_string($cn, $_POST["image_path"]);
    $title = mysqli_real_escape_string($cn, $_POST["title"]);
    $description = mysqli_real_escape_string($cn, $_POST["description"]);

    // Insert into uploads table
    $query = "INSERT INTO uploads (image_path, title, description) VALUES ('$image_path', '$title', '$description')";
    $res = mysqli_query($cn, $query);
    
    if ($res) {
        echo "<script>alert('Data added successfully');</script>";  // Success alert
    } else {
        echo "<script>alert('Failed to add data');</script>";  // Failure alert
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Gp Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Font+Name:wght@weight&display=swap" rel="stylesheet">  
  <!-- Favicons -->
  <link href="assets/images/channels4_profile.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Aug 15 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
            <!-- Image logo -->
            <img src="channels4_profile (2).jpg" alt="GP Logo" class="logo-img">
            <!-- Text logo -->
            <h1 class="sitename">Lxury Dream Cars</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#portfolio">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-getstarted" href="forms/oderbook.php">Register Now</a>
    </div>
</header> 
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/311105566_1245981249514117_3081502749682302630_n.jpg" class="d-block w-100" alt="Image 1">
    </div>
    <div class="carousel-item">
      <img src="assets/images/470185346_1730852447693659_2570367717756276562_n.jpg" class="d-block w-100" alt="Image 2">
    </div>
    <div class="carousel-item">
      <img src="assets/images/313987183_1267600287352213_1182211246954497285_n (1).jpg" class="d-block w-100" alt="Image 3">
    </div>
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
      </button>
     <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
       <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
     </button>
         </div>

</div>
<main class="main">
<section id="about" class="about section">
<h1 class="about-heading">About Us</h1>
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-5 order-2 order-lg-1">
        <img src="assets/images/tr.jpg" class="img-fluid" alt="Luxury Wedding Cars" />
      </div>
      <div class="col-lg-6 order-2 order-lg-2 content">
        <h3>Creating Unforgettable Wedding Journeys</h3>
        <p class="fst-italic">
          At LuxuryDreamCar, we specialize in providing luxury wedding car rentals that add elegance and sophistication to your special day. Our fleet of premium vehicles ensures you travel in style and comfort.
        </p>
        <p>
          Our journey began with a passion for delivering exceptional experiences. From humble beginnings, we have grown into a trusted name in luxury wedding transportation. Our vision is to continue enhancing the joy of every couple by offering unparalleled luxury and top-notch service.
        </p>
        <ul class="features-list">
          <li><i class="bi bi-check2-all"></i> Exquisite collection of luxury cars for every wedding style.</li>
          <li><i class="bi bi-check2-all"></i> Customized packages to suit your unique wedding needs.</li>
          <li><i class="bi bi-check2-all"></i> Professional chauffeurs committed to exceptional service.</li>
          <li><i class="bi bi-check2-all"></i> Premium vehicles maintained to the highest standards.</li>
        </ul>
        <p>
          Your wedding day is a moment to cherish forever, and we are here to ensure your journey is as luxurious as your dreams. Trust us to provide the perfect vehicle and service to make your wedding day unforgettable.
        </p>
      </div>
    </div>
  </div>
  </section>

  <!-- Counter Section -->
   <section id="counter" class="counter section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">
      <div class="col-lg-3 col-md-6">
        <div class="counter-item">
          <i class="bi bi-car-front"></i>
          <span data-counter-up="200">0</span>
          <h4>Luxury Cars Available</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="counter-item">
          <i class="bi bi-award"></i>
          <span data-counter-up="150">0</span>
          <h4>Happy Clients Served</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="counter-item">
          <i class="bi bi-calendar-check"></i>
          <span data-counter-up="100">0</span>
          <h4>Weddings Covered</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="counter-item">
          <i class="bi bi-heart"></i>
          <span data-counter-up="99">0</span>
          <h4>Satisfied Couples</h4>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Counter Section -->
     <!-- Video Section -->
     <section id="video" class="video section">
<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">
    <div class="col-lg-6">
      <div class="video-content">
        <h3>Experience Luxury Like Never Before</h3>
        <p>Take a glimpse into our world of luxury cars and unforgettable journeys. Watch our featured videos to see how we elevate your special moments.</p>
        <p>At <strong>Luxury Dream Car Begowal</strong>, we believe that every journey is an experience that should be celebrated in style and sophistication. From exotic sports cars to elegant sedans, our fleet offers a unique blend of comfort, luxury, and performance. Whether you're planning a wedding, a romantic getaway, or a corporate event, we ensure that every moment is extraordinary.</p>
          <p>Our expertly curated collection of luxury vehicles is designed to cater to your every need, creating memories that last a lifetime. Watch our videos to discover the premium quality and unmatched service we offer, making your special occasions truly unforgettable.</p>
          <p>Our videos showcase not just the beauty of our vehicles, but also the premium service and exceptional care we provide to our clients. Watch our fleet in action, explore breathtaking locations, and imagine the journey that awaits you.</p>
          <p>From grand weddings to intimate celebrations, we strive to make your dreams come true. Experience the perfect blend of elegance, luxury, and convenience with Luxury Dream Car Begowal. Let us take you on a journey of a lifetime.</p>
      </div>
    </div>

    <div class="col-lg-6">
      <div class="video-grid">
        <div class="video-box">
          <a href="https://youtu.be/rSJNWJfoRSs?si=8n0wBz5OJQa-Os1X" class="video-popup">
            <img src="assets/images/470185346_1730852447693659_2570367717756276562_n.jpg" alt="Video Thumbnail 1">
            <i class="bi bi-play-circle"></i>
          </a>
        </div>
        <div class="video-box">
          <a href="https://youtu.be/bSwXaGTDY7c?si=ws8qsqGBkixHBATg" class="video-popup">
            <img src="assets/images/314417108_1267601037352138_5172336156896886171_n.jpg" alt="Video Thumbnail 2">
            <i class="bi bi-play-circle"></i>
          </a>
        </div>
        <div class="video-box">
          <a href="https://youtu.be/G53YCpNdTxA?si=HclV8XsvKvKE3OpH" class="video-popup">
            <img src="assets/images/297027120_1199110547534521_8192742441321379693_n.jpg" alt="Video Thumbnail 3">
            <i class="bi bi-play-circle"></i>
          </a>
        </div>
        <div class="video-box">
          <a href="https://youtu.be/RMO8MWUJnxA?si=stJChNaaymBftuz8" class="video-popup">
            <img src="assets/images/311105566_1245981249514117_3081502749682302630_n.jpg" alt="Video Thumbnail 4">
            <i class="bi bi-play-circle"></i>
          </a>
        </div>
      </div>
    </div>

  </div>

</div>

</section><!-- /Video Section -->

    <!-- video sections -->

    <section id="dream-cars">
  <h2 class="section-title">Luxury Dream Cars</h2>
  <div class="video-gallery">
    <div class="video-card">
      <video controls autoplay muted loop>
        <source src="assets/videos/videoplayback (4).mp4" type="video/mp4">
      </video>
    </div>
    <div class="video-card">
      <video controls autoplay muted loop>
        <source src="assets/videos/videoplayback (5).mp4" type="video/mp4">
      </video>
    </div>
    <div class="video-card">
      <video controls autoplay muted loop>
        <source src="assets/videos/videoplayback (6).mp4" type="video/mp4">
      </video>
    </div>
  </div>
</section>

<section id="features" class="features section">

<div class="container">

  <div class="row gy-4">
    <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
      <img src="assets/images/313388349_1267599667352275_3341786751356629047_n.jpg" alt="Luxury Cars Begowal">
    </div>
    <div class="col-lg-6">

      <div class="features-item d-flex ps-0 ps-lg-3 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="200">
        <i class="bi bi-car-front flex-shrink-0"></i>
        <div>
          <h4>Premium Performance</h4>
          <p>Experience the unmatched performance and superior driving dynamics of luxury cars in Begowal.</p>
        </div>
      </div><!-- End Features Item-->

      <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-eye flex-shrink-0"></i>
        <div>
          <h4>Elegant Design</h4>
          <p>Enjoy striking aesthetics and timeless designs that turn heads and reflect your refined taste.</p>
        </div>
      </div><!-- End Features Item-->

      <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="400">
        <i class="bi bi-speedometer2 flex-shrink-0"></i>
        <div>
          <h4>Cutting-Edge Technology</h4>
          <p>Equipped with advanced technology and innovative features, providing unparalleled convenience and safety.</p>
        </div>
      </div><!-- End Features Item-->

      <div class="features-item d-flex mt-5 ps-0 ps-lg-3" data-aos="fade-up" data-aos-delay="500">
        <i class="bi bi-shield-check flex-shrink-0"></i>
        <div>
          <h4>Exceptional Luxury & Comfort</h4>
          <p>Step into a world of luxury and experience superior comfort with high-end interiors and premium amenities.</p>
        </div>
      </div><!-- End Features Item-->

    </div>
  </div>

</div>

</section><!-- /Features Section -->


<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Luxury Car Services</h2>
    <p>Explore the exceptional luxury car services we provide in Begowal</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-speedometer2"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Premium Car Sales</h3>
          </a>
          <p>We offer a wide range of luxury vehicles that meet the highest standards of performance and style in Begowal.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-shield-lock"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Flexible Financing Solutions</h3>
          </a>
          <p>Secure and tailored financing options to make your luxury car dream a reality in Begowal.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-tools"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Expert Maintenance & Repairs</h3>
          </a>
          <p>Ensure your luxury vehicle stays in top condition with our expert maintenance services in Begowal.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-car-front"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Custom Upgrades & Modifications</h3>
          </a>
          <p>Tailored upgrades to enhance the performance and aesthetics of your luxury car in Begowal.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
        <div class="service-item position-relative">
          <div class="icon">
            <i class="bi bi-chat-square-text"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>24/7 Customer Support</h3>
          </a>
          <p>Reliable customer support available at any time to assist you with your luxury car needs in Begowal.</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
        <div class="service-item position-relative">
          <div class="icon">
          <i class="bi bi-chat-square-text"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Car Leasing Options</h3>
          </a>
          <p>Flexible leasing options for luxury vehicles, offering convenience and affordability in Begowal.</p>
        </div>
      </div><!-- End Service Item -->

  </div>

</section><!-- /Services Section -->



<section id="call-to-action" class="call-to-action section dark-background">

<img src="assets/images/313987183_1267600287352213_1182211246954497285_n (1).jpg" alt="Luxury Car Background">

<div class="container">
  <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
    <div class="col-xl-10">
      <div class="text-center">
        <h3>Drive Your Dream Car in Begowal</h3>
        <p>Transform your luxury car dreams into reality with our exceptional services in Begowal. Explore top-notch vehicles, flexible financing options, and expert maintenance to ensure you drive in style.</p>
        <a class="cta-btn" href="forms/oderbook.php">Book now</a>
      </div>
    </div>
  </div>
</div>

</section><!-- /Call To Action Section -->
 <!-- Portfolio Section -->
 <section id="portfolio" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Gallery Sections</h2>
    <p>Explore our collection featuring luxury dream cars, Begowal wedding cars, and VIP services.</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
        <li data-filter="*" class="filter-active">All</li>
        <li data-filter=".filter-app">Dream Cars</li>
        <li data-filter=".filter-product">Wedding Cars</li>
        <li data-filter=".filter-branding">VIP Services</li>
      </ul><!-- End Portfolio Filters -->

      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="assets/images/313388349_1267599667352275_3341786751356629047_n (1).jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Luxury Dream Car Begowal</h4>
            <p>Elegant cars for Begowal weddings</p>
            <a href="assets/images/48365392_355246248587626_9040512683241111552_n.jpg" title="Luxury Dream Car Begowal" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="assets/images/313987183_1267600287352213_1182211246954497285_n.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Begowal Wedding Cars</h4>
            <p>Luxury wedding cars for VIP services</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-2.jpg" title="Wedding Cars VIP" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/images/470185346_1730852447693659_2570367717756276562_n.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>VIP Services</h4>
            <p>Premium vehicles for VIP experiences</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-3.jpg" title="VIP Services" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="assets/images/317782349_1284844678961107_559891332492300933_n.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Luxury Dream Car 2</h4>
            <p>Exquisite cars for luxurious Begowal weddings</p>
            <a href="assets/images/314412098_1267601807352061_6085857578649744197_n.jpg" title="Luxury Dream Car 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="assets/images/468161550_1718624002249837_1156736412586967971_n.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Wedding Car 2</h4>
            <p>Luxury and classic Begowal wedding cars</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-5.jpg" title="Wedding Car 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/images/311105566_1245981249514117_3081502749682302630_n.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>VIP Services 2</h4>
            <p>Top-tier vehicles for elite experiences</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-6.jpg" title="VIP Services 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <img src="assets/images/313416392_1267599664018942_711601972806331242_n.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Luxury Dream Car 3</h4>
            <p>Exclusive cars for Begowal wedding events</p>
            <a href="assets/images/314412098_1267601807352061_6085857578649744197_n.jpg" title="Luxury Dream Car 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <img src="assets/images/314472374_1267601044018804_6198851984142435251_n.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Wedding Car 3</h4>
            <p>Modern luxury cars for Begowal wedding ceremonies</p>
            <a href="assets/images/310661391_1247799795998929_7214265850267102480_n.jpg" title="Wedding Car 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <img src="assets/images/314622848_1267601040685471_84705124225680170_n.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>VIP Services 3</h4>
            <p>Premium cars for elite VIP experiences</p>
            <a href="assets/img/masonry-portfolio/masonry-portfolio-9.jpg" title="VIP Services 3" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div><!-- End Portfolio Item -->

      </div><!-- End Portfolio Container -->

    </div>

  </div>
  <div class="col-lg-12">
          <div class="text-center mt-4">
            <a href="portfolio-details.php" class="btn btn-primary">More Pictures</a>
          </div>
        </div>

</section><!-- /Portfolio Section -->

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <img src="assets/img/hero-bg.jpg" alt="Hero Background" data-aos="fade-in">

  <div class="container">

    <div class="row justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-xl-6 col-lg-8">
        <h2>Luxury Dream Car Begowal Wedding with GP<span>.</span></h2>
        <p>We offer the perfect luxury car rental experience for your wedding day.</p>
      </div>
    </div>

    <div class="row gy-4 mt-5 justify-content-center" data-aos="fade-up" data-aos-delay="200">
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="icon-box">
          <i class="bi bi-binoculars"></i>
          <h3><a href="#">Premium Selection</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="400">
        <div class="icon-box">
          <i class="bi bi-bullseye"></i>
          <h3><a href="#">Perfect Fit</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="500">
        <div class="icon-box">
          <i class="bi bi-fullscreen-exit"></i>
          <h3><a href="#">Luxury Experience</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="600">
        <div class="icon-box">
          <i class="bi bi-card-list"></i>
          <h3><a href="#">Seamless Service</a></h3>
        </div>
      </div>
      <div class="col-xl-2 col-md-4" data-aos="fade-up" data-aos-delay="700">
        <div class="icon-box">
          <i class="bi bi-gem"></i>
          <h3><a href="#">Unmatched Elegance</a></h3>
        </div>
      </div>
    </div>

  </div>

</section><!-- /Hero Section -->

<section id="contact" class="contact section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Contact Us</h2>
  <p>We would love to hear from you!</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
  <iframe style="border:0; width: 100%; height: 270px;"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3397.7143342856775!2d75.5191414!3d31.614286500000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391bb31a04c76f55%3A0x6b48c2d95cbf2fe0!2sluxury%20dream%20car%20begowal!5e0!3m2!1sen!2sin!4v1735121408964!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div><!-- End Google Maps -->

  <div class="row gy-4">

    <div class="col-lg-4">
      <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
        <i class="bi bi-geo-alt-fill flex-shrink-0"></i> <!-- Changed to 'bi-geo-alt-fill' for a more bold icon -->
        <div>
          <h3>Address</h3>
          <p>A108 Luxury Street, Begowal, Punjab, India</p>
        </div>
      </div><!-- End Info Item -->
  <!-- Icon with AOS animations -->
  <!-- HTML -->
<div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
  <i class="bi bi-telephone-fill flex-shrink-0 animated-icon" data-aos="zoom-in" data-aos-delay="200"></i>
  <div>
    <h3>whatsap no.<h3>
    <p>
      <a href="https://wa.me/919915558300" target="_blank" style="text-decoration: none; color: green; font-weight: bold;">
        +91 099155 58300
      </a>
    </p>
  </div>
</div>

<!-- CSS -->
<style>
  /* Define the keyframes for the icon animation */
  @keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
      transform: translateY(0);
    }
    40% {
      transform: translateY(-10px);
    }
    60% {
      transform: translateY(-5px);
    }
  }

  /* Apply animation to the icon */
  .animated-icon {
    animation: bounce 2s infinite; /* Bounce effect every 2 seconds */
    font-size: 1.5rem; /* Adjust icon size */
    color: green; /* Adjust icon color */
    transition: color 0.3s ease; /* Smooth color transition */
  }

  /* Hover effect to enhance interaction */
  .animated-icon:hover {
    color: darkgreen;
    animation: bounce 0.5s ease-in-out; /* Faster bounce on hover */
  }
</style>

  <!-- Initialize AOS -->
  <script>
    AOS.init({
      duration: 800, // Animation duration in milliseconds
      easing: 'ease-in-out', // Easing type
      once: true, // Whether animation should happen only once
    });
  </script>
</body>

    </div>
    <?php
if (isset($_POST['insert'])) {
    $cn = mysqli_connect("localhost", "root", "", "caradmin");
    if (!$cn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $name = mysqli_real_escape_string($cn, $_POST['name']);
    $email = mysqli_real_escape_string($cn, $_POST['email']);
    $message = mysqli_real_escape_string($cn, $_POST['message']);

    $q = "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')";
    $a = mysqli_query($cn, $q);

    if ($a) {
        echo "<script>alert('Record inserted successfully');</script>";
    } else {
        echo "<script>alert('Error inserting record: " . mysqli_error($cn) . "');</script>";
    }

    mysqli_close($cn);
}
?>

               <div class="p-5 rounded bg-light shadow-sm">
    <form method="POST" action="">
      <div class="mb-4">
        <input type="text" class="form-control border-0 py-3" placeholder="Your Name" name="name" required>
      </div>
      <div class="mb-4">
        <input type="email" class="form-control border-0 py-3" placeholder="Your Email" name="email" required>
      </div>
      <div class="mb-4">
        <textarea class="form-control border-0 py-3" rows="6" placeholder="Your Message" name="message" required></textarea>
      </div>
      <div class="text-center">
        <button class="btn btn-primary py-3 px-5" type="submit" name="insert">Send Message</button>
      </div>
    </form>
  </div>
  </div>

</div>

</section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer dark-background">
    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">
              LuxuryDreamCar Begowal wedding cars vip</span>
            </a>
            <div class="footer-contact pt-3">
              <p>Tanda Road, Begowal, </p>
              <p>Punjab 144621</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+91  099155 58300</span></p>
            </div>
            <div class="social-links d-flex mt-4">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Gallery</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Luxury Dream Car Begowal</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Wedding Cars</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> VIP Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Begowal Locations</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Availability</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#"> Testimonials</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to our newsletter to stay updated on the latest wedding car packages and VIP offers!</p>
            <form action="forms/newsletter.php" method="post" class="php-email-form">
              <div class="newsletter-form">
                <input type="email" name="email" placeholder="Your email address" required>
                <input type="submit" value="Subscribe">
              </div>
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your subscription request has been sent. Thank you!</div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="copyright">
      <div class="container text-center">
        <p>© <span>Copyright 
        Luxury Dream Car Begowal Wedding Cars </span> <span>All Rights Reserved</span></p>
      </div>
    </div>
</footer>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>