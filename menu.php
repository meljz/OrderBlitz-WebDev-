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





  <!-- ------------------------#HEADER---------------->

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
    

    
      <!--MENU JOLIBEE TO BEEJOLI -->


      <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">

          <p class="section-subtitle text-center label-2">Selection</p>

          <h2 class="headline-1 section-title text-center">BEEJOLI</h2>

          <ul class="grid-list">

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">ano ilalagay?</a>
                    </h3>   

                    <span class="span title-2">pesos ???</span>
                  </div>

                  <p class="card-text label-1">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  </p>

                </div>

              </div>
            </li>

            <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li>

            <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li> 

          </ul>


          <!--MENU McDonalds TO DonalsMc -->

      <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">


          <h2 class="headline-1 section-title text-center">DonalsMc</h2>

          <ul class="grid-list">

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">ano ilalagay?</a>
                    </h3>   

                    <span class="span title-2">pesos ???</span>
                  </div>

                  <p class="card-text label-1">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  </p>

                </div>

              </div>
            </li>

            <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li>

            <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li> 

          </ul>

          <!--MENU ChowKing TO KingChow -->


      <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">

          <h2 class="headline-1 section-title text-center">KingChow</h2>

          <ul class="grid-list">

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">ano ilalagay?</a>
                    </h3>   

                    <span class="span title-2">pesos ???</span>
                  </div>

                  <p class="card-text label-1">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                  </p>

                </div>

              </div>
            </li>

            <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li>

            <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li>

              <li>
                <div class="menu-card hover:card">
  
                  <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                    <img src="./assets/images/menu-1.png" width="100" height="100" loading="lazy" alt="Greek Salad"
                      class="img-cover">
                  </figure>
  
                  <div>
  
                    <div class="title-wrapper">
                      <h3 class="title-3">
                        <a href="#" class="card-title">ano ilalagay?</a>
                      </h3>   
  
                      <span class="span title-2">pesos ???</span>
                    </div>
  
                    <p class="card-text label-1">
                      Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    </p>
  
                  </div>
  
                </div>
              </li> 

          </ul>

          


          <a href="#" class="btn btn-primary">
            <span class="text text-1">View All Menu</span>

            <span class="text text-2" aria-hidden="true">View All Menu</span>
          </a>
          
          
        </div>
    </section>


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