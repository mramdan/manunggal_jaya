<section class="mb-md-2 pt-6 pb-lg-6 pb-5 bg-secondary bg-no-repeat bg-position-center-top" style="background-image: url(<?= base_url() ?>assets/frontend/img/construction/shapes/03.png); border-bottom: 3px solid #ff1e00;">
   <div class="container pt-lg-5 pb-lg-2">
      <div class="row">
         <div class="col-lg-6 col-md-8">

            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-lg-4 pb-md-3">
                  <li class="breadcrumb-item">
                     <a href="index.html">Homepage</a>
                  </li>
                  <li class="breadcrumb-item">
                     <a href="about.html">About Us</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Available Positions</li>
               </ol>
            </nav>

            <!-- Title -->
            <h1 class="display-1 text-uppercase">Available Position</h1>
            <p class="mb-0 lead text-muted">Build your career with Createx Construction Bureau.</p>
         </div>
      </div>
   </div>
</section>

<section class="container pt-lg-6 pt-5 pb-4">
   <div class="row row-cols-1 row-cols-md-3 g-4">

      <?php foreach ($testimoni as $tmi) : ?>
         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card" style="width: 18rem; height:25rem;
       ">
               <div style="
            margin:auto;
            padding:20px;
            ">
                  <img src="<?= base_url() ?>assets/uploads/testimoni/<?= $tmi['foto']; ?>" class="card-img-top" style="
               width:150px;
            height:150px;
            border-radius:50%" alt="...">
               </div>

               <div class="card-body">
                  <figcaption class="blockquote-footer">
                     <p class="card-text"><cite title="Source Title"><cite title="Source Title"><?= $tmi['komentar']; ?></cite></cite></p>
                     <h5 class="card-title"><?= $tmi['nama_pelanggan']; ?></h5>
                  </figcaption>
               </div>
            </div>
         </div>

      <?php endforeach ?>

   </div>
</section>

<section class="py-5 jarallax" data-jarallax data-speed="0.8">

   <!-- Parallax bg -->
   <div class="jarallax-img" style="background-image: url(../../assets/img/construction/detail-form-bg.jpg);"></div>

   <!-- Content -->
   <div class="container py-4">
      <div class="row">
         <div class="col-lg-7">
            <div class="row align-items-center justify-content-between">
               <div class="col-xl-8 col-lg-8 col-md-8">
                  <div class="wantToWork-caption wantToWork-caption2">
                     <h2>Sudah Jadi Bagian Dari kami?</h2>
                  </div>
               </div>
            </div>
         </div>
         <div class="ml-md-auto mr-md-0 mx-auto" style="max-width: 495px;">

            <!-- Details form -->
            <form class="py-5 px-sm-5 px-4 bg-light rounded box-shadow-lg">
               <h2 class="h3 text-center">Berikan Penilaian Anda</h2>
               <div class="form-group">
                  <label for="detail-name" class="font-size-sm">Name*</label>
                  <input id="detail-name" class="form-control" type="text" placeholder="Your name" required>
               </div>
               <div class="form-group">
                  <label for="detail-message" class="font-size-sm">komentar</label>
                  <textarea id="detail-message" class="form-control" rows="2" placeholder="Your message" required></textarea>
               </div>
               <div class="form-group">
                  <label for="foto" class="font-size-sm">Masukan Foto Anda</label>
                  <input id="foto" class="form-control" type="file" placeholder="Masukan Foto Anda">
               </div>
               <div class="form-group custom-control custom-checkbox">
                  <input id="detail-subscribe" class="custom-control-input" type="checkbox" checked>
                  <label for="detail-subscribe" class="custom-control-label font-size-sm">I agree to receive communications from Createx Construction Bureau.</label>
               </div>
               <div class="text-center">
                  <button type="submit" class="btn btn-primary text-uppercase">Kirim Testimoni</button>
               </div>
            </form>
         </div>
      </div>
</section>