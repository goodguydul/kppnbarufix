<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_admin extends CI_Model{

  	function daftaruser(){
  		$this->db->select('*');
        $this->db->from('login');
        $query = $this->db->get();

        return $query->result_array(); 
  	}
  	function tambahuser($data){
        $this->db->insert('login',$data);
  	}
    function edituser($data,$id){
        $this->db->where('id',$id);
        $this->db->update('login',$data);
    }
    function deleteuser($id){
        $this->db->where('id', $id);
        $this->db->delete('login');
    }
    function editgaransi($data){
        $this->db->update('admin',$data,"id = 1");
    }
    function form_garansi(){
      $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('id',1);
        $query = $this->db->get();

        return $query->result(); 
    }
    function cekuser($data){
      $this->db->where('username', $data);
      $query = $this->db->get('login');
      if( $query->num_rows() > 0 ){ return TRUE; } else { return FALSE; }
    }
  }