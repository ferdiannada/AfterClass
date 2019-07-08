<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Barang_api extends CI_Model
{
    public function getBarang($id = null)
    {
        if ($id == null) {
            $this->db->select('barang.*, jenis.jenis');
            $this->db->join('jenis', 'barang.jenis = jenis.jenis');
            $this->db->from('barang');
            return $this->db->get()->result_array();
        } else {
            $this->db->select('barang.*, jenis.jenis');
            $this->db->join('jenis', 'barang.jenis = jenis.jenis');
            $this->db->from('barang');
            $this->db->where(['barang.id' => $id]);
            return $this->db->get()->result_array();
        }
    }
}
