<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Model_barang', 'barang');
    $this->load->library('form_validation');
  }

  public function index(){
    $data["barang"] = $this->barang->getAllData();
    $this->load->view("admin/_partials/header");
    $this->load->view("admin/barang/v_listBarang", $data);
    $this->load->view("admin/_partials/footer");
  }

  public function tambahBarang()
  {

    $this->barang->rulesBarang();
    if ($this->form_validation->run() ==  false) {
      $this->load->view('admin/_partials/header');
      $this->load->view('admin/barang/v_tambahBarang');
      $this->load->view('admin/_partials/footer');
    }else {
      $this->barang->prosesTambahBarang();
      $this->session->set_flashdata('pesan', 'Data berhasil di tambahkan');
      redirect('barang/tambahBarang');
    }

  }

  public function editBarang($id)
  {

    $this->barang->rulesBarang();
    $data['edit'] = $this->barang->getBarangById($id);
    if ($this->form_validation->run() == false)
    {
      $this->load->view('admin/_partials/header');
      $this->load->view('admin/barang/v_editBarang', $data);
      $this->load->view('admin/_partials/footer');
    }else {
      $this->barang->prosesEditBarang();
      $this->session->set_flashdata('pesan', 'Data berhasil di rubah');
      redirect('barang');
    }
  }

  public function hapusBarang($id)
  {
    $this->barang->prosesHapusBarang($id);
    $this->session->set_flashdata('pesan', 'Data barang berhasil di hapus');
    redirect('barang');
  }



}
