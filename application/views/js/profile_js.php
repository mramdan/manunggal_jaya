<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<script type="text/javascript">
    var save_method; //for save method string
    var table;

    function initial_alert() {
        $("#alert_success").removeClass("alert alert-success display-open").addClass("alert alert-success display-hide");
        $("#alert_error").removeClass("alert alert-danger display-open").addClass("alert alert-danger display-hide");
    }

    function hidealert() {
        setTimeout(function() {
            $(".alert").alert('close');
        }, 2000);

    }


    $('#form').submit(function(e) {
        //alert("Form submitted!");
        e.preventDefault();
        // Get form
        var form = $('#form')[0];

        // Create an FormData object
        //var data = new FormData(form);
        var data = new FormData(form);
        //var data = $(this).serialize();
        if ($('[name="nama_jabatan"]').val() == '') {
            alert('Nama Jabatan Harus Di isi');
            return false;
        } else if ($('[name="status"]').val() == '') {
            alert('Status Jabatan Harus Di isi');
            return false;
        }

        $('#btnSave').text('Sedang Proses, Mohon tunggu...'); //change button text
        $('#btnSave').attr('disabled', true); //set button disable 
        var url;
        //id_aset = $('#id_aset').val();
        if (save_method == 'add') {
            url = "<?php echo site_url('admin/set_profile/ajax_add') ?>";
        } else {
            url = "<?php echo site_url('admin/set_profile/ajax_update') ?>";
        }

        // ajax adding data to database
        // console.log($('#form').serialize());
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
                    //alert(data.mess);
                    $('#form')[0].reset();
                    reload_table();
                    $("#alert_success").removeClass("alert alert-success display-hide").addClass("alert alert-success display-open");
                    $("#mess_success").text(data.mess);

                } else {
                    //alert(data.mess);
                    $('#form')[0].reset();
                    reload_table();
                    $("#alert_error").removeClass("alert alert-danger display-hide").addClass("alert alert-danger display-open");
                    $("#mess_error").text(data.mess);
                }
                hidealert(); //utk hide alert
                $('#modal_form').modal('hide');
                $('#btnSave').text('Save'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable 
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $("#mess_error").text('Error adding / update data');
                hidealert(); //utk hide alert
                $('#btnSave').text('Save'); //change button text
                $('#btnSave').attr('disabled', false); //set button enable 
            }
        });

    });



    var csrfName = $('.txt_csrfname').attr('name'); // Value specified in $config['csrf_token_name']
    var csrfHash = $('.txt_csrfname').val(); // CSRF hash
    $(document).ready(function() {
        //datatables
        initial_alert();

        // CSRF Hash

        // table = $('#table').DataTable({
        //     "searching": true,
        //     //"lengthChange": false,
        //     "processing": true, //Feature control the processing indicator.
        //     "serverSide": true, //Feature control DataTables' server-side processing mode.
        //     "order": [], //Initial no order.

        //     // Load data for the table's content from an Ajax source
        //     "ajax": {
        //         "url": "<?php echo site_url('admin/set_profile/ajax_list') ?>",
        //         "type": "POST",
        //         "dataType": "json",
        //         "data": {
        //             '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
        //         }
        //     },

        //     //Set column definition initialisation properties.
        //     "columnDefs": [{
        //         "targets": [-1], //last column
        //         "orderable": false, //set not orderable
        //     }, ],
        // });

        function get_profile() {
            id = '1';
            $.ajax({
                url: "<?php echo site_url('admin/set_profile/ajax_edit/') ?>/" + id,
                type: "POST",
                dataType: "JSON",
                data: {
                    '<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
                },
                success: function(data) {

                    $('[name="id"]').val(data.id);
                    $('[name="nama_perusahaan"]').val(data.nama_perusahaan);
                    $('[name="no_perusahaan"]').val(data.no_perusahaan);
                    $('[name="alamat"]').val(data.alamat);

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error get data from ajax');
                }
            });
        }
        get_profile();

    });
</script>