<?php

  /**
   *
   */
  class Login extends CI_Controller
  {

    public function __construct()
    {
      parent::__construct();
      $this->load->helper("url");
      $this->load->helper("encript");
    }

    public function index()
    {
      // echo base_url();
      // exit();
      $this->load->view("login");
      // phpinfo();
      // print_r(in_array('mod_rewrite', apache_get_modules()));
    }

	public function masuk()
    {
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$cek = $this->M_login->cek_login($username, $password);
	$count = count($cek);
	if($count=="1"){
		$status = "1";
		$msg = "Berhasil Login";

			$get = $this->M_login->get_user($username, $password);
			$data_session = array(
      "user_id" => $get->user_id,
			'nama' => $get->full_name,
			'username' => $get->username,
			'email' => $get->email,
			'role' => $get->role_name,
			'roleid' => $get->roleid,
			'status' => "login"
			);
			$this->session->set_userdata($data_session);
	}else{
		$status = "0";
		$msg = "Email dan Password Salah!!!";
		$data_session = '';
	}
	echo json_encode(
				array(
						'status' => $status,
						'msg'	=> $msg,
						'sess' => $data_session
				)
			);
	}



	public function cek_menu()
    {
    	$role_id = $this->input->post('role_id');
    	$link = $this->input->post('link');
    	$cek = $this->M_login->cek_menu($role_id, $link);
    	$count = count($cek);
  	  echo json_encode(
  				array(
  						'status' => $count,
  				)
  			);
	   }
  }
