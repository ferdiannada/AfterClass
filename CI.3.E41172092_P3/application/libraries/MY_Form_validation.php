<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation
{

    public function __construct($rules = array())
    {
        parent::__construct($rules);
    }

    public function unique_kdbarang()
    {

        $kode = $this->CI->input->post('kode');
        $nomor = $this->CI->input->post('nomor');

        $check = $this->CI->db->get_where('barang', array('kdbarang' => $kode.$nomor), 1);

        if ($check->num_rows() > 0) {

            $this->set_message('unique_kdbarang', 'This code already exists in database');

            return FALSE;
        }

        return TRUE;
    }
}

