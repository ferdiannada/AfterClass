<?php

class Model_barang extends CI_Model{

  private $_table = "barang";
  public $id_barang;
  public $nama_barang;
  public $harga_barang;
  public $gambar_barang = "default.jpg";
  public $deskripsi_barang;

  public function aturanPenulisan(){
    return [
      [
        'field' => 'nama_barang',
        'label' => 'Nama Barang',
        'rules' => 'required'
      ],

      [
        'field' => 'harga_barang',
        'label' => 'Harga',
        'rules' => 'numeric'
      ],

      [
        'field' => 'deskripsi_barang',
        'label' => 'Deskripsi',
        'rules' => 'required'
      ]
    ];
  }

  public function getAllData(){
    return $this->db->get($this->_table)->result();
  }

  public function getDataById($id){
    return $this->db->get_where($this->_table, ["id_barang" => $id])->row();
  }

  public function simpanData(){
    $post = $this->input->post();
    $this->id_barang = uniqid();
    $this->nama_barang = $post["nama"];
    $this->harga_barang = $post["harga"];
    $this->deskripsi_barang = $post["deskripsi"];
    $this->db->insert($this->_table, $this);

  }

  public function editData(){
    $post = $this->input->post();
    $this->id_barang = $post["id"];
    $this->nama_barang = $post["nama"];
    $this->harga_barang = $post["harga"];
    $this->deskripsi_barang = $post["deskripsi"];
    $this->db->update($this->_table, $this, array('id_barang' => $post['id']));
  }

  public function deleteData($id){
    return $this->db->delete($this->_table, array("id_barang" => $id));
  }

  function hitungBarang(){
    $jumlah = $this->db->count_all('barang');
    return $jumlah;
  }

}
