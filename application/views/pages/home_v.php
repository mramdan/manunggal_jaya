<main>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">



        <div class="carousel-inner">
            <?php foreach ($hero as $hero) : ?>
                <div class="carousel-item <?= $hero['is_active']; ?>">

                    <img src="<?= base_url() ?>assets/img/blog/<?= $hero['file']; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero__caption">
                                    <div class="clas-text-white">

                                    </div>
                                    <span data-animation="fadeInLeft" data-delay=".4s">Selamat Datang Di </span>
                                    <h1 data-animation="fadeInLeft" data-delay=".6s"><?php echo $cv ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            <?php endforeach ?>
        </div>



    </div>











    <!-- <div class="slider-area">
        <div class="slider-active dot-style">

            <div class="single-slider slider-height hero-overly d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="hero__caption">
                                <div class="clas-text-white">

                                </div>
                                <span data-animation="fadeInLeft" data-delay=".4s">Selamat Datang Di </span>
                                <h1 data-animation="fadeInLeft" data-delay=".6s"><?php echo $cv ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <div class="video-icon">
        <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i class="fas fa-play"></i></a>
    </div>
    </div>


    <div class="our-info-area pt-170 pb-100 section-bg" data-background="assets/img/gallery/section_bg02.jpg">
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

                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="assets/img/gallery/testi-logo.png" alt="">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip</p>
                                </div>

                                <div class="testimonial-founder  ">
                                    <div class="founder-img">
                                        <span><strong>Christine Eve</strong> - Co Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-testimonial text-center">

                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <img src="assets/img/gallery/testi-logo.png" alt="">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip</p>
                                </div>

                                <div class="testimonial-founder  ">
                                    <div class="founder-img">
                                        <span><strong>Christine Eve</strong> - Co Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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