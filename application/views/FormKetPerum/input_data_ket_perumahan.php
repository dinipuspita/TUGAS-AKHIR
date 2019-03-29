 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
<!--   <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/datatable/datatables.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/owl.transitions.css">
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/normalize.css">
  <!-- wave CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/wave/waves.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/wave/button.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/scrollbar/jquery.mCustomScrollbar.min.css">
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
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
       
        </div>
        <div class="sidebar-brand-text mx-3"><img src="<?php echo base_url() ?>assets/img/satu.png" width="50px" height="55px"/></div>
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
            <a class="collapse-item" href='<?php echo base_url("index.php/listSurat"); ?>'">Data Surat</a>
            <a class="collapse-item" href='<?php echo base_url("index.php/ListFilterSurat/create"); ?>'">Filter Penerima Surat</a>
          </div>
        </div>
      </li>


       <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href='<?php echo base_url("index.php/ListPengenalantempat/create"); ?>'>
          <i class="fas fa-fw fa-folder"></i>
          <span>Form Bantuan</span></a>
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
            <a class="collapse-item" href='<?php echo base_url("index.php/Register/create"); ?>'>Registrasi Desa</a>
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
            <a class="collapse-item" href="utilities-color.html">Data Bantuan</a>
          </div>
        </div>
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


        <!--   <div align="right">
            <span style="color:teal;font-size:12px;">Lembaga Swadaya Masyarakat (LSM) Jawa Timur Balaikota Amongtani Gedung B 
                                    <p>Lantai 2, Jl.Panglima Sudirman No.507, Pesanggrahan Kec.Batu, Kota Batu, Jawa Timur 65314</div> -->

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-warning" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

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

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
             <!--    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Form III. Keterangan Perumahan</h1><br>
        
       <?php echo form_open('ListKeteranganPerumahan/create'); ?> 
        
        <?php echo validation_errors(); ?>

                          
             <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
               <!--  <div class="card-header py-3"> -->
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Keterangan Perumahan</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                 <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Pilih Form:</div>
                      <a class="dropdown-item" href='<?php echo base_url("index.php/ListPengenalantempat/create"); ?>'>Form 1</a>
                      <a class="dropdown-item" href='<?php echo base_url("index.php/ListKeteranganPengesahan/create"); ?>'>Form 2</a>
                      <a class="dropdown-item" href='<?php echo base_url("index.php/ListKeteranganPerumahan/create"); ?>'>Form 3</a>
                      <a class="dropdown-item" href='<?php echo base_url("index.php/ListSosialEkonomi/create"); ?>'>Form 4</a>
                      <a class="dropdown-item" href='<?php echo base_url("index.php/ListKepemilikanAset/create"); ?>'>Form 5</a>
                    </div>
                  </div>
                </div>
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2><font color="red"><i><option value="">*Wajib diisi</option></i></font></h2><br>
                               <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                                 <font color="red"><i><option value="">*Pilih Data Penduduk</option></i></font>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select name="NIK" class="form-control">
                                        <option value="">-----Pilih-----</option>
                                            <?php foreach ($penduduk as $data ){ ?>
                                            <option value="<?php echo $data['NIK']; ?>"><?php echo $data['NIK'] ?> | <?php echo $data['nama_penduduk']; ?>
                                         </option>
                                             <?php } ?>
                                    </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                             <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                                 <font color="red"><i><option value="">*Status Penguasaan Bangunan Tempat Tinggal yang Ditempati</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="status_bangunan">
                                          <option value="">-----Pilih-----</option>
                                                <option value="1.Milik Sendiri">1.Milik Sendiri</option>
                                                <option value="2.Kontrak/Sewa">2.Kontrak/Sewa</option>
                                                <option value="3.Bebas Sewa">3.Bebas Sewa</option>
                                                <option value="3.Dinas">3.Dinas</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                                 <font color="red"><i><option value="">*Status Lahan Tempat Tinggal yang Ditempati</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="status_lahan">
                                          <option value="">-----Pilih-----</option>
                                                <option value="1.Milik Sendiri">1.Milik Sendiri</option>
                                                <option value="2.Milik Orang Lain">2.Milik Orang Lain</option>
                                                <option value="3.Tanah Negara">3.Tanah Negara</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Luas Lantai / m3</option></i></font>
                                        <input type="text" class="form-control" id="luas_lantai" name="luas_lantai" placeholder="Luas Lantai" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                                 <font color="red"><i><option value="">*Jenis Lantai Terluas</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="jenis_lantai_terluas">
                                          <option value="">-----Pilih-----</option>
                                                <option value="01.Marmer/Granit">01.Marmer/Granit</option>
                                                <option value="02.Keramik">02.Keramik</option>
                                                <option value="03.Parket/vinil/permadani">03.Parket/vinil/permadani</option>
                                                <option value="04.Ubin/Tegel/Terasero">04.Ubin/Tegel/Terasero</option>
                                                <option value="05.Kayu/Papan Kualitas Tinggi">05.Kayu/Papan Kualitas Tinggi</option>
                                                <option value="06.Sementara/Bata Merah">06.Sementara/Bata Merah</option>
                                                <option value="07.Bambu">07.Bambu</option>
                                                <option value="08.Kayu/Papan Kualitas Rendah">08.Ubin/Tegel/Terasero</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                                 <font color="red"><i><option value="">*Jenis Dinding Terluas</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="jenis_dinding_terluas">
                                          <option value="">-----Pilih-----</option>
                                                <option value="1.Tembok">1.Tembok</option>
                                                <option value="2.Plesteran/Anyaman Bambu/Kawat">2.Plesteran/Anyaman Bambu/Kawat</option>
                                                <option value="3.Kayu">3.Kayu</option>
                                                <option value="4.Anyaman Bambu">4.Anyaman Bambu</option>
                                                <option value="5.Batang Kayu">5.Batang Kayu</option>
                                                <option value="6.Bambu">6.Bambu</option>                                             
  
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                             <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                                 <font color="red"><i><option value="">*Jika berkode 1,2 atau 3, kondisi dinding</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="kondisi_dinding">
                                          <option value="">-----Pilih-----</option>
                                                <option value="1.Bagus/Kualitas Tinggi">1.Bagus/Kualitas Tinggi</option>
                                                <option value="2.Jelek/Kualitas Rendah">2.Jelek/Kualitas Rendah</option>
                                                <option value="3.Tidak Ada">3.Tidak Ada</option>               
                                              </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                             <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                                 <font color="red"><i><option value="">*Jenis Atap Terluas</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="jenis_atap">
                                          <option value="">-----Pilih-----</option>
                                                <option value="01.Beton/Genteng Beton">01.Beton/Genteng Beton</option>
                                                <option value="02.Genteng Keramik">02.Genteng Keramik</option>
                                                <option value="03.Genteng Metal">03.Genteng Metal</option>
                                                <option value="04.Genteng Tanah Liat">04.Genteng Tanah Liat</option>
                                                <option value="05.Asbes">05.Asbes</option>
                                                <option value="06.Seng">06.Seng</option>     
                                                <option value="07.Sirap">07.Sirap</option>
                                                <option value="08.Bambu">08.Bambu</option>
                                                <option value="09.Jerami/Ijuk/Daun-daunan/Rumbia">09.Jerami/Ijuk/Daun-daunan/Rumbia</option>                                           
                                              </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                             <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                            <font color="red"><i><option value="">*Jika Berkode 1,2,3,4,5,6, atau 7 kondisi atap</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="kondisi_atap">
                                          <option value="">-----Pilih-----</option>
                                                 <option value="1.Bagus/Kualitas Tinggi">1.Bagus/Kualitas Tinggi</option>
                                                 <option value="2.Jelek/Kualitas Rendah">2.Jelek/Kualitas Rendah</option>
                                                 <option value="3.Tidak Ada">3.Tidak Ada</option>       
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                              <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah Kamar Tidur</option></i></font>
                                        <input type="text" class="form-control" id="jumlah_kamar" name="jumlah_kamar" placeholder="Jumlah Kamar Tidur" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                            <font color="red"><i><option value="">*Sumber Air Minum</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="sumber_air_minum">
                                          <option value="">-----Pilih-----</option>
                                                 <option value="01.Air Kemasan Bermerk">01.Air Kemasan Bermerk</option>
                                                 <option value="02.Air Isi Ulang">02.Air Isi Ulang</option>                
                                                 <option value="03.Leding Meteran">03.Leding Meteran</option>               
                                                 <option value="04.Leding Eceran">04.Leding Eceran</option>   
                                                 <option value="05.Sumur Bor/Pompa">05.Sumur Bor/Pompa</option>               
                                                 <option value="06.Sumur Terlindung">06.Sumur Terlindung</option>  
                                                 <option value="07.Sumur Tak Terlindung">07.Sumur Tak Terlindung</option>
                                                 <option value="08.Mata Air Terlindung">08.Mata Air Terlindung</option>  
                                                 <option value="09.Mata Air Tak Terlindung">09.Mata Air Tak Terlindung</option>
                                                 <option value="10.Air Sungai/Danau/Waduk">10.Air Sungai/Danau/Waduk</option>
                                                 <option value="11.Air Hujan">11.Air Hujan</option>
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                             <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-credit-card"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jika berkode 3 tulis No. ID Pelanggan(PAM/PDAM/BPAM/.....*)</option></i></font>
                                        <input type="text" class="form-control" id="kode_pelanggan_air" name="kode_pelanggan_air" placeholder="Jenis Leding Meteran-ID Pelanggan Air" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                          <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                            <font color="red"><i><option value="">*Cara Memperoleh Air</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="cara_memperoleh_air">
                                          <option value="">-----Pilih-----</option>
                                                 <option value="1.Membeli Eceran">1.Membeli Eceran</option>
                                                 <option value="2.Langganan">2.Langganan</option>   
                                                 <option value="3.Tidak Membeli">3.Tidak Membeli</option>               
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                             <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                            <font color="red"><i><option value="">*Sumber Penerangan Utama</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="sumber_penerangan">
                                          <option value="">-----Pilih-----</option>
                                                 <option value="1.Listrik PLN">1.Listrik PLN</option>
                                                 <option value="2Listrik Non PLN">2Listrik Non PLN</option>                
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                             <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                            <font color="red"><i><option value="">*Jika Berkode 1, daya terpasang</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="daya_terpasang">
                                          <option value="">-----Pilih-----</option>
                                                 <option value="1. 450watt">1. 450watt</option>
                                                 <option value="2. 900watt">2. 900watt</option>                
                                                 <option value="3. 1.300watt">3. 1.300watt</option>               
                                                 <option value="4. 2.200watt">4. 2.200watt</option>   
                                                 <option value="5. 2.200watt">5. 2.200watt</option>               
                                                 <option value="6.Tanpa Meteran">6.Tanpa Meteran</option>  
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                              <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-credit-card"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jika berkode 1 tulis No. ID Pelanggan(ID PLN*)</option></i></font>
                                        <input type="text" class="form-control" id="id_pln" name="id_pln" placeholder="ID PLN" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                             <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                            <font color="red"><i><option value="">*Bahan Bakar/Energi Utama untuk Memasak</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="bahan_bakar_memasak">
                                          <option value="">-----Pilih-----</option>
                                                 <option value="1.Listrik">1.Listrik</option>
                                                 <option value="2.Gas > 3 kg">2.Gas > 3 kg</option>                
                                                 <option value="3.Gas 3 kg">3.Gas 3 kg</option>               
                                                 <option value="4.Gas Kota/Biogas">4.Gas Kota/Biogas</option>   
                                                 <option value="5.Minyak Tanah">5.Minyak Tanah</option>               
                                                 <option value="6.Briket">6.Sumur Terlindung</option>  
                                                 <option value="7.Arang">7.Arang</option>
                                                 <option value="8.Kayu Bakar">8.Kayu Bakar</option>  
                                                 <option value="9.Tidak Memasak dirumah">9.Tidak Memasak dirumah</option>
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                             <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-credit-card"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jika berkode 4 tulis No. ID Pelanggan(PGN/Gas Kota/.....*)</option></i></font>
                                        <input type="text" class="form-control" id="id_pelanggan_gas" name="id_pelanggan_gas" placeholder="Jenis Gas-ID Pelanggan" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                             <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                            <font color="red"><i><option value="">*Penggunaan Fasilitas Tempat Buang Air Besar</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="fasilitas_bab">
                                          <option value="">-----Pilih-----</option>
                                                 <option value="1.Sendiri">1.Sendiri</option>
                                                 <option value="2.Bersama">2.Bersama</option>                
                                                 <option value="3.Umum">3.Umum</option>          
                                                 <option value="4.Tidak Ada">4.Tidak Ada</option>   
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                                <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                            <font color="red"><i><option value="">*Jenis Kloset</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="jenis_kloset">
                                          <option value="">-----Pilih-----</option>
                                                 <option value="1.Leher Angsa">1.Leher Angsa</option>
                                                 <option value="2.Cemplung /Cubluk">2.Plengsengan</option>                
                                                 <option value="3.Tidak Pakai">3.Tidak Pakai</option>               
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                                <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                            <font color="red"><i><option value="">*Tempat Pembuangan Akhir Tinja</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="tempat_PAT">
                                          <option value="">-----Pilih-----</option>
                                                 <option value="1.Tangki">1.Tangki</option>
                                                 <option value="2.SPAL">2.SPAL</option>                
                                                 <option value="3.Lubang Tanah">3.Lubang Tanah</option>               
                                                 <option value="4.Kolam/Sawah/Sungai">4.Kolam/Sawah/Sungai</option>   
                                                 <option value="5.Pantai/Tanah">5.Pantai/Tanah</option>               
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <center>
                            <button type="submit" class="btn btn-primary">Submit <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            <a href="<?php echo base_url('index.php/listKepalaDesa')?>"class="btn btn-danger">Back</a></td>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>


