<?php
	    foreach ($kakan as $raw) {

			echo '
			<div id="page-wrapper" style="background-color: white;">
			   <div class="row">  
			      	<div class="col-lg-12">
					<div style="width: 644px;height: auto;padding-top: 70px;margin-left: 130px;" id="forms">
						<div style="text-align:center;">
							<p class="Header" style="margin-left:63.8pt; font-size:13pt">
								<span style="margin-left: -101px;height:0pt; text-align:center; display:block; position:absolute; z-index:1"><img src="'.base_url().'assets/images/kp3.001.png" alt="" style="margin-right:9pt; margin-left:9pt; float:left" height="95" width="100" /></span>
								<span style="font-family:Arial">KEMENTERIAN KEUANGA</span><span style="font-family:Arial">N REPUBLIK INDONESIA</span>
							</p>
							<p class="Header" style="margin-left:63.8pt">
								<span style="font-family:Arial">DIREKTORAT JENDERAL PERBENDAHARAAN</span>
							</p>
							<p class="Header" style="margin-left:63.8pt">
								<span style="font-family:Arial;text-decoration: uppercase">'.$raw->nama_kanwil.'</span>
							</p>
							<p class="Header" style="margin-left:63.8pt; font-size:13pt">
								<span style="font-family:Arial;text-decoration: uppercase">'.$raw->nama_kantor.'</span>
							</p>
							<p class="Header" style="margin-left:63.8pt; font-size:7pt">
								<span style="font-family:Arial;text-decoration: uppercase">'.$raw->alamat_kantor.'</span>
							</p>
							<p class="Header" style="margin-left:63.8pt; font-size:7pt">
								<span style="font-family:Arial">'.$raw->telepon_fax.'</span>
							</p>
							<p class="Header" style="margin-left:63.8pt">
								<span style="font-family:Arial; font-size:7pt">Situs : </span><span style="font-family:Arial; font-size:7pt">'.$raw->situs.'</span><span style="font-family:Arial; font-size:7pt"> Email : '.$raw->email.'</span>
							</p>
							<p class="Header" style="text-align:center; font-size:10pt">
								<img src="'.base_url().'assets/images/nomor002.png" alt="" style="margin-top:4pt; margin-right:9pt; margin-left:-2pt; float:left;margin-bottom: 11px;width: 658px;" height="6">
							</p>
							<p>
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p>
								<span style="font-family:Arial">&#xa0;</span>
							</p>
						</div>

						';}
		foreach ($surat as $row) {
		$hariini = date('d-m-Y');

		$tgl = date('d-m-Y',strtotime($row->tgl_jaminan));
		        $m = explode('-', $tgl);
		        $d = $m[0];
		        $b = $m[1];
		        $t = $m[2];
		        $bulan = '';
		$m1 = explode('-', $hariini);
		        $d1 = $m1[0];
		        $b1 = $m1[1];
		        $t1 = $m1[2];
		$tgl4 = date('d-m-Y',strtotime($row->tgl_akhir_kontrak));
		        $m4 = explode('-', $tgl4);
		        $d4 = $m4[0];
		        $b4 = $m4[1];
		        $t4 = $m4[2];
		        $bulan4 = '';

		        $tgl_jaminan = "";
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

		        $tgl_akhir_kontrak= "";
		        if($b4 == 1){
		            $bulan4 = 'Januari';
		        }else if($b4 == 2){
		            $bulan4 = 'Februari';
		        }else if($b4 == 3){
		            $bulan4 = 'Maret';
		        }else if($b4 == 4){
		            $bulan4 = 'April';
		        }else if($b4 == 5){
		            $bulan3 = 'Mei';
		        }else if($b4 == 6){
		            $bulan3 = 'Juni';
		        }else if($b4 == 7){
		            $bulan3 = 'Juli';
		        }else if($b4 == 8){
		            $bulan4 = 'Agustus';
		        }else if($b4 == 9){
		            $bulan3 = 'September';
		        }else if($b4 == 10){
		            $bulan4 = 'Oktober';
		        }else if($b4 == 11){
		            $bulan4 = 'November';
		        }else if($b4 == 12){
		            $bulan4 = 'Desember';
		        }
		        $h4 = (int)$d4;
		      	$tgl_akhir_jaminan= "";
		        $bulan1 = '';
		        $hari_ini= '';
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
		            $bulan1 = 'Juni';
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
		        $tgl_jaminan = ' '. $h . ' ' . $bulan . ' ' . $t .' ';
		        $tgl_akhir_kontrak = ' '. $h4 . ' ' . $bulan4 . ' ' . $t4 .' ';
		        $hari_ini = ' '. $h1 . ' ' . $bulan1 . ' ' . $t1 .' ';
		        echo '
							<p style="line-height:115%; text-align:center;">
								<span style="font-family:Arial">SURAT PERNYATAAN TIDAK MENERIMA</span>
							</p>
							<p style="line-height:115%; text-align:center;">
								<span style="font-family:Arial">BERITA ACARA PENYELESAIAN PEKERJAAN (BAPP)</span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="font-family:Arial">Sehubungan dengan :</span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<ol type="a" style="margin:0pt; padding-left:0pt">
								<li style="margin-left:14.17pt; text-align:justify; line-height:115%; padding-left:0.03pt; font-family:Arial">
									Jaminan Bank (Bank Garansi) Nomor '.$row->no_jaminan.' tanggal '.$row->tgl_jaminan.'.
								</li>
							</ol>
							<p style="margin-left:14.2pt; text-indent:-14.2pt; text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<ol start="2" type="a" style="margin:0pt; padding-left:0pt">
								<li style="margin-left:14.17pt; text-align:justify; line-height:115%; padding-left:0.03pt; font-family:Arial">
									Surat Kuasa Nomor <a href="#" id="nomorsurat" data-type="text" data-title="Masukkan Nomor Surat">………………(3)…………….</a> tanggal <a href="#" id="tglsurat" data-type="text" data-title="Masukkan Tanggal Surat">……….……(4)……………</a>
								</li>
							</ol>
							<p style="margin-left:14.2pt; text-indent:-14.2pt; text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="font-family:Arial">Dengan ini menyatakan bahwa sampai dengan 10 (sepuluh) hari kerja setelah Kontrak berakhir yaitu tanggal '.$tgl_akhir_kontrak.',  Pejabat Pembuat Komitmen '.$row->uraian_satker.'  selaku   PEMEGANG  JAMINAN  tidak  menyerahkan / memberikan BAPP atas penyelesaian pekerjaan <a href="#" id="pekerjaan" data-type="text" data-title="Masukkan Jenis Pekerjaan">..…………….(7)……………...</a> Sebagaimana Kontrak Nomor '.$row->no_kontrak.' tanggal <a href="#" id="tglkontrak" data-type="text" data-title="Masukkan Tanggal Kontrak">….…….(9)…………..</a> </span>
							</p>
							<p style="margin-left:18pt; text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="margin-left:18pt; text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="margin-left:18pt; text-align:justify; line-height:115%">
								<span style="font-family:Arial">        Demikian pernyataan ini kami buat dengan sebenar-benarnya. </span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="width:255.15pt; display:inline-block"></span><span style="width:32.85pt; display:inline-block"></span><span style="width:36pt; display:inline-block"></span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="text-align:justify; line-height:115%; float:right; margin:13px">
								<span style="font-family:Arial"></span><span style="width:242.93pt; display:inline-block"></span><span style="font-family:Arial"><a href="#" id="kota" data-type="text" data-title="Masukkan Nama Kota">...</a>, '.$hari_ini.'</span>
							</p>
			';}
			foreach ($kakan as $raw) {
					echo '
							<p style="text-align:justify; line-height:115%; float:right; margin:11px">
								<span style="width:255.15pt; display:inline-block"></span><span style="width:32.85pt; display:inline-block"></span><span style="font-family:Arial">      Kepala KPPN <a href="#" id="tempat" data-type="text" data-title="Masukkan Tempat KPPN">…….(11)……</a></span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="width:255.15pt; display:inline-block"></span><span style="width:32.85pt; display:inline-block"></span><span style="font-family:Arial"></span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="text-align:justify; line-height:115%">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="text-align:justify; line-height:115%; float:right; margin:11px">
								<span style="width:255.15pt; display:inline-block"></span><span style="width:32.85pt; display:inline-block"></span><span style="font-family:Arial">'.$raw->namakepalakantor.'</span>
							</p>
							<p style="text-align:justify; line-height:115%; float:right; margin:13px">
								<span style="width:255.15pt; display:inline-block"></span><span style="width:32.85pt; display:inline-block"></span><span style="font-family:Arial">'.$raw->nipkepalakantor.'</span>
							</p>
							<p style="text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p>
								<span style="font-family:Arial">&#xa0;</span>
							</p>
					</div>
					';}?>
		      	</div>
			</div>
		</div>