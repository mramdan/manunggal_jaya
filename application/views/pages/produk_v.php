<main>

   <div class="slider-area2">
      <div class="slider-height2 hero-overly d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="hero-cap hero-cap2 text-center pt-80">
                     <h2>Produk</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <section class="blog_area section-padding" style="background-color: white; border-top: 3px solid #ff1e00;">
      <div class="row">
         <div class="col-lg-10 mb-5 mb-lg-0">
            <section id="portfolio" class="clearfix">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12">
                        <ul id="portfolio-flters">
                           <li data-filter="*" class="filter-active">All</li>
                           <li data-filter=".filter-app">App</li>
                           <li data-filter=".filter-card">Card</li>
                           <li data-filter=".filter-web">Web</li>
                        </ul>
                     </div>
                  </div>

                  <div class="row portfolio-container">



                     <?php foreach ($produk as $pk) : ?>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 portfolio-item filter-app">

                           <div class="prod-box portfolio-wrap">
                              <div class="prod-i">
                                 <a href="#">
                                    <img src="<?= base_url() ?>assets/img/gallery/<?= $pk['file']; ?>" class="img-fluid" alt="#" /></a>
                              </div>
                              <div class="prod-dit clearfix">
                                 <div class="dit-t clearfix">
                                    <div class="left-ti">
                                       <h4><?= $pk['nama_produk']; ?></h4>
                                       <p><?= $pk['deskripsi']; ?></p>
                                    </div>
                                    <a href="#">Rp.<?= $pk['harga']; ?></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     <?php endforeach ?>


                  </div>
               </div>
            </section>
         </div>

         <div class="col-lg-2">
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
                     <img src="<?= base_url() ?>assets/img/post/post_1.png" alt="post">
                     <div class="media-body">
                        <a href="blog_details.html">
                           <h3 style="color: #2d2d2d;">From life was you fish...</h3>
                        </a>
                        <p>January 12, 2019</p>
                     </div>
                  </div>
                  <div class="media post_item">
                     <img src="<?= base_url() ?>assets/img/post/post_2.png" alt="post">
                     <div class="media-body">
                        <a href="blog_details.html">
                           <h3 style="color: #2d2d2d;">The Amazing Hubble</h3>
                        </a>
                        <p>02 Hours ago</p>
                     </div>
                  </div>
                  <div class="media post_item">
                     <img src="<?= base_url() ?>assets/img/post/post_3.png" alt="post">
                     <div class="media-body">
                        <a href="blog_details.html">
                           <h3 style="color: #2d2d2d;">Astronomy Or Astrology</h3>
                        </a>
                        <p>03 Hours ago</p>
                     </div>
                  </div>
                  <div class="media post_item">
                     <img src="<?= base_url() ?>assets/img/post/post_4.png" alt="post">
                     <div class="media-body">
                        <a href="blog_details.html">
                           <h3 style="color: #2d2d2d;">Asteroids telescope</h3>
                        </a>
                        <p>01 Hours ago</p>
                     </div>
                  </div>
               </aside>
               <aside class="single_sidebar_widget tag_cloud_widget">
                  <h4 class="widget_title" style="color: #2d2d2d;">Tag Clouds</h4>
                  <ul class="list">
                     <li>
                        <a href="#">project</a>
                     </li>
                     <li>
                        <a href="#">love</a>
                     </li>
                     <li>
                        <a href="#">technology</a>
                     </li>
                     <li>
                        <a href="#">travel</a>
                     </li>
                     <li>
                        <a href="#">restaurant</a>
                     </li>
                     <li>
                        <a href="#">life style</a>
                     </li>
                     <li>
                        <a href="#">design</a>
                     </li>
                     <li>
                        <a href="#">illustration</a>
                     </li>
                  </ul>
               </aside>
            </div>
         </div>
      </div>
      </div>
</main>