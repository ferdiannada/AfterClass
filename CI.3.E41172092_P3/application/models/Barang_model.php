<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

	public function getAllBarang()
	{
		return $this->db->get('barang')->result_array();
	}

	public function tambahBarang()
	{
		$data = [
			'kdbarang' => htmlspecialchars($this->input->post('kode', true).$this->input->post('nomor', true)),
			'namabarang' => htmlspecialchars($this->input->post('namabarang', true)),
			'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
			'stokbarang' => htmlspecialchars($this->input->post('stokbarang', true)),
			'hargabarang' => htmlspecialchars($this->input->post('hargabarang', true))
		];

		$this->db->insert('barang', $data);
	}

	public function getBarangByKdbarang($kdbarang)
	{
		return $this->db->get_where('barang', ['kdbarang' => $kdbarang])->row_array();
	}

	public function editBarang()
	{
		$data = [
			'kdbarang' => htmlspecialchars($this->input->post('kdbarang', true)),
			'namabarang' => htmlspecialchars($this->input->post('namabarang', true)),
			'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
			'stokbarang' => htmlspecialchars($this->input->post('stokbarang', true)),
			'hargabarang' => htmlspecialchars($this->input->post('hargabarang', true))
		];

		$this->db->where('kdbarang', $this->input->post('kdbarang', true));
		$this->db->update('barang', $data);
	}

	public function hapusData($kdbarang)
	{	
		$this->db->where('kdbarang', $kdbarang);
		$this->db->delete('barang');
	}

}

/* End of file Barang_model.php */
/* Location: ./application/models/Barang_model.php */