<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PegawaiController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->model('Pegawai');
		$this->load->helper('url');
	}

	public function index() {
		$data['dataPegawai'] = $this->Pegawai->getList()->result(); 
  		$this->template->load('template','pegawai/index',$data);
    }

    public function create(){
    	$this->template->load('template','pegawai/create');
    }

    public function store() {
    	$nama = $this->input->post('namaPegawai');
    	$alamat = $this->input->post('alamatPegawai');
    	$data = array(
    	 	'Nama' => $nama,
    	 	'Alamat' => $alamat
    	 	);
    	$this->Pegawai->insert($data);
    	redirect('PegawaiController/create');
    }

    public function delete($id){
    	$where = array('Kode_Petugas' => $id);
    	$this->Pegawai->delete($where,'petugas');
		redirect('PegawaiController/index');
	}	

    public function edit($id){
    	$data['dataPetugas'] = $this->Pegawai->getData($id);
    	$this->template->load('template','pegawai/edit',$data);
    }

    public function update($id){
		$result = $this->Pegawai->update($id);
		echo json_encode($result);
		redirect('PegawaiController/edit/'. $id);
    }


}
