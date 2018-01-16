<?php
	/**
	* 
	*/
	class Fasilitas extends CI_Controller
	{
		
		public function __construct() {
		parent::__construct();
		

		$this->load->model('Layanan_model');
		$this->load->model('Fasilitas_model');
		$this->load->model('Jenisterapi_model');
	}

	public function index(){
		$data ['fasilitas'] = $this->Fasilitas_model->getAllFasilitasUtama();
		$this->load->view('V_fasilitas',$data);
	}
	// public function jenisterapi(){
	// 	$data ['jenisterapi'] = $this->Jenisterapi_model->getAllJenisTerapi();
	// 	$this->load->view('V_jenis_terapi',$data);
	// }

	public function Kelas (){
		$this->load->view('V_kelas');
	}

	public function FasilitasLain (){
		$data ['fasilitaslain'] = $this->Fasilitas_model->getAllFasilitasLain();
		$this->load->view('V_FasilitasLain',$data);
	}

	}
?>