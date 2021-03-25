<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
   <meta charset="utf-8">
   <title>Sukses</title>

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

</head>

<body>


   <style>
      .container-k {
         top: 100px;
         bottom: 100px;
         left: 100px;
         right: 100px;

         position: fixed;
      }

      .kotak {
         width: 800px;
         height: 400px;
         margin: auto;
         padding-top: 50px;
      }
   </style>



   <div class="container-k">
      <div class="kotak">

         <center>
            <h1><?= $mess ?></h1>
            <P>Testimoni anda sedang di proses...</P>
            <a href="<?= base_url() ?>pages/Home">kembali</a>
         </center>

      </div>
   </div>


</body>

<!-- Vendor scripts: js libraries and plugins-->
<script src="<?= base_url() ?>assets/frontend/vendor/jquery/dist/jquery.slim.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/lg-video.js/dist/lg-video.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/jarallax/dist/jarallax.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/jarallax/dist/jarallax-element.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/simplebar/dist/simplebar.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/tiny-slider/dist/min/tiny-slider.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/progressbar.js/dist/progressbar.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/vendor/lg-zoom.js/dist/lg-zoom.min.js"></script>

<!-- Main theme script-->
<script src="<?= base_url() ?>assets/frontend/js/theme.min.js"></script>
<!-- <script type="text/javascript">
   $(function() {
      $('.navbar-nav li').filter(function() {
         return this.href == location.href
      }).parent().addClass('active').siblings().removeClass('active')
      $('.navbar-nav li').click(function() {
         $(this).parent().addClass('active').siblings().removeClass('active')
      })
   })
</script> -->
</body>

</html>