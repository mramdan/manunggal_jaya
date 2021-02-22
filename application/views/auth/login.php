<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Login | Dashboard </title>
    <meta property="og:title" content="Sign In">
    <meta name="author" content="Desa Talagamurni Sukabumi">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url() ?>assets/backend/apple-touch-icon.png">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/backend/favicon.ico">
    <meta name="theme-color" content="#3063A0">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">

    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/backend/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <!-- END PLUGINS STYLES -->

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
    </script>
    <!-- END THEME STYLES -->

</head>

<body>
    <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
    <!-- .auth -->
    <main class="auth auth-floated">
        <!-- form -->
        <?php echo form_open("auth/login", array('class' => 'auth-form')); ?>
        <div class="mb-4">
            <div class="mb-3">
                <img class="rounded" src="<?= base_url() ?>assets/backend/apple-touch-icon.png" alt="" height="72">
            </div>
            <h1 class="h3"> Sign In </h1>
        </div>
        <p><?php echo lang('login_subheading'); ?></p>
        <!-- alert -->
        <div id="infoMessage" role="alert">
            <strong><?php echo $message; ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- end alert -->

        <!-- CRSF PROTECTION -->
        <input type="hidden" class="txt_csrfname" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">

        <div class="form-group mb-4">
            <div class="form-label-group">
                <?php echo form_input($identity); ?>
                <label for="inputUser">Username</label>
            </div>
        </div>

        <div class="form-group mb-4">
            <div class="form-label-group">
                <?php echo form_input($password); ?>
                <label for="inputPassword">Password</label>
            </div>
        </div>

        <div class="form-group mb-4">
            <?php echo form_submit('submit', lang('login_submit_btn'), array('class' => 'btn btn-lg btn-success btn-block')); ?>
            <!-- <button class="btn btn-lg btn-success btn-block" type="submit">Sign In</button> -->
        </div>

        <div class="form-group text-center">
            <div class="custom-control custom-control-inline custom-checkbox">
                <!-- <input type="checkbox" class="custom-control-input" id="remember-me"> -->
                <?php echo form_checkbox('remember', '1', FALSE, array('id' => 'remember', 'class' => 'custom-control-input')); ?>
                <label class="custom-control-label" for="remember"><?php echo lang('login_remember_label', 'remember'); ?></label>
            </div>
        </div>

        <p class="py-2">
            <a href="<?= base_url() ?>auth/forgot_password" class="link">Lupa Password ?</a>
        </p>
        <p class="mb-0 px-3 text-muted text-center"> © 2021 Manunggal Jaya.</p>
        <?php echo form_close(); ?>
        <!-- /.auth-form -->

        <div id="announcement" class="auth-announcement" style="background-image: url(<?= base_url() ?>assets/backend/images/illustration/img-1.png);">
            <div class="announcement-body">
                <h2 class="announcement-title"> Bengkel Las Canopi <br> Manunggal Jaya </h2><a href="<?= base_url() ?>" class="btn btn-warning"><i class="fa fa-fw fa-angle-right"></i> Check Out Now</a>
            </div>
        </div>

    </main>
    <!-- /.auth -->

    <!-- BEGIN BASE JS -->
    <script src="<?= base_url() ?>assets/backend/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/vendor/popper.js/umd/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/backend/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="<?= base_url() ?>assets/backend/vendor/particles.js/particles.js"></script>
    <script>
        /**
         * Keep in mind that your scripts may not always be executed after the theme is completely ready,
         * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
         */
        $(document).on('theme:init', () => {
            /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
            particlesJS.load('announcement', '<?= base_url() ?>assets/backend/javascript/pages/particles.json');
        })
    </script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="<?= base_url() ?>assets/backend/javascript/theme.min.js"></script> <!-- END THEME JS -->

    <script type="text/javascript">
        // $(window).on("load", function() {
        //     $(".alert").alert('close');
        // });

        function initial_alert() {
            $("#infoMessage").removeClass("alert alert-warning alert-dismissible fade show").addClass("alert alert-warning alert-dismissible fade show hide");
            $("#alert_error").removeClass("alert alert-danger display-open").addClass("alert alert-danger display-hide");
        }
        initial_alert();

        function hidealert() {
            setTimeout(function() {
                $(".alert").alert('close');
            }, 2000);

        }
        hidealert();
    </script>
</body>

</html>