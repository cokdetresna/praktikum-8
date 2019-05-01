<?php 
	/**
	* 
	*/
	class Anggota extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function getList(){
			return $this->db->get('anggota');
		}

		function insert($data){
			$this->db->insert('anggota',$data);
		}

		public function delete($where,$table){
	        $this->db->where($where);
			$this->db->delete($table);
	    }

	    function getData($id){
	    	$this->db->from('anggota');
	        $this->db->where('Kode_Anggota',$id);
	        return $this->db->get()->row_array();
	    }

	    function update($id){
			$nama = $this->input->post('namaAnggota');
	        $prodi = $this->input->post('programStudi');
	        $jenjang = $this->input->post('jenjang');
	        $alamat = $this->input->post('alamat');
	        $this->db->set('Nama',$nama);
	        $this->db->set('Prodi',$prodi);
	        $this->db->set('Jenjang',$jenjang);
	        $this->db->set('Alamat',$alamat);
	        $this->db->where('Kode_Anggota',$id);
	        $result = $this->db->update('anggota');
	        return $result;
		}
	}


 ?>