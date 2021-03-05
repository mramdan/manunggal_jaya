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
             <div class="row" style="padding-top:30px; padding-bottom:80px;padding-left: 30px;">
                <nav style="--bs-breadcrumb-divider: '>'; border-bottom:3px solid #585858;" aria-label="breadcrumb">
                   <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Library</li>
                   </ol>
                </nav>

             </div>
             <section class="wantToWork-area w-padding2" style="border-radius: 10px;">
                <div class="container">
                   <div class="row align-items-center justify-content-between">
                      <div class="col-xl-8 col-lg-8 col-md-8">
                         <div class="wantToWork-caption wantToWork-caption2">
                            <h2>Sudah Jadi Bagian Dari kami?</h2>
                         </div>
                      </div>
                      <div class="col-xl-2 col-lg-2 col-md-3">

                         <!-- Button trigger modal -->
                         <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Masukan Testimoni
                         </button>

                         <!-- Modal -->
                         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                               <div class="modal-content">
                                  <div style="text-align: center; margin-top:20px;">
                                     <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  </div>
                                  <div class="modal-body">

                                     <form class="form-contact contact_form" action="<?= base_url('pages/contact') ?>">
                                        <div class="row">
                                           <div class="col-12">
                                              <div class="form-group">
                                                 <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Pesan'" placeholder=" Masukan Pesan"></textarea>
                                              </div>
                                           </div>
                                           <div class="col-sm-6">
                                              <div class="form-group">
                                                 <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Nama Anda'" placeholder="Masukan Nama Anda">
                                              </div>
                                           </div>
                                           <div class="col-sm-6">
                                              <div class="form-group">
                                                 <input class="form-control valid" name="file" id="file" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'foto'" placeholder="foto">
                                              </div>
                                           </div>
                                        </div>
                                  </div>
                                  <div class="modal-footer">
                                     <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                     <button type="submit" class="btn btn-primary">Save changes</button>
                                  </div>
                                  </form>
                               </div>
                            </div>
                         </div>


                      </div>
                   </div>
                </div>
             </section>

             <div class="row portfolio-container" style="margin-top: 100px;">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                   <?php foreach ($testimoni as $tmi) : ?>
                      <div class="card" style="width: 18rem; height:400px;">
                         <div style="width: 150px;
          height:150px; margin:auto; padding-top:20px;">
                            <img src="<?= base_url() ?>assets/img/gallery/<?= $tmi['foto']; ?>" class="card-img-top" alt="..." style="border-radius: 150px;">
                         </div>

                         <div class="card-body" style="margin-top: 50px;">


                            <blockquote class="blockquote mb-0">
                               <p class="card-text"><cite title="Source Title"><?= $tmi['komentar']; ?></cite></p>
                            </blockquote>
                            <footer class="blockquote-footer">
                               <h5 class="card-title"><?= $tmi['nama_pelanggan']; ?></h5>
                            </footer>
                         </div>
                      <?php endforeach ?>
                      </div>
                </div>
       </section>
 </main>