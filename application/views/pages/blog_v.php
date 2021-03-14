<section class="mb-md-2 pt-6 pb-lg-6 pb-5 bg-secondary bg-no-repeat bg-fixed" style="background-image: url(<?= base_url() ?>assets/frontend/img/construction/news/page-title-bg.jpg);">
   <div class="container pt-lg-5 pb-lg-2">
      <div class="row">
         <div class="col-lg-6 col-md-8">

            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-lg-4 pb-md-3">
                  <li class="breadcrumb-item">
                     <a href="<?= base_url() ?>">Homepage</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Blog</li>
               </ol>
            </nav>

            <!-- Title -->
            <h1 class="display-1 text-uppercase">Blog</h1>
            <p class="mb-0 lead text-muted">Stay tuned with our blog, expert tips and articles.</p>
         </div>
      </div>
   </div>
</section>


<!-- Page content-->
<!-- News grid -->
<section class="container mb-md-5 pt-lg-6 pt-5 pb-4">

   <!-- <h2 class="h1 mb-5 text-center">Categories</h2> -->

   <!-- Filterable grid container. IMPORTANT: it should wrap filters/sorters and target grid of items in order for plugin to work! -->
   <div data-filter-grid>

      <!-- Filterable grid of items -->
      <div class="row pt-3">
         <?php foreach ($blog as $blogs) : ?>
            <div class="cs-grid-item col-md-6 mb-md-5 mb-grid-gutter pb-lg-3">
               <!-- Post preview: card alt -->
               <article class="cs-image-scale h-100 card box-shadow card-hover border-0">
                  <a class="cs-image-inner card-img-top" href="<?= base_url() ?>b/artikel/<?= $blogs['link'] ?>">
                     <img src="<?= base_url() ?>assets/uploads/blog/<?= $blogs['foto'] ?>" alt="foto-<?= $blogs['judul_blog'] ?>">
                  </a>
                  <div class="card-body">
                     <h3 class="h5 mb-2 pb-1">
                        <a class="nav-link" href="<?= base_url() ?>b/artikel/<?= $blogs['link'] ?>"><?= $blogs['judul_blog'] ?></a>
                     </h3>
                     <ul class="nav nav-muted mb-2 pb-1">
                        <li class="nav-item mr-2">
                           <a class="nav-link d-inline-block mr-2 p-0 font-size-sm font-weight-normal" href="#">
                              By Admin
                           </a>
                           <span class="text-border px-1">|</span>
                        </li>
                        <li class="nav-item mr-2">
                           <a class="nav-link d-inline-block mr-2 p-0 font-size-sm font-weight-normal" href="#">
                              <?= $blogs['tgl_post'] ?>
                           </a>
                           <span class="text-border d-sm-inline-block d-none px-1">|</span>
                        </li>
                        <li class="nav-item d-sm-block d-none mr-2">
                           <a class="nav-link d-inline-block mr-2 p-0 font-size-sm font-weight-normal" href="#">
                              <i class="cxi-chat mt-n1 mr-2 font-size-base align-middle"></i>
                              4 comments
                           </a>
                        </li>
                     </ul>
                     <p class="card-text"><?= substr($blogs['konten'], 0, 120)  ?>...</p>
                  </div>
               </article>
            </div>
         <?php endforeach ?>
      </div>

      <!-- Pagination -->
      <nav aria-label="News navigation">
         <ul class="pagination justify-content-center mb-lg-5 mb-4 pt-3">
            <li class="page-item d-sm-none">
               <span class="page-link page-link-static">1 / 4</span>
            </li>
            <li class="page-item active d-none d-sm-block" aria-current="page">
               <span class="page-link">1
                  <span class="sr-only">(current)</span>
               </span>
            </li>
            <li class="page-item d-none d-sm-block">
               <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item d-none d-sm-block">
               <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item d-none d-sm-block">
               <a class="page-link" href="#">4</a>
            </li>
            <li class="page-item">
               <a class="page-link" href="#">
                  <i class="cxi-arrow-right"></i>
               </a>
            </li>
         </ul>
      </nav>
   </div>
</section>