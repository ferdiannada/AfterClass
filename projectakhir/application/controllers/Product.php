<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('search');
		$this->load->helper('form');
	}

	public function index()
	{
			$this->load->view('header');
			$data['barang']=$this->search->ambil_data('barang')->result();
			$this->load->view('product',$data);
			$this->load->view('footer');
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */