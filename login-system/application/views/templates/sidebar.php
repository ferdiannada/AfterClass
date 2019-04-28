<div class="sidebar" data-color="<?= $color; ?>" data-background-color="white" data-image="<?= base_url(); ?>assets/img/sidebar-1.jpg">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

    Tip 2: you can also add an image using data-image tag
-->
  <div class="logo">
    <a href="#" class="simple-text logo-normal">
      Creative Tim
    </a>
  </div>
  <div class="sidebar-wrapper">

    <!-- QUERY MENU -->
    <?php
      $role_id = $this->session->userdata('role_id');

      $qryMenu = "SELECT user_menu.id, menu
                  FROM user_menu INNER JOIN user_access_menu
                  ON user_menu.id = user_access_menu.menu_id
                  WHERE user_access_menu.role_id = '$role_id'
                  ORDER BY user_access_menu.menu_id ASC
                  ";

      $menu = $this->db->query($qryMenu)->result_array();
     ?>
    <!-- LOOPING MENU -->
    <?php foreach ($menu  as $m): ?>
      <h6 class="navbar-heading ml-4 mt-4 text-muted">
        <?= $m['menu']; ?>
      </h6>

      <!-- MENYIAPKAN SUB MENU SESUAI MENU DARI JENIS USER (ADMIN, USER) -->
      <?php
        $menuId = $m['id'];
        $qrySubMenu = "SELECT *
                        FROM user_sub_menu
                       WHERE menu_id = $menuId
                          AND is_active = 1";
        $subMenu = $this->db->query($qrySubMenu)->result_array();
       ?>

          <?php foreach ($subMenu as $sm): ?>
            <ul class="nav">
              <li class="nav-item <?php echo active_link($sm['controller_active']); ?>">
                <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                  <i class="material-icons"><?= $sm['icon']; ?></i>
                  <p><?= $sm['title']; ?></p>
                </a>
              </li>
            </ul>
          <?php endforeach; ?>
          <!-- Divider -->
          <hr class="my-3">
    <?php endforeach; ?>




  </div>
</div>
