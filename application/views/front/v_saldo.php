  <!--  page-wrapper -->
     <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Saldo</h1>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Edit Saldo
                        </div>
                        <div class="panel-body">
                            <form action="<?php echo base_url();?>front/editsaldo" method="POST">
                                <label>Saldo : </label><input type="text" name="saldo" value="<?php foreach ($tampil as $row) {
                                        echo $row->nilai_bank_garansi;
                                }?>">
                                <button type="Submit">Ubah</button>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
            
        </div>
</div><!-- end wrapper -->




