<!-- footer -->
<footer class="footer">
  <div class="container-fluid">
    <nav class="float-left">

    </nav>
    <div class="copyright float-right">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>, made with <i class="material-icons">favorite</i> by
      <a href="https://www.creative-tim.com" target="_blank">Ferdian</a> for a custom web.
    </div>
  </div>
</footer>
</div>
</div>

<!-- my sweet alert -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/plugins/mysweetalert.js">

</script>
<!--   Core JS Files   -->

<script src="<?= base_url(); ?>assets/js/core/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/js/core/popper.min.js"></script>
<script src="<?= base_url(); ?>assets/js/core/bootstrap-material-design.min.js"></script>
<script src="<?= base_url(); ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="<?= base_url(); ?>assets/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="<?= base_url(); ?>assets/js/plugins/sweetalert2.all.min.js"></script>
<!-- Forms Validations Plugin -->
<script src="<?= base_url(); ?>assets/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?= base_url(); ?>assets/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?= base_url(); ?>assets/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="<?= base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="<?= base_url(); ?>assets/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="<?= base_url(); ?>assets/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?= base_url(); ?>assets/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="<?= base_url(); ?>assets/js/plugins/fullcalendar.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?= base_url(); ?>assets/js/plugins/nouislider.min.js"></script>

<!-- Library for adding dinamically elements -->
<script src="<?= base_url(); ?>assets/js/plugins/arrive.min.js"></script>

<!-- Chartist JS -->
<script src="<?= base_url(); ?>assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url(); ?>assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url(); ?>assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
<script>
$(document).ready(function() {
$().ready(function() {
  $sidebar = $('.sidebar');

  $sidebar_img_container = $sidebar.find('.sidebar-background');

  $full_page = $('.full-page');

  $sidebar_responsive = $('body > .navbar-collapse');

  window_width = $(window).width();

  fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

  if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
      $('.fixed-plugin .dropdown').addClass('open');
    }

  }

  $('.fixed-plugin a').click(function(event) {
    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
    if ($(this).hasClass('switch-trigger')) {
      if (event.stopPropagation) {
        event.stopPropagation();
      } else if (window.event) {
        window.event.cancelBubble = true;
      }
    }
  });

  $('.switch-sidebar-mini input').change(function() {
    $body = $('body');

    $input = $(this);

    if (md.misc.sidebar_mini_active == true) {
      $('body').removeClass('sidebar-mini');
      md.misc.sidebar_mini_active = false;

      $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

    } else {

      $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

      setTimeout(function() {
        $('body').addClass('sidebar-mini');

        md.misc.sidebar_mini_active = true;
      }, 300);
    }

    // we simulate the window Resize so the charts will get updated in realtime.
    var simulateWindowResize = setInterval(function() {
      window.dispatchEvent(new Event('resize'));
    }, 180);

    // we stop the simulation of Window Resize after the animations are completed
    setTimeout(function() {
      clearInterval(simulateWindowResize);
    }, 1000);

  });
});
});
</script>
<script>
$(document).ready(function() {
// Javascript method's body can be found in assets/js/demos.js
md.initDashboardPageCharts();

});
</script>
</body>

</html>
