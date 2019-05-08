<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_dosen extends CI_Controller {

    public function index()
    {
        $this->load->helper('url');

        $this->header();
        $this->load->view('admin/dosen');
        $this->footer();
    }

    function header()
    {   
        $data['title'] = 'Dosen';   
    	$this->load->view('admin/header', $data);
    }

    function footer()
    {
    	$this->load->view('admin/footer');
    }
}

