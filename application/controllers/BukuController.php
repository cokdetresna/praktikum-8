<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuController extends CI_Controller {

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
		$this->load->model('Buku');
		$this->load->helper('url');
        $this->load->library('form_validation');
	}

	public function index() { 

		$data['dataBuku'] = $this->Buku->getList()->result();
  		$this->template->load('template','buku/index', $data);
    }

    public function create(){
    	$this->template->load('template','buku/create');
    }

    public function store(){
        $this->form_validation->set_rules('judulBuku','Judul','required|trim',[
                'required' => "*Judul Buku harus diisi!"
            ]);        
        $this->form_validation->set_rules('pengarang','Pengarang','required|trim',[
                'required' => "*Pengarang harus diisi!"
            ]);
        $this->form_validation->set_rules('tahunTerbit','Tahun Terbit','required|trim|numeric',[
                'required' => "*Tahun terbit harus diisi!"
            ]);
        $this->form_validation->set_rules('penerbit','Penerbit','required|trim',[
                'required' => "*Penerbit harus diisi!"
            ]);
    	
        if($this->form_validation->run() == false){
             $this->template->load('template','buku/create');
        }
        else{
        	$data = array(
        			'Judul_Buku' => $this->input->post('judulBuku'),
        			'Pengarang' => $this->input->post('pengarang'),
        			'Penerbit' => $this->input->post('penerbit'),
        			'Tahun_Terbit' => $this->input->post('tahunTerbit')
        		);

        	$this->Buku->insert($data);
            $this->session->set_flashdata('message','<div class="callout callout-success">
          <h4>Selamat!</h4>
          <p>Berhasil Tambah Data.</p>
        </div>');
        	redirect('buku/create');
        }
    }

    public function delete($id){
    	$where = array('Kode_Register' => $id);
    	$this->Buku->delete($where,'buku');
    	redirect('BukuController/index');
    }

    public function edit($id){
    	$data['dataBuku'] = $this->Buku->getData($id);
    	$this->template->load('template','buku/edit',$data);
    }

    public function update($id){
            $result = $this->Buku->update($id);
            
            echo json_encode($result);
            $this->session->set_flashdata('message','<div class="callout callout-success">
          <h4>Selamat!</h4>
          <p>Berhasil Edit Data</p>
        </div>');
            redirect('buku/'. $id);
    	
    }

}
