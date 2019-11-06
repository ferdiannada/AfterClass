<?php

function check_logged_in()
{
  $ci = get_instance();
  if (!$ci->session->userdata('email')) {
    $ci->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
    Please login first</div>');
    redirect('auth');
  }else {
    // mengambil role_id dan uri segment pertama/nama controller
    $role_id = $ci->session->userdata('role_id');
    $menu = $ci->uri->segment(1);

    // menyamakan uri segment 1 dengan menu dari db
    $queryMenu = $ci->db->get_where('user_menu', ['menu' => $menu])->row_array();
    $menu_id = $queryMenu['id']; // mengambil id dari hasil query $queryMenu

    $userAccess = $ci->db->get_where('user_access_menu', [
      'role_id' => $role_id,
      'menu_id' => $menu_id]);

      if ($userAccess->num_rows() < 1) {
        redirect('auth/blocked');
      }
  }
}
