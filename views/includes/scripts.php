<!-- Bootstrap core JavaScript-->
<script src="<?php echo BASEASSETS; ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo BASEASSETS; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo BASEASSETS; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo BASEASSETS; ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
  <script src="<?php echo BASEASSETS;?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo BASEASSETS;?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo BASEASSETS; ?>js/demo/datatables-demo.js"></script>

<script src="<?php echo BASEASSETS; ?>js/datatables.js"></script>

<!-- Toastr Scripts -->
<script src="<?php echo BASEASSETS; ?>vendor/bootstrap-toastr/toastr.min.js"></script>
<script src="<?php echo BASEASSETS; ?>vendor/uxTour/uxTour.js"></script>
<script>
  toastr.options = {
      "closeButton": true,
      "debug": false,
      "newestOnTop": true,
      "progressBar": true,
      "positionClass": "toast-top-right",
      "preventDuplicates": false,
      "onclick": null,
      "showDuration": "300",
      "hideDuration": "1000",
      "timeOut": "5000",
      "extendedTimeOut": "1000",
      "showEasing": "swing",
      "hideEasing": "linear",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
  }
</script>
<?php require_once(__DIR__."/toasters.php");?>
<?php
  require_once('../includes/uxTour.php');
?>