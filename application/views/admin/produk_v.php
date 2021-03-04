<main class="app-main">
    <div class="wrapper">
        <div class="page">
            <div class="page-inner">
                <header class="page-title-bar">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="<?= base_url('admin/dashboard') ?>"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Dashboard</a>
                            </li>
                        </ol>
                    </nav>

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

                    <button type="button" onclick="add_new()" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->

                    <div class="d-md-flex align-items-md-start">
                        <h1 class="page-title mr-sm-auto"> Produk </h1>
                        <div id="dt-buttons" class="btn-toolbar"></div>
                    </div>
                </header>

                <div class="page-section">
                    <div class="card card-fluid">
                        <!-- .card-header -->
                        <div class="card-header"> Default view </div><!-- /.card-header -->
                        <!-- .card-body -->
                        <div class="card-body">
                            <!-- .table -->
                            <table id="myTable2" class="table">
                                <!-- thead -->
                                <thead>
                                    <tr>
                                        <th style="min-width: 40px;"> No </th>
                                        <th style="min-width: 280px;"> Products </th>
                                        <th> Variants </th>
                                        <th> Prices </th>
                                        <th style="width:100px; min-width:100px;"> &nbsp; </th>
                                    </tr>
                                </thead>
                                <tbody id="show_data">
                                </tbody>
                            </table><!-- /.table -->
                        </div><!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>