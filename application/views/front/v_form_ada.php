<!-- <body link="#0563C1" vlink="#954F72"> -->
<?php 
  foreach($tampil as $row) {
      echo "
<div id='page-wrapper'>
   <div class='row'>  
      <div class='col-lg-12'>
         <form class='forms' style='padding-top: 50px;padding-left: 130px;' id='forms' method='POST' action='".base_url()."front/simpan'>
            <table  border=0 cellpadding=0 cellspacing=0 width=776 style='border-collapse: collapse;table-layout:fixed;width:584pt'>
               <col width=38 style='mso-width-source:userset;mso-width-alt:1216;width:29pt'>
               <col width=139 style='mso-width-source:userset;mso-width-alt:4448;width:104pt'>
               <col width=21 style='mso-width-source:userset;mso-width-alt:672;width:16pt'>
               <col width=192 style='mso-width-source:userset;mso-width-alt:6144;width:144pt'>
               <col width=10 style='mso-width-source:userset;mso-width-alt:320;width:8pt'>
               <col width=152 style='mso-width-source:userset;mso-width-alt:4864;width:114pt'>
               <col width=14 style='mso-width-source:userset;mso-width-alt:448;width:11pt'>
               <col width=210 style='mso-width-source:userset;mso-width-alt:6720;width:158pt'>
               <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                  <td height=40 class=xl65 width=38 style='height:30.0pt;width:29pt'><button type='submit' class='btn pull-right'>Simpan</button></td>
                  <td class=xl65 width=139 style='width:104pt'></td>
                  <td class=xl65 width=21 style='width:16pt'></td>
                  <td class=xl65 width=192 style='width:144pt'></td>
                  <td class=xl65 width=10 style='width:8pt'></td>
                  <td class=xl66 width=152 style='width:114pt'>Nomor Karwas Bank Garansi</td>
                  <td class=xl67 width=14 style='width:11pt'>:</td>
                  <td class=xl68 width=210 style='border-left:none;width:158pt'></td>
               </tr>
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl65 style='height:15.0pt'></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
               </tr>
               <tr height=35 style='height:26.25pt'>
                  <td colspan=8 height=35 class=xl99 style='height:26.25pt'>TANDA TERIMA</td>
               </tr>
               <tr height=35 style='height:26.25pt'>
                  <td colspan=8 height=35 class=xl99 style='height:26.25pt'>PENYERAHAN DOKUMEN
                  PERSYARATAN</td>
               </tr>
               <tr height=35 style='height:26.25pt'>
                  <td colspan=8 height=35 class=xl100 style='height:26.25pt'>JAMINAN
                  PELAKSANAAN/BANK GARANSI</td>
               </tr>
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl65 style='height:15.0pt'></td>
                  <td class=xl69 style='border-top:none'></td>
                  <td class=xl69 style='border-top:none'></td>
                  <td class=xl69 style='border-top:none'></td>
                  <td class=xl69 style='border-top:none'></td>
                  <td class=xl69 style='border-top:none'></td>
                  <td class=xl69 style='border-top:none'></td>
                  <td class=xl69 style='border-top:none'></td>
               </tr>";
               echo "
               <tr height=66 style='mso-height-source:userset;height:49.5pt'>
                  <td height=66 class=xl65 style='height:49.5pt'></td>
                  <td class=xl70 width=139 style='width:104pt'>Kode Satker</td>
                  <td class=xl71>:</td>
                  <td class=xl72 style='padding-left:110px;'><input type='text' name='kode_satker' class='form-control' style='width:100%' value='".$row->kode_satker ."' readonly='readonly'></td>
                  <td class=xl71></td>
                  <td class=xl70 width=152 style='width:114pt'>Nama Satker</td>
                  <td class=xl71>:</td>
                  <td class=xl73 width=210 style='width:158pt;'><textarea name='nama_satker' class='form-control' style='width:100%;font-size:10px;height:55px;' readonly>".$row->nama_satker ."</textarea></td>
               </tr>" ;
                }
            foreach ($form as $raw) {
               $checklist6 = "";
               if ($raw->checklist6 != null){
               $checklist6 = "<tr height=39 style='mso-height-source:userset;height:29.25pt'>
                                 <td height=39 class=xl88 align=right style='height:29.25pt;border-top:none'>6</td>
                                 <td colspan=6 class=xl96 width=528 style='border-right:.5pt solid black;
                                          border-left:none;width:397pt'>".nl2br($raw->checklist6)."</td>
                                 <td class=xl91 style='border-top:none;border-left:none'>
                                    <div class='checkbox'>
                                       <label><input name='checklist6' type='checkbox' value='1'></label>
                                    </div>
                                 </td>
                              </tr>";
                                }else{
                                    $checklist6 = " ";
                                }
                echo "
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl74 style='height:15.0pt'></td>
                  <td colspan=3 class=xl101 width=352 style='border-right:.5pt solid black;
                  width:264pt'>Data Kontrak</td>
                  <td class=xl75></td>
                  <td colspan=3 class=xl103 width=376 style='border-right:.5pt solid black;
                  width:283pt'>Data Bank Garansi</td>
               </tr>
               <tr height=19 style='mso-height-source:userset;height:14.25pt'>
                  <td height=19 class=xl74 style='height:14.25pt'></td>
                  <td class=xl76 width=139 style='border-left:none;width:104pt'>Nama Rekanan</td>
                  <td class=xl71>:</td>
                  <td class=xl77 width=192 style='border-top:none;width:144pt'><input type='text' name='nama_rekanan' class='form-control' style='width:100%' required></td>
                  <td class=xl71></td>
                  <td class=xl70 width=152 style='width:114pt'>Bank Penjamin</td>
                  <td class=xl71>:</td>
                  <td class=xl78 width=210 style='width:158pt'><input type='text' name='bank_penjamin' class='form-control' style='width:100%' required></td>
               </tr>
               <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                  <td height=40 class=xl74 style='height:30.0pt'></td>
                  <td class=xl79 width=139 style='width:104pt'>Nomor CAN/NRK SPAN</td>
                  <td class=xl65>:</td>
                  <td class=xl80 width=192 style='width:144pt'><input type='text' name='no_CAN' class='form-control' style='width:100%' required></td>
                  <td class=xl65></td>
                  <td class=xl79 width=152 style='width:114pt'>Nomor Jaminan</td>
                  <td class=xl65>:</td>
                  <td class=xl80 width=210 style='width:158pt'><input type='text' name='no_jaminan' class='form-control' style='width:100%' required></td>
               </tr>
               <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                  <td height=40 class=xl74 style='height:30.0pt'></td>
                  <td class=xl81 width=139 style='border-left:none;width:104pt'>Nomor Kontrak</td>
                  <td class=xl82>:</td>
                  <td class=xl77 width=192 style='width:144pt'><input type='text' name='no_kontrak' class='form-control' style='width:100%' required></td>
                  <td class=xl82></td>
                  <td class=xl83 width=152 style='width:114pt'>Tanggal Jaminan</td>
                  <td class=xl82>:</td>
                  <td class=xl84 width=210 style='width:158pt'><input type='text' name='tgl_jaminan' class='form-control' style='width:100%' required  placeholder='Format : dd-mm-yy'></td>
               </tr>
               <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                  <td height=40 class=xl74 style='height:30.0pt'></td>
                  <td class=xl76 width=139 style='border-left:none;width:104pt'>Tanggal Berakhir Kontrak</td>
                  <td class=xl71>:</td>
                  <td class=xl85 width=192 style='width:144pt'><input type='text' name='tgl_akhir_kontrak' class='form-control' style='width:100%' required placeholder='Format : dd-mm-yy'></td>
                  <td class=xl71></td>
                  <td class=xl70 width=152 style='width:114pt'>Tanggal Akhir Jaminan</td>
                  <td class=xl71>:</td>
                  <td class=xl85 width=210 style='width:158pt'><input type='text' name='tgl_akhir_jaminan' class='form-control' style='width:100%' required placeholder='Format : dd-mm-yy'></td>
               </tr>
               <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                  <td height=40 class=xl74 style='height:30.0pt'></td>
                  <td class=xl76 width=139 style='border-left:none;width:104pt'>Nomor SPM
                  Kontraktual</td>
                  <td class=xl71>:</td>
                  <td class=xl86 width=192 style='width:144pt'><input type='text' name='no_SPM' class='form-control' style='width:100%' required></td>
                  <td class=xl71></td>
                  <td class=xl70 width=152 style='width:114pt'>Nilai Bank Garansi</td>
                  <td class=xl71>:</td>
                  <td class=xl87 width=210 style='width:158pt'><input type='text' name='nilai_bank_garansi' class='form-control' style='width:100%' required></td>
               </tr>
               <tr height=40 style='mso-height-source:userset;height:30.0pt'>
                  <td height=40 class=xl74 style='height:30.0pt'></td>
                  <td class=xl71></td>
                  <td class=xl71></td>
                  <td class=xl86 width=192 style='width:144pt'></td>
                  <td class=xl71></td>
                  <td class=xl70 width=152 style='width:114pt'>Masa Berlaku Bank Garansi</td>
                  <td class=xl71>:</td>
                  <td class=xl78 width=210 style='width:158pt'><input type='text' name='masa_berlaku_bank_garansi' class='form-control' style='width:100%' required></td>
               </tr>
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl65 style='height:15.0pt'></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
               </tr>
               <tr height=13 style='mso-height-source:userset;height:9.75pt'>
                  <td height=13 class=xl65 style='height:9.75pt'></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
               </tr>
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl88 style='height:15.0pt'>No</td>
                  <td colspan=6 class=xl89 style='border-left:none'>Jenis Dokumen</td>
                  <td class=xl89 style='border-left:none'>Cek List</td>
               </tr>
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl88 align=right style='height:15.0pt;border-top:none'>1</td>
                  <td colspan=6 class=xl93 style='border-right:.5pt solid black;border-left:
                  none'>".nl2br($raw->checklist1)."</td>
                  <td class=xl90 style='border-top:none;border-left:none'>
                    <div class='checkbox'>
                      <label><input name='checklist1' type='checkbox' value='1'></label>
                    </div>
                  </td>
               </tr>
               <tr height=146 style='mso-height-source:userset;height:109.5pt'>
                  <td height=146 class=xl88 align=right style='height:109.5pt;border-top:none'>2</td>
                  <td colspan=6 class=xl96 width=528 style='border-right:.5pt solid black;
                  border-left:none;width:397pt'>".nl2br($raw->checklist2)."
                  </td>
                  <td class=xl91 style='border-top:none;border-left:none'>
                    <div class='checkbox'>
                      <label><input name='checklist2' type='checkbox' value='1'></label>
                    </div>
                  </td>
               </tr>
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl88 align=right style='height:15.0pt;border-top:none'>3</td>
                  <td colspan=6 class=xl93 style='border-right:.5pt solid black;border-left:
                  none'>".nl2br($raw->checklist3)."</td>
                  <td class=xl91 style='border-top:none;border-left:none'>
                    <div class='checkbox'>
                      <label><input name='checklist3' type='checkbox' value='1'></label>
                    </div>
                  </td>
               </tr>
               <tr height=45 style='mso-height-source:userset;height:33.75pt'>
                  <td height=45 class=xl88 align=right style='height:33.75pt;border-top:none'>4</td>
                  <td colspan=6 class=xl96 width=528 style='border-right:.5pt solid black;
                  border-left:none;width:397pt'>".nl2br($raw->checklist4)."</td>
                  <td class=xl91 style='border-top:none;border-left:none'>
                    <div class='checkbox'>
                      <label><input name='checklist4' type='checkbox' value='1'></label>
                    </div>
                  </td>
               </tr>
               <tr height=39 style='mso-height-source:userset;height:29.25pt'>
                  <td height=39 class=xl88 align=right style='height:29.25pt;border-top:none'>5</td>
                  <td colspan=6 class=xl96 width=528 style='border-right:.5pt solid black;
                  border-left:none;width:397pt'>".nl2br($raw->checklist5)."</td>
                  <td class=xl91 style='border-top:none;border-left:none'>
                    <div class='checkbox'>
                      <label><input name='checklist5' type='checkbox' value='1'></label>
                      </div>
                  </td>
               </tr>
               ".$checklist6."
               <tr height=9 style='mso-height-source:userset;height:6.75pt'>
                  <td height=9 class=xl65 style='height:6.75pt'></td>
                  <td class=xl92></td>
                  <td class=xl92></td>
                  <td class=xl92></td>
                  <td class=xl92></td>
                  <td class=xl92></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
               </tr>
               ";}
            echo "
               <tr height=11 style='mso-height-source:userset;height:8.25pt'>
                  <td height=11 class=xl65 style='height:8.25pt'></td>
                  <td class=xl92></td>
                  <td class=xl92></td>
                  <td class=xl92></td>
                  <td class=xl92></td>
                  <td class=xl92></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
               </tr>
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl65 style='height:15.0pt'></td>
                  <td class=xl92>Palembang, <input type='date' name='tgl_tanda_terima' style='width:100%;height:20px' placeholder='Format : dd-mm-yy' required ></td>
                  <td class=xl92></td>
                  <td class=xl92></td>
                  <td class=xl92></td>
                  <td class=xl92></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
               </tr>
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl65 style='height:15.0pt'></td>
                  <td class=xl65>Yang menyerahkan</td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65>Yang menerima</td>
               </tr>
               <tr height=5 style='mso-height-source:userset;height:3.75pt'>
                  <td height=5 class=xl65 style='height:3.75pt'></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
               </tr>
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl65 style='height:15.0pt'></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
               </tr>
               <tr height=10 style='mso-height-source:userset;height:7.5pt'>
                  <td height=10 class=xl65 style='height:7.5pt'></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
               </tr>

               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl65 style='height:15.0pt'></td>
                  <td class=xl65><input type='text' name='nama_petugas_satker'  style='width:100%;height:20px' placeholder='Nama Petugas Satker'></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65>NAMA</td>
               </tr>
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl65 style='height:15.0pt'></td>
                  <td class=xl65><input type='text' name='nip_petugas_satker'  style='width:100%;height:20px' placeholder='NIP Petugas Satker'></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65>NIP</td>
               </tr>
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl65 style='height:15.0pt'>HP:</td>
                  <td class=xl65><input type='text' name='no_hp_petugas_satker' style='width:100%;height:20px' placeholder='No. HP Petugas Satker'></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
               </tr>
               <tr height=20 style='height:15.0pt'>
                  <td height=20 class=xl65 style='height:15.0pt'></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
                  <td class=xl65></td>
               </tr>
            </table> 
         </form>           
      </div>
      <script>
         var options = {
            // success, info, error
            style: 'error',
            // notification title
            title: 'Warning!',
            // notification message
            message: 'Nomor Jaminan sudah ada didalam database!',
            // custom Font Awesome icon
            icon: 'fa fa-exclamation-triangle',
            // custom theme
            theme: null,
            // timeout to close the notification automatically
            timeout: 7000,
            // shows close button
            close_button: true
            };
            var n = new notify(options);
            n.show();
      </script>
   </div>     <!-- end page-wrapper -->
</div><!-- end wrapper -->";
?>
