<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>
  <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/satu.png">

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <!--   <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/datatable/datatables.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  
  <!-- animate CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/animate.css">
   
  <!-- wave CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/wave/waves.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/wave/button.css">
     <!-- Notika icon CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/notika-custom-icon.css">

  <!-- main CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/main.css">
  <!-- style CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets2/style.css">
  <!-- responsive CSS
    ============================================ -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/responsive.css">

  <!-- modernizr JS
    ============================================ -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>
  
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
     <?php foreach ($user as $key) { ?>
      <?php if($key['level'] == '1') { ?> 
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <?php } } ?>

    <!-- Sidebar -->
    <?php foreach ($user as $key) { ?>
      <?php if($key['level'] == '2') { ?> 
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
    <?php } } ?>
    <br>

         <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center"   a href="<?php echo base_url('index.php/Admin')?>"</a></td>


     <!--   <a href="<?php echo base_url('index.php/ListKepemilikanAset/create')?>"class="btn glyphicon glyphicon-chevron-right"></a></td>
 -->
        <div class="sidebar-brand-icon rotate-n-15">
       
        </div>
        <div class="sidebar-brand-text mx-3"><img src="<?php echo base_url() ?>assets/img/satu.png" width="50px" height="55px"   a href="<?php echo base_url('index.php/Admin')?>"</a></td></div>
             <?php $session_data = $this->session->userdata('logged_in'); ?>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><h5><!-- Anda Login Sebagai  --><font color="white"><?php echo $session_data['username']; ?></h5></font></span>
          <div align="right"><h6><b>Dinas Sosial Kota Batu</b></h6>
      </a>
    </div>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href='<?php echo base_url("index.php/Admin"); ?>'>
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>


      <?php foreach ($user as $key) { ?>
      <?php if($key['level'] == '2') { ?> 
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Desa
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-folder"></i>
          <span>Penduduk</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Penduduk</h6>
            <a class="collapse-item" href='<?php echo base_url("index.php/ListPenduduk"); ?>'>Data Penduduk</a>

     
            <a class="collapse-item" href='<?php echo base_url("index.php/ListPenduduk/create"); ?>'>Tambah Penduduk</a>
 
          </div>
        </div>
      </li>

     <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-table"></i>
          <span>Surat</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Surat</h6>
            <a class="collapse-item" href='<?php echo base_url("index.php/listFilterSurat"); ?>'">Data Surat</a>
            <a class="collapse-item" href='<?php echo base_url("index.php/ListFilterSurat/create"); ?>'">Penentuan Penerima Surat</a>
          </div>
        </div>
      </li>

      <?php } } ?>

      <!-- Divider -->
      <?php foreach ($user as $key) { ?>
      <?php if($key['level'] == '1') { ?> 
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Dinas Sosial
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Desa</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Desa</h6>
            <a class="collapse-item" href='<?php echo base_url("index.php/ListDesa"); ?>'>Data Desa</a>
            <a class="collapse-item" href='<?php echo base_url("index.php/ListDesa/create"); ?>'>Tambah Desa</a>
            <a class="collapse-item" href='<?php echo base_url("index.php/Register/create"); ?>'>Registrasi Akun Desa</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-folder"></i>
          <span>Kepala Desa</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kepala Desa</h6>
            <a class="collapse-item" href='<?php echo base_url("index.php/ListKepalaDesa"); ?>'">Data Kepala Desa</a>
            <a class="collapse-item" href='<?php echo base_url("index.php/ListKepalaDesa/create"); ?>'>Tambah Kepala Desa</a>
          </div>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-table"></i>
          <span>Bantuan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bantuan</h6>
            <a class="collapse-item" href='<?php echo base_url("index.php/ListBantuan"); ?>'>Data Bantuan</a>
            <a class="collapse-item" href='<?php echo base_url("index.php/listFilterSurat/tampilPengajuan"); ?>'>Data Pengajuan Bantuan</a>
            <a class="collapse-item" href='<?php echo base_url("index.php/ListFormBantuan/index"); ?>'>Data Penerima Bantuan</a>
          </div>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-table"></i>
          <span>Pekerjaan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Bantuan</h6>
            <a class="collapse-item" href='<?php echo base_url("index.php/ListPekerjaan"); ?>'>Data Pekerjaan</a>
            <a class="collapse-item" href='<?php echo base_url("index.php/ListPekerjaan/create"); ?>'>Tambah Pekerjaan</a>
          </div>
        </div>
      </li>
  

    <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href='<?php echo base_url("index.php/ListPenduduk"); ?>'>
          <i class="fas fa-fw fa-folder"></i>
          <span>Penduduk</span></a>
      </li>

  <?php } } ?>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

           

           <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url() ?>assets/img/logoakun.png" width="50px" height="55px"
                <?php $session_data = $this->session->userdata('logged_in'); ?>
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><h5>Anda Login Sebagai <font color="blue"><?php echo $session_data['username']; ?> 
             <!--    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
                     <span class=" glyphicon glyphicon-chevron-down"></span>


                </h5></font></span>
              <!--     glyphicon glyphicon-chevron-down -->
             <!--    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href='<?php echo base_url("index.php/ListProfil"); ?>'>
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Keluar
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

         <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <?php foreach ($user as $key) { ?>
                                    <?php if($key['level'] == '1') { ?> 
                                    <div class="breadcomb-ctn">
                                      <marquee>  <h2>Sistem Pelayanan Bantuan</h2></marquee>

                                    </div>
                                    <?php } }?>
                                    <?php foreach ($user as $key) { ?>
                                    <?php if($key['level'] == '2') { ?> 
                                    <div class="breadcomb-ctn">
                                      <marquee>  <h2>Sistem Pengajuan Surat Keterangan Tidak Mampu Untuk Masyarakat di Kota Batu</h2></marquee>
                                    </div>
                                    <?php } }?>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
  <div class="wrapper">
    <div class="notika-status-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h3>
                                <?php foreach ($jumlahdesa as $desa) { ?>
                                <i class="ti-arrow-up text-primary"></i> <span class="counter text-primary"><?php echo $desa ?></span></li>
                                <?php } ?></h3>
                            <p>Jumlah Desa</p>
                        </div>
                        <div class="sparkline-bar-stats2">1,4,8,3,5,6,4,8,3,3,9,5</div>
                    </div>
                </div>
                <?php foreach ($user as $key) { ?>
                <?php if($key['level'] == '2') { ?> 
                 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h3>
                                <?php foreach ($jumlahpendudukByDesa as $penduduk) { ?>
                                <i class="ti-arrow-up text-primary"></i> <span class="counter text-primary"><?php echo $penduduk ?></span></li>
                                <?php } ?></h3>
                            <p>Penduduk</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <?php } }?>
                <?php foreach ($user as $key) { ?>
                <?php if($key['level'] == '1') { ?> 
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h3>
                                <?php foreach ($jumlahpenduduk as $penduduk) { ?>
                                <i class="ti-arrow-up text-primary"></i> <span class="counter text-primary"><?php echo $penduduk ?></span></li>
                                <?php } ?></h3>
                            <p>Jumlah Penduduk</p>
                        </div>
                        <div class="sparkline-bar-stats1">9,4,8,6,5,6,4,8,3,5,9,5</div>
                    </div>
                </div>
                <?php } }?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                           <h3> 
                                <?php foreach ($jumlahbantuan as $bantuan) { ?>
                                <i class="ti-arrow-up text-primary"></i> <span class="counter text-primary"><?php echo $bantuan ?></span></li>
                                <?php } ?></h3>
                            <p>Jumlah Bantuan Sosial</p>
                        </div>
                        <div class="sparkline-bar-stats3">4,2,8,2,5,6,3,8,3,5,9,5</div>
                    </div>
                </div>

                <?php foreach ($user as $key) { ?>
                <?php if($key['level'] == '2') { ?> 
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h3>
                                <?php foreach ($jumlahsurat as $surat) { ?>
                                <i class="ti-arrow-up text-primary"></i> <span class="counter text-primary"><?php echo $surat ?></span></li>
                                <?php } ?></h3>
                            <p>Jumlah Surat</p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                        </div>
                    </div>
                <?php } }?>
                <?php foreach ($user as $key) { ?>
                <?php if($key['level'] == '1') { ?> 
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h3>
                                <?php foreach ($jumlahakun as $login) { ?>
                                <i class="ti-arrow-up text-primary"></i> <span class="counter text-primary"><?php echo $login ?></span></li>
                                <?php } ?></h3>
                            <p>Akun Terdaftar</p>
                        </div>
                        <div class="sparkline-bar-stats4">2,4,8,4,5,7,4,7,3,5,7,5</div>
                        </div>
                    </div>
                     <?php } }?>
                </div>
            </div>
        </div>
    </div>
