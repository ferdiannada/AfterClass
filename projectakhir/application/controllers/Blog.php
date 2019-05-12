<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('blog');
		$this->load->view('footer');		
	}

}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */