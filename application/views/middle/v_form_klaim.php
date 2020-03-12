<?php
	$hariini = date('d-m-Y');
	$m1 = explode('-', $hariini);
	        $d1 = $m1[0];
	        $b1 = $m1[1];
	        $t1 = $m1[2];

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

	       $hari_ini = ' '. $h1 . ' ' . $bulan1 . ' ' . $t1 .' ';
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
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">Nomor</span><span style="width:22.19pt; display:inline-block"></span>: <span style="font-family:Arial">
								<a href="#" id="nmrsurat" class="editable editable-click inline-input">XX-0000/XXX.00/XX.000/2017</a>
							</span><span style="width:160.32pt; display:inline-block"></span><span style="font-family:Arial;padding-left: 4px;">   '.$hari_ini.'</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">Sifat</span><span style="width:33.69pt; display:inline-block"></span><span style="font-family:Arial">: Segera</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">Lampiran</span><span style="width:8.76pt; display:inline-block"></span><span style="font-family:Arial">: 1 (Satu) Berkas</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">Hal</span><span style="width:39.44pt; display:inline-block"></span><span style="font-family:Arial">: Klaim / Pencairan Garansi Bank</span>
						</p>
						<p style="margin-bottom:8pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&nbsp;</span>
						</p>
			';
			}
	foreach ($surat as $row) {
	
	$tgl = date('d-m-Y',strtotime($row->tgl_jaminan));
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


	        $tgl_jaminan = ' '. $h . ' ' . $bulan . ' ' . $t .' ';
	        
			echo '
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">Kepada Yth.</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial"><b>Pimpinan '.$row->nama_penjamin_bank_asuransi.'</b></span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial"><a href="#" id="namacabang" data-type="text" data-pk="1" data-title="Masukkan Nama Cabang" class="editable editable-click" style="display: inline;"><b>Nama Cabang</b></a></span>
						</p>

						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial"><a href="#" id="alamatbank" data-type="text" data-title="Masukkan Alamat Bank">Alamat Bank</a></span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&nbsp;</span>
						</p>
						<p style="margin-bottom:0pt; text-indent:36pt; text-align:justify; line-height:115%; font-size:11.5pt;margin-top: 14px;">
							<span style="font-family:Arial;">Sehubungan dengan Surat Pernyataan dari Pejabat Pembuat Komitmen Satuan Kerja '.$kew.' '.$row->uraian_satker.' (Kode Satker '.$row->kode_satker.') tanggal <a href="#" id="tanggalsurat" data-type="text" data-title="Masukkan Tanggal Surat">Tanggal Surat</a> dan sesuai dengan Peraturan Direktur Jenderal Perbendaharaan <a href="#" id="nomorperaturan" data-type="text" data-title="Masukkan Nomor Peraturan">Nomor Peraturan</a> tanggal <a href="#" id="tglperaturan" data-type="text" data-title="Masukkan Tanggal Peraturan">Tanggal Peraturan</a> tentang Pedoman Pelaksanaan Penerimaan dan Pengeluaran Negara Akhir Tahun Anggaran <a href="#" id="tahunanggaran" data-type="text" data-title="Masukkan Tahun Anggaran">Tahun Anggaran</a>, diminta bantuan Saudara untuk mencairkan Garansi Bank atas nama sebagai berikut :</span>
						</p>

						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&nbsp;</span>
						</p>
						<table style="margin-right:auto; margin-left:auto; margin-bottom:0; border-collapse:collapse" cellspacing="0" cellpadding="0">
							<tbody><tr>
								<td style="border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
									<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
										<span style="font-family:Arial">No</span>
									</p>
								</td>
								<td style="border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
									<p style="margin-bottom:0pt; text-align:center; line-height:115%; font-size:11.5pt">
										<span style="font-family:Arial">Nomor<br>Jaminan</span>
									</p>
								</td>
								<td style="border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
									<p style="margin-bottom:0pt; text-align:center; line-height:115%; font-size:11.5pt">
										<span style="font-family:Arial">Tanggal Jaminan</span>
									</p>
								</td>
								<td style="border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
									<p style="margin-bottom:0pt; text-align:center; line-height:115%; font-size:11.5pt">
										<span style="font-family:Arial">Nama Yang<br>Dijamin</span>
									</p>
								</td>
								<td style="border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
									<p style="margin-bottom:0pt; text-align:center; line-height:115%; font-size:11.5pt">
										<span style="font-family:Arial">Nilai Jaminan</span>
									</p>
								</td>
								<td style="border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
									<p style="margin-bottom:0pt; text-align:center; line-height:115%; font-size:11.5pt">
										<span style="font-family:Arial">Nilai Jaminan<br>Yang Dicairkan</span>
									</p>
								</td>
							</tr>
							<tr style="height: 40px;text-align: center;">
								<td style="border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;text-align: center;align-content: center;">
									<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt;margin-top: 6pt;">
										<span style="font-family:Arial">1.</span>
									</p>
								</td>
								<td style="border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;text-align: center;">
									<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt;text-align: center;margin-top: 6pt;">
										<span style="font-family:Arial">'.$row->no_jaminan.'</span>
									</p>
								</td>
								<td style="border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
									<p style="margin-bottom:0pt; text-align:center; line-height:115%; font-size:11.5pt;text-align: center;margin-top: 6pt;">
										<span style="font-family:Arial">'.$tgl_jaminan.'</span>
									</p>
								</td>
								<td style="border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
									<p style="margin-bottom:0pt; text-align:center; line-height:115%; font-size:11.5pt;margin-top: 6pt;">
										<span style="font-family:Arial">'.$row->nama_rekanan.'</span>
									</p>
								</td>
								<td style="border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
									<p style="margin-bottom:0pt; text-align:center; line-height:115%; font-size:11.5pt;margin-top: 6pt;">
										<span style="font-family:Arial">Rp. '.$row->nilai_bank_garansi.',-</span>
									</p>
								</td>
								<td style="border:0.75pt solid #000000; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top">
									<p style="margin-top:6pt; text-align:center; line-height:115%; font-size:11.5pt">
										<span style="font-family:Arial">Rp. '.$row->nilai_pencairan.',-</span>
									</p>
								</td>
							</tr>
						</tbody></table>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&nbsp;</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">Dan sebagai kelengkapan, terlampir berkas dan persyaratannya.</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="width:27.22pt; display:inline-block"></span><span style="font-family:Arial">Demikian disampaikan, atas perhatian dan kerja samanya diucapkan terima kasih.</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&nbsp;</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&nbsp;</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="width:255.15pt; display:inline-block"></span><span style="font-family:Arial">Kepala Kantor,</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&nbsp;</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&nbsp;</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&nbsp;</span>
						</p>
			';
	}
			foreach ($kakan as $raw) {
			echo '
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="width:255.15pt; display:inline-block"></span><span style="font-family:Arial">'.$raw->namakepalakantor.'</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="width:255.15pt; display:inline-block"></span><span style="font-family:Arial">NIP. '.$raw->nipkepalakantor.'</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&nbsp;</span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial;font-size:12px"><i>Tembusan : </i></span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial;font-size:12px">1. <a href="#" id="tembusan1" data-type="text" data-title="Masukkan Tembusan 1"> Tembusan 1</a></span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial;font-size:12px">2. <a href="#" id="tembusan2" data-type="text" data-title="Masukkan Tembusan 2"> Tembusan 2</a></span>
						</p>
						<p style="margin-bottom:0pt; text-align:justify; line-height:115%; font-size:11.5pt">
							<span style="font-family:Arial">&nbsp;</span>
						</p>
					</div>
					';
				}?>
				
				</div>
			</div>
		</div>