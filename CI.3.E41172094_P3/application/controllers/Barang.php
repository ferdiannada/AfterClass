<?php
class Barang extends CI_Controller{

  function index(){
    $this->load->model('Model_barang');
    $judul          = "Minuman";
    $data['judul']  = $judul;
    $data['barang'] = $this->Model_barang->list_barang()->result();    
    $this->load->view('header');
    $this->load->view('barang/v_listBarang', $data);
    $this->load->view('footer');
  }

  function formInput(){
    $this->load->view('v_inputBarang');
  }

  function formEdit(){
    $this->load->view("v_editBarang");
  }

  function insertBarang(){
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $harga = $_POST['harga_barang'];

    $data = array(
      'nama_barang' => $nama_barang,
      'stok' => $stok,
      'harga' => $harga);

      $this->db->insert('barang', $data);
      redirect('barang');

  }

  function editBarang(){

  }
}
