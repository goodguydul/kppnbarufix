<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Simple_login {
 
     var $CI = NULL;
 
     /**
      * Class constructor
      *
      * @return   void
      */
     public function __construct() {
         $this->CI =& get_instance();
     }
 
     public function login($username, $password) {
         
         //cek username dan password
         $query = $this->CI->db->get_where('login',array('username'=>$username,'password' => $password));
 
         if($query->num_rows() == 1) {
             $row  = $this->CI->db->query('SELECT * FROM login where username = "'.$username.'"');     
             $this->CI->session->set_userdata('username', $username);
             $datas = array('logged_in' => 1);
             $this->CI->db->where('username' ,$username);
             $this->CI->db->update('login',$datas);
             $this->CI->db->select('*');
             $this->CI->db->from('login');
             $this->CI->db->where('username',$username);
             $query=$this->CI->db->get();

             foreach ($query->result_array() as $row) {
                $level = $row['level'];
                if ($level == '1'){
                  redirect(site_url('admin'));
                }else if ($level == '2'){
                  redirect(site_url('middle'));
                }else if ($level == '3'){
                  redirect(site_url('front'));;
                }
             }
         }else{
 
             $this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi!');
 
             redirect(site_url('login'));
         }
          return false;
      }
     
     public function cek_login() {
 
         //cek session username
         $username = $this->CI->session->userdata('username');       
         if($this->CI->session->userdata('username') == '') {
             $this->CI->session->set_flashdata('sukses','Sesi Anda sudah habis, silahkan login kembali');

             redirect(site_url('login'));
         }
     }
 
     public function logout() {
         $username = $this->CI->session->userdata('username');
         $datas = array('logged_in' => 0);
         $this->CI->db->where('username' ,$username);
         $this->CI->db->update('login',$datas);
         $this->CI->session->unset_userdata('username');
         $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
         redirect(site_url('login'));
     }
 }