<main>


    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner">

            <?php foreach ($hero as $hero) : ?>

                <div class="carousel-item <?= $hero['is_active']; ?>">
                    <img src="data:<?= $hero['type']; ?>;base64,<?= $hero['image']; ?>" class="d-block w-100" alt="...">
                </div>

            <?php endforeach ?>
        </div>

    </div>







    <!-- <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <?php foreach ($hero as $hero) : ?>

                <div class="carousel-item <?= $hero['is_active']; ?>">
                    <img src="data:<?= $hero['type']; ?>;base64,<?= $hero['image']; ?>" class="d-block w-100" alt="...">

                    <div class="caption">

                        <div class="box-1">
                            <div class="hero-caption">
                                <h1><?= $hero['judul']; ?></h1>
                                <span><?= $hero['deskripsi']; ?></span>

                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="hero__caption">
                                <div class="clas-text-white">
                                    <span data-animation="fadeInLeft" data-delay=".4s"><?= $hero['deskripsi']; ?> </span>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s"><?= $hero['judul']; ?></h1>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
        </div>

    </div>

<?php endforeach ?>
</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
</div> -->



    <div class="our-info-area pt-170 pb-100 section-bg" data-background="assets/img/gallery/section_bg02.jpg" style="border-top: 3px solid #ff1e00;">
        <div class="container">
            <div class="row">
                <h1 class="text-white">Manunggal Jaya</h1>
                <div class="section-tittle profession-details mt-3">
                    <p style="color: white;"><?= $about ?>
                    </p>
                    <p style="color: white;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="professional-services section-bg d-none d-md-block" data-background="assets/img/gallery/section_bg04.jpg"></div>
    <div class="profession-caption">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-8">

                    <div class="section-tittle profession-details">
                        <h2>Kenapa Memilih Kami.</h2>
                        <p>
                            <?php echo $service ?>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="services-area section-padding3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle text-center mb-70">
                        <h2 class="text-white">Produk Layanan</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php foreach ($produk as $pk) : ?>

                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="single-services mb-200">
                            <div class="services-img">
                                <a href="services.html">
                                    <img src="<?= base_url() ?>assets/img/gallery/<?= $pk['file']; ?>" alt="">
                                </a>
                            </div>
                            <div class="services-caption">
                                <h3><a href="services.html"><?= $pk['nama_produk']; ?></a></h3>
                                <p class="pera1">Get Produk
                                </p>
                                <p class="pera2"><?= $pk['deskripsi']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>

            </div>
        </div>
    </div>

    <div class="testimonial-area testimonial-padding">
        <div class="container">

            <div class="row d-flex justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="h1-testimonial-active dot-style">
                        <div class="single-testimonial text-center">

                            <?php foreach ($testimoni as $tmi) : ?>
                                <div class="testimonial-caption ">
                                    <div class="testimonial-top-cap">
                                        <img src="<?= base_url() ?>assets/img/gallery/<?= $tmi['foto']; ?>" alt="" style="border-radius: 150px;">
                                        <p><?= $tmi['komentar']; ?></p>
                                    </div>

                                    <div class="testimonial-founder  ">
                                        <div class="founder-img">
                                            <span><strong><?= $tmi['nama_pelanggan']; ?></strong> - Co Founder</span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="
        width: 800px;
        height:400px;
        margin:auto;">
            <div style="
            margin-top: 80px;
            text-align:center;
            color:white">
                <div class="header-btns d-none d-lg-block">
                    <a href="<?php echo base_url(); ?>pages/testimoni" class="btn header-btn">Get Testimoni</a>
                </div>

            </div>
        </div>


    </div>







    <section class="wantToWork-area w-padding2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <div class="wantToWork-caption wantToWork-caption2">
                        <h2>Apa Yang Di Butuhkan?</h2>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3">
                    <a href="<?= base_url() ?>pages/contact" class="btn btn-black f-right">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
</main>