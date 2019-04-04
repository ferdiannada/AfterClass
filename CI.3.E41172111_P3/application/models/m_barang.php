<?php
    class m_barang extends CI_Model
    {
        private $_table="barang";
        function list_barang()
        {
            return $this->db->get($this->_table)->result();
        }
    }
?>