<?php get_header(); ?>


    <header id="video-area" data-stellar-background-ratio="0.5">    
      <div id="block" data-vide-bg="video/video"></div>
      <div class="overlay overlay-2"></div>      
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Crystal - Free Video Background HTML5 Bootstrap Template</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Free High-quality Responsive Video Background Website Template Based on Bootstrap 4 to Create Complete Business Website in Minutes</p>
              <a href="#" class="btn btn-common wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms"><i class="lnr lnr-download"></i> Download</a>
            </div>
          </div>
        </div> 
      </div>      
    </header>
    <!-- Header Section End --> 


    <!-- Services Section Start -->
  <?php include 'categorie-services.php' ?>
    <!-- Services Section End -->

    <!-- Features Section Start -->
   <?php include 'categorie-features.php' ?>
    <!-- Features Section End -->    

    <!-- Start Video promo Section -->
   <?php include 'categorie-video.php' ?>
    <!-- End Video Promo Section -->

    <!-- Portfolio Section -->
   <?php include 'categorie-portfolio.php' ?>
    <!-- Portfolio Section Ends --> 

    <!-- Start Pricing Table Section -->
    <?php include 'categorie-price.php' ?>
    
    <!-- End Pricing Table Section -->

    <!-- Counter Section Start -->
   <?php include 'categorie-counter.php' ?>
    <!-- Counter Section End -->

    <!-- testimonial Section Start -->
   <?php include 'categorie-testimonial.php' ?>
    <!-- testimonial Section Start -->

    <!-- Download Section Start -->
  <?php include 'categorie-download.php' ?>
    <!-- Download Section End -->

    <!-- Blog Section -->
  <?php include 'categorie-blog.php' ?>

    <!-- blog Section End -->


    <!-- Contact Section Start -->
  <?php include 'categorie-contact.php' ?>
    <!-- Contact Section End -->


  <?php get_footer(); ?>
