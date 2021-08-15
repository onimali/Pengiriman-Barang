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

                    <li class="treeview"><a href="#"><span>Daftar Paket</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('PaketController/index'); ?>"><i class="fa fa-angle-right"></i> Daftar Harga Paket</a></li>
                            <li class="active"><a href="<?= base_url('PaketController/indexDokumen'); ?>"><i class="fa fa-angle-right"></i> Daftar Dokument</a></li>
                        </ul>
                    </li>

                    <li class="treeview"><a href="#"><span>Daftar Users</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('UsersController/index'); ?>"><i class="fa fa-angle-right"></i>Data karyawan</a></li>
                            <li class="active"><a href="<?= base_url('UsersController/indexkurir'); ?>"><i class="fa fa-angle-right"></i> Data Kurir</a></li>
                        </ul>
                    </li>

                    <li class="treeview"><a href="#"><span>Paketan</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('package/0'); ?>"><i class="fa fa-angle-right"></i> Buat Paket</a></li>
                            <li class="active"><a href="<?= base_url('PackageController/paketKeluar'); ?>"><i class="fa fa-angle-right"></i> Paket Keluar</a></li>
                            <li class="active"><a href="<?= base_url('PackageController/paketMasuk'); ?>"><i class="fa fa-angle-right"></i> Paket Masuk</a></li>
                        </ul>
                    </li>

                    <li class="treeview"><a href="#"><span>Monitoring</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('PengirimanController/index'); ?>"><i class="fa fa-angle-right"></i> Paket Sudah Diambil</a></li>
                        </ul>
                    </li>

                    <li class="treeview"><a href="#"><span>Pengantaran</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('PengantaranController/index'); ?>"><i class="fa fa-angle-right"></i> Penerima Paket</a></li>
                            <li class="active"><a href="<?= base_url('PengantaranController/kurir'); ?>"><i class="fa fa-angle-right"></i> Kurir</a></li>
                        </ul>
                    </li>

                    <li class="treeview"><a href="#"><span>Manifest</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                        <ul class="treeview-menu ">
                            <li class="active"><a href="<?= base_url('ManifestController/index'); ?>"><i class="fa fa-angle-right"></i> Manifest</a></li>
                        </ul>
                    </li>

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

<html>              
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<p><img src="logo.png" width ='150' height ='100' alt="" title="" style="float:left; margin:8px"></p>

  <p>
 

<table align="" border="0"  cellpadding="0" cellspacing="0"style="float:right; margin:20px"></p>

<tr>
<td>

<ul class="nav pull-">
            <li class="dropdown">
        <a data-toggle="" class=" btn btn-info" href="index.php">Login</a>
                
                <a data-toggle="dropdown" class="dropdown-toggle btn btn-danger" href="#">Register</a>
                <div class="dropdown-menu">
                
                              
                  <a href="form_kurir.php" font size=2 class="btn btn-info" >A.Akun kurir</a><br>
                
                <a href="form_karyawan.php" font size=2 class="btn btn-warning">B.Akun karyawan
                    </a>              
                        
                </div>
                
            </li>
            </ul>

</td>
</tr>


    
                     
    <meta name="viewport" content="width=device-width, initial-scale=2">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      
      </div>
 
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.smooth-scroll.min.js"></script>
  <script src="js/jquery.dlmenu.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
   
</table>

</form>
</p>
    
        
      
<div class="jumbotron text-center">

  <h1 class="btn btn-primary" >Home</h1>
   
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-8">
      
    <p class="btn btn-success"> Visi :</p><br> 
    Pada awal berdirinya, PT 4848 Express hanya menjalankan usahanya sebatas pekerjaan biasa. Dengan berkembangnya kegiatan usaha tersebut PT 4848 Express  
menyadari bahwa betapa penting sarana angkutan bagi masyarakat. Dari waktu ke waktu kebutuhan masyarakat akan saran angkutan semakin meningkat, sehingga  
perluh diperhatikan pengadaan sarana angkutan unutk melayani kebutuhan masyarakat. Inilah yang menjadi visi bagi PT 4848 Express.
</p>

<p class="btn btn-success">Misi :<br>
<p>1.Menyediakan dan memenuhi permintaan dan melayani masyarakat luas yang memerlukan jasa angkuta barang.
<p>2.Membantu program pemerintah dalam menciptakan lapangan kerja, baik secar langsung maupun tidak langsung.
<p>3.Membantu program pemerintah diabidang jasa angkutan dan pengiriman barang.

</p>    
     
    </div>
    
  </div>
</div>

</body>             

    </html> 
                
                    
                
            <!-- Main content -->
            <section class="content container-fluid">