<?php 
	/**
	* 
	*/
	class Buku extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function getList(){
			return $this->db->get('buku');
		}

		function insert($data){
			$this->db->insert('buku',$data);
		}

		public function delete($where,$table){
	        $this->db->where($where);
			$this->db->delete($table);
	    }

	    function getData($id){
	    	$this->db->from('buku');
	        $this->db->where('Kode_Register',$id);
	        return $this->db->get()->row_array();
	    }

	    function update($id){
			$judul = $this->input->post('judulBuku');
	        $pengarang = $this->input->post('pengarang');
	        $tahun = $this->input->post('tahunTerbit');
	        $penerbit = $this->input->post('penerbit');
	        $this->db->set('Judul_Buku',$judul);
	        $this->db->set('Pengarang',$pengarang);
	        $this->db->set('Tahun_Terbit',$tahun);
	        $this->db->set('Penerbit',$penerbit);
	        $this->db->where('Kode_Register',$id);
	        $result = $this->db->update('buku');
	        return $result;
		}
	}

 ?>