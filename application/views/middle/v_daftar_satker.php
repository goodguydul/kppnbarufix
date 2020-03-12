<div id="page-wrapper">
    <div class="row"><div class="col-lg-12"><h1 class="page-header">Data Satuan Kerja</h1></div></div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i>
                        Daftar Satuan Kerja
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal3">Tambah</button>
                    
                </div>
                <div class="panel-body">

                        <div id="myModal3" class="modal fade" role="dialog">
                                                <div class="modal-dialog" style="width: 300px;">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Tambah Data Satker</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p> <form action="create" method="POST">
                                                                    <label style="padding-right:3px">Kode Satker : </label>
                                                                        <input class="form-control" type="text" name="kode_satker" placeholder="xxxxxx">
                                                                        <br>
                                                                    <label style="padding-right:3px">Kementerian : </label>
                                                                        <input class="form-control" type="text" name="kemen" placeholder="xxx">
                                                                        <br>
                                                                    <label style="padding-right:3px">Kewenangan : </label>
                                                                        <input class="form-control" type="text" name="kew" placeholder="XX">
                                                                        <br>
                                                                    <label style="padding-right:3px">Nama Satker : </label>
                                                                        <input class="form-control" type="text" name="nama_satker" placeholder="xxxxxxxx">
                                                                        <br>
                                                                    <label style="padding-right:3px">No. DIPA : </label>
                                                                        <input class="form-control" type="text" name="no_DIPA" placeholder="DIPA-kemen.BA.x.xxxxxx/tahun">
                                                                        <br>
                                                                    <label style="padding-right:3px">Tanggal DIPA : </label>
                                                                        <input class="form-control" type="text" name="tgl_DIPA" placeholder="hh-bb-tttt">
                                                                        <br>
                                                                    <button class="btn btn-success" type="submit">Tambah</button>
                                                                </form>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                            <div class="table-responsive" style="overflow: auto;">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No.</th>
                                            <th style="text-align: center;">Kode Satker</th>
                                            <th style="text-align: center;">Kementerian</th>
                                            <th style="text-align: center;">Kewenangan</th>
                                            <th style="text-align: center;">Nama Satuan Kerja</th>
                                            <th style="text-align: center;">No. DIPA</th>
                                            <th style="text-align: center;">Tanggal DIPA</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
    <?php
    $status = '';
    $no2=1;
    foreach ($tampil as $row) {
        $tgl1 = date('d-m-Y',strtotime($row->tgl_DIPA));
        $m1 = explode('-', $tgl1);
        $d1 = $m1[0];
        $b1 = $m1[1];
        $t1 = $m1[2];
        $bulan1 = '';

        $no = $row->no;

        $tgl_DIPA= '';
        if($b1 == 1){
            $bulan1 = 'Januari';
        }else if($b1 == 2){
            $bulan1 = 'Februari';
        }else if($b1 == 3){
            $bulan1 = 'Maret';
        }else if($b1 == 4){
            $bulan1 = 'April';
        }else if($b1 == 5){
            $bulan1 = 'Mei';
        }else if($b1 == 6){
            $bulan = 'Juni';
        }else if($b1 == 7){
            $bulan1 = 'Juli';
        }else if($b1 == 8){
            $bulan1 = 'Agustus';
        }else if($b1 == 9){
            $bulan1 = 'September';
        }else if($b1 == 10){
            $bulan1 = 'Oktober';
        }else if($b1 == 11){
            $bulan1 = 'November';
        }else if($b1 == 12){
            $bulan1 = 'Desember';
        }
        $size="";
        $size2="";
        $haa = strlen($row->nama_satker);
        $hab = strlen($row->kemen);
        if($haa > 42){
            $size="10px";
        }else {
            $size="12px";
        }
        if ($hab > 30 ) {
            $size2="10px";
        }else {
            $size2="12px";
        }

        $kew = "";
        if($row->kew == "KP"){
            $kew = "Kantor Pusat";
        }else if($row->kew == "KD"){
            $kew = "Kantor Daerah";
        }else if($row->kew == "UB"){
            $kew = "Unit Bantuan";
        }else if($row->kew == "TP"){
            $kew = "Tenaga Pembantu";
        }else if($row->kew == "DK"){
            $kew = "Dinas Kota";
        }


        $h1 = (int)$d1;
        $jumlah_satker = $no2;
        $tgl_DIPA = ' '. $h1 . ' ' . $bulan1 . ' ' . $t1 .' ';    
        
            echo '                      <tr id="id'.$no.'" >
                                            <td class="center" align="center" style="font-size:12px">'.$no2.'.</td>
                                            <td class="center" align="center" style="font-size:12px">'.$row->kode_satker.'</td>
                                            <td class="center" align="center" style="font-size:'.$size2.'">'.$row->kemen.'</td>
                                            <td class="center" align="center" style="font-size:12px">'.$kew.'</td>
                                            <td class="center" align="left" style="font-size:'.$size.'">'.$row->nama_satker.'</td>
                                            <td class="center" align="center" style="font-size:12px">'.$row->no_DIPA.'</td>
                                            <td class="center" align="center" style="font-size:12px">'.$tgl_DIPA.'</td>
                                            <td class="center"  align="center">
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal2'.$no.'">Update</button>
                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal'.$no.'">Delete</button>
                                            </td>
                                            <div id="myModal2'.$no.'" class="modal fade" role="dialog">
                                                <div class="modal-dialog" style="width: 300px;">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Edit Data Karwas Ke-'.$no.'</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p> <form action="'.base_url().'middle/update" method="POST">
                                                                    <label style="padding-right:3px">No. DIPA : </label>
                                                                        <input class="form-control" type="text" name="no_DIPA" placeholder="DIPA-kemen.BA.x.xxxxxx/tahun">
                                                                        <br>
                                                                    <label style="padding-right:3px">Tanggal DIPA : </label>
                                                                        <input class="form-control" type="text" name="tgl_DIPA" placeholder="hh-bb-tttt">
                                                                        <br>
                                                                    <input hidden type="text" name="no" value="'.$no.'">
                                                                    <button class="btn btn-success" type="submit">Update</button>
                                                                </form>
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div id="myModal'.$no.'" class="modal fade" role="dialog">
                                                <div class="modal-dialog" style="width: 300px;">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Delete Data Satker Ke-'.$no.'</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p align="center"> <form action="'.base_url().'middle/delete/'.$no.'" method="POST">
                                                                    Yakin akan menghapus data ini?<br><br>
                                                                    <button class="btn btn-danger" type="submit">Delete</button>
                                                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
                                                                </form>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                            ';
                                            $no2++;
}

 echo "   
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!--End simple table example -->
                </div>
";?>
        
            </div>
        </div><!-- end page wrapper -->
    </div><!-- end wrapper -->