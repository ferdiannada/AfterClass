<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function index()
  {
    $this->header();
    $this->load->view('admin/register');
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

/* End of file Register.php */
/* Location: ./application/controllers/admin/Register.php */