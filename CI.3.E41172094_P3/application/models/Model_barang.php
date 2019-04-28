<?php

class Model_barang extends CI_Model{

  public function getAllData(){
    return $this->db->get('barang')->result_array();
  }

  public function getDataById($id){
    return $this->db->get_where($this->_table, ["id_barang" => $id])->row();
  }

  function hitungBarang(){
    $jumlah = $this->db->count_all('barang');
    return $jumlah;
  }

  public function rulesBarang()
  {
    $rule = array(
              array(
                'field'  => 'nama',
                'label'  => 'Nama',
                'rules'  => 'required'
              ),

              array(
                'field'  => 'harga',
                'label'  => 'Harga',
                'rules'  => 'required|numeric',
                'errors' => array( 'numeric' => 'Harga harus angka' )
              ),

              array(
                'field'  => 'deskripsi',
                'label'  => 'Deskripsi',
                'rules'  => 'required'
              ),
    );

    return $this->form_validation->set_rules($rule);
  }


  public function prosesTambahBarang()
  {
    $data = array(
      'nama_barang' => htmlspecialchars($this->input->post('nama', true)),
      'harga_barang' => htmlspecialchars($this->input->post('harga', true)),
      'gambar_barang' => 'default.jpg',
      'deskripsi_barang' => htmlspecialchars($this->input->post('deskripsi', true)),
     );
     $this->db->insert('barang', $data);
  }

  public function prosesEditBarang()
  {
    $data = array(
      'nama_barang' => htmlspecialchars($this->input->post('nama', true)),
      'harga_barang' => htmlspecialchars($this->input->post('harga', true)),
      'deskripsi_barang' => htmlspecialchars($this->input->post('deskripsi', true))
     );
    $this->db->where('id_barang', $this->input->post('id_barang'));
    $this->db->update('barang', $data);
  }

  public function getBarangById($id)
  {
    return $this->db->get_where('barang', ['id_barang' => $id])->row_array();
  }

  public function prosesHapusBarang($id)
  {
    $this->db->delete('barang', ['id_barang' => $id]);
  }

}
