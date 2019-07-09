<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  function index()
  {
    $this->load->view('admin/index');
  }

  function profile()
  {
    $this->load->view('admin/content/user');
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/footer');
  }

  function table()
  {
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/footer');
    $this->load->view('admin/content/table');
  }
}
