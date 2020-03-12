<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_form extends CI_Model{

       function simpan($data)
       {
            $this->db->insert('form',$data);
       }
       function tampilkarwas($c,$username){

            $this->db->select('form.no as no,
                              form.kode_satker as  kode_satker,
                              datasatker.nama_satker as nama_satker,
                              form.uraian_satker  as  uraian_satker,
                              form.nama_rekanan as  nama_rekanan,
                              form.no_CAN as  no_CAN,
                              form.no_kontrak as  no_kontrak,
                              form.tgl_akhir_kontrak  as  tgl_akhir_kontrak,
                              form.nama_penjamin_bank_asuransi  as  nama_penjamin_bank_asuransi,
                              form.no_jaminan as  no_jaminan,
                              form.tgl_jaminan  as  tgl_jaminan,
                              form.tgl_akhir_jaminan  as  tgl_akhir_jaminan,
                              form.nilai_bank_garansi as  nilai_bank_garansi,
                              form.masa_berlaku_bank_garansi  as  masa_berlaku_bank_garansi,
                              form.no_SPM as  no_SPM,
                              form.nama_petugas_satker  as  nama_petugas_satker,
                              form.nip_petugas_satker as  nip_petugas_satker,
                              form.no_hp_petugas_satker as  no_hp_petugas_satker,
                              form.tgl_tanda_terima as  tgl_tanda_terima,
                              form.username as  username,
                              form.checklist1 as  checklist1,
                              form.checklist2 as  checklist2,
                              form.checklist3 as  checklist3,
                              form.checklist4 as  checklist4,
                              form.checklist5 as  checklist5,
                              form.checklist6 as  checklist6,
                              login.nama as nama_petugas_FO,
                              login.nip as nip_petugas_FO,
                              login.level as level
                               ');
            $this->db->from('form');
            $this->db->join('datasatker', 'form.kode_satker = datasatker.kode_satker','inner');
            $this->db->join('login', 'form.username = login.username','inner');

            $this->db->where('form.no',$c);
            $this->db->where('login.username',$username);
            $query = $this->db->get();

            return $query->result(); 
       }
      function tampilsearch(){

            $this->db->select('*');
            $this->db->from('datasatker');
            $c = $this->input->POST ('search');
            $this->db->like('kode_satker', $c);
           
            $query = $this->db->get ();

            return $query->result(); 
       }
        function get_records(){
            $this->db->select('*');
            $this->db->from('login');
            $query=$this->db->get();
            return $query;
       }
       function tampils($kode_satker,$nomor_jaminan,$username){

            $this->db->select('form.no as no,
                              form.kode_satker as  kode_satker,
                              datasatker.nama_satker as nama_satker,
                              form.uraian_satker  as  uraian_satker,
                              form.nama_rekanan as  nama_rekanan,
                              form.no_CAN as  no_CAN,
                              form.no_kontrak as  no_kontrak,
                              form.tgl_akhir_kontrak  as  tgl_akhir_kontrak,
                              form.nama_penjamin_bank_asuransi  as  nama_penjamin_bank_asuransi,
                              form.no_jaminan as  no_jaminan,
                              form.tgl_jaminan  as  tgl_jaminan,
                              form.tgl_akhir_jaminan  as  tgl_akhir_jaminan,
                              form.nilai_bank_garansi as  nilai_bank_garansi,
                              form.masa_berlaku_bank_garansi  as  masa_berlaku_bank_garansi,
                              form.no_SPM as  no_SPM,
                              form.nama_petugas_satker  as  nama_petugas_satker,
                              form.nip_petugas_satker as  nip_petugas_satker,
                              form.no_hp_petugas_satker as  no_hp_petugas_satker,
                              form.tgl_tanda_terima as  tgl_tanda_terima,
                              form.username as  username,
                              form.checklist1 as  checklist1,
                              form.checklist2 as  checklist2,
                              form.checklist3 as  checklist3,
                              form.checklist4 as  checklist4,
                              form.checklist5 as  checklist5,
                              form.checklist6 as  checklist6,
                              login.nama as nama_petugas_FO,
                              login.nip as nip_petugas_FO,
                              login.level as level
                               ');
            $this->db->from('form');
            $this->db->join('datasatker', 'form.kode_satker = datasatker.kode_satker','inner');
            $this->db->join('login', 'form.username = login.username','inner');

            $this->db->where('datasatker.kode_satker',$kode_satker);
            $this->db->where('form.no_jaminan',$nomor_jaminan);
            $this->db->where('login.username',$username);
            $query = $this->db->get();

            return $query->result(); 
       }
       function tampiledit($no_karwas){

            $this->db->select('form.no as no,
                              form.kode_satker as  kode_satker,
                              datasatker.nama_satker as nama_satker,
                              form.uraian_satker  as  uraian_satker,
                              form.nama_rekanan as  nama_rekanan,
                              form.no_CAN as  no_CAN,
                              form.no_kontrak as  no_kontrak,
                              form.tgl_akhir_kontrak  as  tgl_akhir_kontrak,
                              form.nama_penjamin_bank_asuransi  as  nama_penjamin_bank_asuransi,
                              form.no_jaminan as  no_jaminan,
                              form.tgl_jaminan  as  tgl_jaminan,
                              form.tgl_akhir_jaminan  as  tgl_akhir_jaminan,
                              form.nilai_bank_garansi as  nilai_bank_garansi,
                              form.masa_berlaku_bank_garansi  as  masa_berlaku_bank_garansi,
                              form.no_SPM as  no_SPM,
                              form.nama_petugas_satker  as  nama_petugas_satker,
                              form.nip_petugas_satker as  nip_petugas_satker,
                              form.no_hp_petugas_satker as  no_hp_petugas_satker,
                              form.tgl_tanda_terima as  tgl_tanda_terima,
                              form.username as  username,
                              form.checklist1 as  checklist1,
                              form.checklist2 as  checklist2,
                              form.checklist3 as  checklist3,
                              form.checklist4 as  checklist4,
                              form.checklist5 as  checklist5,
                              form.checklist6 as  checklist6,
                              login.nama as nama_petugas_FO,
                              login.nip as nip_petugas_FO,
                              login.level as level
                               ');
            $this->db->from('form');
            $this->db->join('datasatker', 'form.kode_satker = datasatker.kode_satker','inner');
            $this->db->join('login', 'form.username = login.username','inner');

            $this->db->where('form.no',$no_karwas);
            $query = $this->db->get();

            return $query->result(); 
       }

       function editdata($c,$username){

            $this->db->select('form.no as no,
                              form.kode_satker as  kode_satker,
                              datasatker.nama_satker as nama_satker,
                              form.uraian_satker  as  uraian_satker,
                              form.nama_rekanan as  nama_rekanan,
                              form.no_CAN as  no_CAN,
                              form.no_kontrak as  no_kontrak,
                              form.tgl_akhir_kontrak  as  tgl_akhir_kontrak,
                              form.nama_penjamin_bank_asuransi  as  nama_penjamin_bank_asuransi,
                              form.no_jaminan as  no_jaminan,
                              form.tgl_jaminan  as  tgl_jaminan,
                              form.tgl_akhir_jaminan  as  tgl_akhir_jaminan,
                              form.nilai_bank_garansi as  nilai_bank_garansi,
                              form.masa_berlaku_bank_garansi  as  masa_berlaku_bank_garansi,
                              form.no_SPM as  no_SPM,
                              form.nama_petugas_satker  as  nama_petugas_satker,
                              form.nip_petugas_satker as  nip_petugas_satker,
                              form.no_hp_petugas_satker as  no_hp_petugas_satker,
                              form.tgl_tanda_terima as  tgl_tanda_terima,
                              form.username as  username,
                              form.checklist1 as  checklist1,
                              form.checklist2 as  checklist2,
                              form.checklist3 as  checklist3,
                              form.checklist4 as  checklist4,
                              form.checklist5 as  checklist5,
                              form.checklist6 as  checklist6,
                              login.nama as nama_petugas_FO,
                              login.nip as nip_petugas_FO,
                              login.level as level
                               ');
            $this->db->from('form');
            $this->db->join('datasatker', 'form.kode_satker = datasatker.kode_satker','inner');
            $this->db->join('login', 'form.username = login.username','inner');

            $this->db->where('form.no',$c);
            $this->db->where('login.username',$username);
            $query = $this->db->get();

            return $query->result(); 
       }
       function editsaldo($c,$username){

            $this->db->select('form.no as no,
                              form.kode_satker as  kode_satker,
                              datasatker.nama_satker as nama_satker,
                              form.uraian_satker  as  uraian_satker,
                              form.nama_rekanan as  nama_rekanan,
                              form.no_CAN as  no_CAN,
                              form.no_kontrak as  no_kontrak,
                              form.tgl_akhir_kontrak  as  tgl_akhir_kontrak,
                              form.nama_penjamin_bank_asuransi  as  nama_penjamin_bank_asuransi,
                              form.no_jaminan as  no_jaminan,
                              form.tgl_jaminan  as  tgl_jaminan,
                              form.tgl_akhir_jaminan  as  tgl_akhir_jaminan,
                              form.nilai_bank_garansi as  nilai_bank_garansi,
                              form.masa_berlaku_bank_garansi  as  masa_berlaku_bank_garansi,
                              form.no_SPM as  no_SPM,
                              form.nama_petugas_satker  as  nama_petugas_satker,
                              form.nip_petugas_satker as  nip_petugas_satker,
                              form.no_hp_petugas_satker as  no_hp_petugas_satker,
                              form.tgl_tanda_terima as  tgl_tanda_terima,
                              form.username as  username,
                              form.checklist1 as  checklist1,
                              form.checklist2 as  checklist2,
                              form.checklist3 as  checklist3,
                              form.checklist4 as  checklist4,
                              form.checklist5 as  checklist5,
                              form.checklist6 as  checklist6,
                              login.nama as nama_petugas_FO,
                              login.nip as nip_petugas_FO,
                              login.level as level
                               ');
            $this->db->from('form');
            $this->db->join('datasatker', 'form.kode_satker = datasatker.kode_satker','inner');
            $this->db->join('login', 'form.username = login.username','inner');

            $this->db->where('form.no',$c);
            $this->db->where('login.username',$username);
            $query = $this->db->get();

            return $query->result(); 
       }
      function simpanedit($data,$no_karwas)
      {
            $this->db->update('form',$data,"no = $no_karwas");
            
      }
      function simpansaldo($data,$no_karwas)
      {
            $this->db->update('form',$data,"no = $no_karwas");
            
      }
      function cekexist($data){
          
            $this->db->where('no_jaminan', $data);
            $query = $this->db->get('form');
            if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }
      }
      function tampilsearchexist(){

            $this->db->select('*');
            $this->db->from('datasatker');
            $c = $this->input->post('kode_satker');
            $this->db->like('kode_satker', $c);
           
            $query = $this->db->get ();

            return $query->result(); 
       }
  }