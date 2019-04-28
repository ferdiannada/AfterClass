<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
  }

  public function registrasi()
  {
    $data = [
      'name' => htmlspecialchars($this->input->post('name', true)),
      'email' => htmlspecialchars($this->input->post('email', true)),
      'image' => 'default.jpg',
      'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
      'role_id' => 2,
      'is_active' => 1,
      'date_create' => time()
    ];
    $this->db->insert('user', $data);
  }

  public function ruleRegistrasi() //menentukan aturan untuk registrasi
  {
    $rule = array(
              array( //aturan untuk nama
                'field' => 'name',
                'label' => 'Name',
                'rules' => 'required|trim'
              ),
              array( //aturan untuk email
                'field'   => 'email',
                'label'   => 'Email',
                'rules'   => 'required|trim|valid_email|is_unique[user.email]',
                'errors'  => array( //menampilkan error yang berbeda untuk rule yang di tentukan
                                  'is_unique' => 'This email has been registered',
                                ),
              ),
              array( //aturan untuk password
                'field' => 'password1',
                'label' => 'Password',
                'rules' => 'required|trim|min_length[3]|matches[password2]',
                'errors' => array(
                                  'matches' => 'Password dont match',
                                  'min_length' => 'Password too short (min 3 character)'
                              )
              ),
              array(
                'field' => 'password2',
                'label' => 'Password',
                'rules' => 'required|trim|matches[password1]',
              )
            );
    $this->form_validation->set_rules($rule);
  }


}
