<!-- Page content-->
<!-- Hero-->

<!-- Hero slider -->
<section class="cs-carousel cs-controls-onhover min-vh-100 mb-4 pt-lg-6">
    <div class="cs-carousel-inner" data-carousel-options='{
          "navContainer": "#hero-pager",
          "responsive": {
            "0": {
              "controls": false
            },
            "1500": {
              "controls": true
            }
          }
        }'>

        <?php foreach ($hero as $heros) : ?>
            <!-- Slider -->
            <div class="d-flex min-vh-100 position-relative pt-6 bg-size-cover bg-position-center-top" style="background-image: url(data:<?= $heros['type'] ?>;base64,<?= $heros['image'] ?>);">
                <div class="bg-overlay opacity-60"></div>
                <div class="container d-flex align-items-center bg-overlay-content text-light">
                    <div class="mt-md-n6" style="max-width: 595px;">
                        <h4 class="display-4 text-uppercase text-light">
                            <?= $heros['judul'] ?>
                        </h4>
                        <p class="mb-lg-5 pb-md-2 lead text-light"><?= $heros['deskripsi'] ?></p>
                        <a href="<?= base_url('pages/produk') ?>" class="btn btn-lg btn-danger mr-4 mb-3 text-uppercase">Explore Our Projects</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>

    <!-- Pager -->
    <div class="container position-relative mt-lg-n4">
        <div class="position-relative" style="max-width: 595px;">
            <div class="cs-pager pb-sm-4 pb-3" id="hero-pager">
                <button type="button" data-nav="0">01</button>
                <button type="button" data-nav="1">02</button>
                <button type="button" data-nav="2">03</button>
                <button type="button" data-nav="3">04</button>
            </div>
        </div>
    </div>
</section>


<!-- Presentation -->
<section class="container mb-4 py-lg-6 py-5">
    <h2 class="h1 text-center">We are <?= $name ?></h2>
    <p class="mb-lg-5 pb-3 font-size-lg text-muted text-center"><?= $about ?></p>
    <div class="jumbotron position-relative bg-size-cover bg-position-center bg-no-repeat text-center mb-0 py-sm-6 py-5" style="background-image: url(<?= base_url() ?>assets/frontend/img/construction/home/video-cover.jpg);">
        <div class="bg-overlay rounded opacity-60"></div>
        <div class="bg-overlay-content my-5 py-5">
            <a class="cs-video-btn cs-video-btn-lg my-3" href="https://www.youtube.com/watch?v=imtHMFpeAj8&amp;ab_channel=Unicoo" data-gallery-video></a>
            <div class="pt-1"></div>
        </div>
    </div>
</section>


<!-- Core values -->
<section class="container position-relative">
    <h2 class="h1 text-center">Nilai-nilai inti kami</h2>
    <p class="mb-5 pb-3 font-size-lg text-muted text-center">Misi kami adalah menetapkan standar tertinggi untuk bidang jasa bengkel las kanopi.</p>
    <div class="row pb-lg-6 pb-sm-5 pb-4">
        <div class="col-sm-4 mb-sm-0 mb-4 pb-sm-0 pb-2">
            <div class="px-lg-5 px-4 text-center">
                <img class="mb-4" src="<?= base_url() ?>assets/frontend/img/construction/icons/ic-like.svg" width="48" alt="Icon box image">
                <h5 class="h5 mb-2">Quality</h5>
                <p class="mb-0 text-muted">Culpa nostrud commodo ea consequat aliquip reprehenderit. Veniam velit nostrud aliquip sunt.</p>
            </div>
        </div>
        <span class="divider-vertical d-sm-block d-none"></span>
        <div class="col-sm-4 mb-sm-0 mb-4 pb-sm-0 pb-2">
            <div class="px-lg-5 px-4 text-center">
                <img class="mb-4" src="<?= base_url() ?>assets/frontend/img/construction/icons/ic-hand.svg" width="48" alt="Icon box image">
                <h5 class="h5 mb-2">Safety</h5>
                <p class="mb-0 text-muted">Anim reprehenderit sint voluptate exercitation adipisicing laborum adipisicing. Minim empor est ea.</p>
            </div>
        </div>
        <span class="divider-vertical d-sm-block d-none"></span>
        <div class="col-sm-4 mb-sm-0 mb-4 pb-sm-0 pb-2">
            <div class="px-lg-5 px-4 text-center">
                <img class="mb-4" src="<?= base_url() ?>assets/frontend/img/construction/icons/ic-slippers.svg" width="48" alt="Icon box image">
                <h5 class="h5 mb-2">Comfort</h5>
                <p class="mb-0 text-muted">Sit veniam aute dolore adipisicing nulla sit culpa. Minim mollit voluptate ullamco proident ea ad.</p>
            </div>
        </div>
    </div>

    <div class="p-md-5 p-4 bg-light box-shadow-sm rounded">
        <h3 class="pb-2 text-center">Ingin tahu lebih banyak? Ajukan pertanyaan kepada kami:</h3>

        <!-- Question form -->
        <form class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="form-group mb-lg-0">
                    <label for="question-name">Name*</label>
                    <input id="question-name" class="form-control" type="text" placeholder="Your name" required>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="form-group mb-lg-0">
                    <label for="question-tel">Phone</label>
                    <input id="question-tel" class="form-control" type="tel" placeholder="Your phone">
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group mb-sm-0">
                    <label for="question-email">Message*</label>
                    <input id="question-email" class="form-control" type="text" placeholder="Your message" required>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 d-flex align-items-end pt-sm-0 pt-4">
                <button type="submit" class="btn btn-danger btn-block">Send</button>
            </div>
        </form>
    </div>
