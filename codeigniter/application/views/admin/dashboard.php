<!DOCTYPE html>
<html lang="en">
  <?php include'head.php'; ?><!-- head -->

  <body id="page-top">
     <?php include'navbar.php'; ?>
      <div id="wrapper">    
        <?php include'sidebar.php'; ?><!-- Sidebar -->
          <div id="content-wrapper">
            <div class="container-fluid">
              <?php include'breadcrumb.php'; ?><!-- Breadcrumbs-->
              <?php include'iconcard.php'; ?><!-- Icon Cards-->
              <?php include'areachart.php'; ?><!-- Area Chart Example-->
              <?php include'datatable.php'; ?><!-- DataTables Example --> 
            </div><!-- /.container-fluid -->
              <?php include'footer.php'; ?><!-- Sticky Footer -->
          </div><!-- /.content-wrapper -->
      </div><!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <?php include'logoutmodal.php'; ?>    <!-- Logout Modal-->
    <?php include'btsdanjs.php'; ?>    <!-- Bootstrap core JavaScript-->

  </body>
</html>
