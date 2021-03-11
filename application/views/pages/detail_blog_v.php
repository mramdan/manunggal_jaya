<?php
$b = $blog->row_array();
?>
<section class="mb-lg-0 mb-5 pt-6 pb-lg-6 pb-5 bg-secondary">
    <div class="container py-lg-5">

        <!-- Breadcrumbs -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-lg-4 pb-md-3">
                <li class="breadcrumb-item">
                    <a href="<?= base_url() ?>">Homepage</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?= base_url('pages/blog') ?>">Blog</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page"><?= $b['judul_blog'] ?></li>
            </ol>
        </nav>

        <!-- Title -->
        <h1 class="display-2 mb-md-5"><?= $b['judul_blog'] ?></h1>

        <!-- Meta -->
        <div class="d-sm-flex justify-content-between">
            <ul class="nav nav-muted mb-0">
                <li class="nav-item mr-2">
                    <a class="nav-link d-inline-block mr-2 p-0 text-danger" href="#">
                        By Administrator
                    </a>
                    <span class="text-border px-1">|</span>
                </li>
                <li class="nav-item mr-2">
                    <a class="nav-link d-inline-block mr-2 p-0 font-weight-normal" href="#">
                        <?= $b['tgl_post'] ?>
                    </a>
                    <span class="text-border d-sm-inline-block d-none px-1">|</span>
                </li>
                <li class="nav-item d-sm-block d-none mr-2">
                    <a class="nav-link d-inline-block mr-2 p-0 font-weight-normal" href="#comments" data-scroll>
                        <i class="cxi-chat mt-n1 mr-2 font-size-base align-middle"></i>
                        4 comments
                    </a>
                </li>
            </ul>
            <div class="d-sm-block d-none ml-sm-4">
                <a href="#" class="social-btn">
                    <i class="cxi-facebook"></i>
                </a>
                <a href="#" class="social-btn">
                    <i class="cxi-linkedin"></i>
                </a>
                <a href="#" class="social-btn">
                    <i class="cxi-twitter"></i>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Page content-->
<section class="container pb-lg-6 pb-5">
    <img src="<?= base_url() ?>assets/uploads/blog/<?= $b['foto'] ?>" alt="gambar-<?= $b['foto'] ?>" class="img-thumbnail d-block mt-lg-n5 mb-5 rounded">
    <div class="col-lg-8 col-md-10 mx-auto px-0">
        <?= $b['konten'] ?>
        <!-- Share -->
        <div class="pt-lg-4 text-nowrap">
            <h6 class="d-inline-block mr-2 mb-0">Share:</h6>
            <a href="#" class="social-btn mr-1">
                <i class="cxi-facebook"></i>
            </a>
            <a href="#" class="social-btn mr-1">
                <i class="cxi-twitter"></i>
            </a>
            <a href="#" class="social-btn">
                <i class="cxi-linkedin"></i>
            </a>
        </div>
    </div>
</section>


<!-- Recent news -->
<section class="py-lg-6 py-5 bg-secondary">
    <div class="container">
        <h4 class="h3 d-flex flex-md-row flex-column align-items-center justify-content-center mt-md-4 pt-md-5 pt-3 text-center">
            Explore all our blog posts
            <a href="<?= base_url('pages/blog') ?>" class="btn btn-lg btn-danger mt-md-0 mt-sm-4 mt-3 ml-md-5 text-uppercase">View all blog</a>
        </h4>
    </div>
</section>


<!-- Comment form -->
<section class="container pb-lg-6 py-5">
    <h2 class="h1 mb-5 text-center">Leave your comment</h2>
    <div id="disqus"></div>
</section>