</section>


<!-- Services -->
<section class="mt-md-n6 mt-n5 pt-md-6 pt-5 bg-secondary">
    <div class="container mt-4 pt-lg-6 py-5">
        <h2 class="h1 text-center">Pelayanan jasa kami</h2>
        <p class="mb-lg-5 pb-3 font-size-lg text-muted text-center">Biro Jasa Bengkel Las Manunggal Jaya adalah raksasa interior dengan berbagai layanan jasa.</p>
        <div class="row mb-lg-5 mb-4">
            <div class="col-lg-3 col-sm-6 mb-sm-grid-gutter mb-3">
                <a class="cs-image-fade h-100 card card-hover box-shadow py-3" href="services-single-v1.html" style="background-image: url(<?= base_url() ?>assets/frontend/img/construction/home/services/01.jpg);">
                    <div class="cs-image-inner py-5">
                        <div class="card-body">
                            <img class="cs-inner-img d-block mx-auto mb-4" src="<?= base_url() ?>assets/frontend/img/construction/icons/ic-construction.svg" width="52" alt="Construction">
                            <h5 class="cs-inner-text mb-0 text-center">Konstruksi</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-grid-gutter mb-3">
                <a class="cs-image-fade h-100 card card-hover box-shadow py-3" href="services-single-v1.html" style="background-image: url(<?= base_url() ?>assets/frontend/img/construction/home/services/02.jpg);">
                    <div class="cs-image-inner py-5">
                        <div class="card-body">
                            <img class="cs-inner-img d-block mx-auto mb-4" src="<?= base_url() ?>assets/frontend/img/construction/icons/ic-project.svg" width="52" alt="Project Development">
                            <h5 class="cs-inner-text mb-0 text-center">Project Pengembangan</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-grid-gutter mb-3">
                <a class="cs-image-fade h-100 card card-hover box-shadow py-3" href="services-single-v2.html" style="background-image: url(<?= base_url() ?>assets/frontend/img/construction/home/services/03.jpg);">
                    <div class="cs-image-inner py-5">
                        <div class="card-body">
                            <img class="cs-inner-img d-block mx-auto mb-4" src="<?= base_url() ?>assets/frontend/img/construction/icons/ic-pantone.svg" width="52" alt="Interior Design">
                            <h5 class="cs-inner-text mb-0 text-center">Interior Design</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6 mb-sm-grid-gutter mb-3">
                <a class="cs-image-fade h-100 card card-hover box-shadow py-3" href="services-single-v2.html" style="background-image: url(<?= base_url() ?>assets/frontend/img/construction/home/services/04.jpg);">
                    <div class="cs-image-inner py-5">
                        <div class="card-body">
                            <img class="cs-inner-img d-block mx-auto mb-4" src="<?= base_url() ?>assets/frontend/img/construction/icons/ic-repair.svg" width="52" alt="Repairs">
                            <h5 class="cs-inner-text mb-0 text-center">Perbaikan</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <h4 class="h3 d-flex flex-md-row flex-column align-items-center justify-content-center text-center">
            Pelajari lebih lanjut tentang layanan kami
            <a href="services.html" class="btn btn-lg btn-primary mt-md-0 mt-sm-4 mt-3 ml-md-5 text-uppercase">lihat layanan</a>
        </h4>
    </div>
