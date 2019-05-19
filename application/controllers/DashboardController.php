<?php 

	/**
	* 
	*/
	class DashboardController extends CI_Controller
	{
		public function __construct(){
			parent::__construct();
			$this->load->model('Buku');
			$this->load->model('Anggota');
			$this->load->model('Pegawai');

		}

		function index(){
			$data['dataBuku'] = $this->Buku->getList();
			$data['dataAnggota'] = $this->Anggota->getList();
			$data['dataPegawai'] = $this->Pegawai->getList();
			$this->template->load('template','dashboard',$data);
		}
	}

 ?>