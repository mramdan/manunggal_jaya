 <main>

    <div class="slider-area2">
       <div class="slider-height2 hero-overly d-flex align-items-center">
          <div class="container">
             <div class="row">
                <div class="col-xl-12">
                   <div class="hero-cap hero-cap2 text-center pt-80">
                      <h2>Detail Produk</h2>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>


    <section style="background-color: white; border-top: 3px solid #ff1e00;">
       <div style="width: 100%; margin:auto;">
          <div class="row" style="padding-top:30px; padding-bottom:80px;padding-left: 30px;">
             <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                   <li class="breadcrumb-item"><a href="#">Home</a></li>
                   <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
             </nav>
          </div>
       </div>


       <div style="width: 100%; margin:auto;">
          <div class="row" style="padding-top:10px; padding-bottom:80px;padding-left: 30px;">
             <div class="col-lg-4">
                <div class="blog_left_sidebar">
                   <img src="<?= base_url() ?>assets/img/blog/single_blog_1.png" class="figure-img img-fluid rounded" alt=" ...">
                </div>
             </div>

             <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_right_sidebar">
                   <div class="container" style="background-color: white;">
                      <div class="row align-items-end" style="padding-top: 50px; padding-left:20px;">
                         <div class="col-lg-8">
                            <div class="section-tittle profession-details">
                               <h2 class="text-secondary"><?= $detail['nama_produk'] ?></h2>
                               <h3 class="text-dark">Rp. <?= number_format($detail['harga']) ?></h3>
                            </div>
                         </div>
                      </div>
                   </div>

                   <div class="container" style="background-color: white;">
                      <div class="container">
                         <div class="row mt-5">
                            <div class="col">
                               <h5 class="text-dark">Pengiriman</h5>
                            </div>

                            <div class="col order-1">
                               <div class="section-tittle text-center mb-70">
                                  <span class="mb-2" style="font-size:12px;">lokasi Pelapak</span>
                                  <h6 class="text-dark">Depok</h6>
                               </div>
                            </div>
                         </div>
                      </div>

                      <button type="button" class="btn btn-outline-primary">Chat</button>
                      <button type="button" class="btn btn-primary active" data-bs-toggle="button" autocomplete="off" aria-pressed="true">Order Sekarang</button>
                   </div>
                </div>
             </div>
          </div>
       </div>

    </section>

    <!-- informasi barang -->

    <section class="blog_area section-padding" style="background-color: white; border-top: 3px solid #d8d7d7;">
       <div style="width: 100%; margin:auto;">
          <div class="row" style="padding:20px">

             <div class="col-lg-4">
                <div class="blog_left_sidebar">
                   <h1 class="text-dark">Informasi Produk</h1>
                </div>
             </div>

             <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_right_sidebar">
                   <div class="container" style="background-color: white;">
                      <div class="row align-items-end" style="padding-top: 50px; padding-left:20px;">
                         <div class="col-lg-8">
                            <div class="section-tittle profession-details">
                               <h2 class="text-secondary">Spesifikasi</h2>
                               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat odio cumque facilis eum illum, doloremque nostrum deleniti accusamus error earum voluptatibus ab, dolorum libero quisquam doloribus harum commodi saepe quas veniam dicta autem est. Incidunt ipsum, quos iure enim eaque sequi quo neque doloribus fuga totam eum quidem alias temporibus.</p>
                            </div>
                         </div>
                      </div>
                   </div>





                </div>
             </div>
          </div>
       </div>
       </div>
    </section>

 </main>