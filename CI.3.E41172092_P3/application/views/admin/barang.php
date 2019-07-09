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
          <li class="nav-item with-sub active">
            <a class="nav-link" href="">
              <i class="icon ion-ios-filing-outline"></i>
              <span>Data</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="#">Data Barang</a></li>
                <li><a href="admin/data_dosen">Data Dosen</a></li>
                <li><a href="admin/data_mahasiswa">Data Mahasiswa</a></li>
              </ul>
            </div><!-- sub-item -->
          </li>
          <li class="nav-item with-sub">
            <a class="nav-link" href="" data-toggle="dropdown">
              <i class="icon ion-ios-gear-outline"></i>
              <span>Tambah Data</span>
            </a>
            <div class="sub-item">
              <ul>
                <li><a href="<?= base_url('admin/tambah_barang') ?>">Barang Baru</a></li>
                <li><a href="<?= base_url('admin/tambah_dosen') ?>">Dosen Baru</a></li>
                <li><a href="<?= base_url('admin/tambah_mahasiswa') ?>">Mahasiswa Baru</a></li>
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
            <li class="breadcrumb-item" aria-current="page">Data</li>
            <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
          </ol>
          <h6 class="slim-pagetitle">Data Barang</h6>
        </div><!-- slim-pageheader -->
        
        <div class="section-wrapper">
          <?= $this->session->flashdata('message');?>
          <?= $this->session->flashdata('messageedit');?>
          <div class="row">
            <label class="section-title col-sm-4 col-md-2">
              <a href="<?= base_url('admin/data_barang/tambah_barang') ?>" class="btn btn-outline-primary mg-b-10"><i class="fa fa-plus mg-r-5"></i> Tambah Barang</a>
            </label>
          </div>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-5p">No</th>
                  <th class="wd-10p">Kode Barang</th>
                  <th class="wd-25p">Nama Barang</th>
                  <th class="wd-10p">Stok Barang</th>
                  <th class="wd-15p">Harga Barang</th>
                  <th class="wd-10p">Menu</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $i=1;
                foreach ($barang as $b) { 
                ?>
                <tr>
                  <td><?= $i++ ?></td>
                  <td><?= $b['kdbarang'] ?></td>
                  <td><?= $b['namabarang'] ?></td>
                  <td><?= $b['stokbarang'] ?></td>
                  <td><?= $b['hargabarang'] ?></td>
                  <td>
                    <a href="#modalDetail<?= $b['kdbarang']; ?>" class="modal-effect btn btn-outline-primary btn-icon rounded-circle" data-toggle="modal" data-effect="effect-fall" title="Detail"><div><i class="fa fa-info"></i></div></a>
                    <a href="<?= base_url(); ?>admin/data_barang/edit_barang/<?= $b['kdbarang']; ?>" class="btn btn-outline-warning btn-icon rounded-circle" title="Edit"><div><i class="fa fa-pencil"></i></div></a>
                    <a href="<?= base_url(); ?>admin/data_barang/hapus/<?= $b['kdbarang'] ?>" class="btn btn-outline-danger btn-icon rounded-circle tombol-delete" title="Delete"><div><i class="fa fa-close"></i></div></a>
                  </td>
                  <td></td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- section-wrapper -->

      </div><!-- container -->
    </div><!-- slim-mainpanel -->

<!-- 		modal edit
<?php foreach ($barang as $b) { ?>
    <div id="modalEdit<?= $b['kdbarang']; ?>" class="modal fade modal-edit">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit barang <?= $b['kdbarang'] ?></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="<?= base_url(); ?>admin/data_barang/edit_barang" method="post">
          	<div class="modal-body pd-25">
            	<div class="form-layout">
	              <div class="row mg-b-25">

	            <div class="col-lg">
	              <div class="form-group">
	              <label class="form-control-label">Kode Barang: <span class="tx-danger">*</span></label>                 
	                  <input class="form-control" type="text" id="nomor" name="nomor" value="<?= $b['kdbarang']; ?>" disabled>
	              </div>input-group
	            </div>col-4
	                <div class="col-lg-6">
	                  <div class="form-group">
	                    <label class="form-control-label">Nama Barang: <span class="tx-danger">*</span></label>
	                    <input class="form-control" type="text" id="namabarang" name="namabarang" value="<?= $b['namabarang'] ?>">
	                  </div>
	                </div>col-4
	                <div class="col-lg-6">
	                  <div class="form-group">
	                    <label class="form-control-label">Stok Barang: <span class="tx-danger">*</span></label>
	                    <input class="form-control" type="text" id="stokbarang" name="stokbarang" value="<?= $b['stokbarang'] ?>">
	                  </div>
	                </div>col-4
	                <div class="col-lg-12">
	                  <div class="form-group mg-b-10-force">
	                    <label class="form-control-label">Deskripsi: <span class="tx-danger">*</span></label>
	                    <textarea rows="3" class="form-control" id="deskripsi" name="deskripsi" ><?= $b['deskripsi'] ?></textarea>
	                  </div>
	                </div>col-8
	                <div class="col-lg-6">
	                  <div class="form-group">
	                    <label class="form-control-label">Harga Barang: <span class="tx-danger">*</span></label>
	                    <input class="form-control" type="text" id="hargabarang" name="hargabarang" value="<?= $b['hargabarang'] ?>">
	                  </div>
	                </div>col-4
	              </div>row
	            </div>form-layout
	          </div>
	          <div class="modal-footer">
	            <button type="submit" name="edit" class="btn btn-primary">Simpan</button>
	            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	          </div>
	        </form>
        </div>
      </div>modal-dialog
    </div>modal
<?php } ?> -->

		<!-- modal edit -->
		<?php foreach ($barang as $b) { ?>
    <div id="modalDetail<?= $b['kdbarang']; ?>" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Detail barang <?= $b['kdbarang'] ?></h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
          	<form>
            <div class="form-layout">
              <div class="row mg-b-25">

		            <div class="col-lg">
		              <div class="form-group">
		              <label class="form-control-label">Kode Barang: <span class="tx-danger">*</span></label>                 
		                  <input class="form-control" type="text" id="kdbarang" name="kdbarang" value="<?= $b['kdbarang']; ?>" disabled>
		              </div><!-- input-group -->
		            </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Nama Barang: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" id="namabarang" name="namabarang" value="<?= $b['namabarang']; ?>" disabled>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Stok Barang: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" id="stokbarang" name="stokbarang" value="<?= $b['stokbarang']; ?>" disabled>
                  </div>
                </div><!-- col-4 -->
                <div class="col-lg-12">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Deskripsi: <span class="tx-danger">*</span></label>
                    <textarea rows="3" class="form-control" id="deskripsi" name="deskripsi" disabled><?= $b['deskripsi']; ?></textarea>
                  </div>
                </div><!-- col-8 -->
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label">Harga Barang: <span class="tx-danger">*</span></label>
                    <input class="form-control" type="text" id="hargabarang" name="hargabarang" value="<?= $b['hargabarang']; ?>" disabled>
                  </div>
                </div><!-- col-4 -->
              </div><!-- row -->
            </div><!-- form-layout -->
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->
		<?php } ?>
