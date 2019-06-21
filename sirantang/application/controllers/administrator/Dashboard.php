<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    // $data['judul'] = 'Dashboard';
    $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Dashboard';

    $this->load->view('admin/_partials/header', $data);
    $this->load->view('admin/dashboard');
    $this->load->view('admin/_partials/footer');
  }

}
