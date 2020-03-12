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
                                <form role="form" action="<?php echo base_url();?>admin/edit_form" method="POST">
                                <?php
                                foreach ($tampil as $row) {
                                    
                                   echo ' 
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px;font-size:12px" style="width:140px;text-align: left">Judul 1</span>
                                        <input class="form-control" style="width:400px;" type="text" name="judulform1" value="'.$row->judulform1.'">
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px;font-size:12px" style="width:140px;text-align: left">Judul 2</span>
                                        <input class="form-control" style="width:400px;" type="text" name="judulform2" value="'.$row->judulform2.'">
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px;font-size:12px" style="width:140px;text-align: left">Judul 3</span>
                                        <input class="form-control" style="width:400px;" type="text" name="judulform3" value="'.$row->judulform3.'">
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">Checklist 1</span>
                                        <textarea class="form-control" style="width:400px;font-size:12px" type="text" name="checklist1" >'.$row->checklist1.'</textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">Checklist 2</span>
                                        <textarea class="form-control" style="width:400px;font-size:12px" type="text" name="checklist2" >'.$row->checklist2.'</textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">Checklist 3</span>
                                        <textarea class="form-control" style="width:400px;font-size:12px" type="text" name="checklist3" >'.$row->checklist3.'</textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">Checklist 4</span>
                                        <textarea class="form-control" style="width:400px;font-size:12px" type="text" name="checklist4" >'.$row->checklist4.'</textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">Checklist 5</span>
                                        <textarea class="form-control" style="width:400px;font-size:12px" type="text" name="checklist5" >'.$row->checklist5.'</textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">Checklist 6</span>
                                        <textarea class="form-control" style="width:400px;font-size:12px" type="text" name="checklist6" >'.$row->checklist6.'</textarea>
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px;font-size:12px" style="width:140px;text-align: left">Nama Kepala Kantor</span>
                                        <input class="form-control" style="width:400px;" type="text" name="namakepalakantor" value="'.$row->namakepalakantor.'">
                                    </div>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon" style="text-align: left;width:140px" style="width:140px;text-align: left">NIP Kepala Kantor</span>
                                        <input class="form-control" style="width:400px" type="text" name="nipkepalakantor" value="'.$row->nipkepalakantor.'">
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
       