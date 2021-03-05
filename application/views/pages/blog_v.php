<main>

   <div class="slider-area2">
      <div class="slider-height2 hero-overly d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="hero-cap hero-cap2 text-center pt-80">
                     <h2>Blog</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <section class="blog_area section-padding" style="background-color: white; border-top: 3px solid #ff1e00;">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
               <div class="blog_left_sidebar">



                  <?php foreach ($blog as $artikel) : ?>

                     <article class="blog_item">
                        <div class="blog_item_img">
                           <img class="card-img rounded-0" src="<?= base_url() ?>assets/img/blog/<?= $artikel['file']; ?>" alt="">
                           <a href="#" class="blog_item_date">
                              <h3><?= $artikel['judul_artikel']; ?></h3>
                              <p>Jan</p>
                           </a>
                        </div>
                        <div class="blog_details">
                           <a class="d-inline-block" href="blog_details.html">
                              <h2 style="color: #2d2d2d;"><?= $artikel['judul_artikel']; ?></h2>
                           </a>
                           <p><?= $artikel['konten']; ?></p>
                           <figure>
                              <figcaption class="blockquote-footer">
                                 Someone famous in <cite title="Source Title">Source Title</cite>
                              </figcaption>
                           </figure>
                        </div>
                     </article>

                  <?php endforeach ?>

                  <nav class="blog-pagination justify-content-center d-flex">
                     <ul class="pagination">
                        <li class="page-item">
                           <a href="#" class="page-link" aria-label="Previous">
                              <i class="ti-angle-left"></i>
                           </a>
                        </li>
                        <li class="page-item">
                           <a href="#" class="page-link">1</a>
                        </li>
                        <li class="page-item active">
                           <a href="#" class="page-link">2</a>
                        </li>
                        <li class="page-item">
                           <a href="#" class="page-link" aria-label="Next">
                              <i class="ti-angle-right"></i>
                           </a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>

</main>