</section>


<!-- Recent projects -->
<section class="container mt-md-4 py-lg-6 py-5">
    <div class="row align-items-end mb-5 pb-md-3">
        <div class="col-lg-7 col-md-8 col-sm-9">
            <h2 class="h1 mb-0 text-sm-left text-center">Jelajahi proyek pilihan kami dan pelajari lebih lanjut tentang pekerjaan kami</h2>
        </div>
        <div class="col d-sm-block d-none">

            <!-- Carousel custom controls -->
            <div class="tns-custom-controls cs-controls-inverse ml-auto" id="tns-projects-controls" tabindex="0">
                <button type="button" data-controls="prev" tabindex="-1">
                    <i class="cxi-arrow-left"></i>
                </button>
                <button type="button" data-controls="next" tabindex="-1">
                    <i class="cxi-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Carousel -->
    <div class="cs-carousel cs-nav-inverse">
        <div class="cs-carousel-inner" data-carousel-options='{
            "gutter": 30,
            "controlsContainer": "#tns-projects-controls",
            "responsive": {
              "0": {
                "items": 1,
                "nav": true
              },
              "576": {
                "items": 2,
                "nav": false
              },
              "992": {
                "items": 3
              }
            }
          }'>
            <article class="mb-5 pt-2 pb-sm-3 pb-2">
                <a class="cs-portfolio-card-slide" href="project-single-v1.html">
                    <div class="cs-portfolio-card-img">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/work/projects/07.jpg" alt="Card image">
                    </div>
                    <div class="cs-portfolio-card-body">
                        <h3 class="cs-portfolio-card-title">Red Finger Building</h3>
                        <div class="font-size-sm text-muted">Business Centers</div>
                        <div class="btn btn-outline-primary text-uppercase">View project</div>
                    </div>
                </a>
            </article>
            <article class="mb-5 pt-2 pb-sm-3 pb-2">
                <a class="cs-portfolio-card-slide" href="project-single-v2.html">
                    <div class="cs-portfolio-card-img">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/work/projects/01.jpg" alt="Card image">
                    </div>
                    <div class="cs-portfolio-card-body">
                        <h3 class="cs-portfolio-card-title">Cubes Building</h3>
                        <div class="font-size-sm text-muted">Business Centers</div>
                        <div class="btn btn-outline-primary text-uppercase">View project</div>
                    </div>
                </a>
            </article>
            <article class="mb-5 pt-2 pb-sm-3 pb-2">
                <a class="cs-portfolio-card-slide" href="project-single-v1.html">
                    <div class="cs-portfolio-card-img">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/work/projects/06.jpg" alt="Card image">
                    </div>
                    <div class="cs-portfolio-card-body">
                        <h3 class="cs-portfolio-card-title">The Pencil Building</h3>
                        <div class="font-size-sm text-muted">Stores &amp; Malls</div>
                        <div class="btn btn-outline-primary text-uppercase">View project</div>
                    </div>
                </a>
            </article>
            <article class="mb-5 pt-2 pb-sm-3 pb-2">
                <a class="cs-portfolio-card-slide" href="project-single-v2.html">
                    <div class="cs-portfolio-card-img">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/work/projects/02.jpg" alt="Card image">
                    </div>
                    <div class="cs-portfolio-card-body">
                        <h3 class="cs-portfolio-card-title">Modern Cottage</h3>
                        <div class="font-size-sm text-muted">Private Houses</div>
                        <div class="btn btn-outline-primary text-uppercase">View project</div>
                    </div>
                </a>
            </article>
        </div>
    </div>
    <h4 class="h3 d-flex flex-md-row flex-column align-items-center justify-content-center pt-sm-0 pt-4 text-center">
        Jelajahi semua pekerjaan kami
        <a href="projects.html" class="btn btn-lg btn-primary mt-md-0 mt-sm-4 mt-3 ml-md-5 text-uppercase">View portfolio</a>
    </h4>
