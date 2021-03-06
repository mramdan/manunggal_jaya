<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<section class="mb-md-2 pt-6 pb-lg-6 pb-5 bg-secondary bg-no-repeat bg-position-center-top bg-fixed" style="background-image: url(<?= base_url() ?>assets/frontend/img/construction/contacts/page-title-bg.jpg);">
   <div class="container pt-lg-5 pb-lg-2">
      <div class="row">
         <div class="col-lg-6 col-md-8">

            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-lg-4 pb-md-3">
                  <li class="breadcrumb-item">
                     <a href="<?= base_url() ?>">Homepage</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Kontak</li>
               </ol>
            </nav>

            <!-- Title -->
            <h1 class="display-1 text-uppercase">Kontak</h1>
            <p class="mb-0 lead text-muted">Hubungi kami untuk semua kebutuhan konstruksi Anda. Kami selalu menerima setiap pertanyaan dan komentar.</p>
         </div>
      </div>
   </div>
</section>


<!-- Page content-->
<!-- Contact form -->
<section class="container py-lg-6 py-5">
   <h2 class="h1 text-center">Contact us</h2>
   <p class="mb-5 pb-md-3 text-center text-muted">Harap lengkapi formulirnya. Informasi terperinci akan membantu kami membuat penawaran yang disesuaikan.</p>
   <div class="row">
      <div class="col-md-5 col-sm-9 mx-auto mb-md-0 mb-5">
         <img src="<?= base_url() ?>assets/frontend/img/construction/contacts/contact.jpg" alt="Contact Us" class="rounded">
      </div>
      <div class="col-lg-6 offset-lg-1 col-md-7">

         <!-- Form -->
         <!-- <form class="row needs-validation" action="<?= base_url('pages/submitKontak') ?>" method="POST" enctype="multipart/form-data" novalidate> -->
         <form class="row needs-validation" id="form_kontak" method="POST" novalidate>
            <div class="col-sm-6">
               <div class="form-group">
                  <label for="contact-name">Name*</label>
                  <input id="contact-name" name="nama" class="form-control form-control-lg" type="text" placeholder="Masukan Nama" required>
                  <div class="invalid-tooltip">Masukan Nama.</div>
               </div>
               <div class="form-group">
                  <label for="contact-tel">Phone*</label>
                  <input id="contact-tel" name="phone" class="form-control form-control-lg" type="tel" placeholder="Masukan No Telpon" required>
                  <div class="invalid-tooltip">Masukan No Telpon.</div>
               </div>
               <div class="form-group">
                  <label for="contact-email">Email</label>
                  <input id="contact-email" name="email" class="form-control form-control-lg bg-image-0" type="email" placeholder="Masukan Nama email">
               </div>
            </div>

            <div class="col-12">
               <div class="form-group">
                  <label for="contact-message">Message*</label>
                  <textarea id="contact-message" name="contactmessage" class="form-control form-control-lg bg-image-0" rows="5" placeholder="Your message" required></textarea>
                  <div class="invalid-tooltip">Please leave us a message.</div>
               </div>
               <div class="d-flex flex-lg-row flex-column align-items-sm-start align-items-stretch justify-content-sm-between pt-md-4 pt-2">
                  <div class="form-group custom-control custom-checkbox">
                     <input id="contact-subscribe" name="contactbox" class="custom-control-input" type="checkbox" checked>
                     <label for="contact-subscribe" class="custom-control-label">Saya setuju menerima komunikasi dari Bengkellas manunggal jaya.</label>
                  </div>
                  <!-- <button type="button" onclick="muncul()" class="btn btn-danger btn-lg ml-lg-5 text-uppercase">tes</button> -->
                  <button type="submit" id="btnSave" class="btn btn-danger btn-lg ml-lg-5 text-uppercase">Kirim</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</section>


<!-- Shaped bg -->
<div class="bg-secondary">


   <!-- Contact info -->
   <section class="container pt-lg-6 py-5">
      <h2 class="h1 text-center">Kantor Kami</h2>
      <p class="mb-5 pb-md-3 text-center text-muted">Hubungi kami, kirim catatan atau kunjungi kantor kami. Kami tidak sabar untuk mendengar kabar dari Anda!</p>

      <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=Duren%20Mekar,%20Kec.%20Bojongsari,%20Kota%20Depok,%20Jawa%20Barat,%20Indonesia+(https://www.google.com/maps/place/Depok,+Duren+Mekar,+Kec.+Bojongsari,+Kota+Depok,+Jawa+Barat,+Indonesia/@-6.4127142,106.7467403,19z/data=!4m9!1m3!11m2!2sHCrN9mqFR9bG0n7xs2O34CTAft6AwA!3e2!3m4!1s0x2e69e8ed34aeedf7:0xd4287d7007cd5a84!8m2!3d-6.4127235!4d106.7470809?hl=id-ID)&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>

   </section>


   <!-- Contact socials -->
   <section class="container pt-lg-6 py-5">
      <h2 class="h1 pb-3 text-center">Temukan kami di</h2>
      <div class="mb-5 text-center">
         <a href="#" class="social-btn mx-2" style="font-size: 32px;">
            <i class="cxi-whatsapp"></i>
         </a>
         <a href="#" class="social-btn mx-2" style="font-size: 32px;">
            <i class="cxi-messenger"></i>
         </a>
         <a href="#" class="social-btn mx-2" style="font-size: 32px;">
            <i class="cxi-facebook"></i>
         </a>
         <a href="#" class="social-btn mx-2" style="font-size: 32px;">
            <i class="cxi-twitter"></i>
         </a>
         <a href="#" class="social-btn mx-2" style="font-size: 32px;">
            <i class="cxi-youtube"></i>
         </a>
      </div>
   </section>
</div>


<script type="text/javascript">
   $('#form_kontak').submit(function(e) {
      // alert("Form submitted!");
      e.preventDefault();
      // Get form
      var form = $('#form_kontak')[0];

      // Create an FormData object
      //var data = new FormData(form);
      var data = new FormData(form);
      //var data = $(this).serialize();


      $('#btnSave').text('Sedang Proses, Mohon tunggu...'); //change button text
      $('#btnSave').attr('disabled', true); //set button disable 

      // ajax adding data to database
      // console.log($('#form_produk').serialize());
      $.ajax({
         url: "<?php echo site_url('pages/submitKontak') ?>",
         type: "POST",
         //contentType: 'multipart/form-data',
         cache: false,
         contentType: false,
         processData: false,
         method: 'POST',
         data: data,
         dataType: "JSON",

         success: function(data) {
            if (data.status == '00') //if success close modal and reload ajax table
            {
               Swal.fire(
                  'Good job!',
                  data.mess,
                  'success'
               );
            } else {
               Swal.fire(
                  'Oppss..!',
                  data.mess,
                  'error'
               );
            }

            $('#btnSave').text('Simpan'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 
         },
         error: function(jqXHR, textStatus, errorThrown) {
            type = 'error';
            msg = 'Error adding / update data';
            showAlert(type, msg); //utk show alert
            $('#btnSave').text('Simpan'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 
         }
      });

   });
</script>