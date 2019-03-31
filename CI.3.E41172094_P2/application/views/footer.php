<footer class="footer">
  <div class="container-fluid">

    <div class="copyright float-right">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>, made with <i class="material-icons">favorite</i> by
      <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
    </div>
  </div>
</footer>
</div>
</div>

<!--   Core JS Files   -->
<script src="<?php echo base_url('assets/js/core/jquery.min.js') ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/core/popper.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/core/bootstrap-material-design.min.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js')?>"></script>
<!-- Chartist JS -->
<script src="<?php echo base_url('assets/js/plugins/chartist.min.js')?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url('assets/js/plugins/bootstrap-notify.js')?>"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->

<script src="<?php echo base_url('assets/js/material-dashboard.js?v=2.1.1')?>" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('assets/demo/demo.js')?>"></script>
<script>
$(document).ready(function() {
// Javascript method's body can be found in assets/js/demos.js
md.initDashboardPageCharts();

});
</script>
<script>
$(document).ready(function() {
  function niceAlert(text='test', type='alert'){
      $.notify({
          icon: 'notifications_active',
          message: text

          },{
          type: type,
          timer: 4000,
          placement: {
              from: 'top',
              align: 'right'
          }
      });
  }
      });
</script>
</body>

</html>
