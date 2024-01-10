<?php
$user = getUser();
?>
<div class="container-scroller">

  <?php include_once('header.php'); ?>

  <!-- partial -->
  <div class="container-fluid page-body-wrapper">

    <?php
    include('sidebar.php');
    if (isset($_GET['page'])) {
      switch ($_GET['page']) {
        case 'adduser':
          include('adduser.php');
          break;
        case 'addlogement':
          include('addLogement.php');
          break;
        case 'adminList':
          include('adminList.php');
          break;
        case 'clientList':
          include('clientList.php');
          break;
        case 'listLogement':
          include('logementList.php');
          break;
          case 'modifier':
            include('modiefierLogement.php');
            break;
            case 'logmentToProcess':
              include('logmentToProcess.php');
              break;
        default:
          include('page404.php');
          break;
      }
    } else {
      include('mainPanel.php');
    }

    ?>

  </div>
  <!-- page-body-wrapper ends -->
</div>







<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendor/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendor/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/todolist.js"></script>
<!-- End custom js for this page -->