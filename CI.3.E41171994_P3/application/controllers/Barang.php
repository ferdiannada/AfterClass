<?php
class Barang extends CI_Controller{

  function index(){
    $this->header();
    $this->load->model('m_barang');
    $nama          = "Judul Barang";
    $data['judul']  = $nama;
    $data['item'] = $this->m_barang->list_barang();
    $this->load->view('barang/v_barang', $data);
    $this->footer();
  }

  function edit(){

  }

}
?>