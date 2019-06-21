<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('M_barang', 'barang');
        $this->load->helper('form');
    }

    public function index()
    {
        $this->load->view('header');
        $data['barang']=$this->barang->getAllBarang()->result_array();
        $this->load->view('product', $data);
        $this->load->view('footer');
    }
}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */
