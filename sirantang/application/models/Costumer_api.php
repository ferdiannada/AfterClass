<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Costumer_api extends CI_Model
{
    public function getUser($email = null)
    {
        if ($email == null) {
            return $this->db->get('customers')->result_array();
        } else {
            return $this->db->get_where('customers', ['email' => $email])->result_array();
        }
    }

    public function registerCostumer($data)
    {
        $this->db->insert('customers', $data);
        return $this->db->affected_rows();
    }
}
