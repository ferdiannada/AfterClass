<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_menu extends CI_Model{

  public function getSubMenu()
  {
    // melakukan join tabel user_sub_menu dan user_menu, untuk mendapatkan nama menu dari tabel menu
    $query = "SELECT user_sub_menu.* , user_menu.menu
              FROM user_sub_menu JOIN user_menu ON user_sub_menu.menu_id = user_menu.id
              ";
    return $this->db->query($query)->result_array();
  }

  public function saveSubMenu() //method input sub menu
  {
    $data = [
              'title'             => htmlspecialchars($this->input->post('title', true)),
              'menu_id'           => htmlspecialchars($this->input->post('menu_id', true)),
              'url'               => htmlspecialchars($this->input->post('url', true)),
              'icon'              => htmlspecialchars($this->input->post('icon', true)),
              'controller_active' => htmlspecialchars($this->input->post('controller_active', true)),
              'is_active'         => htmlspecialchars($this->input->post('active', true))
            ];
    $this->db->insert('user_sub_menu', $data);
  }

  public function hapusSubMenu($id) //method hapus submenu berdasarkan id yang di pilih
  {
    $this->db->delete('user_sub_menu', ['id' => $id]);
  }

  public function rulesSubMenu() // membuat rule untuk input submenu baru dalam array
  {
    $rule = array(
              array(
                'field' => 'title',
                'label' => 'Title',
                'rules' => 'required'
              ),
              array(
                'field' => 'menu_id',
                'label' => 'Menu_id',
                'rules' => 'required'
              ),
              array(
                'field' => 'url',
                'label' => 'Url',
                'rules' => 'required'
              ),
              array(
                'field' => 'icon',
                'label' => 'Icon',
                'rules' => 'required'
              ),
              array(
                'field' => 'controller_active',
                'label' => 'Controller_active',
                'rules' => 'required'
              ),
              array(
                'field' => 'active',
                'label' => 'Is_active',
                'rules' => 'required'
              ),
    );

    $this->form_validation->set_rules($rule);
  }

}
