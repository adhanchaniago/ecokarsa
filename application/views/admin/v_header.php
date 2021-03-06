<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <?php $url_bootstrap = base_url('assets/admin/'); ?>
  <?php
  if ($perusahaan->icon_website != '' || $perusahaan->icon_website != null) {
    echo '<link href="' . base_url($perusahaan->icon_website) . '" rel="icon">';
    echo '<link href="' . base_url($perusahaan->icon_website) . '" rel="apple-touch-icon">';
  } else {
    echo '<link href="' . base_url('assets/') . 'img/favicon.png" rel="icon">';
    echo '<link href="' . base_url('assets/') . 'img/apple-touch-icon.png" rel="apple-touch-icon">';
  }
  ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= $url_bootstrap ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= $url_bootstrap ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= $url_bootstrap ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= $url_bootstrap ?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?= $url_bootstrap ?>plugins/sweetalert/sweetalert.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?= $url_bootstrap ?>bower_components/select2/dist/css/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= $url_bootstrap ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= $url_bootstrap ?>dist/css/skins/_all-skins.min.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">Logo Ecokarsa</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg" style="font-weight: bold;">Admin Ecokarsa</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li>
              <a href="#"><i class="fa fa-sign-out"></i> Log Out</a>
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
          <?php
          $user_id = userdata('user_id');
          $nama_user  = $this->db->get_where('tb_users', array('user_id' => $user_id))->row()->user_name;
          ?>
          <div class="pull-left image">
            <img src="<?= $url_bootstrap ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?= $nama_user ?></p>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header" style="text-align: center;">MENU</li>
          <?php
          if (strpos(uri('2'), 'dashboard') !== false) {
            echo '<li class="active">';
          } else {
            echo '<li>';
          }
          ?>
          <a href="<?= base_url('admin/dashboard') ?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
          </li>
          <?php
          if (strpos(uri('2'), 'produk') !== false) {
            echo '<li class="active">';
          } else {
            echo '<li>';
          }
          ?>
          <a href="<?= base_url('admin/produk') ?>">
            <i class="fa fa-barcode"></i> <span>Katalog Produk</span>
          </a>
          <?php
          if (strpos(uri('2'), 'paket') !== false) {
            echo '<li class="active">';
          } else {
            echo '<li>';
          }
          ?>
          <a href="<?= base_url('admin/paket') ?>">
            <i class="fa fa-tag"></i> <span>Daftar Harga Paket</span>
          </a>
          </li>
          <?php
          if (strpos(uri('2'), 'testimoni') !== false) {
            echo '<li class="active">';
          } else {
            echo '<li>';
          }
          ?>
          <a href="<?= base_url('admin/testimoni') ?>">
            <i class="fa fa-quote-right"></i> <span>Testimoni</span>
          </a>
          </li>
          <?php
          if (strpos(uri('2'), 'banner') !== false) {
            echo '<li class="active">';
          } else {
            echo '<li>';
          }
          ?>
          <a href="<?= base_url('admin/banner') ?>">
            <i class="fa fa-picture-o"></i> <span>Banner Foto</span>
          </a>
          </li>
          <li>
            <a href="<?= base_url('admin/tim') ?>">
              <i class="fa fa-users"></i> <span>Tim</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-users"></i> <span>Data Pengguna Aplikasi</span>
            </a>
          </li>
          <?php
          if (strpos(uri('2'), 'pengaturan') !== false) {
            echo '<li class="active">';
          } else {
            echo '<li>';
          }
          ?>
          <a href="<?= base_url('admin/pengaturan') ?>">
            <i class="fa fa-cog"></i> <span>Pengaturan Data Perusahaan</span>
          </a>
          </li>
          <li>
            <a href="pages/widgets.html">
              <i class="fa fa-user"></i> <span>Pengaturan Akun</span>
            </a>
          </li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>