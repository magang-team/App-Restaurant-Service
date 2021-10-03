<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
                <div class="widget-user-image">
                  <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
                </div>
                <!-- /.widget-user-image -->
                <h3 class="widget-user-username">Nadia Carmichael</h3>
                <h5 class="widget-user-desc">Lead Developer</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Projects <span class="float-right badge bg-primary">31</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Tasks <span class="float-right badge bg-info">5</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Completed Projects <span class="float-right badge bg-success">12</span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Followers <span class="float-right badge bg-danger">842</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">Alexander Pierce</h3>
                <h5 class="widget-user-desc">Founder & CEO</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
          <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url('../dist/img/photo1.png') center center;">
                <h3 class="widget-user-username text-right">Elizabeth Pierce</h3>
                <h5 class="widget-user-desc text-right">Web Designer</h5>
              </div>
              <div class="widget-user-image">
                <img class="img-circle" src="../dist/img/user3-128x128.jpg" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">FOLLOWERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">PRODUCTS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>
    </section>
    <!-- /.content -->


    <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>