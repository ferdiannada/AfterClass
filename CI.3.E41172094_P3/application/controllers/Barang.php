<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Model_barang");
    $this->load->library('form_validation');
  }

  public function index(){
    $data["barang"] = $this->Model_barang->getAllData();
    $this->load->view("admin/_partials/header");
    $this->load->view("admin/barang/v_listBarang", $data);
    $this->load->view("admin/_partials/footer");

  }

  public function validasiTambah(){
    $barang = $this->Model_barang;
    $validasi = $this->form_validation;
    $validasi->set_rules($barang->aturanPenulisan()); //menerapkan aturan

    if ($validasi->run()) { //melakukan validasi
      $barang->simpanData();//menyimpan data
      $this->session->set_flashdata('success', 'Berhasil menyimpan');
    }
    $this->load->view("admin/_partials/header");
    $this->load->view('admin/barang/v_tambahBarang'); //menampilan form tambah data
    $this->load->view("admin/_partials/footer");
  }

  public function validasiEdit($id = null){
    if (!isset($id)) redirect('barang');

    $barang = $this->Model_barang;
    $validasi = $this->form_validation;
    $validasi->set_rules($barang->autranPenulisan()); //menerapkan aturan penulisan

    if ($validasi->run()) { //melakukan validasi aturan penulisan
      $barang->editData(); //melakukan query update
      $this->session->set_flashdata('success', 'Berhasil di edit');
    }

    $data["barang"] = $barang->getDataById($id); //mengambil data untuk di tampilkan di form
    if (!$data["barang"]) show_404(); //jika tidak ada data tampilkan error 404

    $this->load->view("admin/_partials/header");
    $this->load->view('barang/v_editBarang', $data); //menampilkan form edit
    $this->load->view("admin/_partials/footer");
  }

  public function hapusData($id = null){
    if (!isset($id)) show_404();

    if ($this->Model_barang->deleteData($id)) {
      redirect(site_url('barang'));
    }
  }

}
