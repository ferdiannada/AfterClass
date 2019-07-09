<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
        $this->load->model('M_cust');
  }

  function index()
  {
    $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['title'] = 'Admin - Customers';
    $data['customers'] = $this->M_cust->getAllCust();

    $this->load->view('admin/_partials/header', $data);
    $this->load->view('admin/customers', $data);
    $this->load->view('admin/_partials/footer');
  }

  public function detail($customer_id)
  {
      // $data['judul'] = 'Dashboard';
      $data['customers'] = $this->db->get_where('customers', ['customer_id' => $customer_id])->row_array();
      $data['user_session'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['title'] = 'Admin - Customers';

      $this->load->view('admin/_partials/header', $data);
      $this->load->view('admin/detail_cust', $data);
      $this->load->view('admin/_partials/footer');
  }

  public function hapus($customer_id)
  {
      $this->M_cust->hapusData($customer_id);
      redirect('administrator/customers');
  }

}


/* End of file Customers.php */
/* Location: ./application/controllers/administrator/Customers.php */