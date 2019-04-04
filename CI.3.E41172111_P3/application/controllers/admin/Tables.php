<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller {

  public  function __construct(){
    parent::__construct();    
    $this->load->model('m_barang');
                $this->load->helper('url');
  }

  public function index()
  {
    $this->header();
    $this->load->model("m_barang");
    $data['barang'] = $this->m_barang->list_barang()->result();

    $this->load->view("admin/tables",$data);
    $this->footer();    
  }

  public function tambah(){
    $this->load->view('admin/add');
  }

  public function tambah_aksi(){
    $kdbarang = $this->input->post('kdbarang');
    $nama = $this->input->post('nama');
    $deskripsi = $this->input->post('deskripsi');
    $stokbarang = $this->input->post('stokbarang');
    $hargabarang = $this->input->post('hargabarang');
 
    $data = array(
      'kdbarang' => $kdbarang,
      'nama' => $nama,
      'deskripsi' => $deskripsi,
      'stokbarang' => $stokbarang,
      'hargabarang' => $hargabarang
      );
    $this->m_barang->input_data($data,'barang');
    redirect('admin/tables');
  }

  function hapus()
  {
        $kdbarang=$this->input->post('kdbarang');
        $this->m_barang->hapus_barang($kdbarang);
        redirect('admin/tables');
  }

  function edit()
  {
      
  }

  public function header()
  {
    $this->load->view('admin/header');
  }

  
  public function footer()
  {
    $this->load->view('admin/footer');
  }

}

/* End of file Forgotpassword.php */
/* Location: ./application/controllers/admin/Forgotpassword.php */