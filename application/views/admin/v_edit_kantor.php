<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">Edit Form Garansi Bank</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                    <!-- Form Elements -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="row">
                        <div class="col-lg-3"></div>
                            <div class="col-lg-7">
                                <form role="form" action="<?php echo base_url();?>admin/edit_kantor" method="POST">
                                <?php
                                foreach ($tampil as $row) {
                                    
                                   echo ' 
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px;font-size:12px" style="width:140px;text-align: left">Nama Kepala Kantor</span>
                                        <input class="form-control" style="width:400px;" type="text" name="namakepalakantor" value="'.$row->namakepalakantor.'">
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px;font-size:12px" style="width:140px;text-align: left">NIP Kepala Kantor</span>
                                        <input class="form-control" style="width:400px;" type="text" name="nipkepalakantor" value="'.$row->nipkepalakantor.'">
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px;font-size:12px" style="width:140px;text-align: left">Nama Kanwil</span>
                                        <input class="form-control" style="width:400px;" type="text" name="nama_kanwil" value="'.$row->nama_kanwil.'">
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">Nama Kantor</span>
                                        <textarea class="form-control" style="width:400px;font-size:12px" type="text" name="nama_kantor" >'.$row->nama_kantor.'</textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">Alamat Kantor</span>
                                        <textarea class="form-control" style="width:400px;font-size:12px" type="text" name="alamat_kantor" >'.$row->alamat_kantor.'</textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">Telepon dan Fax</span>
                                        <textarea class="form-control" style="width:400px;font-size:12px" type="text" name="telepon_fax" >'.$row->telepon_fax.'</textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">Situs</span>
                                        <textarea class="form-control" style="width:400px;font-size:12px" type="text" name="situs" >'.$row->situs.'</textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">E-mail</span>
                                        <textarea class="form-control" style="width:400px;font-size:12px" type="text" name="email" >'.$row->email.'</textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-success">Reset</button>
                                    ';}?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
     <!-- End Form Elements -->
    </div>
</div>
       