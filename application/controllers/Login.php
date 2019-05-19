<?php 
	/**
	* 
	*/
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();		
			$this->load->model('m_login');
		}

		function index(){
			$this->load->view('login');
		}

		function login_action(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$where = array(
					'username'  => $username,
					'password' => md5($password)
				);
			$cek = $this->m_login->cek_login("petugas",$where)->num_rows();
			$data = $this->m_login->cek_login("petugas",$where)->row();
			if($cek > 0){
				$data_session = array(
						'nama' => $data->Nama,
						'status' => "login"
					);
				$this->session->set_userdata($data_session);
				redirect(base_url('dashboard'));
			}
			else{
				echo "username dan password salah!";
			}
		}

		function logout(){
			$this->session->sess_destroy();
			redirect(base_url('login'));
		}
	}


 ?>