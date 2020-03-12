  <!--  page-wrapper -->
    <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Data Satuan Kerja</h1>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Daftar Satuan Kerja Yang Belum Menyerahkan BAST
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" style="overflow: auto;">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No.</th>
                                            <th style="text-align: center;">Kode Satker</th>
                                            <th style="text-align: center;">Nama Rekanan</th>
                                            <th style="text-align: center;">Tanggal Akhir Kontrak</th>
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
    <?php
    $no2 = 0;
    $status = '';

    foreach ($tampil as $row) {
        $tgl1 = date('d-m-Y',strtotime($row->tgl_akhir_kontrak));
        $m1 = explode('-', $tgl1);
        $d1 = $m1[0];
        $b1 = $m1[1];
        $t1 = $m1[2];
        $bulan1 = '';

        $no = $row->no;

        $tgl_akhir_kontrak = '';
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
        $h1 = (int)$d1;

        $tgl_akhir_kontrak = ' '. $h1 . ' ' . $bulan1 . ' ' . $t1 .' ';
        $date1 =  date("Y-m-d");
        $date2  = date("Y-m-d",strtotime(date("Y-m-d", strtotime($row->tgl_akhir_kontrak)) . " +5 day"));
        
        if($row->status == 0 && !($date1 > $date2) ){
            $status = '<td class="center" align="center"> BELUM </td>';
        
            echo '                      <tr id="id'.$no.'" >
                                            <td class="center" align="center">'.$no2.'.</td>
                                            <td class="center" align="center">'.$row->kode_satker.'</td>
                                            <td class="center" align="center" style="font-size:12px">'.$row->nama_rekanan.'</td>
                                            <td class="center" align="center">'.$tgl_akhir_kontrak.'</td>
                                            '.$status. '
                                            <td class="center"  align="center">
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal'.$no.'">Hubungi</button>&nbsp;
                                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal2'.$no.'">Update</button>
                                            </td>
                                            <div id="myModal'.$no.'" class="modal fade" role="dialog">
                                                <div class="modal-dialog" style="width: 300px;">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Hubungi Petugas SatKer</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>
                                                                <label style="padding-right:3px">Nama Rekanan</label>     : '.$row->nama_rekanan.' <br>
                                                                <label style="padding-right:7px">Nama Petugas</label>     : '.$row->nama_petugas_satker.' <br>
                                                                <label style="padding-right:81px">NIP</label>              : '.$row->nip_petugas_satker.'<br>
                                                                <label >No. HP Petugas</label>   : '.$row->no_hp_petugas_satker.'<br>
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div id="myModal2'.$no.'" class="modal fade" role="dialog">
                                                <div class="modal-dialog" style="width: 300px;">
                                                 <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Edit Data Karwas Ke-'.$no.'</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p> <form action="'.base_url().'middle/update_belum" method="POST">
                                                                    <label style="padding-right:7px">Status Satker : </label>
                                                                        <select name="status" class="form-control">
                                                                        <option value="1">DICAIRKAN</option>
                                                                        <option value="2">DIKEMBALIKAN</option>
                                                                        </select><br>
                                                                    <label style="padding-right:3px">Tanggal Penyerahan BAST : </label>
                                                                        <input class="form-control" type="text" name="tgl_pencairan" placeholder="Format : hh-bb-tttt">
                                                                        <br>
                                                                    <label style="padding-right:3px">Nilai Pencairan : </label>
                                                                        <input class="form-control" type="text" name="nilai_pencairan" placeholder="Input tanpa tanda titik/koma ">
                                                                        <br>
                                                                        <input hidden type="text" name="no" value="'.$no.'">
                                                                    <button class="btn btn-success" type="submit">Update</button>
                                                                </form>
                                                                
                                                            </p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </tr>
                                            ';
        }
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
<?php 
    $jumlah_belum = $no2-1;
    echo '
                    <div class="col-lg-2">
                        <div class="panel panel-primary text-center no-boder">
                            <div class="panel-body red">
                                <i class="fa fa-exclamation-triangle fa-3x"></i>
                                <h3>'.$jumlah_belum.' </h3>
                            </div>
                            <div class="panel-footer">
                                <span class="panel-eyecandy-title">Total SatKer Yang Belum Menyerahkan BAST
                                </span>
                            </div>
                        </div>

                    </div>';?>            
            </div>
        </div><!-- end page wrapper -->
    </div><!-- end wrapper -->




