  <!--  page-wrapper -->
     <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
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
                                <table class="table table-striped table-bordered table-hover " id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No.</th>
                                            <th style="text-align: center;">Kode Satker</th>
                                            <th style="text-align: center;">Nama Rekanan</th>
                                            <th style="text-align: center;">Tanggal Akhir Kontrak</th>
                                            <th style="text-align: center;">No. HP</th>
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
<?php

    $no = 1;
    $status = '';

    foreach ($tampil as $row) {
        $tgl1 = date('d-m-Y',strtotime($row->tgl_akhir_jaminan));
        $m1 = explode('-', $tgl1);
        $d1 = $m1[0];
        $b1 = $m1[1];
        $t1 = $m1[2];
        $bulan1 = '';

        $tgl_akhir_jaminan = '';
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

        $tgl_akhir_jaminan = ' '. $h1 . ' ' . $bulan1 . ' ' . $t1 .' ';
        $date1 =  date("Y-m-d");
        $date2  = date("Y-m-d",strtotime(date("Y-m-d", strtotime($row->tgl_akhir_jaminan)) . " +5 day"));
        
        if($row->status == 0 && $date1 > $date2 ){
            $status = '<td class="center" style="background-color:red" align="center"> TERLAMBAT </td>';
        }else {
            $status = '<td class="center" align="center"> BELUM  </td>';
        }
        //else{
        //     $status = '<td class="center"> NONE </td>';
        // }

        echo '                          <tr id="id'.$no.'" >
                                            <td class="center" align="center">'.$no.'.</td>
                                            <td class="center" align="center"><a href="'.base_url().'middle/carisatker?search='.$row->kode_satker.'">'.$row->kode_satker.'</a></td>
                                            <td class="center" align="center" style="font-size:12px">'.$row->nama_rekanan.'</td>
                                            <td class="center" align="center">'.$tgl_akhir_jaminan.'</td>
                                            <td class="center" align="center" style="font-size:12px">'.$row->no_hp_petugas_satker.'</td>
                                            '.$status. '
                                            <td class="center"  align="center"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal'.$no.'">Hubungi</button></td>
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
                                        </tr>
                                            ';
        $no++;
}

 echo "   
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!--End simple table example -->
";?>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i>Daftar Satuan Kerja Yang Sudah Menyerahkan BAST
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" style="overflow: auto;">
                                <table class="table table-striped table-bordered table-hover" id="display">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No.</th>
                                            <th style="text-align: center;">Kode Satker</th>
                                            <th style="text-align: center;">Nama Rekanan</th>
                                            <th style="width: 100px;font-size: 13px;text-align: center; ">Tanggal Pencairan/Pengembalian</th>
                                            <th style="text-align: center;">Nilai Pencairan</th>
                                            <th style="text-align: center;">Status</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
setlocale(LC_MONETARY, 'id_ID');
    $no2 = 1;
    foreach ($tampil2 as $row) {
        $tgl = date('d-m-Y',strtotime($row->tgl_pencairan));
        $m = explode('-', $tgl);
        $d = $m[0];
        $b = $m[1];
        $t = $m[2];
        $bulan = '';

        $tgl_pencairan = '';
        if($b == 1){
            $bulan = 'Januari';
        }else if($b == 2){
            $bulan = 'Februari';
        }else if($b == 3){
            $bulan = 'Maret';
        }else if($b == 4){
            $bulan = 'April';
        }else if($b == 5){
            $bulan = 'Mei';
        }else if($b == 6){
            $bulan = 'Juni';
        }else if($b == 7){
            $bulan = 'Juli';
        }else if($b == 8){
            $bulan = 'Agustus';
        }else if($b == 9){
            $bulan = 'September';
        }else if($b == 10){
            $bulan = 'Oktober';
        }else if($b == 11){
            $bulan = 'November';
        }else if($b == 12){
            $bulan = 'Desember';
        }
        $h = (int)$d;
        
        $tgl_pencairan = ' '. $h . ' ' . $bulan . ' ' . $t .' ';
        $date1 =  date("Y-m-d");
        $date2  = date("Y-m-d",strtotime(date("Y-m-d", strtotime($row->tgl_akhir_jaminan)) . " +5 day"));
        $nilai_p = $row->nilai_pencairan;
        if($row->status == 1){
            $status = '<td class="center"  align="center"> DICAIRKAN </td>';
        }else if($row->status == 2){
            $status = '<td class="center"  align="center"> DIKEMBALIKAN </td>';
        }else if($row->status == 3){
            $status = '<td class="center"  align="center" > DIKLAIM</td>';
        }
        if($row->status != 0){
        echo '                          <tr id="id'.$no2.'">
                                            <td class="center" align="center">'.$no2.'.</td>
                                            <td class="center" align="center"><a href="'.base_url().'middle/carisatker?search='.$row->kode_satker.'">'.$row->kode_satker.'</a></td>
                                            <td class="center" align="center" style="font-size:12px">'.$row->nama_rekanan.'</td>
                                            <td class="center" align="center">'.$tgl_pencairan.'</td>
                                            <td class="right" align="right"> <label style="padding-right:4px;">Rp. </label>'.number_format((float)$nilai_p,0,",",".").',- </td>
                                            '.$status. '
                                        </tr>
                                            ';
        $no2++;
        }
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

";
?>
<?php 
    $jumlah_sudah = count($this->m_middle->jumlaha());
    $jumlah_belum = count($this->m_middle->jumlahb());
    $jumlah_total = count($this->m_middle->jumlahc());
echo '
                <div class="col-lg-2">
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body green">
                            <i class="fa fa-thumbs-up fa-3x"></i>
                            <h3>'.$jumlah_sudah.'</h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Jumlah Karwas Yang Sudah Menyerahkan BAST
                            </span>
                        </div>
                    </div>
                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body red">
                            <i class="fa fa-exclamation-triangle fa-3x"></i>
                            <h3>'.$jumlah_belum.' </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Jumlah Karwas Yang Belum Menyerahkan BAST
                            </span>
                        </div>
                    </div>

                    <div class="panel panel-primary text-center no-boder">
                        <div class="panel-body blue">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <h3>'.$jumlah_total.' </h3>
                        </div>
                        <div class="panel-footer">
                            <span class="panel-eyecandy-title">Total Semua Karwas Yang Terdaftar
                            </span>
                        </div>
                    </div>
                </div>
            </div>';?>
            
        </div>
</div><!-- end wrapper -->