</div>
      <!-- /.container-fluid

      </div>
      <!-- End of Main Content -->
       <?php foreach ($user as $key) { ?>
       <?php if($key['level'] == '1') { ?> 
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span><div class="contact-dt">
                          <h5>
                            <ul class="contact-list widget-contact-list">
                              <font color="blue">
                               <li>  <font color="blue"><i class="notika-icon notika-phone"> (0341) 592200</i></li>
                               <li>  <font color="blue"><i class="notika-icon notika-mail"> dinsos.batukota.go.id</i></li>
                               <li>  <font color="blue"><i class="notika-icon notika-map"> Balai Kota Among Tani, Jl. Panglima Sudirman No.507, Pesanggrahan, Kec. Batu, Kota Batu, Jawa Timur 65314</i></li>
                            </ul>
                          </font>
                          </h5>
                        </div>
                      </span>
                  </div>
              </div>
         </footer>
        <?php } }?>

       <?php foreach ($user as $key) { ?>
       <?php if($key['level'] == '2') { ?> 
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span><div class="contact-dt">
                          <h5>
                            <ul class="contact-list widget-contact-list">
                              <font color="blue">
                               <li>  <font color="blue"><i class="notika-icon notika-phone"> (0341) 592200</i></li>
                               <li>  <font color="blue"><i class="notika-icon notika-mail"> dinsos.batukota.go.id</i></li>
                               <li>  <font color="blue"><i class="notika-icon notika-map"> Balai Kota Among Tani, Jl. Panglima Sudirman No.507, Pesanggrahan, Kec. Batu, Kota Batu, Jawa Timur 65314</i></li>
                            </ul>
                          </font>
                          </h5>
                        </div></span>
                      </div>
                    </div>
                  </footer>
                  <?php } }?>
      <!-- End of Footer -->

                </div>
    <!-- End of Content Wrapper -->

              </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  
   <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda Akan Meninggalkan Halaman Ini?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
          <a class="btn btn-primary" href="<?php echo base_url('index.php/logout/out')?>">Ya</a>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

 <script src="<?php echo base_url() ?>assets2/js/vendor/jquery-1.12.4.min.js"></script>
  
  <!-- counterup JS
        ============================================ -->
 <script src="<?php echo base_url() ?>assets2/js/counterup/jquery.counterup.min.js"></script>
 <script src="<?php echo base_url() ?>assets2/js/counterup/waypoints.min.js"></script>
 <script src="<?php echo base_url() ?>assets2/js/counterup/counterup-active.js"></script>
   
  <!-- sparkline JS
        ============================================ -->
 <script src="<?php echo base_url() ?>assets2/js/sparkline/jquery.sparkline.min.js"></script>
 <script src="<?php echo base_url() ?>assets2/js/sparkline/sparkline-active.js"></script>
  
  <!--  animation JS
        ============================================ -->
 <script src="<?php echo base_url() ?>assets2/js/animation/animation-active.js"></script>
  
</body>

</html>
