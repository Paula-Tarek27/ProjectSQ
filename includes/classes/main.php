 <?php
    include_once('includes/header.php');
    include_once('includes/connection.php');

    $select = "SELECT * FROM coffeeshop_products";
    $select = "SELECT * FROM Categories";
    $s = mysqli_query($conn, $select);

    $rows = mysqli_fetch_assoc($s);
    ?>


 <!-- ======= Hero Section ======= -->
 <section id="hero">
     <div class="hero-container" data-aos="fade-up">
         <h1>Welcome to ARABICA</h1>
         <h2>Start your day with Smile😀</h2>
         <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
     </div>
 </section><!-- End Hero -->

 <main id="main">

     <!-- ======= About Section ======= -->
     <section id="about" class="about">
         <div class="container">

             <div class="row no-gutters">
                 <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
                     <div class="content">
                         <h3>Why We Use Arabica Beans In Our Coffee </h3>
                         <p>
                             Arabica coffee is a type of coffee that is grown in high altitudes and
                             is known for its smooth, sweet flavor. It is the most popular type of coffee in the world,
                             accounting for about 60% of global production.
                         </p>
                         <a href="#" class="about-btn">About us <i class="bx bx-chevron-right"></i></a>
                     </div>
                 </div>
                 <div class="col-xl-7 d-flex align-items-stretch">
                     <div class="icon-boxes d-flex flex-column justify-content-center">
                         <div class="row">
                             <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                 <i class='bx bxs-coffee-bean bx-spin bx-rotate-180'></i>
                                 <h4>ARABICA </h4>
                                 <p>Arabica coffee is a high-quality coffee that is grown in high altitudes and is known for its smooth, sweet flavor</p>
                             </div>
                             <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                 <i class="fas fa-solid fa-bread-slice fa-spin"></i>

                                 <h4>The Taste of Paris</h4>
                                 <p>Croissant is a buttery, flaky pastry that is popular in France and other parts of Europe</p>
                             </div>
                             <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                                 <i class='bx bxs-cookie bx-spin'></i>
                                 <h4>The Sweet Spot</h4>
                                 <p>Donuts are a delicious and versatile pastry that can be enjoyed for breakfast, lunch, or dinner.</p>
                             </div>
                         </div>
                     </div><!-- End .content-->
                 </div>
             </div>

         </div>
     </section><!-- End About Section -->

     <!-- ======= Services Section ======= -->
     <section id="services" class="services">
         <div class="container">

             <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                 <h1>Categories</h1>
                 <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                     consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
                     in iste officiis commodi quidem hic quas.</p>
             </div>

             <div class="row">
                 <?php foreach ($s as $data) : ?>
                     <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                         <div class="icon-box" data-aos="fade-up">
                             <h2 class="title"><?= $data['category_type'] ?></h2>
                             <p class="description"><?= $data['category_desc'] ?></p>
                             <a href="Baked.php?des=<?= $data['category_id'] ?>">Show</a>
                         </div>
                     </div>
                 <?php endforeach; ?>



             </div>

         </div>
     </section><!-- End Services Section -->


     <!-- ======= Cta Section ======= -->
     <section id="cta" class="cta">
         <div class="container">

             <div class="text-center">
                 <h1>We Have a Mobile application </h1>
                 <i class="fas fa-solid fa-mobile-screen-button"></i>
                 <a class="cta-btn" href="#">Download Our App</a>
             </div>

         </div>
     </section><!-- End Cta Section -->

     <!-- ======= Testimonials Section ======= -->
     <section id="testimonials" class="testimonials section-bg">
         <div class="container">

             <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                 <h2>Reviews</h2>
                 <h5>Our coffee shop is a cozy and inviting place to enjoy a cup of coffee and a pastry.
                     We offer a variety of coffee drinks, as well as a selection of pastries and other snacks.</h5>
             </div>

             <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                 <div class="swiper-wrapper">

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <p>
                                 <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 "Great coffee and friendly service. I'll definitely be back!"
                                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                             </p>
                             <img src="assets/img/testimonials/1.JPEG" class="testimonial-img" alt="">
                             <h3>Ahmed Desoky</h3>
                             <h4>Ceo &amp; Founder</h4>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <p>
                                 <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 "Love the atmosphere and the food is delicious. A great place to relax and catch up with friends."
                                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                             </p>
                             <img src="assets/img/testimonials/4.jpg" class="testimonial-img" alt="">
                             <h3>Mazen Alaa</h3>
                             <h4>Designer</h4>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <p>
                                 <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 The staff is always so welcoming and the coffee is always fresh and delicious."
                                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                             </p>
                             <img src="assets/img/testimonials/2.JPEG" class="testimonial-img" alt="">
                             <h3>Poula Tarik</h3>
                             <h4>Store Owner</h4>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide">
                         <div class="testimonial-item">
                             <p>
                                 <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 This is my go-to spot for a quick cup of coffee or a leisurely brunch.
                                 The food is always great and the service is top-notch.
                                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                             </p>
                             <img src="assets/img/testimonials/6.jpg" class="testimonial-img" alt="">
                             <h3>Ahmed Ayman </h3>
                             <h4>Freelancer</h4>
                         </div>
                     </div><!-- End testimonial item -->

                     <div class="swiper-slide"> 
                         <div class="testimonial-item">
                             <p>
                                 <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                 "This coffee shop is a hidden gem! The coffee is amazing and the staff is so friendly.
                                 I highly recommend it to anyone looking for a great cup of coffee and a relaxing atmosphere."
                                 <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                             </p>
                             <img src="assets/img/testimonials/3.jpg" class="testimonial-img" alt="">
                             <h3>Maged Ali</h3>
                             <h4>Entrepreneur</h4>
                         </div>
                     </div><!-- End testimonial item -->
                 </div>
                 <div class="swiper-pagination"></div>
             </div>

         </div>
     </section><!-- End Testimonials Section -->

     <!-- ======= Team Section ======= -->
     <section id="team" class="team">
         <div class="container">

             <div class="section-title" data-aos="fade-in" data-aos-delay="100">
                 <h2>Team</h2>
                 <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                     consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
                     in iste officiis commodi quidem hic quas.</p>
             </div>

             <div class="row">

                 <div class="col-lg-4 col-md-6">
                     <div class="member" data-aos="fade-up">
                         <div class="pic"><img src="assets/img/team/team4.jpeg" class="img-fluid" alt=""></div>
                         <div class="member-info">
                             <h4>Ahmed Desoky</h4>
                             <span>Chief Executive Officer</span>
                             <div class="social">
                                 <a href=""><i class="bi bi-twitter"></i></a>
                                 <a href="https://www.facebook.com/ahmed.dsooky.1"><i class="bi bi-facebook"></i></a>
                                 <a href="https://www.instagram.com/el_desookyy/"><i class="bi bi-instagram"></i></a>
                                 <a href="https://www.linkedin.com/in/ahmed-desoky-50788421a/"><i class="bi bi-linkedin"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>



                 <div class="col-lg-4 col-md-6">
                     <div class="member" data-aos="fade-up" data-aos-delay="300">
                         <div class="pic"><img src="assets/img/team/team5.jpeg" class="img-fluid" alt=""></div>
                         <div class="member-info">
                             <h4>Poula Tarik</h4>
                             <span>CTO</span>
                             <div class="social">
                                 <a href=""><i class="bi bi-twitter"></i></a>
                                 <a href=""><i class="bi bi-facebook"></i></a>
                                 <a href=""><i class="bi bi-instagram"></i></a>
                                 <a href=""><i class="bi bi-linkedin"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>

         </div>
     </section><!-- End Team Section -->
    
     </div>

     <!-- ======= Contact Section ======= -->
     <section id="contact" class="contact section-bg">
         <div class="container" data-aos="fade-up">

             <div class="section-title">
                 <h2>Contact</h2>
                 <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                     consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
                     in iste officiis commodi quidem hic quas.</p>
             </div>

             <div class="row">
                 <div class="col-lg-6">
                     <div class="info-box mb-4">
                         <i class="bx bx-map"></i>
                         <h3>Our Address</h3>
                         <p>Badr city , Egypt</p>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-6">
                     <div class="info-box  mb-4">
                         <i class="bx bx-envelope"></i>
                         <h3>Email Us</h3>
                         <p>Adesoky424@gmail.com</p>
                     </div>
                 </div>

                 <div class="col-lg-3 col-md-6">
                     <div class="info-box  mb-4">
                         <i class="bx bx-phone-call"></i>
                         <h3>Call Us</h3>
                         <p>+1 5589 55488 55</p>
                     </div>
                 </div>

             </div>

             <div class="row">

                 <div class="col-lg-6 ">
                     <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3450.3252977967263!2d31.72113202469808!3d30.142114374874616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1457f74d392da177%3A0xe75607bddf15ae1b!2z2KfZhNis2KfZhdi52Kkg2KfZhNmF2LXYsdmK2Kkg2KfZhNix2YjYs9mK2Kk!5e0!3m2!1sar!2seg!4v1684257371697!5m2!1sar!2seg" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                 </div>

                 <div class="col-lg-6">
                     <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                         <div class="row">
                             <div class="col-md-6 form-group">
                                 <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                             </div>
                             <div class="col-md-6 form-group mt-3 mt-md-0">
                                 <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                             </div>
                         </div>
                         <div class="form-group mt-3">
                             <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                         </div>
                         <div class="form-group mt-3">
                             <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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

 </main>

 </html>