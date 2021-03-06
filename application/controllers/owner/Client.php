<?php
	/**
	* 
	*/
	class Client extends CI_Controller
	{
		
		public function __construct() {
		parent::__construct();
		if($this->session->userdata('level_user') != 'owner' &&
			$this->session->userdata('logged_in') != TRUE) {

			$this->session->set_flashdata('msg', 'Anda Harus Login Sebagai Admin');
			redirect(site_url('auth/pegawai'));
		}

		$this->load->model('Pegawai_model');
		$this->load->model('Client_model');
	}

	public function index(){
		$id_pegawai = $this->session->userdata('id_pegawai');
		$username = $this->session->userdata('username');
		$data ['pegawai'] = $this->Pegawai_model->getDetailDataPegawai($id_pegawai, $username); 
		$data ['client'] = $this->Client_model->getAllClient();
		$this->load->view('owner/V_client',$data);
	}
	}
?>