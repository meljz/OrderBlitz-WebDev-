<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>OrderBlitz</title>
  <meta name="title" content="Grilli - Amazing & Delicious Food">
  <meta name="description" content="This is a Restaurant html template made by codewithsadee">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider- 3.jpg">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">Hello</p>
  </div>



  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Hau St, Pampanga City, Philippines
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <ion-icon name="time-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">   <!--SAMPLE PHP GANITO PWEDE NATIN PALITAN -->
              <?php 
              echo "Monday - Sunday: (24/7) ";
              echo "Today is " . date("Y/m/d");
              ?>
        </span>
        
      </div>

      <a href="tel:+11234567890" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">Questions? 0912 345 6789</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:booking@restaurant.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">WebDev@delivery.com</span>
      </a>

    </div>
  </div>





  <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
      <div class="container">   

        <a href="#" class="logo">
          <img src="./assets/images/user.png" width="160" height="100" alt="logo" style="border-radius: 25px;">
        </a>

        <nav class="navbar" data-navbar>

          <button class="close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="160" height="50" alt="Grilli - Home">
          </a>

          <ul class="navbar-list">

            <li class="navbar-item">
              <a href="index.php" class="navbar-link hover-underline active">
                <div class="separator"></div>
                <span class="span">Home</span>
              </a>
            </li>

            <li class="navbar-item">
              <a href="about.php" class="navbar-link hover-underline">
                <div class="separator"></div>

                <span class="span">About Us</span>
              </a>
            </li>

            <li class="navbar-item">
              <a href="menu.php" class="navbar-link hover-underline">
                <div class="separator"></div>

                <span class="span">menu</span>
              </a>
            </li>

            

            <li class="navbar-item">
              <a href="Contact.php" class="navbar-link hover-underline">
                <div class="separator"></div>

                <span class="span">Contact</span>
              </a>
            </li>
            
          </ul>

          <div class="text-center">
            <p class="headline-1 navbar-title">Visit Us</p>

            <address class="body-4">
              Restaurant St, Delicious City, <br>
              London 9578, UK
            </address>

            <p class="body-4 navbar-text">Open: 9.30 am - 2.30pm</p>

            <a href="mailto:booking@grilli.com" class="body-4 sidebar-link">booking@grilli.com</a>

            <div class="separator"></div>

            <p class="contact-label">Booking Request</p>

            <a href="tel:+88123123456" class="body-1 contact-number hover-underline">
              +88-123-123456
            </a>
          </div>

        </nav>

        <a href="#" class="btn btn-secondary">
          <span class="text text-1">Ready to Order? </span>

          <span class="text text-2" aria-hidden="true">Ready to Order?</span>
        </a>

        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </button>

        <div class="overlay" data-nav-toggler data-overlay></div>

      </div>
    </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-1.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Tradational & Hygine</p>

            <h1 class="display-1 hero-title slider-reveal">
              Satisfy Your Cravings, <br>
              Delivered Fast!
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Enjoy fast delivery through your fingers!
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">READY?</span>

              <span class="text text-2" aria-hidden="true">READY?</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-2.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">delightful experience</p>

            <h1 class="display-1 hero-title slider-reveal">
              From Kitchen to Doorstep, <br>
              Taste the Convenience
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Enjoy fast delivery through your fingers!
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">READY?</span>

              <span class="text text-2" aria-hidden="true">READY?</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/hero-slider-3.jpg" width="1880" height="950" alt="" class="img-cover">
            </div>

            <p class="label-2 section-subtitle slider-reveal">amazing & delicious</p>

            <h1 class="display-1 hero-title slider-reveal">
              In Hungry?  <br>
              Let Us Bring the Feast to You!
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Enjoy fast delivery through your fingers!
            </p>

            <a href="#" class="btn btn-primary slider-reveal">
              <span class="text text-1">READY?</span>

              <span class="text text-2" aria-hidden="true">READY?</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#" class="hero-btn has-after">
          <img src="./assets/images/hero-icon.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">ORDER</span>
        </a>

      </section>


  <!-- 
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center"
    style="background-image: url('./assets/images/footer-bg.jpg')">
    <div class="container">

      <div class="footer-top grid-list">


        <a href="tel:+88123123456" class="body-4 contact-link">Contact Number : 0912 345 6789</a>

          
          <address class="body-4">
            Hau st, Pampanga, Philippines
          </address>

          <a href="mailto:booking@grilli.com" class="body-4 contact-link">WebDev@delivery.com</a>

          
          <a href="#" class="logo">
            <img src="./assets/images/user.png" width="160" height="50" loading="lazy" alt="grilli home">
          </a>

          <p class="copyright">
            &copy; 2024 OrderBlitz | Crafted by WebDev</a>
          </p>


      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>