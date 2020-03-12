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
                            <i class="fa fa-bar-chart-o fa-fw"></i>Daftar Satuan Kerja Yang Sudah Menyerahkan BAST
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive" style="overflow: auto;">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">No.</th>
                                            <th style="text-align: center;">Kode Satker</th>
                                            <th style="text-align: center;">Nama Rekanan</th>
                                            <th style="text-align: center;">Tanggal Akhir Jaminan</th>
                                            <th style="text-align: center;">Nilai Pencairan</th>
                                            <th style="text-align: center;">Status</th>
                                            <th style="text-align: center;">Action</th>
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
        $date2  = date("Y-m-d",strtotime(date("Y-m-d", strtotime($row->tgl_akhir_kontrak)) . " +5 day"));
        $nilai_p = $row->nilai_pencairan;
        if($row->status == 1){
            $status = ' <td class="center"  align="center" style="font-size:12px;"> DICAIRKAN/DIKLAIM </td>
                        <td class="center"  align="center">
                            <form action="'.base_url().'middle/cetak_surat_klaim" method="POST">
                                <input hidden type="text" name="nomor_jaminan" value="'.$row->no_jaminan.'">
                                <button type="submit" class="btn btn-info btn-sm">Cetak Surat</button>
                            </form>
                        </td>
            ';
        }else if($row->status == 2){
            $status = ' <td class="center"  align="center" style="font-size:12px;"> DIKEMBALIKAN </td>
                        <td class="center"  align="center">
                            <form action="'.base_url().'middle/cetak_surat_kembali" method="POST">
                                <input hidden type="text" name="nomor_jaminan" value="'.$row->no_jaminan.'">
                                <button type="submit" class="btn btn-info btn-sm">Cetak Surat</button>
                            </form>
                        </td>
            ';
        }
        if($row->status != 0){
        echo '                          <tr id="id'.$no2.'">
                                            <td class="center" align="center">'.$no2.'.</td>
                                            <td class="center" align="center"><a href="'.base_url().'middle/carisatker?search='.$row->kode_satker.'">'.$row->kode_satker.'</a></td>
                                            <td class="center" align="center" style="font-size:12px">'.$row->nama_rekanan.'</td>
                                            <td class="center" align="center">'.$tgl_pencairan.'</td>
                                            <td class="right" align="right"> <label style="padding-right:4px;">Rp. </label>'.number_format((float)$nilai_p,0,",",".").',- </td>
                                            '.$status. '';
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
    $jumlah_sudah = $no2-1;
echo '
                    <div class="col-lg-2">
                        <div class="panel panel-primary text-center no-boder">
                            <div class="panel-body red">
                                <i class="fa fa-exclamation-triangle fa-3x"></i>
                                <h3>'.$jumlah_sudah.' </h3>
                            </div>
                            <div class="panel-footer">
                                <span class="panel-eyecandy-title">Total SatKer Yang Sudah Menyerahkan BAST
                                </span>
                            </div>
                        </div>

                    </div>';?>            
            </div>
        </div><!-- end page wrapper -->
    </div><!-- end wrapper -->




