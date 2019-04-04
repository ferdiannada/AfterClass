<?php
class m_barang extends CI_Model{
    public function list_barang(){
        return $this->db->get('barang');
    }
public function input_data($data,$table){
    $this->db->insert($table,$data);
}

function hapus_barang($kdbarang){
    return $hasil=$this->db->query("DELETE FROM barang WHERE kdbarang='$kdbarang'");
}

function edit_barang($data, $table) 
{
      $this->db->update($table, $data);
}
}