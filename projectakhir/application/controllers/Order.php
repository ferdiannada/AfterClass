<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('M_shope', 'shope');
	}

	public function index()
	{
		$sesion = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();
		$data['customers'] = $sesion;
		$data['title'] = "Order";
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/_partials/navigation');
		$this->load->view('user/checkout', $data);
		$this->load->view('user/_partials/footer');
	}

	function proccessOrder()
	{
		$this->shope->tambahOrder();
		$this->shope->tambah_detail_order();
		
		redirect('home');
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
