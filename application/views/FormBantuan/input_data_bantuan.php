<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Form Bantuan</title>

  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/satu.png">

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
    <script src="<?php echo base_url() ?>assets2/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- meanmenu CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/animate.css">
    <!-- summernote CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/summernote/summernote.css">
    <!-- Range Slider CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/themesaller-forms.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/normalize.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/notika-custom-icon.css">
    <!-- bootstrap select CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/bootstrap-select/bootstrap-select.css">
    <!-- datapicker CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/datapicker/datepicker3.css">
    <!-- Color Picker CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/color-picker/farbtastic.css">
    <!-- wave CSS
    ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets2/css/wave/waves.min.css">
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
    <script src="<?php echo base_url() ?>assets2/js/vendor/modernizr-2.8.3.min.js"></script>
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


        <!--   <div align="right">
            <span style="color:teal;font-size:12px;">Lembaga Swadaya Masyarakat (LSM) Jawa Timur Balaikota Amongtani Gedung B 
                                    <p>Lantai 2, Jl.Panglima Sudirman No.507, Pesanggrahan Kec.Batu, Kota Batu, Jawa Timur 65314</div> -->

          <!-- Topbar Search -->
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-warning" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
 -->
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><h5>Anda Login Sebagai <font color="blue"><?php echo $session_data['username']; ?></h5></font></span>
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

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
 <!--          <h1 class="h3 mb-2 text-gray-800">Data Penduduk</h1>
          <p class="mb-4">Data Penduduk Kurang Mampu Kota Batu</a>.</p> -->
 <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Form Edit Data Pendukung</h2>
                                        <p>Form Edit Data Pendukung Penduduk Kota Batu<span class="bread-ntd"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

  
     <?php echo form_open('ListFormBantuan/update/'.$this->uri->segment(3)); ?>
        
      <?php echo validation_errors(); ?>

                  
   <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Form 1. Pengenalan Tempat</h2><br>
                        <div class="row">
                           <!--  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                </div>
                                <div class="bootstrap-select fm-cmp-mg">
                                    <select class="selectpicker" value="NIK" name="NIK" data-live-search="true">
                                      <option value="">-----Pilih Penduduk (NIK & Nama)-----</option>
                                        <?php foreach ($penduduk as $data ){ ?>
                                          <option value="<?php echo $data['NIK']; ?>"><?php echo $data['NIK'] ?> | <?php echo $data['nama_penduduk']; ?>
                                </option>
                                             <?php } ?>
                                </select>
                              </div>
                            </div>
                          </div>
                       -->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi" required autofocus />
                                    </div>
                                </div>
                            </div>
                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <!-- <font color="blue"><i>* Jumlah Keluarga</i></font> -->
                                    <input type="text" class="form-control" id="jumlah_keluarga" name="jumlah_keluarga" placeholder="Jumlah Keluarga"  value="<?php echo $kepemilikan_aset[0]['tanggungan_keluarga']?> Orang" readonly required autofocus />
                                    </div>
                                </div>
                              </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="Kabupaten" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Kecamatan" required autofocus />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="nama_sls" name="nama_sls" placeholder="Nama SLS (Satuan Lingkungan Setempat)" value="RT <?php echo $penduduk[0]['RT']?> RW <?php echo $penduduk[0]['RW']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"  value="<?php echo $penduduk[0]['alamat']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="number" class="form-control" id="no_urut_rt" name="no_urut_rt" placeholder="Nomor Urut RT" value="<?php echo $penduduk[0]['NO_KK']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="nama_krt" name="nama_krt" placeholder="Nama Kepala rumah Tangga" required autofocus />
                                    </div>
                                </div>
                            </div>

                               
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="jumlah_ART" name="jumlah_ART" placeholder="Jumlah Anggota Rumah Tangga" required autofocus />
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                     <br>
                     <font color="red"><i>* Wajib diisi</i></font>
               </div>
          </div>
   
     </div>
     <br>
     <br>

