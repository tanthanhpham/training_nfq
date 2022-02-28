<?php
include '../controllers/exercises/HandleCookie.php';
?>
<!doctype html>
<html lang="en">
<head>
    <?php include '../resource/views/layout/head.php'?>
</head>

<body>
<div class="wrapper">
    <?php include '../resource/views/layout/sidebar.php' ?>
    <div class="main-panel">
        <!-- Header -->
        <?php include '../resource/views//layout/header.php' ?>
        <!-- End Header -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Content -->
                    <?php
                    require '../route/navigate.php';
                    ?>
                    <!-- End Content -->
                </div>
            </div>
        </div>
        <!-- Footer -->
        <? include '../resource/views/layout/footer.php' ?>
        <!-- End Footer -->
    </div>
</div>
</body>

<script src="./template/admin/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="./template/admin/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="./template/admin/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="./template/admin/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<!--  Chartist Plugin  -->
<script src="./template/admin/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="./template/admin/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="./template/admin/assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="./template/admin/assets/js/demo.js"></script>

</html>
