<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_auth', 'authentication');
    $this->load->library('form_validation');
  }

  function index()
  {
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'User Login';
      $this->load->view('auth/_partials/header', $data);
      $this->load->view('auth/login');
      $this->load->view('auth/_partials/footer');
    }else{
      // validasi sukses
      $this->_login();
    }

  }

  // private function Login
  private function _login()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');

    // query untuk mencari data yang sesuai dengan yang ada di db dengan form
    $user = $this->db->get_where('user', ['email' => $email])->row_array();
    // usernya ada
    if ($user != null) {
      // jika usernya aktif
      if ($user['is_active'] == 1) {
        // cek password
        if (password_verify($password, $user['password'])) {
          // jika password sama
          $data = [
            'email'   => $user['email'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);
          if ($user['role_id'] == 1) {
            redirect('admin');
          }else {
            redirect('user');
          }

        }else {
          // jika password salah
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          Wrong password</div>');
          redirect('auth');
        }
      }else{ // kalau tidak aktif
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        This email has not been activated</div>');
        redirect('auth');
      }
    }else {
      // jika tidak ada user
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      This email is not registered</div>');
      redirect('auth');
    }
  }

  function registration() //untuk fungsi registrasi
  {
    $this->authentication->ruleRegistrasi(); // memanggil method rule registrasi dari model

    if ($this->form_validation->run() == false) {
      $data['title'] = 'User Registration';
      $this->load->view('auth/_partials/header', $data);
      $this->load->view('auth/registration');
      $this->load->view('auth/_partials/footer');
    }else{
      $this->authentication->registrasi();
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
      Congratulation! your account has been created. Please Login</div>');
      redirect('auth');
    }
  }

  function logout()
  {
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('rolde_id');
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
    You have been logged out!</div>');
    redirect('auth');
  }

}
