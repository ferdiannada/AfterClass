<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  function index()
  {
    $this->load->model('Model_barang');
    $data['jumlah_barang'] = $this->Model_barang->hitungBarang();
    $this->load->view('header');
    $this->load->view('admin/index', $data);
    $this->load->view('footer');
  }
  function profil(){
    $this->load->view('header');
    $this->load->view('user/v_admin');
    $this->load->view('footer');
  }

}
