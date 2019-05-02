<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    check_logged_in();
  }
  function index()
  {
    $data['color'] = 'purple';
    $data['title'] = 'Menu Management';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('menu', 'Menu', 'required');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/index', $data);
      $this->load->view('templates/footer');
    }else{
      $this->db->insert('user_menu', ['menu' => htmlspecialchars($this->input->post('menu', true))]);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success add new menu</div>');
      redirect('menu');
    }


  }

  public function subMenu()
  {
    $data['color']  = 'green';
    $data['title']  = 'Submenu Management';
    $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $this->load->model('M_menu', 'menu');
    $data['subMenu'] = $this->menu->getSubMenu(); //memanggil method getSubmenu (model)
    $this->menu->rulesSubMenu(); //memanggil method rules sub menu (model)
    $data['menu'] = $this->db->get('user_menu')->result_array();

    if ($this->form_validation->run() == false) { //jika form validation tidak berjalan
      $this->load->view('templates/header', $data);
      $this->load->view('templates/sidebar', $data);
      $this->load->view('templates/topbar', $data);
      $this->load->view('menu/submenu', $data);
      $this->load->view('templates/footer');
    }else { //jika form validation sukses
      $this->menu->saveSubMenu();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success add new submenu</div>');
      redirect('menu/subMenu');
    }

  }

  public function delSubMenu($id)
  {
    $this->load->model('M_menu', 'menu');
    $this->menu->hapusSubMenu($id);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success delete 1 submenu</div>');
    redirect('menu/subMenu');
  }

}
