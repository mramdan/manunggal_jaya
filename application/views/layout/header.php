<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
   <meta charset="utf-8">
   <title><?= $title ?></title>

   <!-- SEO Meta Tags-->
   <meta name="description" content="<?= $description ?>">
   <meta name="keywords" content="<?= $keywords ?>">
   <meta name="author" content="<?= $author ?>">
   <meta name="title" content="Bengkel Las Manunggal Jaya">

   <!-- Open Graph / Facebook -->
   <meta property="og:type" content="website">
   <meta property="og:url" content="https://bengkellas-manunggaljaya.com/">
   <meta property="og:title" content="Bengkel Las Manunggal Jaya">
   <meta property="og:description" content="Jasa Bengkel Las Handal Melayani Pembuatan Pagar Rumah, Kanopy, Railling Tangga, Balkon, Teralis, Stainless, Kontruksi Baja, Kontruksi Bangunan Di Jakarta, Bogor, Depok, Tangerang terpercaya di indoneisa menawarkan kualitas terjamin murah dan awet.">
   <meta property="og:image" content="">

   <!-- Twitter -->
   <meta property="twitter:card" content="summary_large_image">
   <meta property="twitter:url" content="https://bengkellas-manunggaljaya.com/">
   <meta property="twitter:title" content="Bengkel Las Manunggal Jaya">
   <meta property="twitter:description" content="Jasa Bengkel Las Handal Melayani Pembuatan Pagar Rumah, Kanopy, Railling Tangga, Balkon, Teralis, Stainless, Kontruksi Baja, Kontruksi Bangunan Di Jakarta, Bogor, Depok, Tangerang terpercaya di indoneisa menawarkan kualitas terjamin murah dan awet.">
   <meta property="twitter:image" content="">
   <meta name="google-site-verification" content="C1z1yGbLn890P9hxzK9Xl6D_Vjt6xAV2dwnYzAkDxSs" />
   <script type="application/ld+json">
      {
         "name": "Bengkel Las Manunggal Jaya",
         "description": "Jasa Bengkel Las Handal Melayani Pembuatan Pagar Rumah, Kanopy, Railling Tangga, Balkon, Teralis, Stainless, Kontruksi Baja, Kontruksi Bangunan Di Jakarta, Bogor, Depok, Tangerang terpercaya di indoneisa menawarkan kualitas terjamin murah dan awet.",
         "author": {
            "@type": "Person",
            "name": "Sandi Gordon"
         },
         "@type": "WebSite",
         "url": "",
         "headline": "<?= $title ?>",
         "@context": "http://schema.org"
      }
   </script><!-- End SEO tag -->

   <!-- Viewport-->
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Favicon Icons-->
   <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/brand/icon/favicon-32x32.png">

   <meta name="msapplication-TileColor" content="#766df4">
   <meta name="theme-color" content="#ffffff">

   <!-- Vendor Styles-->
   <link rel="stylesheet" media="screen" href="<?= base_url() ?>assets/frontend/vendor/lightgallery.js/dist/css/lightgallery.min.css" />
   <link rel="stylesheet" media="screen" href="<?= base_url() ?>assets/frontend/vendor/simplebar/dist/simplebar.min.css" />
   <link rel="stylesheet" media="screen" href="<?= base_url() ?>assets/frontend/vendor/tiny-slider/dist/tiny-slider.css" />

   <!-- Main Theme Styles + Bootstrap-->
   <link rel="stylesheet" media="screen" href="<?= base_url() ?>assets/frontend/css/demo/construction/theme.min.css">

   <!-- Page loading styles-->
   <style>
      .cs-page-loading {
         position: fixed;
         top: 0;
         right: 0;
         bottom: 0;
         left: 0;
         width: 100%;
         height: 100%;
         -webkit-transition: all .4s .2s ease-in-out;
         transition: all .4s .2s ease-in-out;
         background-color: #fff;
         opacity: 0;
         visibility: hidden;
         z-index: 9999;
      }

      .cs-page-loading.active {
         opacity: 1;
         visibility: visible;
      }

      .cs-page-loading-inner {
         position: absolute;
         top: 50%;
         left: 0;
         width: 100%;
         text-align: center;
         -webkit-transform: translateY(-50%);
         transform: translateY(-50%);
         -webkit-transition: opacity .2s ease-in-out;
         transition: opacity .2s ease-in-out;
         opacity: 0;
      }

      .cs-page-loading.active>.cs-page-loading-inner {
         opacity: 1;
      }

      .cs-page-loading-inner>span {
         display: block;
         font-size: 1rem;
         font-weight: normal;
         color: #787a80;
      }

      .cs-page-spinner {
         display: inline-block;
         width: 2.75rem;
         height: 2.75rem;
         margin-bottom: .75rem;
         vertical-align: text-bottom;
         background-color: #cfcfd1;
         border-radius: 50%;
         opacity: 0;
         -webkit-animation: spinner .75s linear infinite;
         animation: spinner .75s linear infinite;
      }

      @-webkit-keyframes spinner {
         0% {
            -webkit-transform: scale(0);
            transform: scale(0);
         }

         50% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
         }
      }

      @keyframes spinner {
         0% {
            -webkit-transform: scale(0);
            transform: scale(0);
         }

         50% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
         }
      }
   </style>

   <!-- Demo switcher off-canvas toggle styles -->
   <style>
      .cs-demo-switcher {
         position: fixed;
         display: block;
         top: 50%;
         right: 1rem;
         z-index: 100;
      }

      .cs-demo-switcher-inner {
         width: 3rem;
         height: 3rem;
         border: 1px solid #e5e8ed;
         border-radius: 50%;
         background-color: #fff;
         color: #1e212c;
         font-size: 1.25rem;
         line-height: 3rem;
         text-align: center;
         text-decoration: none;
         box-shadow: 0px 10px 15px 0px rgba(30, 33, 44, 0.10);
      }
   </style>

   <!-- Google Tag Manager -->
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-TELR8LCJQB"></script>
   <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
         dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'G-TELR8LCJQB');
   </script>
