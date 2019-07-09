<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->helper('url');

        $data['nama'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->header();
        $this->load->view('admin/dashboard', $data);
        $this->footer();
    }

    function header()
    {   
        $data['title'] = 'Dashboard';
    	$this->load->view('admin/header', $data);
    }

    function footer()
    {
    	$this->load->view('admin/footer');
    }
}

