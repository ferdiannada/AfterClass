<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_barang');
    }

    public function index()
    {
        $data['barang'] = $this->M_barang->getAllBarang();
        $data['jenis'] = $this->db->get('jenis')->result_array();
        $data['title'] = 'Product';
        $this->load->view('user/_partials/header', $data);
        $this->load->view('user/_partials/navigation');
        $this->load->view('user/product', $data);
        $this->load->view('user/_partials/footer');
    }

    public function product_view()
    {
        $data['barang'] = $this->M_barang->getAllBarang();
        $data['title'] = 'Product View';
        $this->load->view('user/_partials/header', $data);
        $this->load->view('user/_partials/navigation');
        $this->load->view('user/product_view', $data);
        $this->load->view('user/_partials/footer');
    }

    public function jenis($jenis)
    {
        $data['barang'] = $this->M_barang->select_jenis($jenis);
        $data['jenis'] = $this->db->get('jenis')->result_array();
        $data['title'] = 'Product';
        $this->load->view('user/_partials/header', $data);
        $this->load->view('user/_partials/navigation');
        $this->load->view('user/product', $data);
        $this->load->view('user/_partials/footer');
    }

    public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('search');
		$this->load->helper('form');
	}

	public function index()
	{
			$this->load->view('header');
			$data['barang']=$this->search->ambil_data('barang')->result();
			$this->load->view('product',$data);
			$this->load->view('footer');
	}

}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */
