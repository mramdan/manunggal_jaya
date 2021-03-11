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
                  <h1 class="page-title mr-sm-auto"> Testimoni </h1><!-- .btn-toolbar -->
                  <div class="dt-buttons btn-group flex-wrap"> <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="myTable" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="myTable" type="button"><span>Print</span></button> </div><!-- /.btn-toolbar -->
               </div><!-- /title and toolbar -->
            </header>
            <!-- Modal Here -->


            <button type="button" onclick="add_new()" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> <!-- /floating action -->

            <div class="page-section">
               <div class="card card-fluid">
                  <div class="card-header"> Data Testimoni Belum Di Konfirmasi </div>
                  <div class="card-body">


                     <table id="myTableacc" class="table">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th> Nama Pelanggan </th>
                              <th> Komentar </th>
                              <th> Foto </th>
                              <th style="width:100px; min-width:100px;"> &nbsp; </th>
                           </tr>
                        </thead>
                        <tbody>
                        </tbody>
                     </table>
                  </div><!-- /.card-body -->
               </div>
            </div>



            <div class="page-section">
               <div class="card card-fluid">
                  <div class="card-header"> Data Testimoni </div>
                  <div class="card-body">
                     <div class="form-group">

                        <div class="input-group has-clearable">
                           <button id="clear-search" type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button>
                           <div class="input-group-prepend">
                              <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                           </div><input id="table-search" type="text" class="form-control" placeholder="Cari Testimoni">
                        </div>
                     </div>

                     <table id="myTable" class="table">
                        <thead>
                           <tr>
                              <th>No</th>
                              <th> Nama Pelanggan </th>
                              <th> Komentar </th>
                              <th> Foto </th>
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