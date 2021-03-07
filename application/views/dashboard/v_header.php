<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Informasi BPJS Ketenagakerjaan | Dashboard</title>
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/dist/img/favicon.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
   <link rel="stylesheet" href="<?php echo base_url('as/jquery-ui/jquery-ui.min.css'); ?>" /> <!-- Load file css jquery-ui -->
    <script src="<?php echo base_url('assets/jquery.min.js'); ?>"></script> <!-- Load file jquery -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<!-- Sweatalert2 -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/
  css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style type="text/css">
    .al {
        position: absolute;
        right: 0;
        top: 420px;
        width: 250px;
        border: 0px solid #000;
    }
</style>
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">
<header class="main-header">
<a href="<?php echo base_url().'dashboard' ?>" class="logo">
<span class="logo-mini"><b>SB</b></span>
<span class="logo-lg"><b>SI</b> BPJS</span>
</a>
<nav class="navbar navbar-static-top">
<a href="#" class="sidebar-toggle" data-toggle="push-menu"
role="button">
<span class="sr-only">Toggle navigation</span>
</a>
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
<li class="dropdown user user-menu">

 <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url();?>assets/dist/img/logo_bpjs.png" class="user-image" alt="User Image">
              <span class="hidden-xs"> <?php echo $this->session->userdata('username') ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo base_url();?>assets/dist/img/logo_bpjs.png" alt="User-Image">

                <p>
                  <?php echo $this->session->userdata('username') ?>
                 <small>Bpjs Ketenagakerjaan</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="<?php echo base_url().'dashboard/keluar' ?>" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          
</li>
</ul>
</li>
</ul>
</div>
</nav>
</header>
<aside class="main-sidebar">
<section class="sidebar">
<div class="user-panel">
<div class="pull-left image">
<img src="<?php echo base_url(); ?>assets/dist/img/logo_bpjs.png" class="img-circle" alt="User Image">
</div>
<div class="pull-left info">
<?php
$id_user = $this->session->userdata('id');
$user = $this->db->query("select * from pengguna
where pengguna_id='$id_user'")->row();
?>
<p><?php echo $user->pengguna_nama; ?></p>

<small>BPJS</small>
</div>
</div>
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
<li>
<a href="<?php echo base_url().'dashboard' ?>">
<i class="fa fa-dashboard"></i>
<span>DASHBOARD</span>
</a>
</li>
<?php
//cek jika yang login adalah admin
if($this->session->userdata('level') == "admin"){
//tampilkan menu
?>
<li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>BERITA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           <li>
<a href="<?php echo base_url().'dashboard/kategori'
?>">
<i class="fa fa-th"></i>
<span>KATEGORI</span>
</a>
</li>
            <li>
<a href="<?php echo base_url().'dashboard/artikel' ?>">
<i class="fa fa-pencil"></i>
<span>ARTIKEL</span>
</a>
</li>
        
          </ul>
        </li>
<!-- <li>
<a href="<?php echo base_url().'dashboard/kategori'
?>">
<i class="fa fa-th"></i>
<span>KATEGORI</span>
</a>
</li>
<?php
}
?>
<li>
<a href="<?php echo base_url().'dashboard/artikel' ?>">
<i class="fa fa-pencil"></i>
<span>ARTIKEL</span>
</a>
</li> -->

<li>
<a href="<?php echo base_url().'asuransi' ?>">
<i class="fa fa-money"></i>
<span>DATA ASURANSI</span>
</a>
</li>
<?php
//cek jika yang login adalah admin
if($this->session->userdata('level') == "admin"){
//tampilkan menu

?>
<li>
<a href="<?php echo base_url().'dashboard/pages' ?>">
<i class="fa fa-files-o"></i>
<span>PAGES</span>
</a>
</li>
<li>
<a href="<?php echo base_url().'dashboard/pengguna'
?>">
<i class="fa fa-users"></i>
<span>PENGGUNA & HAK AKSES</span>
</a>
</li>
<li>
<a href="<?php echo base_url().'dashboard/pengaturan'
?>">
<i class="fa fa-edit"></i>
<span>PENGATURAN WEBSITE</span>
</a>
</li>
<?php }?>
<li>
<a href="<?php echo base_url().'dashboard/profil' ?>">
<i class="fa fa-user"></i>
<span>PROFIL</span>
</a>
</li>
<li>
<a href="<?php echo
base_url().'dashboard/ganti_password' ?>">
<i class="fa fa-lock"></i>
<span>GANTI PASSWORD</span>
</a>
</li>
<!-- <li>
<a href="<?php echo base_url().'dashboard/keluar' ?>">
<i class="fa fa-share"></i>
<span>KELUAR</span>
</a>
</li> -->
</ul>
</section>
</aside>