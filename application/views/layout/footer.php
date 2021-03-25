</main>


<!-- Footer -->
<footer class="cs-footer pt-3 bg-dark">
   <div class="container mt-lg-3 py-md-5 py-4">
      <div class="row mb-5">
         <div class="col-lg-5 col-md-6">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
               <a class="d-inline-block" href="<?= base_url() ?>">
                  <img src="<?= base_url() ?>assets/brand/logo/<?= $logo ?>" alt="logo <?= $name ?>" width="130">
               </a>
               <div class="mt-sm-1 mt-4 pr-sm-4">
                  <a href="https://api.whatsapp.com/send?phone=<?= $kontak ?>&text=Halo%Bengkellas-manunggaljaya.com" class="social-btn">
                     <i class="cxi-whatsapp"></i>
                  </a>
                  <a href="https://api.whatsapp.com/send?phone=<?= $kontak2 ?>&text=Halo%Bengkellas-manunggaljaya.com" class="social-btn">
                     <i class="cxi-whatsapp"></i>
                  </a>
                  <a href="https://facebook.com/<?= $facebook ?>" target="_blank" class="social-btn">
                     <i class="cxi-messenger"></i>
                  </a>
                  <a href="https://facebook.com/<?= $facebook ?>" target="_blank" class="social-btn">
                     <i class="cxi-facebook"></i>
                  </a>
                  <a href="https://youtube.com/<?= $youtube ?>" target="_blank" class="social-btn">
                     <i class="cxi-youtube"></i>
                  </a>
               </div>
            </div>
            <p class="mb-md-0 mb-4 font-size-sm text-light opacity-60"><?= $description ?></p>
         </div>
         <div class="col-lg-5 offset-lg-2 col-md-6">
            <h4 class="text-light">Let’s stay in touch</h4>
            <form class="input-group">
               <input class="form-control input-light" type="email" placeholder="Your email address" required>
               <div class="input-group-append">
                  <button class="btn btn-danger text-uppercase" type="submit">Subscribe</button>
               </div>
            </form>
            <p class="mb-0 pt-3 font-size-xs text-light opacity-60">*Subscribe to our newsletter to receive communications and early updates from Createx Construction Bureau.</p>
         </div>
      </div>
      <div class="row mb-sm-5 mb-4">
         <div class="col-md-4 mb-md-0 mb-4">
            <h6 class="text-light text-uppercase">Head office</h6>
            <ul class="nav nav-light flex-column">
               <li class="nav-item mb-2">
                  <span class="mr-1 text-light">Address:</span>
                  <a href="#" class="nav-link d-inline-block p-0 font-weight-normal"><?= $alamat ?></a>
               </li>
               <li class="nav-item mb-2">
                  <span class="mr-1 text-light">Call:</span>
                  <a href="tel:<?= $kontak ?>" class="nav-link d-inline-block p-0 font-weight-normal"><?= $kontak ?></a>
               </li>
               <li class="nav-item mb-2">
                  <span class="mr-1 text-light">Email:</span>
                  <a href="mailto:<?= $email ?>" class="nav-link d-inline-block p-0 font-weight-normal"><?= $email ?></a>
               </li>
            </ul>
         </div>
         <div class="col-md-3 col-sm-6 mb-md-0 mb-4">
            <h6 class="text-light text-uppercase">Who we are</h6>
            <ul class="nav nav-light flex-column">
               <li class="nav-item mb-2">
                  <a href="about.html" class="nav-link p-0 font-weight-normal">About Us</a>
               </li>
               <li class="nav-item mb-2">
                  <a href="careers.html" class="nav-link p-0 font-weight-normal">Available Positions</a>
               </li>
               <li class="nav-item mb-2">
                  <a href="contacts.html" class="nav-link p-0 font-weight-normal">Contacts</a>
               </li>
            </ul>
         </div>
         <div class="col-md-5 col-sm-6 mb-md-0 mb-4">
            <h6 class="text-light text-uppercase">Our experience</h6>
            <ul class="nav nav-light flex-column">
               <li class="nav-item mb-2">
                  <a href="services.html" class="nav-link p-0 font-weight-normal">Services</a>
               </li>
               <li class="nav-item mb-2">
                  <a href="projects.html" class="nav-link p-0 font-weight-normal">Work</a>
               </li>
               <li class="nav-item mb-2">
                  <a href="news.html" class="nav-link p-0 font-weight-normal">News</a>
               </li>
            </ul>
         </div>
      </div>
      <div class="d-flex align-items-sm-center justify-content-between py-1">
         <div class="font-size-xs text-light">
            <span class="d-sm-inline d-block mb-1">
               <span class="font-size-sm">&copy; </span>
               All rights reserved.
            </span>
            Made with
            <i class="cxi-heart mt-n1 mx-1 font-size-base text-primary align-middle"></i>
            <a href="#" class="text-light" target="_blank" rel="noopener noreferrer">by AnbomekerDev</a>
         </div>
         <div class="d-flex align-items-sm-center">
            <span class="d-sm-inline-block d-none text-light font-size-sm mr-3 mb-1 align-vertical text-uppercase">Go to top</span>
            <a class="btn-scroll-top btn-danger position-static rounded" href="#top" data-scroll>
               <i class="btn-scroll-top-icon cxi-angle-up"></i>
            </a>
         </div>
      </div>
   </div>
</footer>


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

<!-- switch alert -->
<script src="<?= base_url() ?>assets/frontend/dist/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>assets/frontend/dist/myscript.js"></script>

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