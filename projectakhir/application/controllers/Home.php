<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{		
			$data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();
			$data['title'] = 'Home';
			$this->load->view('user/_partials/header', $data);
			$this->load->view('user/_partials/navigation');
			$this->load->view('user/home');
			$this->load->view('user/_partials/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
