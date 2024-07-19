<?php

$this->load->helper('url');

$current_uri = uri_string();
$segments = explode('/', $current_uri);
$page_name = end($segments);

$seo_data = $this->seo_model->getseo_data($page_name);
$seo_data_blog = $this->Blog_detail_model->blog_detail_data_seo($page_name);
$seo_title = "Start Your Own Forex Brokerage | Forex Broker Services";

$meta_description = '';
$keywords = '';
// print_r($seo_data_blog);
if ($seo_data) {
   $row = reset($seo_data);
   $seo_title = htmlspecialchars($row->title);
   $keywords = htmlspecialchars($row->keywords);
   $meta_description = htmlspecialchars($row->meta_description);
}

// Check for blog SEO data separately
// elseif ($seo_data_blog) {
//    $seo_title = htmlspecialchars($seo_data_blog->title);
//    $meta_description = htmlspecialchars($seo_data_blog->meta_description);
//    $keywords = htmlspecialchars($seo_data_blog->keywords);

// }else {
//    // Add a debug message to see what's happening if no SEO data is found
//    error_log('No SEO data found for page: ' . $page_name);
// }
elseif ($seo_data_blog) {
   function compareStrings($str1, $str2)
   {
      $len1 = mb_strlen($str1);
      $len2 = mb_strlen($str2);

      if ($len1 !== $len2) {
         return false;
      }

      for ($i = 0; $i < $len1; $i++) {
         // Replace specific characters as needed
         $char1 = str_replace([" ", "-"], "", mb_substr($str1, $i, 1));
         $char2 = str_replace([" ", "-"], "", mb_substr($str2, $i, 1));

         if (ord($char1) !== ord($char2)) {
            return false;
         }
      }

      return true;
   }

   function displayAsciiValues($str)
   {
      $len = mb_strlen($str);
      for ($i = 0; $i < $len; $i++) {
         echo mb_substr($str, $i, 1) . ' => ' . ord(mb_substr($str, $i, 1)) . '<br>';
      }
   }

   function cleanString($str)
   {
      // Add additional character replacements as needed
      $str = str_replace(["...", "..."], ["...", "..."], $str);
      // Add more replacements if needed
      return $str;
   }

   // Your original code
   foreach ($seo_data_blog as $row) {
      $slugFromData = strtolower(trim($row->slug));
      $pageName = strtolower(trim($page_name));

      // Detect encoding and convert to UTF-8
      $encodingSlug = mb_detect_encoding($slugFromData);
      $encodingPage = mb_detect_encoding($pageName);

      if ($encodingSlug !== 'UTF-8') {
         $slugFromData = mb_convert_encoding($slugFromData, 'UTF-8', $encodingSlug);
      }

      if ($encodingPage !== 'UTF-8') {
         $pageName = mb_convert_encoding($pageName, 'UTF-8', $encodingPage);
      }

      $cleanedSlug = cleanString($slugFromData);
      $cleanedPageName = cleanString($pageName);

      if (compareStrings($cleanedSlug, $cleanedPageName)) {
         // echo('h');
         $seo_title = $row->title;
         $meta_description = $row->meta_description;
         $keywords = $row->keywords;
      } else {
         error_log('No SEO data found for page: ' . $page_name);
      }
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
   <meta name="keywords" content="<?= $keywords ?>">
   <link rel="canonical" href="<?= current_url() ?>">
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

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-S2CT2TEW5G');
   </script>
</head>

<body>

   <!-- <?php
         $this->load->view('frontend/include/trading-view-widget');
         ?> -->
   <!-- topbar start -->
   <!-- <section class="top-bar">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 con-info">
               <div class="contact-information">
                  <ul class="contact_info">
                     <li>
                        <a href="#"><i class="fa-solid fa-phone"></i> +357 22030234</a>
                     </li>
                     <li>
                        <a href="#"><i class="fa-solid fa-envelope"></i> support@yaprime.com</a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-md-6">
               <div class="top-bar-buttons">
                  <div class="request-quote">
                     <button type="button" class="btn bttn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Request Quote</button>
                  </div>
                  <div class="request-quote">
                     <button type="button" class="btn bttn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Demo</button>
                  </div>

               </div>
            </div>
   </section> -->
   <!-- top bar end -->
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
                  <!-- <li class="nav-item">
                     <a href="<?= base_url() ?>" class="nav-link">Home</a>
                  </li> -->
                  <li class="nav-item">
                     <a href="<?= base_url() ?>about-us" class="nav-link" role="button" aria-expanded="false">
                        About Us
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url() ?>liquidity" class="nav-link" role="button" aria-expanded="false">
                        Liquidity
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url() ?>metatrader-setup" class="nav-link" role="button" aria-expanded="false">
                        Metatrader Setup
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url() ?>metatrader-support" class="nav-link" role="button" aria-expanded="false">
                        Metatrader Support
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url() ?>white-label" class="nav-link" role="button" aria-expanded="false">
                        White Label
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url() ?>institutional-account" class="nav-link" role="button" aria-expanded="false">
                        Institutional Account
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url() ?>blog" class="nav-link">Blog</a>
                  </li>
                  <li class="nav-item">
                     <a href="<?= base_url() ?>contact-us" class="nav-link">Contact</a>
                  </li>

               </ul>
            </div>
            <div class="request-quote">
               <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                  data-bs-target="#exModal">Request Demo</button>
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
                  <!-- <li><a href="<?= base_url() ?>" class="menu-link">Home</a></li> -->
                  <li><a href="<?= base_url() ?>about-us" class="menu-link">About</a></li>
                  <li><a href="<?= base_url() ?>liquidity" class="menu-link">Liquidity</a></li>
                  <li><a href="<?= base_url() ?>metatrader-setup" class="menu-link"> Metatrader Setup</a> </li>
                  <li><a href="<?= base_url() ?>metatrader-support" class="menu-link">Metatrader Support</a></li>
                  <li><a href="<?= base_url() ?>white-label" class="menu-link">White Label</a></li>
                  <li><a href="<?= base_url() ?>institutional-account" class="menu-link">Institutional Account </a></li>
                  <li><a href="<?= base_url() ?>blog" class="menu-link">Blog</a></li>
                  <li> <a href="<?= base_url() ?>contact-us" class="menu-link">Contact</a></li>
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