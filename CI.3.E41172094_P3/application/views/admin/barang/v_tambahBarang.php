<body class="">
  <div class="wrapper ">
    <!-- SideBar -->
    <div class="sidebar" data-color="orange" data-background-color="white" data-image="<?php echo base_url('assets/img/sidebar-1.jpg')?>">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          E41172094
        </a>
      </div>

      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin') ?>">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/profil'); ?>">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('barang') ?>">
              <i class="material-icons">table_chart</i>
              <p>Tambah Barang</p>
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
        <a class="navbar-brand" href="index.php?page=profile">Tambah Barang</a>
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

        <div class="col-md-8">
          <?php if ($this->session->flashdata('pesan')): ?>
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="material-icons">close</i>
              </button>
              <span>
                <?= $this->session->flashdata('pesan'); ?>
              </span>
            </div>
          <?php endif; ?>
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Form Barang</h4>
              <p class="card-category">Menambahkan data baru</p>
            </div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="bmd-label-floating" for="nama_barang">Nama barang </label>
                      <input type="text" name="nama" value="<?php echo set_value('nama') ?>" class="form-control" id="nama_barang">
                    </div>
                  </div>

                </div>
                <?= form_error('nama', '<small class="text-danger">','</small>'); ?>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating" for="harga">Harga barang </label>
                      <input type="text" value="<?php echo set_value('harga'); ?>" name="harga" class="form-control">
                    </div>
                  </div>
                </div>
                <?= form_error('harga', '<small class="text-danger">','</small>'); ?>
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group form-file-upload form-file-multiple">
                      <input type="file" multiple="" class="inputFileHidden">
                      <label class="bmd-label-floating" for="gambar">Gambar barang </label>
                      <div class="input-group">
                        <input type="text" class="form-control inputFileVisible" name="gambar">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-fab btn-round btn-primary">
                                <i class="material-icons">attach_file</i>
                            </button>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="bmd-label-floating" for="deskripsi">Deskripsi barang </label>
                      <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5"><?php echo set_value("deskripsi");?></textarea>
                    </div>
                  </div>
                </div>
                <?= form_error('deskripsi', '<small class="text-danger">','</small>'); ?>
                <a href="<?= base_url('barang'); ?>" class="btn btn-danger pull-right" >Batal
                  <i class="material-icons">cancel</i>
                  <div class="ripple-container"></div>
                </a>
                <button type="submit" class="btn btn-primary pull-right">
                  Simpan
                  <i class="material-icons">send</i>
                  <div class="ripple-container"></div>
                </button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>

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
                Melakukan penambahan data!
                </p>

            </div>
          </div>
        </div>

      </div>
  </div>
  </div>
