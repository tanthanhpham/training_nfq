

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="./template/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./template/admin/assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./template/admin/assets/css/demo.css" rel="stylesheet" />
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
    <title>Unlock Training</title>
</head>

<body>
<div class="wrapper">
    <?php include '../resource/views/layout/sidebar.html' ?>
    <div class="main-panel">
        <!-- Header -->
        <?php include '../resource/views//layout/header.html' ?>
        <!-- End Header -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- Content -->
                    <?php
                    include '../route/navigate.php';
                    ?>
                    <!-- End Content -->
                </div>
            </div>
        </div>
        <!-- Footer -->
        <? include '../resource/views/layout/footer.html' ?>
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