</section>


<!-- Shaped bg -->
<div class="bg-secondary">


    <!-- Brands -->
    <!-- <section class="container mt-md-4 pt-lg-6 py-5 px-0">
        <h2 class="h1 mb-5 pb-md-3 text-center">Supported by 12+ partners</h2>

        <div class="cs-carousel">
            <div class="cs-carousel-inner" data-carousel-options='{
              "nav": false,
              "controls": false,
              "autoplay": true,
              "autoplayTimeout": 4000,
              "responsive": {
                "0": {
                  "items": 2
                },
                "576": {
                  "items": 3
                },
                "768": {
                  "items": 4
                },
                "992": {
                  "items": 5
                },
                "1200": {
                  "items": 6
                }
              }
            }'>
                <div class="px-3 text-center">
                    <a href="#" class="cs-swap-image">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/skema-floor.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/skema-floor-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="cs-swap-image">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/factory-glass.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/factory-glass-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="cs-swap-image">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/numark.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/numark-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="cs-swap-image">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/edwin.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/edwin-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="cs-swap-image">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/eiffage-construction.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/eiffage-construction-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="cs-swap-image">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/royal-floor-mats.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/royal-floor-mats-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
                <div class="px-3 text-center">
                    <a href="#" class="cs-swap-image">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/lotte.svg" class="cs-swap-to" width="120" alt="Brand logo hover">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/logo/lotte-g.svg" class="cs-swap-from" width="120" alt="Brand logo">
                    </a>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Testimonials -->
    <section class="container mt-md-4 pt-lg-6 pt-5">
        <div class="row pt-3 pt-lg-0">
            <div class="col-md-6 pb-md-4 pb-5">
                <h2 class="h1 mb-5 pb-md-3 text-md-left text-center">Apa yang dikatakan klien kami</h2>

                <!-- Carousel custom controls -->
                <div class="tns-custom-controls cs-controls-inverse d-md-flex d-none mb-n5 mx-0" id="tns-custom-controls" tabindex="0">
                    <button class="mb-n2" type="button" data-controls="prev" tabindex="-1">
                        <i class="cxi-arrow-left"></i>
                    </button>
                    <button class="mb-n2" type="button" data-controls="next" tabindex="-1">
                        <i class="cxi-arrow-right"></i>
                    </button>
                </div>

                <!-- Carousel -->
                <div class="cs-carousel cs-nav-outside">
                    <div class="cs-carousel-inner" data-carousel-options='{
                  "controlsContainer": "#tns-custom-controls",
                  "autoHeight": true,
                  "responsive": {
                    "0": {
                      "nav": true,
                      "gutter": 0
                    },
                    "768": {
                      "nav": false,
                      "gutter": 15
                    }
                  }
                }'>

                        <?php foreach ($testimoni as $tesi) : ?>
                            <!-- Carousel testimonial item -->
                            <blockquote class="px-1 text-md-left text-center">
                                <img class="mb-4 rounded-circle" src="<?= base_url() ?>assets/uploads/testimoni/<?= $tesi['foto'] ?>" width="72" alt="Author">
                                <p><?= $tesi['komentar'] ?>. </p>
                                <footer>
                                    <h3 class="h6 mb-0"><?= $tesi['nama_pelanggan'] ?></h3>
                                    <span class="font-size-sm text-muted">Position, Company name</span>
                                </footer>
                            </blockquote>
                        <?php endforeach ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 d-md-block d-none mb-md-n5 ml-lg-auto" data-jarallax-element="15" data-disable-parallax-down="lg">
                <img class="rounded" src="<?= base_url() ?>assets/frontend/img/construction/testimonials/03.jpg" alt="Testimonials">
            </div>
        </div>
    </section>


</div> <!-- / Shaped bg -->


