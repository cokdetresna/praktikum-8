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
	}

	public function index() { 
		$data['dataBuku'] = $this->Buku->getList()->result();
  		$this->template->load('template','buku/index', $data);
    }

    public function create(){
    	$this->template->load('template','buku/create');
    }

    public function store(){
    	$judul = $this->input->post('judulBuku');
    	$pengarang = $this->input->post('pengarang');
    	$tahun = $this->input->post('tahunTerbit');
    	$penerbit = $this->input->post('penerbit');
    	$data = array(
    			'Judul_Buku' => $judul,
    			'Pengarang' => $pengarang,
    			'Penerbit' => $penerbit,
    			'Tahun_Terbit' => $tahun
    		);
    	$this->Buku->insert($data);
    	redirect('BukuController/create');
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
		redirect('BukuController/edit/'. $id);
    }

}
