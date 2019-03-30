<?php

class Model_barang extends CI_Model{

  function list_barang(){
    $barang = $this->db->get('barang');
    return $barang;
  }

  function hitungBarang(){
    $jumlah = $this->db->count_all('barang');
    return $jumlah;
  }
}
