<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('M_barang');
	}

	public function index()
	{	
		$data['title'] = 'Cart';
		$data['customers'] = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();
		$data['kategori'] = $this->M_barang->getAllJenis();
		$this->load->view('user/_partials/header',$data);
		$this->load->view('user/_partials/navigation');
		$this->load->view('user/cart',$data);
		$this->load->view('user/_partials/footer');
	}

	function add()
	{
		$data= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama_barang'),
							 'price' => $this->input->post('harga'),
							 'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('qty')
							);
		$this->cart->insert($data);
		redirect('product');
	}

	function delete($rowid) 
	{
		if ($rowid=="all")
			{
				$this->cart->destroy();
			}
		else
			{
				$data = array('rowid' => $rowid,
			  				  'qty' =>0);
				$this->cart->update($data);
			}
		redirect('cart');
	}

	function edit_cart()
	{
		$cart_info = $_POST['cart'] ;
		foreach( $cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['price'];
			$gambar = $cart['gambar'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];
			$data = array('rowid' => $rowid,
							'harga' => $price,
							'gambar' => $gambar,
							'amount' => $amount,
							'qty' => $qty);
			$this->cart->update($data);
		}
		redirect('cart');
	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */