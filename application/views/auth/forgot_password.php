<!DOCTYPE html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
      <!-- Begin SEO tag -->
      <title> Password Reset | Looper - Bootstrap 4 Admin Theme </title>
      <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">
      <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>assets/backend/apple-touch-icon.png">
      <link rel="shortcut icon" href="<?= base_url() ?>assets/backend/favicon.ico">
      <meta name="theme-color" content="#3063A0"><!-- Google font -->
      <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
      <!-- BEGIN PLUGINS STYLES -->
      <link rel="stylesheet" href="<?= base_url() ?>assets/backend/vendor/%40fortawesome/fontawesome-free/css/all.min.css"><!-- END PLUGINS STYLES -->
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
</head>

<body>
      <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
      <!-- .auth -->
      <main class="auth">
            <!-- form -->

            <?php echo form_open("auth/forgot_password", 'class="auth-form auth-form-reflow"'); ?>
            <div class="text-center mb-4">
                  <div class="mb-4">
                        <img class="rounded" src="<?= base_url() ?>assets/backend/apple-touch-icon.png" alt="" height="72">
                  </div>
                  <h1 class="h3"> <?php echo lang('forgot_password_heading'); ?> </h1>
            </div>
            <p class="mb-4"> <?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?> </p><!-- .form-group -->

            <div id="infoMessage"><?php echo $message; ?></div>

            <div class="form-group mb-4">
                  <label class="d-block text-left" for="identity"><?php echo (($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)); ?></label>
                  <?php echo form_input($identity); ?>
                  <p class="text-muted">
                        <small>We'll send password reset link to your email.</small>
                  </p>
            </div><!-- /.form-group -->
            <!-- actions -->
            <div class="d-block d-md-inline-block mb-2">
                  <?php echo form_submit('submit', lang('forgot_password_submit_btn'), 'class="btn btn-lg btn-block btn-primary"'); ?>
            </div>
            <div class="d-block d-md-inline-block">
                  <a href="<?= base_url('auth') ?>" class="btn btn-block btn-light">Return to signin</a>
            </div>
            <?php echo form_close(); ?>
            <footer class="auth-footer mt-5"> © 2021 All Rights Reserved. Loper is Responsive Admin Theme build on top of latest Bootstrap 4. <a href="#">Privacy</a> and <a href="#">Terms</a>
            </footer>
      </main><!-- /.auth -->
      <!-- BEGIN BASE JS -->
      <script src="<?= base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
      <script src="<?= base_url() ?>assets/backend/vendor/popper.js/umd/popper.min.js"></script>
      <script src="<?= base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
      <!-- BEGIN THEME JS -->
      <script src="<?= base_url() ?>assets/backend/javascript/theme.min.js"></script> <!-- END THEME JS -->


</body>

</html>