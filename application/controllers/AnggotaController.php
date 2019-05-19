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
        $this->load->library('form_validation');
	}

	public function index() { 
		$data['dataAnggota'] = $this->Anggota->getList()->result();
  		$this->template->load('template','anggota/index',$data);
    }

    public function create(){
    	$this->template->load('template','anggota/create');
    }

    public function store(){
        $this->form_validation->set_rules('namaAnggota','Nama','required|trim',[
                'required' => "*Nama Anggota harus diisi!"
            ]);
        $this->form_validation->set_rules('programStudi','Program Studi','required|trim',[
                'required' => "*Program Studi harus diisi!"
            ]);
        $this->form_validation->set_rules('jenjang','Jenjang','required|trim',[
                'required' => "*Jenjang harus diisi!"
            ]);
        $this->form_validation->set_rules('alamat','Alamat','required|trim',[
                'required' => "*Alamat harus diisi!"
            ]);
        if($this->form_validation->run() == false){
             $this->template->load('template','anggota/create');
        }
        else{
            $data = array(
                'Nama' => $this->input->post('namaAnggota'),
                'Prodi' => $this->input->post('programStudi'),
                'Jenjang' => $this->input->post('jenjang'),
                'Alamat' => $this->input->post('alamat')
            );
            $this->Anggota->insert($data);
            $this->session->set_flashdata('message','<div class="callout callout-success">
      <h4>Selamat!</h4>
      <p>Berhasil Tambah Data.</p>
    </div>');
            redirect('anggota/create');
        }
    	
    	
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
            $this->session->set_flashdata('message','<div class="callout callout-success">
          <h4>Selamat!</h4>
          <p>Berhasil Edit Data</p>
        </div>');
            redirect('anggota/'. $id);    
		
    }
}
