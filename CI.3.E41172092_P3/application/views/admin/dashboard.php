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
          <li class="nav-item active">
            <a class="nav-link" href="#">
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
          <li class="nav-item with-sub">
            <a class="nav-link" href="#" data-toggle="dropdown">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Tambah Data</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="tambah_barang">Barang Baru</a></li>
                <li><a href="tambah_dosen">Dosen Baru</a></li>
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
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="slim-pagetitle">Dashboard</h6>
        </div><!-- slim-pageheader -->

        <div class="alert alert-primary alert-dismissible fade show">
          <strong>Hello <?= $nama['username'] ?>!</strong> You are loggin now
          <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>

        <div class="dash-headline">
          <div class="dash-headline-left">
            <div class="dash-headline-item-one">
              <div class="dash-item-overlay">
                <h1><span class="tx-30">1. Tugas Web Framework Pertama</span></h1><br/>
                <p>Memisah header, body, dan footer menjadi 3 view.<br />Kemudian dijadikan satu di tampilan website melalui panggilan controller.</p><br/>
                <p class="earning-label">Sudah selesai</p>
              </div>
            </div><!-- dash-headline-item-one -->
          </div><!-- dash-headline-left -->

          <div class="dash-headline-left">
            <div class="dash-headline-item-one">
              <div class="dash-item-overlay">
                <h1><span class="tx-30">2. Membuat CRUD beserta Login</span></h1><br/>
                <p class="earning-label">
                  <span>1. Create</span><br />
                  <span>2. Read</span><br />
                  <span>3. Update</span><br />
                  <span>4. Delete</span>
                </p>
              </div>
            </div><!-- dash-headline-item-two -->
          </div><!-- dash-headline-left -->
        </div><!-- dash-headline -->

 

      </div><!-- container -->
    </div><!-- slim-mainpanel -->