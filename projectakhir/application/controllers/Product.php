<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
			$this->load->view('header');
			$this->load->view('product');
			$this->load->view('footer');
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */