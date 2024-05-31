<?php
$this->load->helper('url');

$current_uri = uri_string();
$segments = explode('/', $current_uri);
$page_name = end($segments);

$seo_data = $this->seo_model->getseo_data($page_name);
$seo_data_blog = $this->Blog_detail_model->blog_detail_data_seo($page_name);
$seo_title = "Start Your Own Forex Brokerage | Forex Broker Services"; // Default title

$meta_description = '';
$keywords = '';

if ($seo_data) {
   $row = reset($seo_data);
   $seo_title = htmlspecialchars($row->title);
   $keywords = htmlspecialchars($row->keywords);
   $meta_description = htmlspecialchars($row->meta_description);
}

// Check for blog SEO data separately
if ($seo_data_blog) {
   foreach ($seo_data_blog as $row) {
      $seo_title = htmlspecialchars($row->title);
      $meta_description = htmlspecialchars($row->meta_description);
      $keywords = htmlspecialchars($row->keywords);
   }
}

?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?= $seo_title ?></title>
   <meta name="description" content="<?= $meta_description ?>" />
   <meta name="keywords" content="<?= $keywords ?>" />
   <link rel="canonical" href="<?=current_url()?>">
   <link rel="shortcut icon" href="<?= base_url() ?>public/web/images/favicon.png" type="image/x-icon">
   <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/bootstrap/css/bootstrap.min.css" />
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/web/css/style.css">
   <link rel="stylesheet" type="text/css" href="<?= base_url() ?>public/web/css/responsive.css">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <link rel="stylesheet" href="<?= base_url() ?>public/web/vendor/font-awesome/css/all.min.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
   <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-S2CT2TEW5G"></script>
   <meta name="google-site-verification" content="caFkPG5ppzd0wrcG-W9enabUow1o2dqneHhOmAN5yP0" />
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S2CT2TEW5G');
</script>
</head>

<body>
   <?php
   $this->load->view('frontend/include/trading-view-widget');
   ?>

   <header class="header navbar-dark" id="StickyHeader">
      <nav class="navbar navbar-expand-lg p-0">
         <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url() ?>">
               <img src="<?= base_url() ?>public/web/images/logo-prime.svg" alt="Logo" title="YaPrime Logo" height="70px">
            </a>
            <button class="mobile-menu-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
               <span class="toggler-icon fa-solid fa-bars text-white"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
               <ul class="navbar-nav">
                  <li class="nav-item">
                     <a href="<?= base_url() ?>" class="nav-link">Home</a>
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
                                                   <a href="<?= base_url() ?>about-us">About us</a>
                                                </li>
                                                <!-- <li class="col-12 mb-2">
                                              <a href="careers">Careers</a>
                                           </li> -->
                                                <!-- <li class="col-12 mb-2">
                                              <a href="contact-us">Contact Us</a>
                                           </li> -->
                                             </ol>
                                          </div>
                                          <div class="col-lg-4">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <li class="col-12 mb-2">
                                                   <a href="<?= base_url() ?>why-choose-us">Why Choose Us</a>
                                                </li>
                                                <!-- <li class="col-12 mb-2">
                                              <a href="#">Portfolio</a>
                                           </li> -->
                                                <!-- <li class="col-12 mb-2">
                                              <a href="our-team">Meet Our Team</a>
                                           </li> -->
                                             </ol>
                                          </div>
                                          <div class="col-lg-4">
                                             <ol class="list-unstyled row gx-0 mx-0 mb-3 drop-inner-links">
                                                <!-- <li class="col-12 mb-2">
                                              <a href="blog">Our Blog</a>
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
                     <a href="<?= base_url() ?>liquidity" class="nav-link" role="button" aria-expanded="false">
                        Liquidity
                     </a>

                  </li>

                  <li class="nav-item">
                     <a href="<?= base_url() ?>broker-setup" class="nav-link" role="button" aria-expanded="false">
                        Broker Setup
                     </a>

                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url() ?>institutional-clients" class="nav-link" role="button" aria-expanded="false">
                        Institutional Clients
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url() ?>metatrader-support" class="nav-link" role="button" aria-expanded="false">
                        Metatrader Support
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url() ?>blog" class="nav-link">Blog</a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url() ?>contact-us" class="nav-link">Contact us</a>
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
                  <li><a href="<?= base_url() ?>" class="menu-link">Home</a></li>
                  <li><a href="" class="menu-link moblie-dropdwon">About <i class="fa-solid fa-chevron-down"></i></a>
                     <div class="dropdown-mb-menu">
                        <ul>
                           <li><a href="<?= base_url() ?>about-us">About Us</a></li>
                           <li><a href="<?= base_url() ?>why-choose-us">Why Choose Us</a></li>
                        </ul>
                     </div>
                  </li>
                  <li><a href="<?= base_url() ?>liquidity" class="menu-link">Liquidity</a></li>
                  <li><a href="<?= base_url() ?>broker-setup" class="menu-link"> Broker Setup</a> </li>
                  <li><a href="<?= base_url() ?>institutional-clients" class="menu-link">Institutional Clients </a></li>
                  <li><a href="<?= base_url() ?>metatrader-support" class="menu-link">Metatrader Support</a></li>
                  <li><a href="<?= base_url() ?>blog" class="menu-link">Blog</a></li>
                  <li> <a href="<?= base_url() ?>contact-us" class="menu-link">Contact us</a></li>
                  <li class="ps-2"><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Request Quote</button></li>
               </ul>

            </div>
         </div>
      </div>
   </header>
   <script type="application/ld+json">
      {
         "@context": "http://schema.org",
         "@type": "Organization",
         "name": "YaPrime",
         "description": "Embark on your journey in the world of Forex with YaPrime. Start your own Forex brokerage and access top-notch Forex broker services. Let us empower your success in the financial markets",
         "image": "https://yaprime.com/public/web/images/crm-api.png",
         "logo": "https://yaprime.com/public/web/images/logo-prime.svg",
         "url": "https://www.yaprime.com/",
         "telephone": "+357 22030234",
         "sameAs": ["https://twitter.com/YaPrimeofficial", "https://www.linkedin.com/company/yaprime", "https://www.facebook.com/yaprimeofficial/", "https://www.instagram.com/officialyaprime/"],
         "address": {
            "@type": "PostalAddress",
            "streetAddress": "Nassima Tower - 701 Sheikh Zayed Rd - Trade Centre - Trade Centre 1 - Dubai",
            "addressLocality": "Sheikh Zayed Rd",
            "addressCountry": "Dubai UAE"
         }
      }
   </script>
</body>

</html>