<?php echo form_close(); ?>
      
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
    <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('index.php/logout/out')?>">Logout</a>
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

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>assets/js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url() ?>assets/js/demo/chart-pie-demo.js"></script>


   <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>    
   <!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
   <!-- Menu Plugin JavaScript -->
   <script src="<?php echo base_url() ?>assets/js/sidebar-nav.min.js"></script>
   <!--slimscroll JavaScript -->
   <script src="<?php echo base_url() ?>assets/js/jquery.slimscroll.js"></script>
   <!--Wave Effects -->
   <script src="<?php echo base_url() ?>assets/js/waves.js"></script>
   <!-- Custom Theme JavaScript -->
   <script src="<?php echo base_url() ?>assets/js/custom.min.js"></script>

   <script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
   <script src="<?php echo base_url() ?>assets/js/datatables.min.js"></script>
   <script src="<?php echo base_url() ?>assets/js/datatables.bootstrap.min.js"></script>

   <script type="text/javascript">
   $(document).ready(function(){
   $('#example').DataTable();
   } );
   </script>    
    
    <script src="<?php echo base_url() ?>assets2/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/flot/flot-active.js"></script>
    <!-- knob JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/knob/jquery.appear.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/knob/knob-active.js"></script>
   <!--  Chat JS
    ============================================ -->
    <script src="js/chat/jquery.chat.js"></script>
    <!--  wizard JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/wizard/wizard-active.js"></script>
    <!--  todo JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/todo/jquery.todo.js"></script>
  <!--  wave JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/wave/waves.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/wave/wave-active.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/main.js"></script>
</body>

</html>
