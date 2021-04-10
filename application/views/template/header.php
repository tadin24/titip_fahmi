<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $judul ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url('template/admin') ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('template/admin') ?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url('template/admin') ?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('template/admin') ?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url('template/admin') ?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('template/admin') ?>/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url('template/admin') ?>/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url('template/admin') ?>/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url('template/admin') ?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url('template/admin') ?>/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <script src="<?= base_url('template/admin') ?>/bower_components/jquery/jquery-1.11.2.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
  <script src="<?= base_url('template/admin') ?>/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url('template/admin') ?>/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <!-- Bootstrap 3.3.7 -->
  <script src="<?= base_url('template/admin') ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="<?= base_url('template/admin') ?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  <!-- jvectormap -->
  <script src="<?= base_url('template/admin') ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?= base_url('template/admin') ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url('template/admin') ?>/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url('template/admin') ?>/bower_components/moment/min/moment.min.js"></script>
  <script src="<?= base_url('template/admin') ?>/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <!-- datepicker -->
  <script src="<?= base_url('template/admin') ?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="<?= base_url('template/admin') ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('template/admin') ?>/bower_components/chart.js/Chart.js"></script>

  <script>
    $(function() {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': false,
        'ordering': true,
        'info': true,
        'autoWidth': false
      })
    })
  </script>

  <script src="<?= base_url('template/admin') ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="<?= base_url('template/admin') ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <!-- Slimscroll -->
  <script src="<?= base_url('template/admin') ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url('template/admin') ?>/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('template/admin') ?>/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url('template/admin') ?>/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('template/admin') ?>/dist/js/demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
  <script>
    $(document).ready(function() {
      // Sembunyikan alert validasi kosong
      $("#kosong").hide();
    });
  </script>

  <style>
    .error {
      color: red;
      border-color: red;
    }
  </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php
    //error_reporting(0);
    if ($this->session->userdata('level') == "admin") {
      $id  = $this->session->userdata('id_admin');
      $data = $this->db->get_where('admin', array('id_admin' => $id))->row_array();
    } elseif ($this->session->userdata('level') == "krisis") {
      $id  = $this->session->userdata('id_krisis');
      $data = $this->db->get_where('krisis', array('id_krisis' => $id))->row_array();
    } elseif ($this->session->userdata('level') == "user") {
      $id  = $this->session->userdata('id_admin');
      $data = $this->db->get_where('admin', array('id_admin' => $id))->row_array();
    }
    ?>

    <header class="main-header">
      <!-- Logo -->
      <a href="" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>D</b>M</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                <span class="hidden-xs"><?= $data['nama'] ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">

                  <p>
                    <?= $data['username'] ?> - <?= $data['nama'] ?>
                    <small><?= isset($data['log']) ? $data['log'] : ""; ?></small>
                  </p>
                </li>

                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?= base_url('admin/profil') ?>" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?= base_url('admin/keluar') ?>" onclick="return(confirm('Anda Akan Keluar Dari Halaman Administrator'))" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <br /><br />
          </div>
          <div class="pull-left info">
            <p><?= ucfirst($data['nama']) ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li class="active">
            <a href="<?= base_url('admin/') ?>">
              <i class="fa fa-th"></i> <span>Dasboard</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green">Home</small>
              </span>
            </a>
          </li>

          <?php if ($this->session->userdata('level') == "admin") { ?>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-cubes"></i> <span>Data</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">

                <li><a href="<?= base_url('admin/overview') ?>"><i class="fa fa-circle-o"></i>Overview</a></li>
                <li><a href="<?= base_url('admin/krisis') ?>" class="active"><i class="fa fa-circle-o"></i>Rincian</a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#">
                <i class="fa fa-dashboard"></i> <span>Data User/Hak Akses</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('admin/user_admin') ?>" class="active"><i class="fa fa-circle-o"></i>User </a></li>
              </ul>
            </li>
          <?php } elseif ($this->session->userdata('level') == "krisis") { ?>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Laporan </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('admin/detail_k'); ?>"><i class="fa fa-circle-o"></i> Data krisis</a></li>

              </ul>
            </li>

          <?php } elseif ($this->session->userdata('level') == "user") { ?>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Laporan </span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?= base_url('admin/overview'); ?>"><i class="fa fa-circle-o"></i> Rincian</a></li>

              </ul>
            </li>

          <?php } ?>
          <li class="header">END MAIN NAVIGATION</li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Dashboard
          <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="box">
            <div class="box-header">
              <center>
                <h3 class="box-title"><i class="fa fa-cubes"></i><?= $judul ?></h3>
              </center>
            </div>
            <div class="col-xs-12">