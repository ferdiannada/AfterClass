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
<script src="<?= base_url('assets/js/plugins/moment.min.js'); ?>"></script>

<script src="<?= base_url('assets/js/plugins/jquery.validate.min.js'); ?>"></script>

<script src="<?= base_url('assets/js/plugins/jquery.bootstrap-wizard.js'); ?>"></script>

<script src="<?= base_url('assets/js/plugins/bootstrap-selectpicker.js'); ?>"></script>

<script src="<?= base_url('assets/js/plugins/bootstrap-datetimepicker.min.js'); ?>"></script>

<script src="<?= base_url('assets/js/plugins/bootstrap-tagsinput.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/material-dashboard.js?v=2.1.1')?>" type="text/javascript"></script>
<script src="<?= base_url('assets/js/plugins/jasny-bootstrap.min.js'); ?>"></script>
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

<script>
    $(document).ready(function() {
      if ($('.card-header.card-chart').length != 0) {
        md.initDashboardPageCharts();
      }

      if ($('#websiteViewsChart').length != 0) {
        md.initDocumentationCharts();
      }





      if ($('.datetimepicker').length != 0) {
        md.initFormExtendedDatetimepickers();
      }
      if ($('#fullCalendar').length != 0) {
        md.initFullCalendar();
      }

      if ($('.slider').length != 0) {
        md.initSliders();
      }

      //  Activate the tooltips
      $('[data-toggle="tooltip"]').tooltip();

      // Activate Popovers
      $('[data-toggle="popover"]').popover();

      // Vector map
      if ($('#worldMap').length != 0) {
        md.initVectorMap();
      }

      setFormValidation('#RegisterValidation');

      function setFormValidation(id) {
        $(id).validate({
          highlight: function(element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
            $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
          },
          success: function(element) {
            $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
            $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
          },
          errorPlacement: function(error, element) {
            $(element).closest('.form-group').append(error);
          },
        });
      }
    });

    // FileInput
    $('.form-file-simple .inputFileVisible').click(function() {
      $(this).siblings('.inputFileHidden').trigger('click');
    });

    $('.form-file-simple .inputFileHidden').change(function() {
      var filename = $(this).val().replace(/C:\\fakepath\\/i, '');
      $(this).siblings('.inputFileVisible').val(filename);
    });

    $('.form-file-multiple .inputFileVisible, .form-file-multiple .input-group-btn').click(function() {
      $(this).parent().parent().find('.inputFileHidden').trigger('click');
      $(this).parent().parent().addClass('is-focused');
    });

    $('.form-file-multiple .inputFileHidden').change(function() {
      var names = '';
      for (var i = 0; i < $(this).get(0).files.length; ++i) {
        if (i < $(this).get(0).files.length - 1) {
          names += $(this).get(0).files.item(i).name + ',';
        } else {
          names += $(this).get(0).files.item(i).name;
        }
      }
      $(this).siblings('.input-group').find('.inputFileVisible').val(names);
    });

    $('.form-file-multiple .btn').on('focus', function() {
      $(this).parent().siblings().trigger('focus');
    });

    $('.form-file-multiple .btn').on('focusout', function() {
      $(this).parent().siblings().trigger('focusout');
    });
  </script>
</body>
</html>
