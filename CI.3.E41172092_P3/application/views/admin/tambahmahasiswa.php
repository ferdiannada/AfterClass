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
            <a class="nav-link" href="dashboard">
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
                <li><a href="data_barang">Data Barang</a></li>
                <li><a href="data_dosen">Data Dosen</a></li>
                <li><a href="data_mahasiswa">Data Mahasiswa</a></li>
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
                <li><a href="tambah_dosen">Dosen Baru</a></li>
                <li><a href="#">Mahasiswa Baru</a></li>
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
            <li class="breadcrumb-item active" aria-current="page">Dosen Baru</li>
          </ol>
          <h6 class="slim-pagetitle">Dosen Baru</h6>
        </div><!-- slim-pageheader -->

        <div class="section-wrapper">

          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">NIM: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="nim" placeholder="NIM">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Nama Mahasiswa: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="namamhs" placeholder="Nama">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Email address: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="email" name="emailmhs" placeholder="Email">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-8">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Alamat: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="alamatmhs" placeholder="Alamat">
                </div>
              </div><!-- col-8 -->
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">No HP: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="tel" name="nomhs" placeholder="No Hp">
                </div>
              </div><!-- col-4 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-primary bd-0" type="submit">Submit</button>
              <button class="btn btn-secondary bd-0" type="reset">Reset</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->