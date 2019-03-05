<?php
class Model_barang extends CI_Model{
  function list_barang(){
    $barang = array("Jus Jeruk", "Jus Alpukat", "Air Mata Jenglot");
    return $barang;
  }
}
