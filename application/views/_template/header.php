<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> <?php echo $judul; ?> </title>
    <meta property="og:title" content="Dashboard">
    <meta property="og:site_name" content="SIPMAS - Desa Talagamurni Sukabumi">

    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>assets/backend/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/backend/favicon.ico">
    <meta name="theme-color" content="#3063A0">
    <!-- End FAVICONS -->

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <!-- End GOOGLE FONT -->

    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/backend/vendor/open-iconic/font/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/backend/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/backend/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/backend/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="<?= base_url() ?>assets/backend/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="<?= base_url() ?>assets/backend/stylesheets/custom.css">
    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
        // Disable unused skin immediately
        disabledSkinStylesheet.setAttribute('rel', '');
        disabledSkinStylesheet.setAttribute('disabled', true);
        // add loading class to html immediately
        document.querySelector('html').classList.add('loading');
    </script><!-- END THEME STYLES -->
    <script src="<?= base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
</head>