<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnggotaController extends CI_Controller {

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
		$this->load->model('Anggota');
		$this->load->helper('url');
	}

	public function index() { 
		$data['dataAnggota'] = $this->Anggota->getList()->result();
  		$this->template->load('template','anggota/index',$data);
    }

    public function create(){
    	$this->template->load('template','anggota/create');
    }

    public function store(){
    	$nama = $this->input->post('namaAnggota');
    	$prodi = $this->input->post('programStudi');
    	$jenjang = $this->input->post('jenjang');
    	$alamat = $this->input->post('alamat');
    	$data = array(
    		'Nama' => $nama,
    		'Prodi' => $prodi,
    		'Jenjang' => $jenjang,
    		'Alamat' => $alamat
    	);
    	$this->Anggota->insert($data);
    	redirect('AnggotaController/create');
    }

    public function delete($id){
    	$where = array('Kode_Anggota' => $id);
    	$this->Anggota->delete($where,'anggota');
    	redirect('AnggotaController/index');
    }

    public function edit($id){
    	$data['dataAnggota'] = $this->Anggota->getData($id);
    	$this->template->load('template','anggota/edit',$data);
    }

    public function update($id){
		$result = $this->Anggota->update($id);
		echo json_encode($result);
		redirect('AnggotaController/edit/'. $id);
    }
}
