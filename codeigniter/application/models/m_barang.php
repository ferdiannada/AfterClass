<?php
    class m_barang extends CI_Model {
        
        function list_barang(){
            $barang=array("sepatu", "jaket", "kaos", "celana");
            return $barang;
        }
    }
?>