<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_shope extends CI_Model
{
    public function tambahOrder()
    {
        $sesion = $this->db->get_where('customers', ['email' => $this->session->userdata('email')])->row_array();
        $data_order = [
            'date_ordered' => $this->input->post('date_ordered'),
            'id_customer' => $sesion['customer_id'],
            'payment' => $this->input->post('payment')
        ];
        $this->db->insert('order', $data_order);
    }

    public function tambah_detail_order()
    {
        $order = $this->db->get('order')->row_array();
        if ($cart = $this->cart->contents()) {
            foreach ($cart as $item) {
                $subtotal = $item['qty'] * $item['price'];
                $data_detail = array(
                    'id_order' => $order['id_order'],
                    'id_barang' => $item['id'],
                    'total_purchases' => $item['qty'],
                    'unit_price' => $item['price'],
                    'total_price' => $subtotal
                );

                $this->db->insert('order_details', $data_detail);
            }
        }
    }
}
