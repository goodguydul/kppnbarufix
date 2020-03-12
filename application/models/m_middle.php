<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_middle extends CI_Model{

    function jumlaha(){
      $this->db->select('*');
      $this->db->where('status !=',0);
      $query = $this->db->get('form');
      return $query->result_array();
    }
    function jumlahb(){
      $this->db->select('*');
      $this->db->where('status',0);
      $query = $this->db->get('form');
      return $query->result_array();
    }
    function jumlahc(){
      $this->db->select('*');
      $query = $this->db->get('form');
      return $query->result_array();
    }

    function tampildaftarsatker(){
      $this->db->select('*');
      $this->db->where('status',0);
      $query = $this->db->get('form');
      return $query->result();
    }
    function tampildaftarsatker2(){
      $this->db->select('*');
      $query = $this->db->get('form');
      return $query->result();
    }
    function daftarsatkertelat(){
      $this->db->select('*');
      $this->db->where('status',0);
      $query = $this->db->get('form');
      return $query->result();
    }
    function update_terlambat($data,$no_karwas){
      $this->db->update('form',$data,"no = $no_karwas");
    }
    function daftarsatker(){
      $this->db->select('datasatker.no as no,
                         datasatker.kode_satker as kode_satker,
                         kementerian.nama as kemen,
                         kementerian.kode as kode,
                         datasatker.kew as kew,
                         datasatker.nama_satker as nama_satker,
                         datasatker.no_DIPA as no_DIPA,
                         datasatker.tgl_DIPA as tgl_DIPA');
      $this->db->from('datasatker');
      $this->db->join('kementerian','datasatker.kemen = kementerian.kode','inner');
      $query = $this->db->get();
      return $query->result();
    }
    function carisatker($kode_satker){
      $this->db->select('datasatker.no as no,
                         datasatker.kode_satker as kode_satker,
                         kementerian.nama as kemen,
                         kementerian.kode as kode,
                         datasatker.kew as kew,
                         datasatker.nama_satker as nama_satker,
                         datasatker.no_DIPA as no_DIPA,
                         datasatker.tgl_DIPA as tgl_DIPA');
      $this->db->from('datasatker');
      $this->db->join('kementerian','datasatker.kemen = kementerian.kode','inner');
      $this->db->where('datasatker.kode_satker',$kode_satker);
      $query = $this->db->get();
      return $query->result();
    }
    function surat1($no_jaminan){
      $this->db->select('
                         datasatker.kode_satker as kode_satker,
                         kementerian.nama as kemen,
                         kementerian.kode as kode,
                         datasatker.kew as kew,
                         datasatker.nama_satker as nama_satker,
                         form.no_jaminan as no_jaminan,
                         form.tgl_jaminan as tgl_jaminan,
                         form.nama_rekanan as nama_rekanan,
                         form.uraian_satker as uraian_satker,
                         form.nilai_bank_garansi as nilai_bank_garansi,
                         form.nilai_pencairan as nilai_pencairan,
                         form.nama_penjamin_bank_asuransi as nama_penjamin_bank_asuransi,
                         ');
      $this->db->from('form');
      $this->db->join('datasatker','datasatker.kode_satker = form.kode_satker','inner');
      $this->db->join('kementerian','datasatker.kemen = kementerian.kode','inner');
      $this->db->where('form.no_jaminan',$no_jaminan);
      $query = $this->db->get();
      return $query->result();
    }
    function surat2($no_jaminan){
      $this->db->select('
                         datasatker.kode_satker as kode_satker,
                         kementerian.nama as kemen,
                         kementerian.kode as kode,
                         datasatker.kew as kew,
                         datasatker.nama_satker as nama_satker,
                         form.no_jaminan as no_jaminan,
                         form.no as no,
                         form.tgl_jaminan as tgl_jaminan,
                         form.nama_rekanan as nama_rekanan,
                         form.uraian_satker as uraian_satker,
                         form.nilai_bank_garansi as nilai_bank_garansi,
                         form.nilai_pencairan as nilai_pencairan,
                         form.tgl_akhir_jaminan as tgl_akhir_jaminan,
                         form.tgl_akhir_kontrak as tgl_akhir_kontrak,
                         form.tgl_pencairan as tgl_pencairan,
                         form.no_kontrak as no_kontrak,
                         form.nama_penjamin_bank_asuransi as nama_penjamin_bank_asuransi,
                         ');
      $this->db->from('form');
      $this->db->join('datasatker','datasatker.kode_satker = form.kode_satker','inner');
      $this->db->join('kementerian','datasatker.kemen = kementerian.kode','inner');
      $this->db->where('form.no_jaminan',$no_jaminan);
      $query = $this->db->get();
      return $query->result();
    }
    function surat3($no_jaminan){
      $this->db->select('
                         datasatker.nama_satker as nama_satker,
                         form.no_jaminan as no_jaminan,
                         form.tgl_jaminan as tgl_jaminan,
                         form.uraian_satker as uraian_satker,
                         form.tgl_akhir_kontrak as tgl_akhir_kontrak,
                         form.no_kontrak as no_kontrak,
                         ');
      $this->db->from('form');
      $this->db->join('datasatker','datasatker.kode_satker = form.kode_satker','inner');
      $this->db->where('form.no_jaminan',$no_jaminan);
      $query = $this->db->get();
      return $query->result();
    }
    function kakan(){
      $this->db->select('*');
      $this->db->from('admin');
      $this->db->where('id',1);
      $query = $this->db->get();
      return $query->result();
    }
    function update($data,$no_karwas){
      $this->db->update('datasatker',$data,"no = $no_karwas");
    }
    function delete($id){
      $this->db->where('no',$id);
      $this->db->delete('datasatker');
    }
    function create($dataa){
      $this->db->insert('datasatker',$dataa);
   }
   function delete2($id){
      $this->db->where('no',$id);
      $this->db->delete('form');
    }
    function update2($data,$no_karwas){
      $this->db->update('form',$data,"no = $no_karwas");
    }
}