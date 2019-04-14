<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {

  public function index()
  {
    $this->header();
    $this->load->view('admin/charts');
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

/* End of file Charts.php */
/* Location: ./application/controllers/admin/Charts.php */