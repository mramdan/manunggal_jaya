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


   // function of form submitted
   $('#form_testi').submit(function(e) {
      // alert("Form submitted!");
      e.preventDefault();
      // Get form
      var form = $('#form_testi')[0];

      // Create an FormData object
      //var data = new FormData(form);
      var data = new FormData(form);
      //var data = $(this).serialize();

      if ($('[name="foto"]').val() == '') {
         alert('Pilih Foto Yang Akan di Upload !');
         return false;
      }

      $('#btnSave').text('Sedang Proses, Mohon tunggu...'); //change button text
      $('#btnSave').attr('disabled', true); //set button disable 

      // ajax adding data to database
      // console.log($('#form_produk').serialize());
      var url;

      url = "<?php echo site_url('pages/submitTesti') ?>";

      $.ajax({
         url: url,
         type: "POST",
         //contentType: 'multipart/form-data',
         cache: false,
         contentType: false,
         processData: false,
         method: 'POST',
         data: data,
         dataType: "JSON",

         success: function(data) {
            if (data.status == '00') //if success close modal and reload ajax table
            {
               showAlert(data.type, data.mess);
            } else {
               showAlert(data.type, data.mess);

            }

            $('#btnSave').text('Simpan'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 
         },
         error: function(jqXHR, textStatus, errorThrown) {
            type = 'error';
            msg = 'Error adding / update data';
            showAlert(type, msg); //utk show alert
            $('#btnSave').text('Simpan'); //change button text
            $('#btnSave').attr('disabled', false); //set button enable 
         }
      });

   });
</script>