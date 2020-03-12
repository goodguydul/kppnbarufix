<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

  public function index(){
    $this->ceklogindulu();
    $this->dashboard();
  }
  
	public function dashboard()
	{
		$this->data2['query'] = $this->m_form->get_records();
		if ($this->session->userdata('username')) {
			$page_title['page_title'] = 'Dashboard';
			$this->load->view('front/v_header',$page_title);
			$this->load->view('front/v_navbar',$this->data2);
			$this->load->view('front/v_dashboard');
			$this->load->view('front/v_footer');

	    } else {
	        redirect('login');
    	}
	}
  public function about(){
    $this->ceklogindulu();
    $page_title['page_title'] = 'Dashboard | About';
    $this->data2['query']=$this->m_form->get_records();
    if ($this->session->userdata('username')) {
      $this->load->view('front/v_header',$page_title);
      $this->load->view('front/v_navbar',$this->data2);
      $this->load->view('v_about');
      $this->load->view('front/v_footer');

      } else {
          redirect('login');
      }
  }
	public function cari()
	{	
    $this->ceklogindulu();
    $data['form']=$this->m_middle->kakan();
		$data['tampil']=$this->m_form->tampilsearch();
		$search = $this->input->post('search');
		
       if($data['tampil']== null) {
       	  $this->data2['query']=$this->m_form->get_records();
       	  $page_title['page_title'] = 'Dashboard';
          $this->load->view('front/v_header',$page_title);
		  $this->load->view('front/v_navbar',$this->data2);
		  $this->load->view('front/v_404');
		  $this->load->view('front/v_footer');
          }
        else if($data['tampil']!= null && $search != null){
        	$this->data2['query']=$this->m_form->get_records();
        	$page_title['page_title'] = 'Dashboard';
        	$this->load->view('front/v_header',$page_title);
			$this->load->view('front/v_navbar',$this->data2);
			$this->load->view('front/v_form',$data);
			$this->load->view('front/v_footer');
		}else{
		  $this->data2['query']=$this->m_form->get_records();
		  $page_title['page_title'] = 'Dashboard';
		  $this->load->view('front/v_header',$page_title);
		  $this->load->view('front/v_navbar',$this->data2);
		  $this->load->view('front/v_dashboard');
		  $this->load->view('front/v_footer');
		}
	}
    public function carikarwas()
    {   
      $this->ceklogindulu();
      $usern  = $this->session->userdata('username');
      $c = $this->input->post('searchkarwas');
      $data['tampil']=$this->m_form->tampilkarwas($c,$usern);
      $data['form']=$this->m_middle->kakan();
      if($data['tampil']== null) {
        $this->data2['query']=$this->m_form->get_records();
        $page_title['page_title'] = 'Dashboard';
        $this->load->view('front/v_header',$page_title);
        $this->load->view('front/v_navbar',$this->data2);
        $this->load->view('front/v_404');
        $this->load->view('front/v_footer');
        }
      else if($data['tampil']!= null && $c != null){
          $this->data2['query']=$this->m_form->get_records();
          $page_title['page_title'] = 'Dashboard';
          $this->load->view('front/v_header',$page_title);
          $this->load->view('front/v_navbar_edit',$data);
          $this->load->view('front/v_form_edit',$data);
          $this->load->view('front/v_footer');
      }else{
        $this->data2['query']=$this->m_form->get_records();
        $page_title['page_title'] = 'Dashboard';
        $this->load->view('front/v_header',$page_title);
        $this->load->view('front/v_navbar',$data);
        $this->load->view('front/v_dashboard');
        $this->load->view('front/v_footer');
      }
    }

    public function editdata()
    {   
      $this->ceklogindulu();
      $usern  = $this->session->userdata('username');
      $c = $this->input->post('searchkarwas');
      $data['tampil']=$this->m_form->editdata($c,$usern);
      $data['form']=$this->m_middle->kakan();
      if($data['tampil']== null) {
          $page_title['page_title'] = 'Dashboard';
          $this->load->view('front/v_header',$page_title);
          $this->load->view('front/v_navbar',$data);
          $this->load->view('front/v_404');
          $this->load->view('front/v_footer');
      }
      else if($data['tampil']!= null && $c != null){
            $page_title['page_title'] = 'Dashboard';
            $this->load->view('front/v_header',$page_title);
            $this->load->view('front/v_navbar_edit',$data);
            $this->load->view('front/v_form_edit2',$data);
            $this->load->view('front/v_footer');
      }else{
          $page_title['page_title'] = 'Dashboard';
          $this->load->view('front/v_header',$page_title);
          $this->load->view('front/v_navbar',$data);
          $this->load->view('front/v_dashboard');
          $this->load->view('front/v_footer');
      }
    }
     public function editsaldo()
    {   
      $this->ceklogindulu();
      $usern  = $this->session->userdata('username');
      $c = $this->input->post('searchkarwas');
      $data['tampil']=$this->m_form->editsaldo($c,$usern);
      $dataa['nilai_bank_garansi']    =  $this->input->post('saldo');
      if($data['tampil']== null) {
          $page_title['page_title'] = 'Dashboard';
          $this->load->view('front/v_header',$page_title);
          $this->load->view('front/v_navbar',$data);
          $this->load->view('front/v_saldo2',$data);
          $this->load->view('front/v_footer');
      }
      else if($data['tampil']!= null && $c != null){
            $saldo = $this->input->post('saldo');
            
            $this->m_form->simpansaldo($dataa,$c);
            $page_title['page_title'] = 'Dashboard';
            $this->load->view('front/v_header',$page_title);
            $this->load->view('front/v_navbar_edit',$data);
            $this->load->view('front/v_saldo',$data);
            $this->load->view('front/v_footer');
      }else{
          $page_title['page_title'] = 'Dashboard';
          $this->load->view('front/v_header',$page_title);
          $this->load->view('front/v_navbar',$data);
          $this->load->view('front/v_dashboard');
          $this->load->view('front/v_footer');
      }
    }


	public function simpan(){
    $this->ceklogindulu();
		$usern	= $this->session->userdata('username');
    $kd_satker = $this->input->post('kode_satker');
    $no_jmnn = $this->input->post('no_jaminan');
    $tgl_jaminan        = date('Y-m-d H:i:s',strtotime($this->input->post('tgl_jaminan')));
    $tgl_akhir_kontrak  = date('Y-m-d H:i:s',strtotime($this->input->post('tgl_akhir_kontrak')));
    $tgl_akhir_jaminan  = date('Y-m-d H:i:s',strtotime($this->input->post('tgl_akhir_jaminan')));
    $tgl_tanda_terima   = date('Y-m-d H:i:s',strtotime($this->input->post('tgl_tanda_terima')));
    $data['kode_satker']      				=    $this->input->post('kode_satker');
    $data['uraian_satker']      			=    $this->input->post('nama_satker');
    $data['nama_rekanan']      				=    $this->input->post('nama_rekanan');
    $data['no_CAN']      					=    $this->input->post('no_CAN');
    $data['no_kontrak']     				=    $this->input->post('no_kontrak');
    $data['tgl_akhir_kontrak']      		=    $tgl_akhir_kontrak;
    $data['nama_penjamin_bank_asuransi']	=    $this->input->post('bank_penjamin');
    $data['no_jaminan']      				=    $this->input->post('no_jaminan');
    $data['tgl_jaminan']                    =    $tgl_jaminan;
    $data['tgl_akhir_jaminan']      		=    $tgl_akhir_jaminan;
    $data['no_SPM']                         =    $this->input->post('no_SPM');
    $data['nilai_bank_garansi']             =    $this->input->post('nilai_bank_garansi');
    $data['masa_berlaku_bank_garansi']      =    $this->input->post('masa_berlaku_bank_garansi');
    $data['nama_petugas_satker']      		=    $this->input->post('nama_petugas_satker');
    $data['nip_petugas_satker']      		=    $this->input->post('nip_petugas_satker');
    $data['no_hp_petugas_satker']    		=    $this->input->post('no_hp_petugas_satker');
    $data['tgl_tanda_terima']   			=    $tgl_tanda_terima;
    $data['username']      					=    $usern;
    $data['checklist1']               =    $this->input->post('checklist1');
    $data['checklist2']               =    $this->input->post('checklist2');
    $data['checklist3']               =    $this->input->post('checklist3');
    $data['checklist4']               =    $this->input->post('checklist4');
    $data['checklist5']               =    $this->input->post('checklist5');
    
    $cekk = $this->m_form->cekexist($this->input->post('no_jaminan'));
      if ( $cekk == FALSE){
            $this->m_form->simpan($data);
            $data['tampil'] = $this->m_form->tampils($kd_satker,$no_jmnn,$usern);
            $data['form']=$this->m_middle->kakan();
            $page_title['page_title'] = 'Dashboard';
            $this->data2['query']=$this->m_form->get_records();
            $this->load->view('front/v_header',$page_title);
            $this->load->view('front/v_navbar_edit',$data);
            $this->load->view('front/v_form_saved',$data);
            $this->load->view('front/v_footer');

      }else{
            $data['tampil'] = $this->m_form->tampilsearchexist();
            $data['form']=$this->m_middle->kakan();
            $this->data2['query']=$this->m_form->get_records();
            $page_title['page_title'] = 'Dashboard';
            $this->load->view('front/v_header',$page_title);
            $this->load->view('front/v_navbar',$this->data2);
            $this->load->view('front/v_form_ada',$data);
            $this->load->view('front/v_footer');
      }

  }
    public function simpanedit(){
    $this->ceklogindulu();
    $usern      = $this->session->userdata('username');
    $kd_satker  = $this->input->post('kode_satker');
    $no_jmnn    = $this->input->post('no_jaminan');
    $no_karwas  = $this->input->post('no_karwas');

    $tgl_jaminan        = date('Y-m-d H:i:s',strtotime($this->input->post('tgl_jaminan')));
    $tgl_akhir_kontrak  = date('Y-m-d H:i:s',strtotime($this->input->post('tgl_akhir_kontrak')));
    $tgl_akhir_jaminan  = date('Y-m-d H:i:s',strtotime($this->input->post('tgl_akhir_jaminan')));
    $tgl_tanda_terima   = date('Y-m-d H:i:s',strtotime($this->input->post('tgl_tanda_terima')));
    

    $data['kode_satker']              =    $this->input->post('kode_satker');
    $data['uraian_satker']            =    $this->input->post('nama_satker');
    $data['nama_rekanan']             =    $this->input->post('nama_rekanan');
    $data['no_CAN']               =    $this->input->post('no_CAN');
    $data['no_kontrak']             =    $this->input->post('no_kontrak');
    $data['tgl_akhir_kontrak']          =    $tgl_akhir_kontrak;
    $data['nama_penjamin_bank_asuransi']  =    $this->input->post('bank_penjamin');
    $data['no_jaminan']             =    $this->input->post('no_jaminan');
    $data['tgl_jaminan']                    =    $tgl_jaminan;
    $data['tgl_akhir_jaminan']          =    $tgl_akhir_jaminan;
    $data['no_SPM']                         =    $this->input->post('no_SPM');
    $data['nilai_bank_garansi']             =    $this->input->post('nilai_bank_garansi');
    $data['masa_berlaku_bank_garansi']      =    $this->input->post('masa_berlaku_bank_garansi');
    $data['nama_petugas_satker']          =    $this->input->post('nama_petugas_satker');
    $data['nip_petugas_satker']         =    $this->input->post('nip_petugas_satker');
    $data['no_hp_petugas_satker']       =    $this->input->post('no_hp_petugas_satker');
    $data['tgl_tanda_terima']         =    $tgl_tanda_terima;
    $data['username']               =    $usern;
    $data['checklist1']               =    $this->input->post('checklist1');
    $data['checklist2']               =    $this->input->post('checklist2');
    $data['checklist3']               =    $this->input->post('checklist3');
    $data['checklist4']               =    $this->input->post('checklist4');
    $data['checklist5']               =    $this->input->post('checklist5');

    $this->m_form->simpanedit($data,$no_karwas);

    $data['tampil'] = $this->m_form->tampiledit($no_karwas);
    $data['form']=$this->m_middle->kakan();
    $page_title['page_title'] = 'Dashboard';

    $this->data2['query']=$this->m_form->get_records();

    $this->load->view('front/v_header',$page_title);
    $this->load->view('front/v_navbar_edit',$data);
    $this->load->view('front/v_form_saved',$data);
    $this->load->view('front/v_footer');
    }

    public function ceklogindulu(){
      $query = $this->m_cek->ceklogin();
      foreach ($query->result_array() as $row) {
        $level = $row['level'];
        if ($level == '1'){
          redirect(site_url('admin'));
        }
      }
        $log   = $row['logged_in'];
        if($log == 1){

        }else if ($log == 0){
          redirect(site_url('login'));;
        }
    }
    
}