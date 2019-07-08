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
        $this->load->library('pagination');

        // ambil data keyword searching

        if ($this->input->post('tombolCari')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config
        $this->db->like('nama_barang', $data['keyword']);
        $this->db->from('barang');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_page'] = 3;

        // initialize
        $this->pagination->initialize($config);
        // end pagination

        $data['start'] = $this->uri->segment(3);
        
        $data['barang'] = $this->M_barang->limitBarang($config['per_page'], $data['start'], $data['keyword']);
        $data['jenis'] = $this->db->get('jenis')->result_array();
        $data['title'] = 'Product';
        $this->load->view('user/_partials/header', $data);
        $this->load->view('user/_partials/navigation');
        $this->load->view('user/product', $data);
        $this->load->view('user/_partials/footer');
    }

    public function product_view($id)
    {
        $data['barang'] = $this->db->get_where('barang', ['id' => $id])->row_array();
        $data['title'] = 'Product View';
        $this->load->view('user/_partials/header', $data);
        $this->load->view('user/_partials/navigation');
        $this->load->view('user/product_view', $data);
        $this->load->view('user/_partials/footer');
    }

    public function jenis($jenis)
    {
        $data['jenis'] = $this->db->get('jenis')->result_array();
        $data['title'] = 'Product';
        $data['barang'] = $this->M_barang->select_jenis($jenis);
        
        $this->load->view('user/_partials/header', $data);
        $this->load->view('user/_partials/navigation');
        $this->load->view('user/product', $data);
        $this->load->view('user/_partials/footer');
    }
}

/* End of file Product.php */
/* Location: ./application/controllers/Product.php */
