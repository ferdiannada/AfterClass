  <body>
    <div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <h2 class="slim-logo"><a href="index.html">.<span>WebFramework</span></a></h2>

          <div class="search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div><!-- search-box -->
        </div><!-- slim-header-left -->
        <div class="slim-header-right">
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="http://via.placeholder.com/500x500" alt="">
              <span>Operator</span></span>
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="page-profile.html" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                <a href="page-edit-profile.html" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                <a href="page-activity.html" class="nav-link"><i class="icon ion-ios-bolt"></i> Activity Log</a>
                <a href="page-settings.html" class="nav-link"><i class="icon ion-ios-gear"></i> Account Settings</a>
                <a href="<?= base_url('admin/auth') ?>" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- slim-header -->

    <div class="slim-navbar">
      <div class="container">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
              <i class="icon ion-ios-home-outline"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="#">
              <i class="icon ion-ios-filing-outline"></i>
              <span>Data</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="<?= site_url('admin/data_barang') ?>">Data Barang</a></li>
                <li><a href="<?= site_url('admin/data_dosen') ?>">Data Dosen</a></li>
                <li><a href="<?= site_url('admin/data_mahasiswa') ?>">Data Mahasiswa</a></li>
              </ul>
            </div><!-- sub-item -->
          </li>
          <li class="nav-item with-sub active">
            <a class="nav-link" href="#" data-toggle="dropdown">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Tambah Data</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="tambah_barang">Barang Baru</a></li>
                <li><a href="#">Dosen Baru</a></li>
                <li><a href="tambah_mahasiswa">Mahasiswa Baru</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </li>
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->

    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Tambah Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Barang Baru</li>
          </ol>
          <h6 class="slim-pagetitle">Barang Baru</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">

          <form action="<?= base_url('admin/data_barang/tambah_barang'); ?>" method="post">
            <div class="form-layout">
              <div class="row mg-b-25">

            <div class="col-lg-4">
              <div class="form-group">
              <label class="form-control-label">Kode Barang: <span class="tx-danger">*</span></label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <select class="form-control select2" data-placeholder="Kode" id="kode" name="kode">
                      <option label="Choose Code Product"></option>
                      <option value="SP">SP</option>
                      <option value="BJ">BJ</option>
                      <option value="TS">TS</option>
                      <option value="CLN">CLN</option>
                    </select>                  
                  <input class="form-control" type="text" id="nomor" name="nomor" placeholder="Nomor" value="<?= set_value('nomor') ?>">
                  </div>
                </div>
                <?= form_error('kode','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                <?= form_error('nomor','<div class="bg-info text-dark"><small>','</small></div>'); ?>
              </div><!-- input-group -->
            </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Nama Barang: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" id="namabarang" name="namabarang" placeholder="Nama Barang" value="<?= set_value('namabarang') ?>">
                    <?= form_error('namabarang','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Stok Barang: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" id="stokbarang" name="stokbarang" placeholder="Stok Barang" value="<?= set_value('stokbarang') ?>">
                    <?= form_error('stokbarang','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-8">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Deskripsi: <span class="tx-danger">*</span></label>
                    <textarea rows="3" class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi" value="<?= set_value('deskripsi') ?>"></textarea>
                    <?= form_error('deskripsi','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                  </div>
                </div><!-- col-8 -->
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">Harga Barang: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" id="hargabarang" name="hargabarang" placeholder="Harga Barang" value="<?= set_value('hargabarang') ?>">
                    <?= form_error('hargabarang','<div class="bg-info text-dark"><small>','</small></div>'); ?>
                  </div>
                </div><!-- col-4 -->
              </div><!-- row -->

              <div class="form-layout-footer">
                <button type="submit" class="btn btn-primary bd-0">Tambah Data</button>
                <button type="reset" class="btn btn-secondary bd-0">Reset</button>
              </div><!-- form-layout-footer -->
            </div><!-- form-layout -->
          </form>
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->