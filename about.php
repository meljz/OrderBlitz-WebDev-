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

        <span class="span">Monday - Sunday: (24/7)</span>
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
        <img src="./assets/images/user.png" width="160" height="50" alt="logo" style="border-radius: 25px;">
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
        - #ABOUT
      -->

      <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">About Us</p>

            <h2 class="headline-1 section-title">Our Story</h2>

            <p class="section-text">
              In a bustling city where time is of the essence and cravings reign supreme. Imagine a world where your cravings are not just satisfied, but indulged with lightning speed, all from the comfort of your own home. Welcome to the OrderBlitz <br>

              At OrdeBlitz, we believe that great food should be accessible to everyone, no matter how hectic life gets. That's why we've dedicated ourselves to revolutionizing the way you experience gastronomic pleasure. Our mission? To ensure that your cravings are not just met, but exceeded beyond your wildest expectations, all with the click of a button.
            </p>

              

            <a href="#" class="btn btn-primary">
              <span class="text text-1"></span>

              <span class="text text-2" aria-hidden="true"></span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="./assets/images/about-banner.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="./assets/images/about-abs-image.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="./assets/images/badge-2-bg.png" width="133" height="134" loading="lazy" alt="">
            </div>

          </figure>

         <img src="./assets/images/shape-3.png" width="197" height="194" loading="lazy" alt="" class="shape">

        </div>
      </section>

      <!-- 
        - #FEATURES
      -->

      <section class="section features text-center" aria-label="features">
        <div class="container">

          <p class="section-subtitle label-2">Why Choose Us</p>

          <h2 class="headline-1 section-title">Our Strength</h2>

          <ul class="grid-list">

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-1.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Lightning-Fast Delivery</h3>

                <p class="label-1 card-text">OrderBlitz excels in delivering orders with lightning speed, ensuring that customers receive their meals promptly, even during peak hours.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-2.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Quality Assurance</h3>

                <p class="label-1 card-text">OrderBlitz maintains high standards of quality in food preparation and delivery, collaborating with top-rated restaurants and chefs to ensure that every dish meets their rigorous standards of excellence.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-3.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">User-Friendly Experience</h3>

                <p class="label-1 card-text">OrderBlitz provides a seamless and intuitive ordering process through their user-friendly platform, making it easy for customers to place orders, track, and, enhance satisfaction.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/features-icon-4.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Diverse Menu Selection</h3>

                <p class="label-1 card-text"> With a vast array of options ranging from local favorites to international cuisine,, ensuring there's something for everyone.</p>

              </div>
            </li>

          </ul>

        </div>
      </section>


    </article>
  </main>

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


          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

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