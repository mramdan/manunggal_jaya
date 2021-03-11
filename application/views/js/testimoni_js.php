<script type="text/javascript">
   var save_method; //for save method string
   var table;

   var type, msg; // for alert

   function showAlert(type, msg) {

      toastr.options.closeButton = true;
      toastr.options.progressBar = true;
      toastr.options.extendedTimeOut = 1000; //1000

      toastr.options.timeOut = 3000;
      toastr.options.fadeOut = 250;
      toastr.options.fadeIn = 250;

      toastr.options.positionClass = 'toast-top-full-width';
      toastr[type](msg);
   }

   function reload_table() {
      table.ajax.reload(null, false);;
   }

   function searchRecords() {
      $('#table-search').on('keyup change focus', function(e) {
         // var filterBy = $('#filterBy').val();
         // var hasFilter = filterBy !== '';
         var value = $('#table-search').val(); // clear selected rows

         table.search('').columns().search('').draw();
         table.search(value).draw();

      });
   }
   searchRecords();


   $(document).ready(function() {
      table = $('#myTableacc').DataTable({
         "searching": true,
         //"lengthChange": false,
         "processing": true, //Feature control the processing indicator.
         "serverSide": true, //Feature control DataTables' server-side processing mode.
         "order": [], //Initial no order.

         // Load data for the table's content from an Ajax source
         "ajax": {
            "url": "<?php echo site_url('admin/testimoni/ajax_listacc') ?>",
            "type": "POST",
            "dataType": "json",
         },

         //Set column definition initialisation properties.
         "columnDefs": [{
               "targets": [4], //last column
               "orderable": false, //set not orderable
            },
            // {
            //     "targets": [1],
            //     "visible": false,
            //     "searchable": false
            // },
         ],
      });

   });





   $(document).ready(function() {
      table = $('#myTable').DataTable({
         "searching": true,
         //"lengthChange": false,
         "processing": true, //Feature control the processing indicator.
         "serverSide": true, //Feature control DataTables' server-side processing mode.
         "order": [], //Initial no order.

         // Load data for the table's content from an Ajax source
         "ajax": {
            "url": "<?php echo site_url('admin/testimoni/ajax_list') ?>",
            "type": "POST",
            "dataType": "json",
         },

         //Set column definition initialisation properties.
         "columnDefs": [{
               "targets": [5], //last column
               "orderable": false, //set not orderable
            },
            // {
            //     "targets": [1],
            //     "visible": false,
            //     "searchable": false
            // },
         ],
      });

   });

   function add_new() {
      save_method = 'add';
      $('#form_testimoni')[0].reset(); // reset form on modals
      $('#image').empty();
      $('#modal_form_testimoni').modal('show'); // show bootstrap modal
      $('.modal-title').text('Acc'); // Set Title to Bootstrap modal title
   }

   function konfir(id) {
      save_method = 'update';
      $('#form_testimoni')[0].reset(); // reset form on modals
      $('#image').empty();
   }

   function detail(id) {

      // $('#modal_detail').empty();
      //Ajax Load data from ajax
      $.ajax({
         url: "<?php echo site_url('admin/produk/ajax_edit/') ?>" + id,
         type: "GET",
         dataType: "JSON",
         success: function(data) {

            // console.log('edit', data);
            var nama = data.nama_produk;
            $('#title').val(nama);
            $('#foto_produk').attr('src', '<?= base_url('assets/uploads/produk/') ?>' + data.foto);
            $('#detai_desc').html(data.deskripsi);

            $('#modal_detail').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Detail Produk ' + nama); // Set Title to Bootstrap modal title

         },
         error: function(jqXHR, textStatus, errorThrown) {
            alert('Error get data from ajax');
         }
      });
   }

   function delete_data(id) {
      if (confirm('Apakah Anda yakin menghapus data ini ?')) {
         // ajax delete data to database
         $.ajax({
            url: "<?php echo site_url('admin/produk/ajax_delete') ?>/" + id,
            type: "POST",
            dataType: "JSON",
            success: function(data) {
               if (data.status == '00') {
                  // reload_list_produk();
                  reload_table();
                  showAlert(data.type, data.mess);
               } else {
                  reload_table();
                  showAlert(data.type, data.mess);
               }
            },
            error: function(jqXHR, textStatus, errorThrown) {
               alert('Error deleting data');
            }
         });
      }
   }
</script>