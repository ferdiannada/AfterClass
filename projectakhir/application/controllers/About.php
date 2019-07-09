<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('user/_partials/header', $data);
		$this->load->view('user/_partials/navigation');
		$this->load->view('user/about');
		$this->load->view('user/_partials/footer');
	}

}

/* End of file About.php */
/* Location: ./application/controllers/About.php */
