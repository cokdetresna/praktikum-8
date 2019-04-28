<?php 
	/**
	* 
	*/
	class Pegawai extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function getList(){
			return $this->db->get('petugas');
		}

		function insert($data){
			$this->db->insert('petugas',$data);
		}

		function getData($id){
			$this->db->from('petugas');
	        $this->db->where('Kode_Petugas',$id);
	        return $this->db->get()->row_array();
		}

		public function delete($where,$table){
	        $this->db->where($where);
			$this->db->delete($table);
	    }

		function update($id){
			$nama = $this->input->post('namaPegawai');
	        $alamat = $this->input->post('alamatPegawai');
	        $this->db->set('nama',$nama);
	        $this->db->set('alamat',$alamat);
	        $this->db->where('Kode_Petugas',$id);
	        $result = $this->db->update('petugas');
	        return $result;
		}
	}

 ?>