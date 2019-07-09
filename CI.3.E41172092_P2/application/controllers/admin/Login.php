<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->header();
		$this->load->view('admin/login');
		$this->footer();		
	}

	public function header()
	{
		$this->load->view('admin/header');
	}

	
	public function footer()
	{
		$this->load->view('admin/footer');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/admin/Login.php */