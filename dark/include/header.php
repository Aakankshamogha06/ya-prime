<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Start Your Own Forex Brokerage | Forex Broker Services</title>
   <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
   <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/responsive.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="./vendor/font-awesome/css/all.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
   <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</head>

<body>
   <?php include_once('./include/trading-view-widget.php') ?>

   <header class="header navbar-dark" id="StickyHeader">
      <nav class="navbar navbar-expand-lg p-0">
         <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
               <img src="images/logo-prime.svg" alt="Logo" title="YaPrime Logo" height="70px">
            </a>
            <button class="mobile-menu-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
               <span class="toggler-icon fa-solid fa-bars text-white"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a href="index.php" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                        <svg class="ms-1" width="12" height="6" viewBox="0 0 12 6" fill="black" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11 1L5.99999 5L1 1" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                     </a>
                     <div class="dropdown-menu">
                        <div class="container">
                           <button class="border-0 bg-transparent text-white mb-3 d-block d-lg-none">
                              <i class="fa-solid fa-chevron-left"></i>
                              <span>Back</span>
                           </button>
                           <div class="h-vh-80 overflow-y-auto overflow-x-hidden">
                              <ul class="list-unstyled row gx-5 gy-4">
                                 <div class="col-lg-12">
                                    <div class="h6 text-uppercase mb-4">ABOUT YaPrime</div>
                                    <div class="container">
                                       <div class="row">
                                          <div class="col-lg-4">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                   <a href="about-us.php">About us</a>
                                                </li>
                                                <!-- <li class="col-12 mb-2">
                                              <a href="careers.php">Careers</a>
                                           </li> -->
                                                <!-- <li class="col-12 mb-2">
                                              <a href="contact-us.php">Contact Us</a>
                                           </li> -->
                                             </ol>
                                          </div>
                                          <div class="col-lg-4">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                   <a href="why-choose-us.php">Why Choose Us</a>
                                                </li>
                                                <!-- <li class="col-12 mb-2">
                                              <a href="#">Portfolio</a>
                                           </li> -->
                                                <!-- <li class="col-12 mb-2">
                                              <a href="our-team.php">Meet Our Team</a>
                                           </li> -->
                                             </ol>
                                          </div>
                                          <div class="col-lg-4">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <!-- <li class="col-12 mb-2">
                                              <a href="blog.php">Our Blog</a>
                                           </li> -->
                                             </ol>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a href="liquidity.php" class="nav-link" role="button" aria-expanded="false">
                        Liquidity
                     </a>

                  </li>

                  <li class="nav-item">
                     <a href="broker-setup.php" class="nav-link" role="button" aria-expanded="false">
                        Broker Setup
                     </a>

                  </li>
                  <li class="nav-item">
                     <a href="institutional-clients.php" class="nav-link" role="button" aria-expanded="false">
                        Institutional Clients
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="metatrader-support.php" class="nav-link" role="button" aria-expanded="false">
                        Metatrader Support
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="blog.php" class="nav-link">Blog</a>
                  </li>
                  <li class="nav-item">
                     <a href="contact-us.php" class="nav-link">Contact us</a>
                  </li>

               </ul>
            </div>
            <div class="request-quote">
               <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Request Quote</button>
            </div>
         </div>
      </nav>
      <div class="offcanvas offcanvas-end mobile-menu bg-dark" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
         <div class="offcanvas-header justify-content-end">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body p-0">
            <div class="mobile-menu-wrap">
               <ul class="mobile-menu-list">
                  <li><a href="index.php" class="menu-link">Home</a></li>
                  <li><a href="" class="menu-link moblie-dropdwon">About <i class="fa-solid fa-chevron-down"></i></a>
                     <div class="dropdown-mb-menu">
                        <ul>
                           <li><a href="about-us.php">About Us</a></li>
                           <li><a href="why-choose-us.php">Why Choose Us</a></li>
                        </ul>
                     </div>
                  </li>
                  <li><a href="liquidity.php" class="menu-link">Liquidity</a></li>
                  <li><a href="broker-setup.php" class="menu-link"> Broker Setup</a> </li>
                  <li><a href="institutional-clients.php" class="menu-link">Institutional Clients </a></li>
                  <li><a href="metatrader-support.php" class="menu-link">Metatrader Support</a></li>
                  <li><a href="blog.php" class="menu-link">Blog</a></li>
                  <li> <a href="contact-us.php" class="menu-link">Contact us</a></li>
                  <li class="ps-2"><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Request Quote</button></li>
               </ul>

            </div>
         </div>
      </div>
   </header>