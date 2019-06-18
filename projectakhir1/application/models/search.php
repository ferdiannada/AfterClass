<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class search extends CI_Model {

        function ambil_data($table){
            return $this->db->get($table);
        }
    }