</head>

<!-- Body-->

<body>

   <!-- Google Tag Manager (noscript)-->
   <!-- <noscript>
      <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
   </noscript> -->

   <!-- Main content-->
   <!-- Wraps everything except footer to push footer to the bottom of the page if there is little content -->
   <main class="cs-page-wrapper position-relative">

      <!-- Whatsapp kontak toggle -->
      <a href="https://api.whatsapp.com/send?phone=<?= $kontak ?>&text=Halo%Bengkellas-manunggaljaya.com" target="_blank" class="cs-demo-switcher">
         <div class="cs-demo-switcher-inner bg-success" data-toggle="tooltip" data-placement="left" title="Hubungi ahh..">
            <i class="cxi-whatsapp text-white"></i>
         </div>
      </a>


      <!-- Navbar -->
      <!-- Remove .navbar-sticky class to detach .navbar from page scroll -->
      <header class="cs-header navbar navbar-expand-lg navbar-light navbar-sticky navbar-floating">
         <div class="container px-0 px-xl-3">
            <a class="navbar-brand order-lg-1 mr-lg-5 mr-0 pr-lg-2" href="<?= base_url() ?>">
               <img src="<?= base_url() ?>assets/brand/logo/<?= $logo ?>" alt="logo <?= $name ?>" width="130">
            </a>
            <div class="d-flex align-items-center order-lg-3">
               <a class="media media-tool" href="https://api.whatsapp.com/send?phone=<?= $kontak ?>&text=Halo%Bengkellas-manunggaljaya.com">
                  <i class="media-tool-icon cxi-whatsapp"></i>
                  <div class="media-body ml-2 pl-1">
                     <h6 class="media-tool-title">Hubungi Kami</h6>
                     <span class="media-tool-label d-xl-inline-block d-none"><?= $kontak ?></span>
                  </div>
               </a>
               <a class="media media-tool" href="https://api.whatsapp.com/send?phone=<?= $kontak2 ?>&text=Halo%Bengkellas-manunggaljaya.com">
                  <i class="media-tool-icon cxi-whatsapp"></i>
                  <div class="media-body ml-2 pl-1">
                     <h6 class="media-tool-title">Hubungi Kami</h6>
                     <span class="media-tool-label d-xl-inline-block d-none"><?= $kontak2 ?></span>
                  </div>
               </a>
               <button class="navbar-toggler ml-2 mr-n3" type="button" data-toggle="collapse" data-target="#navbarCollapse1" aria-expanded="false">
                  <span class="navbar-toggler-icon"></span>
               </button>
            </div>
            <nav class="collapse navbar-collapse order-lg-2" id="navbarCollapse1">
               <ul class="navbar-nav mr-auto text-nowrap">
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url() ?>">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url('pages/profile') ?>">Profile</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url('pages/produk') ?>">Produk</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url('pages/blog') ?>">Blog</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url('pages/kontak') ?>">Kontak</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="<?= base_url('pages/testimoni') ?>">Testimoni</a>
                  </li>
               </ul>
            </nav>
         </div>
      </header>