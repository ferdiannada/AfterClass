<?php
class Barang extends CI_Controller{

  function index(){
    $this->load->model('Model_barang');
    $judul          = "Barang";
    $data['judul']  = $judul;
    $data['barang'] = $this->Model_barang->list_barang();
    $this->load->view('tables', $data);
  }

  function edit(){
    echo "Ini edit Barang";
  }

}
