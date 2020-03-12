  <!--  page-wrapper -->
    <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Data Satker</h1>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!--Simple table example -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-bar-chart-o fa-fw"></i> Daftar Satuan Kerja
                        </div>
                        <div class="panel-body">
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
                                            <td class="center" align="center" style="font-size:12px">'.$no.'.</td>
                                            <td class="center" align="center" style="font-size:12px">'.$row->kode_satker.'</td>
                                            <td class="center" align="center" style="font-size:'.$size2.'">'.$row->kemen.'</td>
                                            <td class="center" align="center" style="font-size:12px">'.$kew.'</td>
                                            <td class="center" align="left" style="font-size:'.$size.'">'.$row->nama_satker.'</td>
                                            <td class="center" align="center" style="font-size:12px">'.$row->no_DIPA.'</td>
                                            <td class="center" align="center" style="font-size:12px">'.$tgl_DIPA.'</td>
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