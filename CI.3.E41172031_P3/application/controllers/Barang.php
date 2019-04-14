<?php
class Barang extends CI_Controller{

  function index(){

    $this->load->view('admin/content/table');
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/footer');
  }
}
