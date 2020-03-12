<div id="page-wrapper">
	<div class="row">
		<div class="col-xs-12">
			<h1 class="page-header">Rekapitulasi Bank Garansi</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i>Rekapitulasi Bank Garansi
                </div>
				<div class="panel-body">
					<div class="table-responsive" style="overflow: auto">
						<table class="table table-striped table-bordered table-hover" id="display">
							<thead>
								<tr>
									<th>Nomor</th>
									<th>Kode Satker</th>
									<th>Nama Rekanan</th>
									<th>Nomor CAN / NRK SPAN</th>
									<th>Nomor Kontrak</th>
									<th>Tanggal Berakhir Kontrak</th>
				    				<th>Bank Penjamin</th>
				    				<th>Nomor Jaminan</th>
				    				<th>Tanggal Jaminan</th>
				    				<th>Tanggal Akhir Jaminan</th>
				    				<th>Nilai Bank Garansi</th>
				    				<th>Masa Berlaku Bank Garansi</th>
				    				<th>Nomor SPM Kontraktual</th>
				    				<th>Nama Petugas Satker</th>
				    				<th>NIP Petugas Satker</th>
				    				<th>Nomor HP Petugas Satker</th>
				    				<th>Tanggal Tanda Terima</th>
				    				<th>Status Bank Garansi</th>
				    				<th>Tanggal Pencairan / Pengembalian</th>
				    				<th>Nilai Pencairan</th>
				    				<th>Action</th>
				    			</tr>
			    			</thead>
			    			<tbody id="table-body">
								<?php
								$no2=1;
								foreach($tampil as $row){
									$no=$row['no'];
									switch($row['status']){
										case 1:
											$stat='DICAIRKAN/DIKLAIM';
											break;
				 						case 2:
				    						$stat='DIKEMBALIKAN';
				    						break;
				    					default:
		    								$stat='NONE';
		    						}
								echo "<tr data-id='$row[no]'>
									<td>".$no2."</td>
									<td><a href='".base_url()."middle/carisatker?search=".$row['kode_satker']."'>".$row['kode_satker']."</a></td>
									<td>".$row['nama_rekanan']."</td>
					   				<td>".$row['no_CAN']."</td>
					    			<td>".$row['no_kontrak']."</td>
				    				<td>".date('d-m-Y',strtotime($row['tgl_akhir_kontrak']))."</td>
				    				<td>".$row['nama_penjamin_bank_asuransi']."</td>
				    				<td>".$row['no_jaminan']."</td>
				   					<td>".date('d-m-Y',strtotime($row['tgl_jaminan']))."</td>
				   					<td>".date('d-m-Y',strtotime($row['tgl_akhir_jaminan']))."</td>
				   					<td>".$row['nilai_bank_garansi']."</td>
			    					<td>".$row['masa_berlaku_bank_garansi']."</td>
			    					<td>".$row['no_SPM']."</td>
			    					<td>".$row['nama_petugas_satker']."</td>
			    					<td>".$row['nip_petugas_satker']."</td>
				    				<td>".$row['no_hp_petugas_satker']."</td>
				    				<td>".date('d-m-Y',strtotime($row['tgl_tanda_terima']))."</td>
				    				<td>".$stat."</td>
				    				<td>".$row['tgl_pencairan']."</td>
				    				<td>".$row['nilai_pencairan']."</td>
				    				<td>
				    					<button type='button' class='btn btn-info btn-sm' data-toggle='modal' data-target='#myModal".$no."'>Update</button>
				    					<button type='button' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#myModal2".$no."'>Delete</button>
				    				</td>
				    				<div id='myModal".$no."' class='modal fade' role='dialog'>
                                    	<div class='modal-dialog' style='width: 300px;'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                                    <h4 class='modal-title'>Edit Data Karwas Ke-".$no."</h4>
                                                </div>
	                                            <div class='modal-body'>
	                                                <p> <form action='".base_url()."middle/update2' method='POST'>
	                                                	<label style='padding-right:3px'>Kode Satker : </label>
	                                                    <input class='form-control' type='text' name='kode_satker' value='".$row['kode_satker']."'><br>
	                                                    <label style='padding-right:3px'>Nama Rekanan : </label>
	                                                    <input class='form-control' type='text' name='nama_rekanan' value='".$row['nama_rekanan']."'><br>
	                                                    <label style='padding-right:3px'>Nomor CAN / NRK SPAN : </label>
	                                                    <input class='form-control' type='text' name='no_CAN'><br>
	                                                    <label style='padding-right:3px'>Nomor Kontrak : </label>
	                                                    <input class='form-control' type='text' name='no_kontrak'><br>
	                                                    <label style='padding-right:7px'>Tanggal Berakhir Kontrak : </label>
	                                                    <input class='form-control' type='text' name='tgl_akhir_kontrak' value='".date('d-m-Y',strtotime($row['tgl_akhir_kontrak']))."'><br>
	                                                    <label style='padding-right:3px'>Bank Penjamin : </label>
	                                                    <input class='form-control' type='text' name='nama_penjamin_bank_asuransi' value='".$row['nama_penjamin_bank_asuransi']."'><br>
	                                                    <label style='padding-right:3px'>Nomor Jaminan : </label>
	                                                    <input class='form-control' type='text' name='no_jaminan' value='".$row['no_jaminan']."'><br>
				    									<label style='padding-right:7px'>Tanggal Jaminan : </label>
	                                                    <input class='form-control' type='text' name='tgl_jaminan' value='".date('d-m-Y',strtotime($row['tgl_jaminan']))."' ><br>
	                                                    <label style='padding-right:7px'>Tanggal Akhir Jaminan : </label>
	                                                    <input class='form-control' type='text' name='tgl_akhir_jaminan' value='".date('d-m-Y',strtotime($row['tgl_akhir_jaminan']))."'><br>
				    									<label style='padding-right:3px'>Nilai Bank Garansi : </label>
	                                                    <input class='form-control' type='text' name='nilai_bank_garansi' value='".$row['nilai_bank_garansi']."'><br>
				    									<label style='padding-right:3px'>Masa Berlaku Bank Garansi : </label>
	                                                    <input class='form-control' type='text' name='masa_berlaku_bank_garansi' value='".$row['masa_berlaku_bank_garansi']."'><br>
				    									<label style='padding-right:3px'>Nomor SPM Kontraktual : </label>
	                                                    <input class='form-control' type='text' name='no_SPM' value='".$row['no_SPM']."'><br>
	                                                    <label style='padding-right:3px'>Nama Petugas Satker : </label>
	                                                    <input class='form-control' type='text' name='nama_petugas_satker' value='".$row['nama_petugas_satker']."'><br>
				    									<label style='padding-right:3px'>NIP Petugas Satker : </label>
	                                                    <input class='form-control' type='text' name='nip_petugas_satker' value='".$row['nip_petugas_satker']."'><br>
				    									<label style='padding-right:3px'>Nomor HP Petugas Satker : </label>
	                                                    <input class='form-control' type='text' name='no_hp_petugas_satker' value='".$row['kode_satker']."'><br>
				    									<label style='padding-right:7px'>Tanggal Tanda Terima : </label>
	                                                    <input class='form-control' type='text' name='tgl_tanda_terima' value='".date('d-m-Y',strtotime($row['tgl_tanda_terima']))."'><br>
				    				                    <label style='padding-right:7px'>Status Bank Garansi : </label>
	                                                    <select name='status' class='form-control'>
	                                                        <option value='1'>DICAIRKAN</option>
	                                                        <option value='2'>DIKEMBALIKAN</option>
	                                                    </select><br>
	                                                    <label style='padding-right:3px'>Tanggal Penyerahan BAST : </label>
	                                                    <input class='form-control' type='text' name='tgl_pencairan' value='".date('d-m-Y',strtotime($row['tgl_pencairan']))."'><br>
	                                                    <label style='padding-right:3px'>Nilai Pencairan : </label>
	                                                    <input class='form-control' type='text' name='nilai_pencairan' value='".$row['nilai_pencairan']."'><br>
	                                                    <input hidden type='text' name='no' value='".$no."'>
	                                                    <button class='btn btn-success' type='submit'>Update</button>
	                                                </form></p>
	                                            </div>
	                                        </div>
										</div>
                                    </div>
                                    <div id='myModal2".$no."' class='modal fade' role='dialog'>
                                                <div class='modal-dialog' style='width: 300px;'>
                                                 	<div class='modal-content'>
                                                        <div class='modal-header'>
                                                            <h4 class='modal-title'>Delete Data Karwas Ke-".$no."</h4>
                                                        </div>
                                                        <div class='modal-body'>
                                                            <p align='center'> <form action='".base_url()."middle/delete2/".$no."' method='POST'>
                                                                    Yakin akan menghapus data ini?<br><br>
                                                                    <button class='btn btn-danger' type='submit'>Delete</button>
                                                                    <button type='button' class='btn btn-warning' data-dismiss='modal'>Cancel</button>
                                                                </form>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
				    			</tr>";
				    			$no2++;
				    			}?>
				   			</tbody>
						</table>
		    		</div>
				</div>
	    	</div>
		</div>
    </div>
</div>