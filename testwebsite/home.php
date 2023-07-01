<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">IliganExplores</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">Package</a>
      <a href="book.php">Book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

      <div class="swiper-slide slide" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(images/macrifalls.png) no-repeat;">
            <div class="content">
               <span>Explore and Discover Iligan</span>
               <h3>Travel Around!</h3>
               <a href="package.php" class="btn">Discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(images/tartanilya.png) no-repeat;">
            <div class="content">
            <span>Explore and Discover Iligan</span>
               <h3>Discover Certain Attractions</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(images/paseo_de_santiago.png) no-repeat;">
            <div class="content">
            <span>Explore and Discover Iligan</span>
               <h3>Develop Unforgettable Experiences</h3>
               <a href="package.php" class="btn">Discover More</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Our Services </h1>
   <center><h1 style="font-size: 24px; text-align: center;">We offer certain services with your travels, such as:</h1></center>
      <br>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>Adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>Camping</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <img src="images/icon-6.png" alt="">
         <h3>Recreational Activities</h3>
      </div>




   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/paseo_de_santiago.png" alt="">
   </div>

   <div class="content">
      <h3>About Us</h3>
      <p>Travel Iligan is your ultimate guide to discovering the hidden treasures of Iligan City.
          Our passion is to showcase the city's breathtaking landscapes, 
          rich cultural heritage, and vibrant local experiences. 
          Join us as we inspire you to embark on unforgettable adventures in Iligan.
      </p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> Our Offers </h1>

   <div class="box-container">

   <div class="box">
         <div class="image">
            <img src="images/tinagoheader.png" alt="">
         </div>
         <div class="content">
            <h3>Tinago Falls Experience</h3>
            <p>Discover the mesmerizing beauty of Tinago Falls with our exclusive package. 
               Immerse yourself in nature as you journey through lush trails, witness the cascading waters, 
               and feel the cool mist on your skin.</p>
               <p>Package cost: ₱XX.XX (Prices may vary)</p>
            <a href="book.php" class="btn">Book Now</a>
            <a href="tinagopage.php" class="btn">Read More</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/mimbaheader2.png" alt="">
         </div>
         <div class="content">
            <h3>Mimbalot Falls Experience</h3>
            <p>Embark on an unforgettable adventure that combines the exploration of Mimbalot Falls with a comfortable resort accommodation.
                Discover the wonders of Mimbalot Falls and indulge in the comfort and hospitality of our partnered resort.</p>
                <p>Package cost: ₱XX.XX (Prices may vary)</p>
            <a href="book.php" class="btn">Book Now</a>
            <a href="mimbalutpage.php" class="btn">Read More</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
           
         </div>
         <div class="content">
            <h3>Upcoming Destination TBA</h3>
            <p>Stay tuned for another destination...</p>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>We offer 20 to 30% discounts on holidays!</h3>
      <p>Experience amazing savings on your dream vacations with our upcoming exclusive holiday offers. 
         Whether you're seeking relaxation or adventure, we have the ideal destination for you. 
         Book now and embark on a journey to the City of Waterfalls!</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

















<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

   <div class="box">
         <h3>Quick Links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
      </div>

      <div class="box">
         <h3>Contact Info</h3>
         <a> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a> <i class="fas fa-envelope"></i> michaelkobe.lopez@g.msuiit.edu.ph </a>
         <a> <i class="fas fa-map"></i> Iligan City, Philippines - 9200 </a>
      </div>

      <div class="box">
         <h3>Follow us on these pages:</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
      </div>

   </div>

   <div class="credit"> Developed through the collaborative effort of <span>Code Poltergeists</span> | All Rights Reserved! </div>

</section>



<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>