<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Form 2. Keterangan Pengesahan</h2><br>
                        <div class="row">
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Nama Petugas" required autofocus />
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <option value="">*Tanggal Verivali</option></i></font><br>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-calendar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="date" class="form-control" id="tanggal_verivali" name="tanggal_verivali" placeholder="Tanggal Verivali" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                    <select class="selectpicker" name="hasil_verivali">
                                          <option value="">-----Hasil Verivali-----</option>
                                             <option value="1.Selesai Verivali">1.Selesai Verivali</option>
                                                <option value="2.Rumah Tangga Tidak Ditemukan">2.Rumah Tangga Tidak Dtemukan</option>
                                                <option value="3.Rumah Tangga/Bangunan Sensus Sudah Tidak Ada<">3.Rumah Tangga/Bangunan Sensus Sudah Tidak Ada</option>
                                                <option value="Bagian dari Rumah Tangga Sesuai Prelist">Bagian dari Rumah Tangga Sesuai Prelist</option>
                                            </optgroup>                                        
                                      </select>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <option value="">*Tanggal Pemeriksaan</option></i></font><br>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-calendar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="date" class="form-control" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" placeholder="Tanggal Pemeriksaan" required autofocus />
                                    </div>
                                </div>
                              </div>  
                          </div>
                        </div>

                        <br>   
                         <font color="red"><i>* Wajib diisi</i></font>

                    </div>
                  </div>
                </div>
              </div>
            <br>
            <br>


          <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Form 3. Keterangan Perumahan</h2><br>
                        
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                    <select class="selectpicker" name="status_bangunan">
                                           <option value="">-----Status Bangunan-----</option>
                                                <option value="1.Milik Sendiri">1.Milik Sendiri</option>
                                                <option value="2.Kontrak/Sewa">2.Kontrak/Sewa</option>
                                                <option value="3.Bebas Sewa">3.Bebas Sewa</option>
                                                <option value="4.Dinas">4.Dinas</option>
                                                <option value="5.Lainnya">5.Lainnya</option>
                                            </optgroup>                                        
                                      </select>
                                </div>
                            </div>
                     <!--    </div> -->

                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                    <select class="selectpicker" name="status_lahan">
                                           <option value="">-----Status Lahan-----</option>
                                                <option value="1.Milik Sendiri">1.Milik Sendiri</option>
                                                <option value="2.Kontrak/Sewa">2.Kontrak/Sewa</option>
                                                <option value="3.Bebas Sewa">3.Bebas Sewa</option>
                                                <option value="4.Dinas">4.Dinas</option>
                                                <option value="5.Lainnya">5.Lainnya</option>
                                            </optgroup>                                        
                                      </select>
                                </div>
                            </div>
                        
                      
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="number" class="form-control" id="luas_lantai" name="luas_lantai" placeholder="Luas Lantai/m2" required autofocus />
                                    </div>
                                </div>
                            </div>

                               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                    <select class="selectpicker" name="jenis_lantai_terluas">
                                           <option value="">-----Jenis Lantai-----</option>
                                                <option value="01.Marmer/Granit">01.Marmer/Granit</option>
                                                <option value="02.Keramik">02.Keramik</option>
                                                <option value="03.Parket/vinil/permadani">03.Parket/vinil/permadani</option>
                                                <option value="04.Ubin/Tegel/Terasero">04.Ubin/Tegel/Terasero</option>
                                                <option value="05.Kayu/Papan Kualitas Tinggi">05.Kayu/Papan Kualitas Tinggi</option>
                                                <option value="06.Sementara/Bata Merah">06.Sementara/Bata Merah</option>
                                                <option value="07.Bambu">07.Bambu</option>
                                                <option value="08.Kayu/Papan Kualitas Rendah">08.Ubin/Tegel/Terasero</option>
                                                <option value="09.Tanah">09.Tanah</option>
                                                <option value="10.Lainnya">10.Lainnya</option>
                                            </optgroup>                                  
                                      </select>
                                </div>
                            </div>


                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                    <select class="selectpicker" name="jenis_dinding_terluas">
                                           <option value="">-----Jenis Dinding-----</option>
                                              <option value="1.Tembok">1.Tembok</option>
                                                <option value="2.Plesteran/Anyaman Bambu/Kawat">2.Plesteran/Anyaman Bambu/Kawat</option>
                                                <option value="3.Kayu">3.Kayu</option>
                                                <option value="4.Anyaman Bambu">4.Anyaman Bambu</option>
                                                <option value="5.Batang Kayu">5.Batang Kayu</option>
                                                <option value="6.Bambu">6.Bambu</option>
                                                 <option value="7.Lainnya">7.Lainnya</option>                                             
                                            </optgroup>                                 
                                      </select>
                                </div>
                            </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                    <select class="selectpicker" name="kondisi_dinding">
                                           <option value="">-----Kondisi Dinding-----</option>
                                               <option value="1.Bagus/Kualitas Tinggi">1.Bagus/Kualitas Tinggi</option>
                                                <option value="2.Jelek/Kualitas Rendah">2.Jelek/Kualitas Rendah</option>
                                                <option value="3.Tidak Ada">3.Tidak Ada</option>               
                                              </optgroup>                              
                                      </select>
                                </div>
                            </div>



                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                    <select class="selectpicker" name="jenis_atap">
                                           <option value="">-----Jenis Atap-----</option>
                                             <option value="01.Beton/Genteng Beton">01.Beton/Genteng Beton</option>
                                                <option value="02.Genteng Keramik">02.Genteng Keramik</option>
                                                <option value="03.Genteng Metal">03.Genteng Metal</option>
                                                <option value="04.Genteng Tanah Liat">04.Genteng Tanah Liat</option>
                                                <option value="05.Asbes">05.Asbes</option>
                                                <option value="06.Seng">06.Seng</option>     
                                                <option value="07.Sirap">07.Sirap</option>
                                                <option value="08.Bambu">08.Bambu</option>
                                                <option value="09.Jerami/Ijuk/Daun-daunan/Rumbia">09.Jerami/Ijuk/Daun-daunan/Rumbia</option>
                                                <option value="10.Lainnya">10.Lainnya</option>                                           
                                              </optgroup>                             
                                      </select>
                                </div>
                            </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                    <select class="selectpicker" name="kondisi_atap">
                                           <option value="">-----Kondisi Atap-----</option>
                                              <option value="1.Bagus/Kualitas Tinggi">1.Bagus/Kualitas Tinggi</option>
                                                 <option value="2.Jelek/Kualitas Rendah">2.Jelek/Kualitas Rendah</option>
                                                 <option value="3.Tidak Ada">3.Tidak Ada</option>       
                                             </optgroup>                             
                                      </select>
                                </div>
                            </div>


                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="number" class="form-control" id="jumlah_kamar" name="jumlah_kamar" placeholder="Jumlah Kamar" required autofocus />
                                    </div>
                                </div>
                            </div>

                       <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                    <select class="selectpicker" name="sumber_air_minum">
                                           <option value="">-----Sumber Air Minum-----</option>
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
                                                 <option value="12.Lainnya">12.Lainnya</option>
                                             </optgroup>                          
                                      </select>
                                </div>
                            </div>

                               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="kode_pelanggan_air" name="kode_pelanggan_air" placeholder="Jika berkode 3 tulis No. ID Pelanggan(PAM/PDAM/BPAM/.....*)" required autofocus />
                                    </div>
                                </div>
                            </div>

                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                             <select class="selectpicker" name="cara_memperoleh_air">
                                          <option value="">-----Cara Memperoleh Air-----</option>
                                                 <option value="1.Membeli Eceran">1.Membeli Eceran</option>
                                                 <option value="2.Langganan">2.Langganan</option>   
                                                 <option value="3.Tidak Membeli">3.Tidak Membeli</option>               
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>
                            


                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                      <select class="selectpicker" name="sumber_penerangan">
                                          <option value="">-----Sumber Pengerangan Utama-----</option>
                                                 <option value="1.Listrik PLN">1.Listrik PLN</option>
                                                 <option value="2.Listrik Non PLN">2.Listrik Non PLN</option>   
                                                   <option value="3.Bukan Listrik">2.Bukan Listrik</option>              
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>


                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="selectpicker" name="daya_terpasang">
                                          <option value="">-----Daya Terpasang-----</option>
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

                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="id_pln" name="id_pln" placeholder="Id PLN" required autofocus />
                                    </div>
                                </div>
                            </div>

                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="selectpicker" name="bahan_bakar_memasak">
                                          <option value="">-----Bahan Bakar Memasak-----</option>
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
                           

                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="text" class="form-control" id="id_pelanggan_gas" name="id_pelanggan_gas" placeholder="Jika berkode 4 tulis No. ID Pelanggan(PGN/Gas Kota/.....*)" required autofocus />
                                    </div>
                                </div>
                            </div>

                               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                   <div class="bootstrap-select fm-cmp-mg">
                                      <select class="selectpicker" name="fasilitas_bab">
                                          <option value="">-----Fasilitas BAB-----</option>
                                                 <option value="1.Sendiri">1.Sendiri</option>
                                                 <option value="2.Bersama">2.Bersama</option>                
                                                 <option value="3.Umum">3.Umum</option>          
                                                 <option value="4.Tidak Ada">4.Tidak Ada</option>   
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>



                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                              <select class="selectpicker" name="jenis_kloset">
                                          <option value="">-----Jenis Kloset-----</option>
                                                 <option value="1.Leher Angsa">1.Leher Angsa</option>
                                                 <option value="2.Plengsengan">2.Plengsengan</option>  
                                                 <option value="3.Cemplung/cubluk">3.Cemplung/cubluk</option>               
                                                 <option value="4.Tidak Pakai">4.Tidak Pakai</option>               
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>
                            


                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                            <select class="selectpicker" name="tempat_PAT">
                                          <option value="">-----Tempat Pembuangan Akhir Tinja-----</option>
                                                 <option value="1.Tangki">1.Tangki</option>
                                                 <option value="2.SPAL">2.SPAL</option>                
                                                 <option value="3.Lubang Tanah">3.Lubang Tanah</option>               
                                                 <option value="4.Kolam/Sawah/Sungai">4.Kolam/Sawah/Sungai</option>   
                                                 <option value="5.Pantai/Tanah">5.Pantai/Tanah</option>    
                                                  <option value="6.Pantai/Tanah">6.Lainnya</option>           
                                             </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                     <br>
                     <font color="red"><i>* Wajib diisi</i></font>
                  </div>
               </div>
            </div>
             </div>
     </div>
     <br>
     <br>
          <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Form 4. Keterangan Sosial Ekonomi</h2><br>
                        
                          <div class="row">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <input type="text" class="form-control" id="hub_kepala_keluarga" name="hub_kepala_keluarga" placeholder="Status Hubungan Keluarga"  value="<?php echo $penduduk[0]['status_hubungan_keluarga']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>

                  
                            
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                    <div class="bootstrap-select fm-cmp-mg">
                                      <select class="selectpicker" name="jenis_cacat">
                                          <option value="">-----Jenis Cacat-----</option>
                                                <option value="0.Tidak Cacat">0.Tidak Cacat</option>
                                                <option value="01.Tuna Daksa/Cacat Tubuh">01.Tuna Daksa/Cacat Tubuh</option>
                                                <option value="02.Tuna Netra/Buta">02.Tuna Netra/Buta</option>
                                                <option value="03.Tuna Rungu">03.Tuna Rungu</option>
                                                <option value="04.Tuna Wicara">04.Tuna Wicara</option>
                                                <option value="05.Tuna Rungu & Wicara">05.Tuna Rungu & Wicara</option>
                                                <option value="06.Tuna Netra & Cacat Tubuh">06.Tuna Netra & Cacat Tubuh</option>
                                                <option value="07.Tuna Netra, Rungu & Wicara">07.Tuna Netra, Rungu & Wicara</option>
                                                <option value="08.Tuna Rungu, Wicara & Cacat Tubuh">08.Tuna Rungu, Wicara & Cacat Tubuh</option>
                                                <option value="09.Tuna Rungu, Wicara, Netra & Cacat Tubuh">09.Tuna Rungu, Wicara, Netra & Cacat Tubuh</option>
                                                <option value="10.Cacat Mental retradasi">10.Cacat Mental retradasi</option>
                                                <option value="11.Mantan Penderita Gangguan Jiwa">11.Mantan Penderita Gangguan Jiwa</option>
                                                <option value="12.Cacat Fisik & Mental">12.Cacat Fisik & Mental</option>

                                            </optgroup>
                                        </select>
                                </div>
                            </div>
                            </div>
                        
                
                               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                    <select class="selectpicker" name="penyakit_kronis">
                                          <option value="">-----Penyakit Kronis-----</option>
                                                <option value="0.Tidak Ada">0.Tidak Ada</option>
                                                <option value="1.Hipertensi ( Tekanan Darah Tinggi)">1.Hipertensi ( Tekanan Darah Tinggi)</option>
                                                <option value="2.Rematik">2.Rematik</option>
                                                <option value="3.Asma">3.Asma</option>
                                                <option value="4.Masalah Jantung">4.Masalah Jantung</option>
                                                <option value="5.Diabetes(Kencing Manis)">5.Diabetes(Kencing Manis)</option>
                                                <option value="6.Tuberculosis(TBC)">6.Tuberculosis(TBC)</option>
                                                <option value="7.Stroke">7.Stroke</option>
                                                <option value="8.Kanker atau Tomor Ganas">8.Kanker atau Tomor Ganas</option>
                                                <option value="9.Lainya(gagal ginjal,paru-Paru Flek dan Sejenisnya">9.Lainya(gagal ginjal,paru-Paru Flek dan Sejenisnya</option>
                                            </optgroup>
                                        </select>
                                </div>
                            </div>
                          </div>

                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <input type="text" class="form-control" id="jenjang_pendidikan" name="jenjang_pendidikan" placeholder="Jenjang Pendidikan"  value="<?php echo $penduduk[0]['pendidikan']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                      

                               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                   <select class="selectpicker" name="lapangan_usaha">
                                          <option value="">-----Lapangan Usaha-----</option>
                                                <option value="1.Pertanian">1.Pertanian</option>
                                                <option value="2.Holtikultura">2.Holtikultura</option>
                                                <option value="3.Perkebunan">3.Perkebunan</option>
                                                <option value="4.Perikanan Tangkap">3.Perikanan Tangkap</option>
                                                <option value="5.Perikanan Budidaya">5.Perikanan Budidaya</option>
                                                <option value="6Peternakan.">6Peternakan.</option>
                                                <option value="7.Kehutanan & pertanian Lainya">7.Kehutanan & pertanian Lainya</option>
                                                <option value="8.Pertambangan/Penggalian">8.Pertambangan/Penggalian</option>
                                                <option value="9.Industri Pengolahan">9.Industri Pengolahan</option>
                                                <option value="10.Listrik & Gas">10.Listrik & Gas</option>
                                                <option value="11.Bangunan/Konstruksi">11.Bangunan/Konstruksi</option>
                                                <option value="12.Perdagangan">12.Perdagangan</option>
                                                <option value="13.Hotel & Rumah Makan">13.Hotel & Rumah Makan</option>
                                                <option value="14.Trasnportasi & Pergudangan">14.Trasnportasi & Pergudangan</option>
                                                <option value="15.Informasi & Komunikasi">15.Informasi & Komunikasi</option>
                                                <option value="16.Keuangan & Asuransi">16.Keuangan & Asuransi</option>
                                                <option value="17.Jasa Pendidikan">17.Jasa Pendidikan</option>
                                                <option value="18.Jasa Kesehatan">18.Jasa Kesehatan</option>
                                                <option value="19.Jasa Kemasyarakatan, Pemerintahan & Perseorangan">19.Jasa Kemasyarakatan, Pemerintahan & Perseorangan</option>
                                                <option value="20.Pemulung">20.Pemulung</option>

                                            </optgroup>
                                        </select>
                                </div>
                            </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                </div>
                                   <select class="selectpicker" name="status_kedudukan">
                                          <option value="">-----Status Kedudukan-----</option>
                                                <option value="1.Berusaha Sendiri">1.Berusaha Sendiri</option>
                                                <option value="2.Berusaha diBantu Buruh Tidak tetap/Tidak Dibayar">2.Berusaha diBantu Buruh Tidak tetap/Tidak Dibayar</option>
                                                <option value="3.Buruh/Karyawan/Pegawai Swasta">3.Buruh/Karyawan/Pegawai Swasta</option>
                                                <option value="3.PNS/TNI/Polri/BUMN/BUMD/Anggota Legislatif">3.PNS/TNI/Polri/BUMN/BUMD/Anggota Legislatif</option>
                                                <option value="4.Pekerja Bebas Pertanian">4.Pekerja Bebas Pertanian</option>
                                                <option value="5.Pekerja Bebas Non-Pertanian">5.Pekerja Bebas Non-Pertanian</option>
                                                <option value="6.Pekerja Keluarga/Tidak Dibayar">6.Pekerja Keluarga/Tidak Dibayar</option>
                                            </optgroup>
                                        </select>
                                </div>
                              </div>
                            </div>

                      
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                            <font color="red">*KPS/KKS</font>
                            <br>
                            <input type="radio" value="Ya" checked="checked" id="KKS" name="KKS">Ya
                            <input type="radio" value="Tidak" id="KKS" name="KKS">Tidak
                           </div>
                          </div>
                         

                         <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                            <font color="red">*KIS/PBI JKN</font>
                            <br>
                            <input type="radio" value="Ya" checked="checked" id="KIS" name="KIS">Ya
                            <input type="radio" value="Tidak" id="KIS" name="KIS">Tidak
                           </div>
                          </div>
                         

                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                            <font color="red">*KIP/BSM</font>
                            <br>
                            <input type="radio" value="Ya" checked="checked" id="KIP" name="KIP">Ya
                            <input type="radio" value="Tidak" id="KIP" name="KIP">Tidak
                           </div>
                          </div>   


                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="form-group">
                            <font color="red">*RASKIN/RASTRA</font>
                            <br>
                            <input type="radio" value="Ya" checked="checked" id="RASKIN" name="RASKIN">Ya
                            <input type="radio" value="Tidak" id="RASKIN" name="RASKIN">Tidak

                            <input type="hidden" class="form-control" id="NO_KK" name="NO_KK" placeholder="Nomor KK" value="<?php echo $penduduk[0]['NO_KK']?>" readonly required autofocus />

                         </div>
                       </div>
                      </div>
                      <font color="red"><i>* Wajib diisi</i></font>
                     </div>
                   </div>
                   <br>  
                  </div>
                </div>
               </div>

    
                <br>
                <br>


 <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-element-list">
                        <div class="basic-tb-hd">
                            <h2>Form 5. Kepemilikan Aset</h2><br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                    <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah Tabung Gas</option></i></font>
                                        <input type="number" class="form-control" id="jml_tabung_gas" name="jml_tabung_gas" placeholder="Jumlah Tabung Gas" required autofocus />
                                    </div>
                                </div>
                              </div>
                       
                       
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah AC</option></i></font>
                                        <input type="number" class="form-control" id="jml_AC" name="jml_AC" placeholder="jumlah AC" required autofocus />
                                    </div>
                                </div>
                            </div>
               
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah pemanas air</option></i></font>
                                        <input type="number" class="form-control" id="jml_pemanas_air" name="jml_pemanas_air" placeholder="jumlah pemanas_air" required autofocus />
                                    </div>
                                </div>
                            </div>
                            </div>
              
                      
                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah telepon rumah</option></i></font>
                                        <input type="number" class="form-control" id="jml_telepon_rumah" name="jml_telepon_rumah" placeholder="jumlah telepon_rumah" required autofocus />
                                    </div>
                                </div>
                          </div>

                   
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah televisi</option></i></font>
                                        <input type="number" class="form-control" id="jml_televisi" name="jml_televisi" placeholder="jumlah televisi" required autofocus />
                                    </div>
                                </div>
                            </div>
                  
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah emas / Gram</option></i></font>
                                        <input type="number" class="form-control" id="jml_emas" name="jml_emas" placeholder="jumlah emas" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>


                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah komputer</option></i></font>
                                        <input type="number" class="form-control" id="jml_komputer" name="jml_komputer" placeholder="jumlah komputer" required autofocus />
                                    </div>
                                </div>
                            </div>
                          
              
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah sepeda</option></i></font>
                                        <input type="number" class="form-control" id="jml_sepeda" name="jml_sepeda" placeholder="jumlah sepeda" required autofocus />
                                    </div>
                                </div>
                            </div>
                 
                     
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah sepeda motor</option></i></font>
                                        <input type="number" class="form-control" id="jml_spdmotor" name="jml_spdmotor" placeholder="jumlah spdmotor" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>

                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah mobil</option></i></font>
                                        <input type="number" class="form-control" id="jml_mobil" name="jml_mobil" placeholder="jumlah mobil" required autofocus />
                                    </div>
                                </div>
                            </div>
                  
                     
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah perahu</option></i></font>
                                        <input type="number" class="form-control" id="jml_perahu" name="jml_perahu" placeholder="jumlah perahu" required autofocus />
                                    </div>
                                </div>
                            </div>
                  
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah motor tempel</option></i></font>
                                        <input type="number" class="form-control" id="jml_motor_tempel" name="jml_motor_tempel" placeholder="jumlah motor_tempel" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>

                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah perahu motor</option></i></font>
                                        <input type="number" class="form-control" id="jml_perahumotor" name="jml_perahumotor" placeholder="Jumlah ah Perahu Motor" required autofocus />
                                    </div>
                                </div>
                            </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah kapal</option></i></font>
                                        <input type="number" class="form-control" id="jml_kapal" name="jml_kapal" placeholder="jumlah kapal" required autofocus />
                                    </div>
                                </div>
                            </div>
                          

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah lahan / Meter</option></i></font>
                                       <!--  <input type="number" class="form-control" id="jml_lahan" name="jml_lahan" placeholder="jumlah lahan" required autofocus /> -->
                                        <input type="number" class="form-control" id="jml_lahan" name="jml_lahan" placeholder="jumlah lahan" value="<?php echo $kepemilikan_aset[0]['jml_lahan']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>

                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah rumah lain</option></i></font>
                                        <input type="number" class="form-control" id="jml_rumahlain" name="jml_rumahlain" placeholder="jumlah rumahlain" required autofocus />
                                    </div>
                                </div>
                            </div>

                   
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah sapi</option></i></font>
                                        <input type="number" class="form-control" id="jml_sapi" name="jml_sapi" placeholder="jumlah sapi" required autofocus />
                                    </div>
                                </div>
                            </div>
          
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah kerbau</option></i></font>
                                        <input type="number" class="form-control" id="jml_kerbau" name="jml_kerbau" placeholder="jumlah kerbau" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>

                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah kuda</option></i></font>
                                        <input type="number" class="form-control" id="jml_kuda" name="jml_kuda" placeholder="jumlah kuda" required autofocus />
                                    </div>
                                </div>
                            </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah babi</option></i></font>
                                        <input type="number" class="form-control" id="jml_babi" name="jml_babi" placeholder="jumlah babi" required autofocus />
                                    </div>
                                </div>
                            </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="red"><i><option value="">*Jumlah kambing</option></i></font>
                                        <input type="number" class="form-control" id="jml_kambing" name="jml_kambing" placeholder="jumlah kambing" required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                      <!--   </div> -->
                     <br>
                     <font color="red"><i>* Wajib diisi</i></font>
                 </div>
                          <!-- </div>    
                         </div>
                       </div> -->
                     <!--   <br>
                       <br> -->
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
        <!--     </div>
            </div> -->
            <br>
            <br>
            
        


    <?php echo form_close(); ?>
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

    <!-- datapicker JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/datapicker/datepicker-active.js"></script>
    <!-- bootstrap select JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/bootstrap-select/bootstrap-select.js"></script>
    <!--  color-picker JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets2/js/color-picker/farbtastic.min.js"></script>
    <script src="<?php echo base_url() ?>assets2/js/color-picker/color-picker.js"></script>
  
</body>

</html>
