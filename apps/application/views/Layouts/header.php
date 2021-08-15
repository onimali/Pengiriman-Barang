<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ovio - Bootstrap Based Responsive Dashboard &amp; Admin Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= base_url('public/template/'); ?>bootstrap/css/bootstrap.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Template style -->
    <link rel="stylesheet" href="<?= base_url('public/template/'); ?>dist/css/style.css">
    <link rel="stylesheet" href="<?= base_url('public/template/'); ?>dist/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="<?= base_url('public/template/'); ?>dist/font-awesome/css/font-awesome.min.css">

    <!-- jQuery -->
    <script src="<?= base_url('public/template/'); ?>dist/js/jquery.min.js"></script>

    <!-- Tables -->
    <script src="<?= base_url('public/template/'); ?>plugins/tables/jquery.tablesort.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <!-- 
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" /> -->
</head>

<body class="sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header dark-bg">

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>

                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <span class="hidden-xs"><?= ucwords($this->session->userdata('name')); ?></span> </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <p class="text-left"><?= ucwords($this->session->userdata('name')); ?> <small><?= $this->session->userdata('email'); ?></small> </p>
                                </li>
                                <li><a href="<?= base_url('logout'); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar dark-bg">
            <section class="sidebar">
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">

                    <li class="treeview"><a href="#"><span>Home</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('home'); ?>"><i class="fa fa-angle-right"></i> Home</a></li>
                        </ul>
                    </li>

                    <li class="treeview"><a href="#"><span>Kantor Cabang</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('branchData'); ?>"><i class="fa fa-angle-right"></i> Data Kantor Cabang</a></li>
                        </ul>
                    </li>

  
                
                    
                

                    <li class="treeview"><a href="#"><span>Daftar karyawan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('UsersController/index'); ?>"><i class="fa fa-angle-right"></i>Data karyawan</a></li>
                        </ul>
                    </li>

                    <li class="treeview"><a href="#"><span>Paketan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('package/0'); ?>"><i class="fa fa-angle-right"></i> Buat Paket</a></li>
                            <li class="active"><a href="<?= base_url('PackageController/paketKeluar'); ?>"><i class="fa fa-angle-right"></i> Paket Keluar</a></li>
                            <li class="active"><a href="<?= base_url('PackageController/paketMasuk'); ?>"><i class="fa fa-angle-right"></i> Paket Masuk</a></li>
                        </ul>
                    </li>

                    <!-- <li class="treeview"><a href="#"><span>Monitoring</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('PengirimanController/index'); ?>"><i class="fa fa-angle-right"></i> Paket Sudah Diambil</a></li>
                        </ul>
                    </li>

                    <li class="treeview"><a href="#"><span>Pengantaran</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('PengantaranController/index'); ?>"><i class="fa fa-angle-right"></i> Penerima Paket</a></li>
                            <li class="active"><a href="<?= base_url('PengantaranController/kurir'); ?>"><i class="fa fa-angle-right"></i> Kurir</a></li>
                        </ul>
                    </li> -->

                    <li class="treeview"><a href="#"><span>Manifest</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('ManifestController/index'); ?>"><i class="fa fa-angle-right"></i> Manifest</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="<?= base_url('PengirimanController/index'); ?>"></i> Pengiriman</a></li>

                    <li class="treeview"><a href="#"><span>Logout</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('logout'); ?>"><i class="fa fa-angle-right"></i> Logout</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- sidebar-menu -->
            </section>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1><?= $header; ?></h1>
            </section>
                                
              


 
      
     
 
        
      
      
      