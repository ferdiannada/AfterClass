<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_barang extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $data['barang'] = $this->Barang_model->getAllBarang();
        $data['title'] = 'Data Barang';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/barang', $data);
        $this->load->view('admin/footer');
    }

    function tambah_barang()
    {
        $data['title'] = 'New Barang';

        $this->form_validation->set_rules('kode', 'kode', 'trim|required');

        $this->form_validation->set_rules('nomor', 'nomor', 'trim|numeric|required|unique_kdbarang', [
        	'numeric' => 'Please enter numbers only!'
        ]);

        $this->form_validation->set_rules('namabarang', 'nama barang', 'required');

        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|min_length[15]', [
            'min_length' => 'Must be more than 15 words!'
        ]);
        $this->form_validation->set_rules('stokbarang', 'stok', 'required|numeric');
        $this->form_validation->set_rules('hargabarang', 'harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('admin/header', $data);
            $this->load->view('admin/tambahbarang');
            $this->load->view('admin/footer');

        } else {

            $this->Barang_model->tambahBarang();
            $this->session->set_flashdata('message', '<div class="alert alert-outline alert-success">Data berhasil ditambahkan!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('admin/data_barang');

        }
    }

    function edit_barang($kdbarang)
    {
        $data['title'] = 'Edit Barang';
        $data['barang'] = $this->Barang_model->getBarangByKdbarang($kdbarang);

        $this->form_validation->set_rules('namabarang', 'nama barang', 'required');

        $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required|min_length[15]', [
            'min_length' => 'Must be more than 15 words!'
        ]);
        $this->form_validation->set_rules('stokbarang', 'stok', 'required|numeric');
        $this->form_validation->set_rules('hargabarang', 'harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('admin/header', $data);
            $this->load->view('admin/editbarang', $data);
            $this->load->view('admin/footer');

        } else {

            $this->Barang_model->editBarang();
            $this->session->set_flashdata('messageedit', '<div class="alert alert-outline alert-success">Data berhasil diubah!<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            redirect('admin/data_barang');

        }
    }

    function hapus($kdbarang)
    {
    	$this->Barang_model->hapusData($kdbarang);
    	redirect('admin/data_barang');
    }

}

