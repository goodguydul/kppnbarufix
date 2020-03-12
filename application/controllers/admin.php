<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  

  public function index(){
    $this->ceklogindulu();
    $this->dashboard();
  }
  public function about(){
    $this->ceklogindulu();
    $page_title['page_title'] = 'Dashboard Admin | About';
    $this->data2['query']=$this->m_form->get_records();
    if ($this->session->userdata('username')) {
      $this->load->view('admin/v_header',$page_title);
      $this->load->view('admin/v_navbar',$this->data2);
      $this->load->view('v_about');
      $this->load->view('admin/v_footer');

      } else {
          redirect('login');
      }
  }
	public function dashboard()
	{
    $page_title['page_title'] = 'Dashboard Admin';
		$this->data2['query']=$this->m_form->get_records();
		if ($this->session->userdata('username')) {
			$this->load->view('admin/v_header',$page_title);
			$this->load->view('admin/v_navbar',$this->data2);
			$this->load->view('admin/v_dashboard');
			$this->load->view('admin/v_footer');

	    } else {
	        redirect('login');
    	}
	}
  public function daftar_user(){
    $this->ceklogindulu();
    $page_title['page_title'] = 'Dashboard Admin';
    $this->data2['query']=$this->m_form->get_records();
    $data['user']=$this->m_admin->daftaruser();
    if ($this->session->userdata('username')) {
      $this->load->view('admin/v_header',$page_title);
      $this->load->view('admin/v_navbar',$this->data2);
      $this->load->view('admin/v_daftaruser',$data);
      $this->load->view('admin/v_footer');

      } else {
          redirect('login');
      }

  }
  public function add_user(){
    $this->ceklogindulu();
    $page_title['page_title'] = 'Dashboard Admin';
    $this->data2['query']=$this->m_form->get_records();
    if ($this->session->userdata('username')) {
      $this->load->view('admin/v_header',$page_title);
      $this->load->view('admin/v_navbar',$this->data2);
      $this->load->view('admin/v_tambahuser');
      $this->load->view('admin/v_footer');

      } else {
          redirect('login');
      }

  }
  public function tambah_user(){
    $this->ceklogindulu();
    $page_title['page_title'] = 'Dashboard Admin';
    $data = array( 'username' => $this->input->post('username'),
                   'nama' => $this->input->post('nama'),
                   'nip' => $this->input->post('nip'),
                   'password' => $this->input->post('password'),
                   'level' => $this->input->post('level'),
                  );

    $cek = $this->m_admin->cekuser($this->input->post('username'));
    if($cek == TRUE){
      $this->ceklogindulu();
      $page_title['page_title'] = 'Dashboard Admin';
      $this->data2['query']=$this->m_form->get_records();
      if ($this->session->userdata('username')) {
        $this->load->view('admin/v_header',$page_title);
        $this->load->view('admin/v_navbar',$this->data2);
        $this->load->view('admin/v_tambahuser1');
        $this->load->view('admin/v_footer');

      }
      else {
        redirect('login');
      }
    }
    else{ 
      $url = base_url();
      $this->m_admin->tambahuser($data);
      $data['user']=$this->m_admin->daftaruser();
      $dataa['notif'] = "<script>
                    var options = {
                        // success, info, error
                        style: 'success',
                        // notification title
                        title: 'Success!',
                        // notification message
                        message: 'Data telah disimpan !',
                        // custom Font Awesome icon
                        icon: 'fa fa-exclamation-triangle',
                        // custom theme
                        theme: null,
                        // timeout to close the notification automatically
                        timeout: 5000,
                        // shows close button
                        close_button: true
                    };
                    var n = new notify(options);
                    n.show();
                    setTimeout(function(){
                        window.location.href = '".$url."admin/daftar_user';
                      },5000)
                    </script>";
      $this->data2['query']=$this->m_form->get_records();
      if ($this->session->userdata('username')) {
        $this->load->view('admin/v_header',$page_title);
        $this->load->view('admin/v_navbar',$this->data2);
        $this->load->view('admin/v_daftaruser',$data);
        $this->load->view('admin/v_notif',$dataa);
        $this->load->view('admin/v_footer');

      } else {
            redirect('login');
      }
    }
  }

  public function hapus_user(){
      $this->ceklogindulu();
      $url = base_url();
      $page_title['page_title'] = 'Dashboard Admin';
      $data['user']=$this->m_admin->daftaruser();
      $data['notif'] = "<script>
                      var options = {
                          // success, info, error
                          style: 'success',
                          // notification title
                          title: 'Success!',
                          // notification message
                          message: 'Data telah hapus !',
                          // custom Font Awesome icon
                          icon: 'fa fa-exclamation-triangle',
                          // custom theme
                          theme: null,
                          // timeout to close the notification automatically
                          timeout: 5000,
                          // shows close button
                          close_button: true
                      };
                      var n = new notify(options);
                      n.show();
                      setTimeout(function(){
                        window.location.href = '".$url."admin/daftar_user';
                      },2000)
                      </script>";
      $id = $this->input->post('id');
      $this->m_admin->deleteuser($id);
      $this->data2['query']=$this->m_form->get_records();
      if ($this->session->userdata('username')) {
        $this->load->view('admin/v_header',$page_title);
        $this->load->view('admin/v_navbar',$this->data2);
        $this->load->view('admin/v_daftaruser',$data);
        $this->load->view('admin/v_notif',$data);
        $this->load->view('admin/v_footer');

      } else {
            redirect('login');
      }
    }
  public function edit_user(){
     $url = base_url();
      $this->ceklogindulu();
      $page_title['page_title'] = 'Dashboard Admin';
      $data = array( 'username' => $this->input->post('username'),
                     'nama' => $this->input->post('nama'),
                     'nip' => $this->input->post('nip'),
                     'password' => $this->input->post('password'),
                     'level' => $this->input->post('level'),
                    );
      $this->m_admin->edituser($data,$this->input->post('id'));
      $data['user']=$this->m_admin->daftaruser();
      $dataa['notif'] = "<script>
                    var options = {
                        // success, info, error
                        style: 'success',
                        // notification title
                        title: 'Success!',
                        // notification message
                        message: 'Data telah disimpan !',
                        // custom Font Awesome icon
                        icon: 'fa fa-exclamation-triangle',
                        // custom theme
                        theme: null,
                        // timeout to close the notification automatically
                        timeout: 5000,
                        // shows close button
                        close_button: true
                    };
                    var n = new notify(options);
                    n.show();
                    setTimeout(function(){
                        window.location.href = '".$url."admin/daftar_user';
                      },5000)
                    </script>";
      $this->data2['query']=$this->m_form->get_records();
      if ($this->session->userdata('username')) {
        $this->load->view('admin/v_header',$page_title);
        $this->load->view('admin/v_navbar',$this->data2);
        $this->load->view('admin/v_daftaruser',$data);
        $this->load->view('admin/v_notif',$dataa);
        $this->load->view('admin/v_footer');

      } else {
            redirect('login');
      }
    }


  public function edit_form_garansi_bank(){
    $this->ceklogindulu();
    $data['notif'] = "<script>
                    var options = {
                        // success, info, error
                        style: 'success',
                        // notification title
                        title: 'Success!',
                        // notification message
                        message: 'Data Telah Disimpan !',
                        // custom Font Awesome icon
                        icon: 'fa fa-exclamation-triangle',
                        // custom theme
                        theme: null,
                        // timeout to close the notification automatically
                        timeout: 5000,
                        // shows close button
                        close_button: true
                    };
                    var n = new notify(options);
                    n.show();
                    </script>";
    $page_title['page_title'] = 'Dashboard Admin | Edit Garansi Bank';
    $data = array( 'checklist1' => $this->input->post('checklist1'),
                   'checklist2' => $this->input->post('checklist2'),
                   'checklist3' => $this->input->post('checklist3'),
                   'checklist4' => $this->input->post('checklist4'),
                   'checklist5' => $this->input->post('checklist5'),
                   'checklist6' => $this->input->post('checklist6'),
                   'namakepalakantor' => $this->input->post('namakepalakantor'),
                   'nipkepalakantor' => $this->input->post('nipkepalakantor'),
                  );

      $this->m_admin->tambahuser($data);
      $dataa['user']=$this->m_admin->daftaruser();
      $this->data2['query']=$this->m_form->get_records();
      if ($this->session->userdata('username')) {
        $this->load->view('admin/v_header',$page_title);
        $this->load->view('admin/v_navbar',$this->data2);
        $this->load->view('admin/v_form_garansi',$data);
        $this->load->view('admin/v_notif',$data);
        $this->load->view('admin/v_footer');

      } else {
            redirect('login');
      }
  }
  public function form_garansi(){
    $this->ceklogindulu();
    $page_title['page_title'] = 'Dashboard Admin | Edit Garansi Bank';
    $data['tampil'] = $this->m_admin->form_garansi();
      $this->data2['query']=$this->m_form->get_records();
      if ($this->session->userdata('username')) {
        $this->load->view('admin/v_header',$page_title);
        $this->load->view('admin/v_navbar',$this->data2);
        $this->load->view('admin/v_form_garansi',$data);
        $this->load->view('admin/v_footer');

      } else {
            redirect('login');
      }
  }
  public function edit_form(){
    $this->ceklogindulu();
    $checklist1 = $this->input->post('checklist1');
    $checklist2 = $this->input->post('checklist2');
    $checklist3 = $this->input->post('checklist3');
    $checklist4 = $this->input->post('checklist4');
    $checklist5 = $this->input->post('checklist5');
    $checklist6 = $this->input->post('checklist6');

    $page_title['page_title'] = 'Dashboard Admin | Edit Garansi Bank';
    $data = array( 'judulform1' => $this->input->post('judulform1'),
                   'judulform2' => $this->input->post('judulform2'),
                   'judulform3' => $this->input->post('judulform3'),
                   'checklist1' => $checklist1,
                   'checklist2' => $checklist2,
                   'checklist3' => $checklist3,
                   'checklist4' => $checklist4,
                   'checklist5' => $checklist5,
                   'checklist6' => $checklist6,
                  );
      $this->m_admin->editgaransi($data);
      if ($this->session->userdata('username')) {
            redirect('admin/form_garansi');
      } else {
            redirect('login');
      }
  }

  public function form_kantor(){
    $this->ceklogindulu();
    $page_title['page_title'] = 'Dashboard Admin | Edit Data Kantor';
    $data['tampil'] = $this->m_admin->form_garansi();
      $this->data2['query']=$this->m_form->get_records();
      if ($this->session->userdata('username')) {
        $this->load->view('admin/v_header',$page_title);
        $this->load->view('admin/v_navbar',$this->data2);
        $this->load->view('admin/v_edit_kantor',$data);
        $this->load->view('admin/v_footer');

      } else {
            redirect('login');
      }
  }
  public function edit_kantor(){
    $this->ceklogindulu();
    
    $page_title['page_title'] = 'Dashboard Admin | Edit Data Kantor';
    $data = array( 
                   'nama_kanwil' => $this->input->post('nama_kanwil'),
                   'nama_kantor' => $this->input->post('nama_kantor'),
                   'alamat_kantor' => $this->input->post('alamat_kantor'),
                   'telepon_fax' => $this->input->post('telepon_fax'),
                   'email' => $this->input->post('email'),
                   'situs' => $this->input->post('situs'),
                   'namakepalakantor' => $this->input->post('namakepalakantor'),
                   'nipkepalakantor' => $this->input->post('nipkepalakantor'),
                  );
      $this->m_admin->editgaransi($data);
      if ($this->session->userdata('username')) {
            redirect('admin/form_kantor');
      } else {
            redirect('login');
      }
  }
  public function ceklogindulu(){
      $query = $this->m_cek->ceklogin();
      foreach ($query->result_array() as $row) {
        $level = $row['level'];
        if ($level == '3'){
          redirect(site_url('front'));
        }
      }
        $log   = $row['logged_in'];
        if($log == 1){

        }else if ($log == 0){
          redirect('login');
        }
      }
}