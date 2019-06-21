<?php defined('BASEPATH') or exit('No direct script access allowed');

    class search extends CI_Model
    {
        public function ambil_data($table)
        {
            return $this->db->get($table);
        }

        public function tambah_data($data)
        {
            $this->db->insert('contact', $data);
        }
    }
