<main class="app-main">
    <div class="wrapper">
        <div class="page">
            <div class="page-inner">
                <header class="page-title-bar">
                    <!-- .breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="<?= base_url('admin/dashboard') ?>"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
                            </li>
                        </ol>
                    </nav><!-- /.breadcrumb -->
                    <!-- floating action -->
                    <button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->
                    <!-- title and toolbar -->
                    <div class="d-md-flex align-items-md-start">
                        <h1 class="page-title mr-sm-auto"> Produk </h1><!-- .btn-toolbar -->
                        <div class="dt-buttons btn-group flex-wrap"> <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="myTable" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="myTable" type="button"><span>Print</span></button> </div><!-- /.btn-toolbar -->
                    </div><!-- /title and toolbar -->
                </header>
                <!-- Modal Here -->
                <div class="modal fade" id="modal_form_produk" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 id="title" class="modal-title"> </h6>
                            </div>
                            <form action="" id="form_produk" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <input type="hidden" id="id_hero" name="id_produk">
                                    <input type="hidden" id="old_foto" name="old_foto">
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama_produk">Nama Produk</label>
                                                <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Input Nama Produk" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="deskripsi">Deskripsi</label>
                                                <textarea name="deskripsi" data-toggle="summernote" data-placeholder="Write here..." class="form-control" placeholder="Input Deskripsi Produk" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="kategori">Kategori Produk</label>
                                                <input type="text" name="kategori" id="kategori" class="form-control" placeholder="Input Kategori Produk" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="harga">Harga (Rp.)</label>
                                                <div class="input-group">
                                                    <label class="input-group-prepend" for="harga"><span class="badge">Rp. </span></label> <input type="number" class="form-control" name="harga" id="harga" placeholder="Input Harga Produk (to the nearest rupiah)" required> <label class="input-group-append"><span class="badge">.00</span></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="harga">Foto Produk</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="foto" id="foto" accept="image/x-png,image/gif,image/jpeg" />
                                                <label class="custom-file-label" for="foto">Upload Foto</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" id="btnSave" class="btn btn-primary">Simpan</button>
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="modal_detail" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h6 id="title" class="modal-title"> </h6>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        kjadflka
                                    </div>
                                    <div class="col-md-7">dafad</div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" onclick="add_new()" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->

                <div class="page-section">
                    <div class="card card-fluid">
                        <div class="card-header"> Data Produk </div>
                        <div class="card-body">
                            <div class="form-group">

                                <div class="input-group has-clearable">
                                    <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                                    </div><input id="table-search" type="text" class="form-control" placeholder="Cari produk">
                                </div>
                            </div>

                            <table id="myTable" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th> Nama Produk </th>
                                        <th> Kategori </th>
                                        <th> Harga </th>
                                        <th style="width:100px; min-width:100px;"> &nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>