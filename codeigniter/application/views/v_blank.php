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
                <?php $this->load->view('admin/breadcrumb.php'); ?>
                <!--    <?php //include'admin/iconcard.php'; ?>Icon Cards-->
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fas fa-table"></i>Data Barang</div>
                    
                    <div class="card-body">
                      <a href="<?php echo base_url('index.php/barang/add'); ?>" class="btn btn-primary">Tambah Data</a>

                      <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                          </thead>
                          <tbody></tbody>
                        </table>
                      </div>
                    </div>
          
                      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                   </div>
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