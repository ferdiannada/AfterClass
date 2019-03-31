<body class="">
  <div class="wrapper ">
    <!-- SideBar -->
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url('assets/img/sidebar-1.jpg')?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          E41172094
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin') ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?= site_url('admin/profil'); ?>">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo site_url('barang') ?>">
              <i class="material-icons">content_paste</i>
              <p>Table List</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <!-- End SideBar -->
    <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
        <a class="navbar-brand" href="index.php?page=profile">User Profile</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
        <form class="navbar-form" action="#" method="post">
            <div class="input-group no-border">
            <button type="submit" name="logout" value="ok" class="btn btn-danger btn-round">
                <i class="material-icons">power_settings_new</i> Logout
                <div class="ripple-container"></div>
            </button>
            </div>
        </form>
        </div>
    </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="card card-profile">
            <div class="card-avatar">
              <a href="#pablo">
                <img class="img" src="<?= base_url('assets/img/faces/user.png'); ?>" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category text-gray">Admin</h6>
                <h4 class="card-title">Ferdian Nada</h4>
                <p class="card-description">
                Untuk perubahan data, silakan hubungi mimin!
                </p>
              <a href="#" class="btn btn-primary btn-round">Follow</a>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">Edit Profile</h4>
              <p class="card-category">Complete your profile</p>
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Email (disabled)</label>
                      <input type="text" value="ferdian.nadda@gmail.com" class="form-control" disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Name (disabled)</label>
                      <input type="text" value="Ferdian Nada" class="form-control" disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Phone (disabled)</label>
                      <input type="text" value="082230270872" class="form-control" disabled>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right" disabled>Update Profile</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>

      </div>
  </div>
  </div>
