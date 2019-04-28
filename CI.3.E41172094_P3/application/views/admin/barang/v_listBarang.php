
<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white" data-image="<?php echo base_url('assets/img/sidebar-1.jpg')?>">
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
          <li class="nav-item ">
            <a class="nav-link" href="<?= site_url('admin/profil'); ?>">
              <i class="material-icons">person</i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo site_url('barang')?>">
              <i class="material-icons">table_chart</i>
              <p>Table List</p>
            </a>
          </li>

        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
    <div class="container-fluid">
        <div class="navbar-wrapper">
        <a class="navbar-brand" href="index.php?product">Tabel</a>
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

              <a href="<?= site_url('barang/tambahBarang'); ?>" class="btn btn-success btn-round">
                  <i class="material-icons">add_circle</i> Tambah Data
                  <div class="ripple-container"></div>
              </a>

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
            <div class="col-md-12">
              <div class="col-md-5">
                <?php if ($this->session->flashdata('pesan')): ?>
                  <div class="alert alert-primary">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <i class="material-icons">close</i>
                    </button>
                    <span>
                      <?= $this->session->flashdata('pesan'); ?>
                    </span>
                  </div>
                <?php endif; ?>
              </div>
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title ">Daftar Barang</h4>
                  <p class="card-category"> Di bawah merupakan <b>Data Barang</b></p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-warning">
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Menu</th>
                      </thead>
                      <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($barang as $b): ?>
                          <tr>
                            <td><?= $i; ?></td>
                            <td><?= $b['nama_barang']; ?></td>
                            <td class="text-danger"><b>Rp<?= number_format($b['harga_barang']); ?></b></td>
                            <td class="td-actions">
                              <a href="<?= base_url(); ?>barang/editBarang/<?= $b['id_barang']; ?>" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </a>
                              <a href="<?= base_url(); ?>barang/hapusBarang/<?= $b['id_barang']; ?>" onclick="return confirm('yakin?')" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                              <i class="material-icons">close</i>
                            </a>
                              <button type="button" rel="tooltip" title="Detil" class="btn btn-warning btn-link btn-sm">
                                <i class="material-icons">info</i>
                              </button>
                            </td>
                          </tr>
                          <?php $i++; ?>
                        <?php endforeach; ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
