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
		$this->load->library('form_validation');
	}

	public function index() {
		$data['dataPegawai'] = $this->Pegawai->getList()->result(); 
  		$this->template->load('template','pegawai/index',$data);
    }

    public function create(){
    	$this->template->load('template','pegawai/create');
    }

    public function store() {

    	$this->form_validation->set_rules('namaPegawai','Nama','required|trim');
    	$this->form_validation->set_rules('emailPegawai','Email','required|trim|valid_email|is_unique[petugas.username]',['is_unique' => "Email sudah digunakan!"]);
    	$this->form_validation->set_rules('passwordPegawai','Password','required|trim');
    	$this->form_validation->set_rules('alamatPegawai','Alamat','required|trim');

    	if($this->form_validation->run() == false){
    		 $this->template->load('template','pegawai/create');
    	}
    	else{
    		$data = array(
    	 		'Nama' => $this->input->post('namaPegawai'),
    	 		'username' => $this->input->post('emailPegawai'),
    	 		'password' => md5($this->input->post('passwordPegawai')),
    	 		'Alamat' => $this->input->post('alamatPegawai'),
    	 	);
    	 	$this->Pegawai->insert($data);
    	 	$this->session->set_flashdata('message','<div class="callout callout-success">
      <h4>Selamat!</h4>
      <p>Berhasil Tambah Data.</p>
    </div>');
    		redirect('pegawai/create');
    	}

    	
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
        $this->session->set_flashdata('message','<div class="callout callout-success">
          <h4>Selamat!</h4>
          <p>Berhasil Edit Data</p>
        </div>');
		redirect('PegawaiController/edit/'. $id);
    }


}
