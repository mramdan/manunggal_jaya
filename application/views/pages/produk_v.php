<main>

   <div class="slider-area2">
      <div class="slider-height2 hero-overly d-flex align-items-center">
         <div class="container">
            <div class="row">
               <div class="col-xl-12">
                  <div class="hero-cap hero-cap2 text-center pt-80">
                     <h2>Testimoni</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div style="background-color: white; border-top: 3px solid #ff1e00;">


      <section id="portfolio" class="clearfix">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <ul id="portfolio-flters">
                     <li data-filter="*" class="filter-active">All</li>
                     <li data-filter=".filter-app">Kanopi</li>
                     <li data-filter=".filter-card">Pagar</li>
                     <li data-filter=".filter-web">Tralis</li>
                     <li data-filter=".filter-web">Railing</li>
                     <li data-filter=".filter-web">clasik</li>
                  </ul>
               </div>
            </div>

            <div class="row portfolio-container">
               <div class="row row-cols-1 row-cols-md-3 g-4">

                  <?php foreach ($produk as $pk) : ?>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 portfolio-item filter-app">
                        <div class="card">
                           <a href="<?= base_url() ?>pages/detail_produk/<?= $pk['nama_produk']; ?>">
                              <img src="<?= base_url() ?>assets/img/gallery/<?= $pk['file']; ?>" class="card-img-top" alt="...">
                           </a>
                           <div class="card-body">
                              <h5 class="card-title"><?= $pk['nama_produk']; ?></h5>
                              <p><?= $pk['deskripsi']; ?></p>
                           </div>
                           <div class="card-body">
                              <div class="header-btns d-none d-lg-block">

                                 <style>
                                    .hg {
                                       width: 100%;
                                       height: 50px;
                                       background-color: #ff1e00;
                                       border-radius: 5px;
                                       color: blanchedalmond;
                                       display: flex;
                                       text-align: center;
                                       font: 5px;
                                    }

                                    .hg span {
                                       margin: auto;
                                       font-weight: bolder;
                                    }
                                 </style>
                                 <div class="hg">
                                    <span>Rp.<?= $pk['harga']; ?></span>
                                 </div>


                              </div>
                           </div>

                        </div>
                     </div>
                  <?php endforeach ?>
               </div>


               <!-- <?php foreach ($produk as $pk) : ?>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 portfolio-item filter-app">

                     <div class="prod-box portfolio-wrap">
                        <div class="prod-i">
                           <a href="<?= base_url() ?>pages/detail_produk/<?= $pk['id_produk']; ?>">
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
               <?php endforeach ?> -->


            </div>
         </div>
      </section>




   </div>

</main>