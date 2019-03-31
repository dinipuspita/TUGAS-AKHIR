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
          <h1 class="h3 mb-2 text-gray-800">Form I. Pengenalan Tempat</h1><br>
        
       <?php echo form_open('ListPengenalantempat/create'); ?> 
        
        <?php echo validation_errors(); ?>

                          
             <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->
              <div class="card shadow mb-4">
               <!--  <div class="card-header py-3"> -->
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Pengenalan Tempat</h6>
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
                             <div class="form-element-list">
                        <div class="row">
                        <div class="basic-tb-hd">
                           <h2><font color="red"><i><option value="">*Wajib diisi</option></i></font></h2><br>

                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                      <div class="nk-int-st">
                                    <font color="red"><i><option value="">*Provinsi</option></i></font>
                                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>

           <!--                 <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h4>Data Penduduk</h4><br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div> -->
                           <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Kabupaten</option></i></font>
                                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="kabupaten" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                           <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Kecamatan</option></i></font>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="kecamatan" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                           <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                         <i class="notika-icon notika-support"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Nama SLS</option></i></font>
                                        <input type="text" class="form-control" id="nama_sls" name="nama_sls" placeholder="nama_sls" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                           <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Alamat</option></i></font>
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                           <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*No Urut RT</option></i></font>
                                        <input type="number" class="form-control" id="no_urut_rt" name="no_urut_rt" placeholder="no_urut_rt" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                           <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                         <i class="notika-icon notika-support"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Nama KRT (Kepala Rumah Tangga)</option></i></font>
                                        <input type="text" class="form-control" id="nama_krt" name="nama_krt" placeholder="nama_krt" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                           <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                           <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*jumlah ART (Anggota Rumah Tangga</option></i></font>
                                        <input type="number" class="form-control" id="jumlah_ART" name="jumlah_ART" placeholder="jumlah_ART" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                           <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                         <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah Keluarga</option></i></font>
                                        <input type="number" class="form-control" id="jumlah_keluarga" name="jumlah_keluarga" placeholder="jumlah_keluarga" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                           <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                           <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Nomor KK Setiap ART (Anggota Rumah Tangga)</option></i></font>
                                        <input type="text" class="form-control" id="no_kk_setiap_ART" name="no_kk_setiap_ART" placeholder="no_kk_setiap_ART" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                            <div class="row">
                           <!--      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-calendar"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Tanggal Verivali</option></i></font>
                                        <input type="date" class="form-control" id="tanggal_verivali" name="tanggal_verivali" placeholder="Tanggal Verivali" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div> -->
                       <!--   <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-calendar"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Tanggal Pemeriksaan</option></i></font>
                                        <input type="date" class="form-control" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" placeholder="Tanggal Pemeriksaan" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div> -->
                          <!--  <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                                 <font color="red"><i><option value="">*Hasil Verivali</option></i></font>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="form-control" name="hasil_verivali">
                                          <option value="">-----Pilih-----</option>
                                                <option value="1.Selesai Verivali">1.Selesai Verivali</option>
                                                <option value="2.Rumah Tangga Tidak Dtemukan">2.Rumah Tangga Tidak Dtemukan</option>
                                                <option value="3.Rumah Tangga/Bangunan Sensus Sudah Tidak Ada<">3.Rumah Tangga/Bangunan Sensus Sudah Tidak Ada</option>
                                                <option value="Bagian dari Rumah Tangga Sesuai Prelist">Bagian dari Rumah Tangga Sesuai Prelist</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>

 -->
                                         <!--    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required autofocus />
                                    </div>
                                </div>
                            </div> -->
                           <!--  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-flag"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="no_urut_rt" name="no_urut_rt" placeholder="No Urut RT" required autofocus />
                                    </div>
                                </div>
                            </div> -->
                            <!--   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="nk-int-mk sl-dp-mn sm-res-mg-t-10">
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="form-control" name="status">
                                            <optgroup label="Status">
                                                <option value="Belum Menikah">Belum Menikah</option>
                                                <option value="Sudah Menikah">Sudah Menikah</option>
                                            </optgroup>
                                        </select>
                                </div>
                            </div> -->
                       <!--  </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-map"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="nama_krt" name="nama_krt" placeholder="nama_krt" required autofocus />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-flag"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="jumlah_ART" name="jumlah_ART" placeholder="jumlah_ART" required autofocus />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-flag"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="jumlah_keluarga" name="jumlah_keluarga" placeholder="jumlah_keluarga" required autofocus />
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-flag"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="no_kk_setiap_ART" name="no_kk_setiap_ART" placeholder="no_kk_setiap_ART" required autofocus />
                                    </div>
                                </div>
                            </div>
 -->

                           <!--  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-dollar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="pendapatan" name="pendapatan" placeholder="Penghasilan / Bulan" required autofocus />
                                    </div>
                                </div>
                            </div> -->
                     <!--    <div class="row">
                      <div class="col-lg-12 col-md-4 col-sm-4 col-xs-12">
                        <div class="form-group">
                          <font color="red">*Jenis Kelamin</font>
                          <br>
                          <input type="radio" value="Perempuan" checked="checked" id="jenis_kelamin" name="jenis_kelamin">Perempuan
                          <input type="radio" value="Laki-laki" id="jenis_kelamin" name="jenis_kelamin">Laki-laki
                        </div>
                      </div>
                    </div> -->
                 <!--  </div>
                     <font color="red"><i>* Wajib diisi</i></font>
               </div>
          </div>
      </div>
 -->
            <!-- <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h4>Data Tempat Tinggal</h4><br>
                        <div class="row">
                             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required autofocus />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="RT" name="RT" placeholder="RT" required autofocus />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="RW" name="RW" placeholder="RW" required autofocus />
                                    </div>
                                </div>
                            </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                             <div class="bootstrap-select fm-cmp-mg">
                                  <font color="red"><i><option value="">*Asal Desa</option></i></font>
                                        <select name="fk_desa" class="form-control">
                                        <option value="">Pilih Desa</option>
                                            <?php foreach ($desa as $data ){ ?>
                                            <option value="<?php echo $data->id_desa; ?>"><?php echo $data->nama_desa ?>
                                         </option>
                                             <?php } ?>
                                    </select>
                                    </div>
                                </div>
                            </div> -->
                         <!--  <font color="red"><i>* Wajib diisi</i></font> -->
                        <center>
                             <center>
                            <button type="submit" class="btn btn-primary">Submit <span class="glyphicon glyphicon-ok"></span></button>
                            <a href="<?php echo base_url('index.php/ListPenduduk')?>"class="btn btn-danger">Back</a></td>
                        </center>
                    <br>
                                 </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
       






















                          <!--   <br>
                              <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Provinsi</option></i></font>
                                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" required autofocus />
                                    </div>
                                </div>
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
                                        <font color="red"><i><option value="">*Kabupaten/Kota</option></i></font>
                                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten" required autofocus />
                                    </div>
                                </div>
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
                                        <font color="red"><i><option value="">*Kecamatan</option></i></font>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <br> -->
                       <!--  <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Desa/Kelurahan</option></i></font>
                                        <input type="text" class="form-control" id="desa" name="desa" placeholder="Desa/Kelurahan" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <br> -->
                        <!-- <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Nama SLS</option></i></font>
                                        <input type="text" class="form-control" id="nama_sls" name="nama_sls" placeholder="Nama SLS" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Nomor urut Rumah Tangga(dari Prelist)</option></i></font>
                                        <input type="text" class="form-control" id="no_urut_rt" name="no_urut_rt" placeholder="Nomor Urut RT" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <br>
                         <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Alamat</option></i></font>
                                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Nama KRT</option></i></font>
                                        <input type="text" class="form-control" id="nama_krt" name="nama_krt" placeholder="Nama KRT" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah ART</option></i></font>
                                        <input type="text" class="form-control" id="jumlah_ART" name="jumlah_ART" placeholder="Jumlah ART" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah Keluarga</option></i></font>
                                        <input type="text" class="form-control" id="jumlah_keluarga" name="jumlah_keluarga" placeholder="Jumlah Keluarga" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row">
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*No KK setiap keluarga dalam rumah tangga</option></i></font>
                                        <input type="text" class="form-control" id="no_kk_setiap_ART" name="no_kk_setiap_ART" placeholder="Nomor KK Setiap ART" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div> -->
                           <!--  <br>
                            <br>
                            <br>
                            <center>
                            <button type="submit" class="btn btn-primary">Submit <span class="glyphicon glyphicon-ok"></span>
                                </button>
                            <a href="<?php echo base_url('index.php/ListPengenalantempat')?>"class="btn btn-danger">Back</a></td>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div> -->


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
