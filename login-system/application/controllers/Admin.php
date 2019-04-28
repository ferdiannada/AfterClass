<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('email')) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Please login first</div>');
      redirect('auth');
    }

  }

  function index()
  {
    $data['color'] = 'purple';
    $data['title'] = 'Dashboard';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');
  }

}
