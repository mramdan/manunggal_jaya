<!-- Page title-->
<section class="pt-6 pb-lg-6 pb-5 bg-secondary bg-no-repeat bg-fixed" style="background-image: url(<?= base_url() ?>assets/frontend/img/construction/work/page-title-bg.jpg);">
   <div class="container py-lg-5">
      <div class="row">
         <div class="col-lg-6 col-md-8">

            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-lg-4 pb-md-3">
                  <li class="breadcrumb-item">
                     <a href="<?= base_url() ?>">Homepage</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Produk</li>
               </ol>
            </nav>

            <!-- Title -->
            <h1 class="display-1 text-uppercase">Produk Kami</h1>
            <p class="mb-0 lead text-muted">Produk kami mewakili pengalaman konstruksi yang didukung oleh hasrat untuk layanan klien yang sempurna, kualitas dan inovasi dalam industri jasa konstruksi interior dan eksterior.</p>
         </div>
      </div>
   </div>
</section>


<!-- Page content-->
<section class="container mt-lg-n5 pb-4">

   <div data-filter-grid>

      <!-- Filterable grid of items -->
      <div class="row pt-lg-3">

         <?php foreach ($kategori as $kategories) : ?>
            <!-- Grid item -->
            <div class="cs-grid-item col-lg-4 col-sm-6 mb-grid-gutter">
               <article>
                  <a class="cs-portfolio-card-slide" href="<?= base_url() ?>pages/produk_detail/<?= $kategories['slug'] ?>">
                     <div class="cs-portfolio-card-img">
                        <img src="<?= base_url() ?>assets/uploads/produk/kategori/<?= $kategories['foto'] ?>" alt="<?= $kategories['kategori'] ?>">
                     </div>
                     <div class="cs-portfolio-card-body">
                        <h3 class="cs-portfolio-card-title"><?= $kategories['kategori'] ?></h3>
                        <div class="font-size-sm">Harga Mulai Rp. <?= number_format($kategories['harga']) ?></div>
                        <div class="btn btn-outline-danger text-uppercase">View product</div>
                     </div>
                  </a>
               </article>
            </div>
         <?php endforeach ?>

      </div>
      <div class="mb-lg-5 mb-4 pt-3 text-center">
         <button class="btn btn-lg btn-link load-more-btn p-0 text-decoration-none" type="button">
            <i class="cxi-arrow-convert mt-n1 mr-3 align-middle"></i>
            Load more
         </button>
      </div>
   </div>
</section>