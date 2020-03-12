  <!--  page-wrapper -->
     <div id="page-wrapper">
        <div class="row">  
            <div class="col-lg-12" >
            <script>
                    var options = {
                        // success, info, error
                        style: 'error',
                        // notification title
                        title: 'Warning!',
                        // notification message
                        message: 'Data Tidak Ditemukan !',
                        // custom Font Awesome icon
                        icon: 'fa fa-exclamation-triangle',
                        // custom theme
                        theme: null,
                        // timeout to close the notification automatically
                        timeout: 5000,
                        // shows close button
                        close_button: true
                    };
                    var n = new notify(options);
                    n.show();
                </script>
                <div align="center">
                    <img  src="<?php echo base_url(); ?>assets/images/logo-mid.png" style="width: 400px;padding-top: 300px;padding-bottom: 300px" >
                </div>
            </div>
        </div>
    </div><!-- end page-wrapper -->
</div><!-- end wrapper -->