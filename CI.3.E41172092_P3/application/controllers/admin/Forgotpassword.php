<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpassword extends CI_Controller {

  public function index()
  {
    $this->header();
    $this->load->view('admin/forgotpassword');
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

/* End of file Forgotpassword.php */
/* Location: ./application/controllers/admin/Forgotpassword.php */