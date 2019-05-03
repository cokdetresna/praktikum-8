<?php 

	/**
	* 
	*/
	class DashboardController extends CI_Controller
	{
		
		function index(){
			$this->template->load('template','dashboard');
		}
	}

 ?>