 <!-- Page title-->
 <section class="pt-6 pb-lg-6 pb-5 bg-no-repeat bg-fixed" style="background-image: url(<?= base_url() ?>assets/frontend/img/construction/work/single/page-title-bg-v1.png);">
     <div class="container py-lg-5">

         <!-- Breadcrumbs -->
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb mb-lg-4 pb-md-3">
                 <li class="breadcrumb-item">
                     <a href="<?= base_url() ?>">Homepage</a>
                 </li>
                 <li class="breadcrumb-item">
                     <a href="<?= base_url('pages/produk') ?>">Produk</a>
                 </li>
                 <li class="breadcrumb-item active" aria-current="page"><?= $produk['kategori'] ?></li>
             </ol>
         </nav>

         <!-- Title -->
         <h1 class="display-2 mb-sm-5 pb-md-3"><?= $produk['kategori'] ?></h1>

         <!-- Carousel -->
         <div class="cs-carousel cs-controls-onhover cs-gallery mb-lg-6 mb-5 pb-md-4">
             <div class="cs-carousel-inner" data-carousel-options='{
              "mode": "gallery",
              "navContainer": "#cs-project-thumbnails",
              "navAsThumbnails": true
            }'>

                 <?php foreach ($produk_detail as $dd) : ?>
                     <!-- Produk item -->
                     <div class="cs-gallery">
                         <a class="cs-gallery-item rounded" href="<?= base_url() ?>assets/uploads/produk/<?= $dd['foto'] ?>">
                             <img src="<?= base_url() ?>assets/uploads/produk/<?= $dd['foto'] ?>" alt="Gallery thumbnail">
                             <span class="cs-gallery-caption"><?= $dd['nama_produk'] ?></span>
                         </a>
                     </div>
                 <?php endforeach ?>
             </div>

             <!-- Thumbnails -->
             <div class="cs-thumbnails" id="cs-project-thumbnails">

                 <?php foreach ($produk_detail as $dd) : ?>
                     <button type="button" data-nav="<?= $dd['id_produk'] ?>">
                         <img src="<?= base_url() ?>assets/uploads/produk/<?= $dd['foto'] ?>" alt="Thumbnail">
                     </button>
                 <?php endforeach ?>

             </div>
         </div>

         <!-- Project goal -->
         <div class="row">
             <div class="col-md-6">
                 <h2 class="h1 pb-md-3">Deskripsi</h2>
                 <?= $produk['deskripsi'] ?>
             </div>
             <div class="col-lg-5 offset-lg-1 col-md-6">
                 <div class="card box-shadow-sm">
                     <div class="card-body">
                         <div class="mb-3 pt-3 px-2">
                             <h6 class="mb-0 font-size-sm text-uppercase">Durasi</h6>
                             <h4 class="mb-2 text-primary">Pembuatan 1 Minggu <br> Pemasangan 1 Hari</h4>
                             <!-- <p class="mb-0">Rhoncus pellentesque auctor auctor orci vulputate faucibus quis ut.</p> -->
                         </div>
                         <div class="mb-3 pt-3 px-2">
                             <h6 class="mb-0 font-size-sm text-uppercase">Harga</h6>
                             <h4 class="mb-2 text-primary">Rp. <?= number_format($produk['harga']) ?> per meter</h4>
                             <p class="mb-0">Spesifikasi bahan bisa di sesuaikan</p>
                         </div>
                         <div class="mb-3 pt-4 px-2">
                             <a href="https://api.whatsapp.com/send?phone=+6285793742404&text=Halo%20Bengkellas%20Manunggal%20Jaya,%20Saya%20mau%20order%20produk%20ini%20<?= base_url() ?>pages/produk_detail/<?= $produk['slug'] ?>" class="btn btn-gradient btn-hover-shadow btn-block">Pesan Sekarang</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>


 <!-- Page content -->
 <!-- Decisions -->
 <section class="pt-5 pb-lg-0 py-5 bg-secondary">
     <div class="container">
         <div class="row align-items-lg-center">
             <div class="col-md-5 d-md-block d-none mb-lg-n5" data-jarallax-element="-15" data-disable-parallax-down="lg">
                 <img src="<?= base_url() ?>assets/frontend/img/construction/work/single/decisions.jpg" alt="Decisions" class="rounded">
             </div>
             <div class="col-lg-6 offset-lg-1 col-md-6">
                 <h2 class="h1 mb-sm-5 pb-md-3">Constructive decisions</h2>
                 <ul class="list-unstyled mb-0">
                     <li class="d-flex mb-2 pb-1">
                         <i class="cxi-check mt-1 mr-3 text-primary"></i>
                         Kepuasan anda adalah tujuan utama kami.
                     </li>
                     <li class="d-flex mb-2 pb-1">
                         <i class="cxi-check mt-1 mr-3 text-primary"></i>
                         Produk dengan bahan pilihan terbaik.
                     </li>
                     <li class="d-flex mb-2 pb-1">
                         <i class="cxi-check mt-1 mr-3 text-primary"></i>
                         Pengiriman tepat waktu.
                     </li>
                     <li class="d-flex mb-2 pb-1">
                         <i class="cxi-check mt-1 mr-3 text-primary"></i>
                         Mengutamakan mutu dan bahan berkualitas.
                     </li>
                     <li class="d-flex mb-2 pb-1">
                         <i class="cxi-check mt-1 mr-3 text-primary"></i>
                         Melakukan perawatan secara berkala sesuai keinginan pelanggan.
                     </li>
                     <li class="d-flex mb-2 pb-1">
                         <i class="cxi-check mt-1 mr-3 text-primary"></i>
                         Penyelesaian produk sesuai jadwal Memberikan pelayanan, sesuai dengan standar yang telah ditetapkan.
                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </section>