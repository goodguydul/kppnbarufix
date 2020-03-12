<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class M_cek extends CI_Model{

       function cekuser($username)
       {
            $this->db->select('level');
            $this->db->from('login');
            $this->db->where('username',$username);

            $query = $this->db->get();

            return $query->result();
       }
       function ceklogin(){
          $username = $this->session->userdata('username');
          $this->db->select('*');
          $this->db->from('login');
          $this->db->where('username',$username);
          return $query=$this->db->get();
       }
  }