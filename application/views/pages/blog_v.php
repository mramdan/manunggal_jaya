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
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder='Search Keyword' onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                              <div class="input-group-append">
                                 <button class="btns" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Search</button>
                     </form>
                  </aside>
                  <aside class="single_sidebar_widget post_category_widget">
                     <h4 class="widget_title" style="color: #2d2d2d;">Category</h4>
                     <ul class="list cat-list">
                        <li>
                           <a href="#" class="d-flex">
                              <p>Resaurant food</p>
                              <p>(37)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Travel news</p>
                              <p>(10)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Modern technology</p>
                              <p>(03)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Product</p>
                              <p>(11)</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Inspiration</p>
                              <p>21</p>
                           </a>
                        </li>
                        <li>
                           <a href="#" class="d-flex">
                              <p>Health Care (21)</p>
                              <p>09</p>
                           </a>
                        </li>
                     </ul>
                  </aside>
                  <aside class="single_sidebar_widget popular_post_widget">
                     <h3 class="widget_title" style="color: #2d2d2d;">Recent Post</h3>
                     <div class="media post_item">
                        <img src="assets/img/post/post_1.png" alt="post">
                        <div class="media-body">
                           <a href="blog_details.html">
                              <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                           </a>
                           <p>January 12, 2019</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="assets/img/post/post_2.png" alt="post">
                        <div class="media-body">
                           <a href="blog_details.html">
                              <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
                           </a>
                           <p>02 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="assets/img/post/post_3.png" alt="post">
                        <div class="media-body">
                           <a href="blog_details.html">
                              <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                           </a>
                           <p>03 Hours ago</p>
                        </div>
                     </div>
                     <div class="media post_item">
                        <img src="assets/img/post/post_4.png" alt="post">
                        <div class="media-body">
                           <a href="blog_details.html">
                              <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
                           </a>
                           <p>01 Hours ago</p>
                        </div>
                     </div>
                  </aside>
               </div>
            </div>
         </div>
      </div>
   </section>

</main>