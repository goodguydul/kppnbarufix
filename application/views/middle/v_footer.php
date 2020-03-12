<!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.js"></script>
    <script src="<?php echo base_url(); ?>assets/scripts/siminta.js"></script>

    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url(); ?>assets/editable/js/bootstrap-editable.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/buttons.html5.min.js "></script>
    <script src="<?php echo base_url(); ?>assets/notify/js/notify.js"></script>
    <script>
        $.fn.editable.defaults.mode = 'inline';
        $(document).ready(function() {
            $('#nomorsurat').editable();
            $('#namacabang').editable();
            $('#alamatbank').editable();
            $('#tanggalsurat').editable();
            $('#nomorperaturan').editable();
            $('#tglperaturan').editable();
            $('#tahunanggaran').editable();
            $('#tembusan1').editable();
            $('#tembusan2').editable();
            $('#hari').editable();
            $('#tglkontrak').editable();
            $('#namapejabat').editable();
            $('#nippejabat').editable();
            $('#tglsurat').editable();
            $('#pekerjaan').editable();
            $('#kota').editable();
            $('#tempat').editable();
        });
    </script>
    <script>
        function printContent(print){
           var restorepage = document.body.innerHTML;
           var printcontent = document.getElementById(print).innerHTML;
           document.body.innerHTML = printcontent;
           window.print();
           document.body.innerHTML = restorepage;
        }
    </script>
    <script>
            $(document).ready(function() {
                $('#display').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy',
                        'excel',
                        'csv',
                        'pdf'
                    ]
                });
            } );
    </script>
    <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable( {
                    dom: 'Bfrtip',
                    buttons: [
                        'copy',
                        'excel',
                        'csv',
                        'pdf'
                    ]
                });
            } );
    </script>
        <script>
            $(function(){
                $.fn.editable.defaults.mode = 'inline';
                $('#nmrsurat').editable({
                    type: 'text',
                    url: '#',    
                    pk: 1,    
                    placement: 'top',
                    title: 'Masukkan Nomor Surat'    
                });
       
                //ajax emulation. Type "err" to see error message
                $.mockjax({
                    url: '#',
                    responseTime: 100,
                    response: function(settings) {
                            if(settings.data.value == 'err') {
                                this.status = 500;  
                                this.responseText = 'Validation error!'; 
                            } else {
                                this.responseText = '';  
                            }
                        }
                    }); 
                       
                });
            </script>    
    
</body> 

</html>
