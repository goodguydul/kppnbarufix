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
		$tgl2 = date('d-m-Y',strtotime($row->tgl_akhir_jaminan));
		        $m2 = explode('-', $tgl2);
		        $d2 = $m2[0];
		        $b2 = $m2[1];
		        $t2 = $m2[2];
		        $bulan2 = '';
		$tgl3 = date('d-m-Y',strtotime($row->tgl_pencairan));
		        $m3 = explode('-', $tgl3);
		        $d3 = $m3[0];
		        $b3 = $m3[1];
		        $t3 = $m3[2];
		        $bulan3 = '';
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

		        $tgl_pencairan = "";
		        if($b3 == 1){
		            $bulan3 = 'Januari';
		        }else if($b3 == 2){
		            $bulan3 = 'Februari';
		        }else if($b3 == 3){
		            $bulan3 = 'Maret';
		        }else if($b3 == 4){
		            $bulan3 = 'April';
		        }else if($b3 == 5){
		            $bulan3 = 'Mei';
		        }else if($b3 == 6){
		            $bulan3 = 'Juni';
		        }else if($b3 == 7){
		            $bulan3 = 'Juli';
		        }else if($b3 == 8){
		            $bulan3 = 'Agustus';
		        }else if($b3 == 9){
		            $bulan3 = 'September';
		        }else if($b3 == 10){
		            $bulan3 = 'Oktober';
		        }else if($b3 == 11){
		            $bulan3 = 'November';
		        }else if($b3 == 12){
		            $bulan3 = 'Desember';
		        }
		        $h3 = (int)$d3;
		      	
		      	$tgl_akhir_jaminan= "";
		        if($b2 == 1){
		            $bulan2 = 'Januari';
		        }else if($b2 == 2){
		            $bulan2 = 'Februari';
		        }else if($b2 == 3){
		            $bulan2 = 'Maret';
		        }else if($b2 == 4){
		            $bulan2 = 'April';
		        }else if($b2 == 5){
		            $bulan2 = 'Mei';
		        }else if($b2 == 6){
		            $bulan2 = 'Juni';
		        }else if($b2 == 7){
		            $bulan2 = 'Juli';
		        }else if($b2 == 8){
		            $bulan2 = 'Agustus';
		        }else if($b2 == 9){
		            $bulan2 = 'September';
		        }else if($b2 == 10){
		            $bulan2 = 'Oktober';
		        }else if($b2 == 11){
		            $bulan2 = 'November';
		        }else if($b2 == 12){
		            $bulan2 = 'Desember';
		        }
		        $h2 = (int)$d2;

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
		        $tgl_akhir_jaminan = ' '. $h2 . ' ' . $bulan2 . ' ' . $t2 .' ';
		        $tgl_akhir_kontrak = ' '. $h4 . ' ' . $bulan4 . ' ' . $t4 .' ';
		        $hari_ini = ' '. $h1 . ' ' . $bulan1 . ' ' . $t1 .' ';
		        $tgl_pencairan = ' '. $h3 . ' ' . $bulan3 . ' ' . $t3 .' ';
		        echo '
							<p style="margin-bottom:0pt; text-align:center; line-height:115%; font-size:11.5pt">
								<strong><span style="font-family:Arial; ">&#xa0;</span></strong>
							</p>
							<p style="margin-bottom:0pt; text-align:center; line-height:115%; font-size:11.5pt">
								<strong><span style="font-family:Arial; ">BERITA ACARA PENYERAHAN ASLI JAMINAN / GARANSI BANK</span></strong>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="margin-bottom:0pt; text-align:center; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">NOMOR : <a href="#" id="nomorsurat" data-type="text" data-title="Masukkan Nomor Surat"> BA-0005/WPB.07/KP.014/2015</a></span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Pada hari ini, </span>
									<strong>
										<span style="font-family:Arial;"><a href="#" id="hari" data-type="text" data-title="Masukkan Hari">Kamis </a>
										</span>
									</strong>
									<span style="font-family:Arial">tanggal </span>
									<span style="font-family:Arial;">'.$h1.'</span>
									<span style="font-family:Arial"> bulan </span>
									<span style="font-family:Arial;">'.$bulan1.'</span>
									<span style="font-family:Arial"> tahun </span
									span style="font-family:Arial;">'.$t1.'</span>
									<span style="font-family:Arial"> bertempat di KPPN Palembang telah diadakan serah terima asli jaminan / garansi bank dari Kepala KPPN Palembang kepada Pejabat Penandatangan SPM (PP-SPM) satker </span>
									<span style="font-family:Arial;">'.$row->uraian_satker.'</span><span style="font-family:Arial"> kode satker </span><span style="font-family:Arial;">'.$row->kode_satker.'</span>
									<span style="font-family:Arial"> yaitu atas jaminan / garansi bank sebagai berikut :</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Penerbit Jaminan</span><span style="width:75pt; display:inline-block"></span><span style="font-family:Arial">:    </span><span style="font-family:Arial;">PT. BPD SUMSELBABEL(PERSERO) TBK. </span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">                                                        </span><span style="font-family:Arial;"><a href="#" id="namacabang" data-type="text" data-title="Masukkan Nama Cabang">KC PALEMBANG ATMO</a></span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Nomor Jaminan</span><span style="width:82.88pt; display:inline-block"></span><span style="font-family:Arial">:    </span><span style="font-family:Arial;">'.$row->no_jaminan.'</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Tanggal Dikeluarkan</span><span style="width:60pt; display:inline-block"></span><span style="font-family:Arial">:    </span><span style="font-family:Arial;">'.$tgl_jaminan.'</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Nilai Jaminan</span><span style="width:95pt; display:inline-block"></span><span style="font-family:Arial">:    </span><span style="font-family:Arial;">Rp.'.number_format((float)$row->nilai_bank_garansi,0,',','.').',-</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Masa Berlaku</span><span style="width:93.74pt; display:inline-block"></span><span style="font-family:Arial">:   </span><span style="font-family:Arial;">'.$tgl_jaminan.' s.d. '.$tgl_akhir_jaminan.'</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Penyerahan jaminan / garansi bank tersebut di atas dikarenakan Pejabat Penandatangan SPM(PP-SPM) telah menyerahkan asli Berita Acara Penyelesaian Pekerjaan (BAPP) 100% pada tanggal '.$tgl_pencairan.' atas kontrak sebagai berikut :</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Nama Satker</span><span style="width:95.94pt; display:inline-block"></span><span style="font-family:Arial">:    </span><span style="font-family:Arial;">'.$row->uraian_satker.' ('.$row->kode_satker.')</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Nomor Kontrak</span><span style="width:85.72pt; display:inline-block"></span><span style="font-family:Arial">:    </span><span style="font-family:Arial;">'.$row->no_kontrak.'</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Tanggal Kontrak</span><span style="width:80pt; display:inline-block"></span><span style="font-family:Arial">:    </span><span style="font-family:Arial;"><a href="#" id="tglkontrak" data-type="text" data-title="Masukkan Tanggal Kontrak">Tanggal Kontrak</a></span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Nomor Karwas Kontrak</span><span style="width:44.18pt; display:inline-block"></span><span style="font-family:Arial">:    </span><span style="font-family:Arial;">'.$row->no.'</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Masa Berakhir Kontrak</span><span style="width:46.08pt; display:inline-block"></span><span style="font-family:Arial">:    </span><span style="font-family:Arial;">'.$tgl_akhir_kontrak.'</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Demikian Berita Acara ini dibuat dengan sesungguhnya untuk dipergunakan seperlunya.</span><span style="font-family:Arial">              </span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt;margin-top:20px">
								<span style="width:255.15pt; display:inline-block"></span><span style="width:32.85pt; display:inline-block"></span><span style="font-family:Arial">Palembang, </span><span style="font-family:Arial;">'.$hari_ini.'</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">&#xa0;</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Yang menerima,                                                                Yang Menyerahkan</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial">Pejabat Penandatangan SPM (PP-SPM)                          Kepala KKPN Palembang</span>
							</p>
							<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
								<span style="font-family:Arial;">'.$row->uraian_satker.'</span>
							</p>
				';}
				foreach ($kakan as $raw) {
					echo '
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&#xa0;</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="width:255.15pt; display:inline-block"></span>
						</p>
						<div style="margin-right:295px;">
						  	<div style="float: left;width: 100%;background-color: #CCF ">
							  	<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
									<span style="font-family:Arial;"><a href="#" id="namapejabat" data-type="text" data-title="Masukkan Nama Pejabat"> Nama Pejabat</a></span><br>
									<span style="font-family:Arial">NIP. </span><span style="font-family:Arial;"><a href="#" id="nippejabat" data-type="text" data-title="Masukkan NIP Pejabat"> NIP Pejabat</a></span>
								</p>
							</div>
						  	<div style="float: right;width: 200px;margin-right: -200px; background-color: #FFA;">
						  		<p style="margin-bottom:0pt; text-align:left; line-height:115%; font-size:11.5pt">
						  				<span style="font-family:Arial;padding-left: 183pxpx;">'.$raw->namakepalakantor.'</span><br>
									<span style="font-family:Arial;">NIP. </span><span style="font-family:Arial;">'.$raw->nipkepalakantor.'</span>
								</p>
						  </div>
						  <div style="clear: both;"></div>
						</div>
					</div>
					';}?>
		      	</div>
			</div>
		</div>