<!-- Shaped bg -->
<div class="pt-md-5 bg-no-repeat bg-position-center-top" style="background-image: url(<?= base_url() ?>assets/frontend/img/construction/shapes/01.png);">

    <!-- Recent news -->
    <section class="container mt-md-4 py-lg-6 py-5">
        <h2 class="h1 mb-5 pb-md-3 text-center">Blog</h2>
        <div class="row">
            <div class="col-lg-7 col-md-6 mb-md-0 mb-grid-gutter">
                <article class="cs-image-scale h-100 card box-shadow card-hover border-0">
                    <a class="cs-image-inner card-img-top" href="news-single.html">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/news/01.jpg" alt="Blog card image">
                    </a>
                    <div class="card-body">
                        <h3 class="h5 mb-2 pb-1">
                            <a class="nav-link" href="news-single.html">How to Build Climate Change-Resilient Infrastructure</a>
                        </h3>
                        <ul class="nav nav-muted mb-2 pb-1">
                            <li class="nav-item mr-2">
                                <a class="nav-link d-inline-block mr-2 p-0 font-size-sm font-weight-normal" href="#">
                                    Industry News
                                </a>
                                <span class="text-border px-1">|</span>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link d-inline-block mr-2 p-0 font-size-sm font-weight-normal" href="#">
                                    June 24, 2020
                                </a>
                                <span class="text-border px-1">|</span>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link d-inline-block mr-2 p-0 font-size-sm font-weight-normal" href="#">
                                    <i class="cxi-chat mt-n1 mr-2 font-size-base align-middle"></i>
                                    4 comments
                                </a>
                            </li>
                        </ul>
                        <p class="card-text">Ipsum aliquet nisi, hendrerit rhoncus quam tortor, maecenas faucibus. Tincidunt aliquet sit vel, venenatis nulla. Integer bibendum turpis convallis...</p>
                    </div>
                </article>
            </div>
            <div class="col-lg-5 col-md-6 d-flex flex-column mb-md-0 mb-grid-gutter">
                <article class="cs-image-scale h-100 mb-grid-gutter card box-shadow card-hover border-0">
                    <a class="cs-image-inner card-img-top" href="news-single.html">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/news/recent/01.jpg" alt="Blog card image">
                    </a>
                    <div class="card-body py-3">
                        <h3 class="h5 mb-2">
                            <a class="nav-link" href="news-single.html">How Construction Can Help Itself</a>
                        </h3>
                        <ul class="nav nav-muted">
                            <li class="nav-item mr-2">
                                <a class="nav-link d-inline-block mr-2 p-0 font-size-sm font-weight-normal" href="#">
                                    Innovation
                                </a>
                                <span class="text-border px-1">|</span>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link d-inline-block mr-2 p-0 font-size-sm font-weight-normal" href="#">
                                    June 12, 2020
                                </a>
                                <span class="text-border px-1">|</span>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link d-inline-block mr-2 p-0 font-size-sm font-weight-normal" href="#">
                                    <i class="cxi-chat mt-n1 mr-2 font-size-base align-middle"></i>
                                    No comments
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
                <article class="cs-image-scale h-100 card box-shadow card-hover border-0">
                    <a class="cs-image-inner card-img-top" href="news-single.html">
                        <img src="<?= base_url() ?>assets/frontend/img/construction/news/recent/02.jpg" alt="Blog card image">
                    </a>
                    <div class="card-body py-3">
                        <h3 class="h5 mb-2">
                            <a class="nav-link" href="news-single.html">Types of Flooring Materials</a>
                        </h3>
                        <ul class="nav nav-muted">
                            <li class="nav-item mr-2">
                                <a class="nav-link d-inline-block mr-2 p-0 font-size-sm font-weight-normal" href="#">
                                    Company News
                                </a>
                                <span class="text-border px-1">|</span>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link d-inline-block mr-2 p-0 font-size-sm font-weight-normal" href="#">
                                    June 2, 2020
                                </a>
                                <span class="text-border px-1">|</span>
                            </li>
                            <li class="nav-item mr-2">
                                <a class="nav-link d-inline-block mr-2 p-0 font-size-sm font-weight-normal" href="#">
                                    <i class="cxi-chat mt-n1 mr-2 font-size-base align-middle"></i>
                                    No comments
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
        <h4 class="h3 d-flex flex-md-row flex-column align-items-center justify-content-center mt-md-4 pt-md-5 pt-3 text-center">
            Explore all our news posts
            <a href="news.html" class="btn btn-lg btn-primary mt-md-0 mt-sm-4 mt-3 ml-md-5 text-uppercase">View all news</a>
        </h4>
    </section>


</div>