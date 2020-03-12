<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Middle extends CI_Controller {


  public function index(){
  	$this->ceklogindulu();
    $this->dashboard();
  }
	public function dashboard()
  
	{
		$this->data2['query']=$this->m_form->get_records();
    $data['tampil'] = $this->m_middle->tampildaftarsatker();
    $data['tampil2'] = $this->m_middle->tampildaftarsatker2();


    $this->ceklogindulu();
		if ($this->session->userdata('username')) {
			$page_title['page_title'] = 'Dashboard';
			$this->load->view('middle/v_header',$page_title);
			$this->load->view('middle/v_navbar',$this->data2);
			$this->load->view('middle/v_dashboard',$data);
			$this->load->view('middle/v_footer');

	    } else {
	        redirect('login');
    	}
	}
  public function about(){
    $this->ceklogindulu();
    $page_title['page_title'] = 'Dashboard | About';
    $this->data2['query']=$this->m_form->get_records();
    if ($this->session->userdata('username')) {
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('v_about');
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
  }
  public function daftar_satker_sudah()
  
  {
    $this->data2['query']=$this->m_form->get_records();
    $data['tampil2'] = $this->m_middle->tampildaftarsatker2();


    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Daftar Satuan Kerja Yang Sudah Menyerahkan BAST ';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('middle/v_daftar_sudah',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
  }

  public function daftar_satker_terlambat()
  {
    $this->data2['query']=$this->m_form->get_records();
    $data['tampil'] = $this->m_middle->daftarsatkertelat();

    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Daftar Satker Terlambat';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('middle/v_daftar_terlambat',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
  }
  public function daftar_satker_belum()
  
  {
    $this->data2['query']=$this->m_form->get_records();
    $data['tampil'] = $this->m_middle->daftarsatkertelat();

    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Daftar Satker Belum Menyerahkan BAST';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('middle/v_daftar_belum',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
  }
  public function daftar_satker()
  
  {
    $this->data2['query']=$this->m_form->get_records();
    $data['tampil'] = $this->m_middle->daftarsatker();

    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Daftar Satuan Kerja';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('middle/v_daftar_satker',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
  }

  function update_terlambat(){
    $tgl_pencairan = date('Y-m-d',strtotime($this->input->post('tgl_pencairan')));

    $dataa  = array('status' => $this->input->post('status'),
                    'tgl_pencairan' => $tgl_pencairan,
                    'nilai_pencairan' => $this->input->post('nilai_pencairan'),
                   );
    $no_karwas = $this->input->post('no');

    $this->m_middle->update_terlambat($dataa,$no_karwas);

    $this->data2['query']=$this->m_form->get_records();
    $data['tampil'] = $this->m_middle->daftarsatkertelat();
    $data['notif'] = "<script>
                    var options = {
                        style: 'success',
                        title: 'Success!',
                        message: 'Data telah diupdate',
                        icon: 'fa fa-exclamation-triangle',
                        theme: null,
                        timeout: 5000,
                        close_button: true
                    };
                    var n = new notify(options);
                    n.show();
                    </script>";

    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Dashboard | Daftar Satker Terlambat';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('middle/v_daftar_terlambat',$data);
      $this->load->view('middle/v_notif',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
  }
  function update_belum(){
    $tgl_pencairan = date('Y-m-d',strtotime($this->input->post('tgl_pencairan')));

    $dataa  = array('status' => $this->input->post('status'),
                    'tgl_pencairan' => $tgl_pencairan,
                    'nilai_pencairan' => $this->input->post('nilai_pencairan'),
                   );
    $no_karwas = $this->input->post('no');

    $this->m_middle->update_terlambat($dataa,$no_karwas);

    $this->data2['query']=$this->m_form->get_records();
    $data['tampil'] = $this->m_middle->daftarsatkertelat();
    $data['notif'] = "<script>
                    var options = {
                        style: 'success',
                        title: 'Success!',
                        message: 'Data telah diupdate',
                        icon: 'fa fa-exclamation-triangle',
                        theme: null,
                        timeout: 5000,
                        close_button: true
                    };
                    var n = new notify(options);
                    n.show();
                    </script>";

    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Dashboard | Daftar Satker Terlambat';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('middle/v_daftar_belum',$data);
      $this->load->view('middle/v_notif',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
  }
  public function carisatker(){
      $kode = $this->input->get('search');
      $this->data2['query']=$this->m_form->get_records();
      $data['tampil'] = $this->m_middle->carisatker($kode);

    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Dashboard | Daftar Satker Belum Menyerahkan BAST';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('middle/v_daftar_satker',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
  }

  public function cetak_surat_klaim()
  {
    $no_jaminan = $this->input->post('nomor_jaminan');
    $this->data2['query']=$this->m_form->get_records();
    $data['surat'] = $this->m_middle->surat1($no_jaminan);
    $data['kakan'] = $this->m_middle->kakan();


    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Dashboard';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar_cetak',$this->data2);
      $this->load->view('middle/v_form_klaim',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
  }

  public function cetak_surat_kembali()
  {
    $no_jaminan = $this->input->post('nomor_jaminan');
    $this->data2['query']=$this->m_form->get_records();
    $data['surat'] = $this->m_middle->surat2($no_jaminan);
    $data['kakan'] = $this->m_middle->kakan();


    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Dashboard';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar_cetak',$this->data2);
      $this->load->view('middle/v_form_kembali',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
  }

  public function cetak_surat_terlambat()
  {
    $no_jaminan = $this->input->post('nomor_jaminan');
    $this->data2['query']=$this->m_form->get_records();
    $data['surat'] = $this->m_middle->surat3($no_jaminan);
    $data['kakan'] = $this->m_middle->kakan();


    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Dashboard';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar_cetak',$this->data2);
      $this->load->view('middle/v_form_telat',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
  }

  function update(){
      $tgl_DIPA = date('Y-m-d',strtotime($this->input->post('tgl_DIPA')));
      $dataa  = array('no_DIPA' => $this->input->post('no_DIPA'),
                    'tgl_DIPA' => $tgl_DIPA,
                   );
      $no_karwas = $this->input->post('no');
      $this->m_middle->update($dataa,$no_karwas);
      $this->data2['query']=$this->m_form->get_records();
      $data['tampil'] = $this->m_middle->daftarsatker();
      $data['notif'] = "<script>
                    var options = {
                        style: 'success',
                        title: 'Success!',
                        message: 'Data telah diupdate',
                        icon: 'fa fa-exclamation-triangle',
                        theme: null,
                        timeout: 5000,
                        close_button: true
                    };
                    var n = new notify(options);
                    n.show();
                    </script>";

    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Dashboard | Daftar Satker';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('middle/v_daftar_satker',$data);
      $this->load->view('middle/v_notif',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
    }
    function delete($id){
      $this->m_middle->delete($id);
      $this->data2['query']=$this->m_form->get_records();
      $data['tampil'] = $this->m_middle->daftarsatker();
      $data['notif'] = "<script>
                    var options = {
                        style: 'success',
                        title: 'Success!',
                        message: 'Data telah diupdate',
                        icon: 'fa fa-exclamation-triangle',
                        theme: null,
                        timeout: 5000,
                        close_button: true
                    };
                    var n = new notify(options);
                    n.show();
                    </script>";

    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Dashboard | Daftar Satker';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('middle/v_daftar_satker',$data);
      $this->load->view('middle/v_notif',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
    }
    function create(){
      $tgl_DIPA = date('Y-m-d',strtotime($this->input->post('tgl_DIPA')));
      $dataa  = array('kode_satker'=>$this->input->post('kode_satker'),
                    'kemen'=>$this->input->post('kemen'),
                    'kew'=>$this->input->post('kew'),
                    'nama_satker'=>$this->input->post('nama_satker'),
                    'no_DIPA' => $this->input->post('no_DIPA'),
                    'tgl_DIPA' => $tgl_DIPA,
                   );
      $this->m_middle->create($dataa);
      $this->data2['query']=$this->m_form->get_records();
      $data['tampil'] = $this->m_middle->daftarsatker();
      $data['notif'] = "<script>
                    var options = {
                        style: 'success',
                        title: 'Success!',
                        message: 'Data telah diupdate',
                        icon: 'fa fa-exclamation-triangle',
                        theme: null,
                        timeout: 5000,
                        close_button: true
                    };
                    var n = new notify(options);
                    n.show();
                    </script>";

    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Dashboard | Daftar Satker';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('middle/v_daftar_satker',$data);
      $this->load->view('middle/v_notif',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
    }

  public function ceklogindulu(){
      $query = $this->m_cek->ceklogin();
      foreach ($query->result_array() as $row) {
        $level = $row['level'];
        if ($level == '1'){
          redirect(site_url('admin'));
        }else if ($level == '3'){
          redirect(site_url('front'));;
        }
      }
      $log   = $row['logged_in'];
      if($log == 1){

      }else if ($log == 0){
        redirect(site_url('login'));;
      }
  }

  function update2(){
      $dataa  = array(
        'kode_satker'                   =>$this->input->post('kode_satker'),
        'nama_rekanan'                  =>$this->input->post('nama_rekanan'),
        'no_CAN'                        =>$this->input->post('no_CAN'),
        'no_kontrak'                    =>$this->input->post('no_kontrak'),
        'tgl_akhir_kontrak'             =>date('Y-m-d',strtotime($this->input->post('tgl_akhir_kontrak'))),
        'nama_penjamin_bank_asuransi'   =>$this->input->post('nama_penjamin_bank_asuransi'),
        'no_jaminan'                    =>$this->input->post('no_jaminan'),
        'tgl_jaminan'                   =>date('Y-m-d',strtotime($this->input->post('tgl_jaminan'))),
        'tgl_akhir_jaminan'             =>date('Y-m-d',strtotime($this->input->post('tgl_akhir_jaminan'))),
        'nilai_bank_garansi'            =>$this->input->post('nilai_bank_garansi'),
        'masa_berlaku_bank_garansi'     =>$this->input->post('masa_berlaku_bank_garansi'),          
        'no_SPM'                        =>$this->input->post('no_SPM'),
        'nama_petugas_satker'           =>$this->input->post('nama_petugas_satker'),
        'nip_petugas_satker'            =>$this->input->post('nip_petugas_satker'),
        'no_hp_petugas_satker'          =>$this->input->post('no_hp_petugas_satker'),
        'tgl_tanda_terima'              =>date('Y-m-d',strtotime($this->input->post('tgl_tanda_terima'))),
        'status'                        =>$this->input->post('status'),
        'tgl_pencairan'                 =>date('Y-m-d',strtotime($this->input->post('tgl_pencairan'))),
        'nilai_pencairan'               =>$this->input->post('nilai_pencairan'),
        );
      $no_karwas = $this->input->post('no');
      $this->m_middle->update2($dataa,$no_karwas);
      $this->data2['query']=$this->m_form->get_records();
      $data['tampil'] = $this->m_middle->jumlahc();
      $data['notif'] = "<script>
                    var options = {
                        style: 'success',
                        title: 'Success!',
                        message: 'Data telah diupdate',
                        icon: 'fa fa-exclamation-triangle',
                        theme: null,
                        timeout: 5000,
                        close_button: true
                    };
                    var n = new notify(options);
                    n.show();
                    </script>";

    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Dashboard | Daftar Satker';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('middle/v_karwas',$data);
      $this->load->view('middle/v_notif',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
    }
    function delete2($id){
      $this->m_middle->delete2($id);
      $this->data2['query']=$this->m_form->get_records();
      $data['tampil'] = $this->m_middle->jumlahc();
      $data['notif'] = "<script>
                    var options = {
                        style: 'success',
                        title: 'Success!',
                        message: 'Data telah diupdate',
                        icon: 'fa fa-exclamation-triangle',
                        theme: null,
                        timeout: 5000,
                        close_button: true
                    };
                    var n = new notify(options);
                    n.show();
                    </script>";

    $this->ceklogindulu();
    if ($this->session->userdata('username')) {
      $page_title['page_title'] = 'Dashboard | Daftar Satker';
      $this->load->view('middle/v_header',$page_title);
      $this->load->view('middle/v_navbar',$this->data2);
      $this->load->view('middle/v_karwas',$data);
      $this->load->view('middle/v_notif',$data);
      $this->load->view('middle/v_footer');

      } else {
          redirect('login');
      }
    }
    function read(){
      $data2['query']=$this->m_form->get_records();
      $data['tampil'] = $this->m_middle->jumlahc();
      $data['stat']='';
      $data['urls']='';
      $this->ceklogindulu();
      if ($this->session->userdata('username')) {
        $page_title['page_title'] = 'Dashboard | Daftar Karwas';
        $this->load->view('middle/v_header',$page_title);
        $this->load->view('middle/v_navbar',$data2);
        $this->load->view('middle/v_karwas',$data);
        $this->load->view('middle/v_footer');
      }else{
        redirect('login');
      }
    }
}