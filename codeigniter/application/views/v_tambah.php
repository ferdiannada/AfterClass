<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-Uadmin/A-Compatible" content="IE=edge">
    <meta name="viewport" Uadmin/content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" Uadmin/content="">
    <meta name="author" Uadmin/content="">
    <title>SB Admin - Dashboard</title>
    <link href=<?php echo base_url("assets/fontawesome-free/css/all.min.css"); ?> rel="stylesheet" type="text/css">
    <link href=<?php echo base_url("assets/datatables/dataTables.bootstrap4.css"); ?> rel="stylesheet">
    <link href=<?php echo base_url("css/sb-admin.css"); ?> rel="stylesheet">
  </head>

<body id="page-top">
    <?php $this->load->view('admin/navbar.php'); ?>
      <div id="wrapper">
        <?php $this->load->view('admin/sidebar.php'); ?>
          <div id="content-wrapper">
            <div class="container-fluid">
                <!-- <?php //include'admin/breadcrumb.php'; ?> -->
                  <form action="<?php base_url('v_tambah'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Kode Barang</label>
                      <div class="col-sm-10">
                        <input type="text" name="kdbarang" class="form-control" id="inputKodeBarang" placeholder="Kode Barang">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nama Barang</label>
                      <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control" id="inputNamaBarang" placeholder="Nama Barang">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <input type="text" name="deskripsi" class="form-control" id="inputDeskripsi" placeholder="Deskripsi">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Stok</label>
                      <div class="col-sm-10">
                        <input type="text" name="stokbarang" class="form-control" id="inputStokBarang" placeholder="Stok Barang">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Harga Barang</label>
                      <div class="col-sm-10">
                        <input type="text" name="hargabarang" class="form-control" id="inputHargaBarang" placeholder="Harga Barang">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10" align="center">
                        <button type="submit" class="btn btn-success">Save</button>
                      
                      
                      <a href="<?php echo base_url('index.php/barang/'); ?>" class="btn btn-primary">Batal</a>
                    </div>
                  </form>
            </div><!-- /.container-fluid -->
              
            <?php $this->load->view('admin/footer.php'); ?><!-- Sticky Footer -->
          </div><!-- /.content-wrapper -->
      </div><!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <?php $this->load->view('admin/logoutmodal.php'); ?>    <!-- Logout Modal-->
    <?php $this->load->view('admin/btsdanjs.php'); ?>    <!-- Bootstrap core JavaScript-->

  </body>
</html>