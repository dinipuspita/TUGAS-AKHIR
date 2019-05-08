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
            <a class="collapse-item" href='<?php echo base_url("index.php/listFilterSurat"); ?>'>Data Pengajuan Bantuan</a>
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
                                        <h2>Detail Data</h2>
                                        <p>Data Detail Form Data Pendukung<span class="bread-ntd"></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  

  
     <?php echo form_open('ListFormBantuan/tampil/'.$this->uri->segment(3)); ?>
        
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
                                         <font color="blue"><i>* Provinsi</i></font>
                                        <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="Provinsi"  value="<?php echo $pengenalan_tempat[0]['provinsi']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <font color="blue"><i>* Jumlah Keluarga</i></font>
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
                                    <font color="blue"><i>* Kabupaten</i></font>
                                       <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="kabupaten"  value="<?php echo $pengenalan_tempat[0]['kabupaten']?>" readonly required autofocus />
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
                                       <font color="blue"><i>* Kecamatan</i></font>
                                       <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="kecamatan"  value="<?php echo $pengenalan_tempat[0]['kecamatan']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                       <font color="blue"><i>* Nama Satuan Lingkungan Setempat</i></font>
                                       <input type="text" class="form-control" id="nama_sls" name="nama_sls" placeholder="nama_sls"  value="<?php echo $pengenalan_tempat[0]['nama_sls']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <font color="blue"><i>* Alamat</i></font>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat"  value="<?php echo $pengenalan_tempat[0]['alamat']?>" readonly required autofocus />
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
                                       <font color="blue"><i>* Nomor Urut RT</i></font>
                                       <input type="number" class="form-control" id="no_urut_rt" name="no_urut_rt" placeholder="Nomor Urut RT" value="<?php echo $pengenalan_tempat[0]['no_urut_rt']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                      <font color="blue"><i>* Nama Kepala Rumah Tangga</i></font>
                                       <input type="text" class="form-control" id="nama_krt" name="nama_krt" placeholder="Jumlah Keluarga"  value="<?php echo $pengenalan_tempat[0]['nama_krt']?>" readonly required autofocus />
                                     </div>
                                </div>
                            </div>

                               
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int form-elet-mg res-mg-fcs">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="blue"><i>* Jumlah Anggota Rumah Tangga</i></font>
                                       <input type="text" class="form-control" id="jumlah_ART" name="jumlah_ART" placeholder="Jumlah Keluarga"  value="<?php echo $pengenalan_tempat[0]['jumlah_ART']?> KK" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>

                       
                     <br>
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
                            <h2>Form 2. Keterangan Pengesahan</h2><br>
                        <div class="row">
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="blue"><i>* Nama Petugas</i></font>
                                        <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" placeholder="Jumlah Keluarga"  value="<?php echo $keterangan_pengesahan[0]['nama_petugas']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <font color="blue"><i>* Tanggal Verivali</i></font><br>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-calendar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <input type="date" class="form-control" id="tanggal_verivali" name="tanggal_verivali" placeholder="Tanggal Verivali" value="<?php echo $keterangan_pengesahan[0]['tanggal_verivali']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>

                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                       <font color="blue"><i>* Hasil Verivali</i></font><br>
                                        <input type="text" class="form-control" id="hasil_verivali" name="hasil_verivali" placeholder="Jumlah Keluarga"  value="<?php echo $keterangan_pengesahan[0]['hasil_verivali']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <font color="blue"><i>* Tangal Pemeriksaan</i></font><br>
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-calendar"></i>
                                    </div>
                                    <div class="nk-int-st">
                                       <input type="date" class="form-control" id="tanggal_pemeriksaan" name="tanggal_pemeriksaan" placeholder="Tanggal Verivali" value="<?php echo $keterangan_pengesahan[0]['tanggal_pemeriksaan']?>" readonly required autofocus />
                                    </div>
                                </div>
</div>
                              </div>  
                          </div>


                        <br>   
              </div>
            <br>
            <br>
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
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="blue"><i>* Status Bangunan</i></font>
                                        <input type="text" class="form-control" id="status_bangunan" name="status_bangunan" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['status_bangunan']?>" readonly required autofocus />
                                    </div>
                                </div>
                         </div>
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="blue"><i>* Status Lahan</i></font>
                                        <input type="text" class="form-control" id="status_bangunan" name="status_bangunan" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['status_bangunan']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>
                      
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="blue"><i>* Luas Lantai</i></font>
                                        <input type="text" class="form-control" id="luas_lantai" name="luas_lantai" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['luas_lantai']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>
                                        
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="blue"><i>* Jenis Lantai</i></font>
                                        <input type="text" class="form-control" id="jenis_lantai_terluas" name="jenis_lantai_terluas" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['jenis_lantai_terluas']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>

                               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="blue"><i>* Jenis Dinding</i></font>
                                        <input type="text" class="form-control" id="jenis_dinding_terluas" name="jenis_dinding_terluas" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['jenis_dinding_terluas']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>
                       
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="blue"><i>* Kondisi Dinding</i></font>
                                        <input type="text" class="form-control" id="kondisi_dinding" name="kondisi_dinding" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['kondisi_dinding']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="blue"><i>* Jenis Atap</i></font>
                                        <input type="text" class="form-control" id="jenis_atap" name="jenis_atap" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['jenis_atap']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="blue"><i>* Kondisi Atap</i></font>
                                        <input type="text" class="form-control" id="kondisi_atap" name="kondisi_atap" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['kondisi_atap']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>


                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="blue"><i>* Jumlah Kamar</i></font>
                                        <input type="text" class="form-control" id="jumlah_kamar" name="jumlah_kamar" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['jumlah_kamar']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                        <font color="blue"><i>* Sumber Air Minum</i></font>
                                        <input type="text" class="form-control" id="sumber_air_minum" name="sumber_air_minum" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['sumber_air_minum']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>

                               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                   <div class="nk-int-st">
                                        <font color="blue"><i>* Kode Pelanggan Air</i></font>
                                        <input type="text" class="form-control" id="kode_pelanggan_air" name="kode_pelanggan_air" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['kode_pelanggan_air']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>

                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                   <div class="nk-int-st">
                                        <font color="blue"><i>* Cara Memperoleh Air</i></font>
                                        <input type="text" class="form-control" id="cara_memperoleh_air" name="cara_memperoleh_air" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['cara_memperoleh_air']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                          
                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                   <div class="nk-int-st">
                                        <font color="blue"><i>* Sumber Penerangan</i></font>
                                        <input type="text" class="form-control" id="sumber_penerangan" name="sumber_penerangan" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['sumber_penerangan']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                          
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                   <div class="nk-int-st">
                                        <font color="blue"><i>* Daya Terpasang</i></font>
                                        <input type="text" class="form-control" id="daya_terpasang" name="daya_terpasang" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['daya_terpasang']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                          

                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                         <font color="blue"><i>* Id PLN</i></font>
                                        <input type="text" class="form-control" id="id_pln" name="id_pln" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['id_pln']?>" readonly required autofocus />
                                    </div>
                                  </div>
                                </div>

                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                  <font color="blue"><i>* Bahan Bakar Memasak</i></font>
                                        <input type="text" class="form-control" id="bahan_bakar_memasak" name="bahan_bakar_memasak" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['bahan_bakar_memasak']?>" readonly required autofocus />
                                    </div>
                                  </div>
                                </div>
                           
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                  <font color="blue"><i>* Id Pelanggan Gas</i></font>
                                        <input type="text" class="form-control" id="id_pelanggan_gas" name="id_pelanggan_gas" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['id_pelanggan_gas']?>" readonly required autofocus />
                                    </div>
                                  </div>
                                </div>

                                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                  <font color="blue"><i>* Fasilitas BAB</i></font>
                                        <input type="text" class="form-control" id="fasilitas_bab" name="fasilitas_bab" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['fasilitas_bab']?>" readonly required autofocus />
                                    </div>
                                  </div>
                                </div>


                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                      <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                  <font color="blue"><i>* Jenis_kloset</i></font>
                                        <input type="text" class="form-control" id="jenis_kloset" name="jenis_kloset" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['jenis_kloset']?>" readonly required autofocus />
                                    </div>
                                  </div>
                                </div>


                                   <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                      <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-edit"></i>
                                    </div>
                                    <div class="nk-int-st">
                                  <font color="blue"><i>* Tempat Pembuangan Akhir Tinja</i></font>
                                        <input type="text" class="form-control" id="tempat_PAT" name="tempat_PAT" placeholder="Status Bangunan"  value="<?php echo $keterangan_perumahan[0]['tempat_PAT']?>" readonly required autofocus />
                                    </div>
                                  </div>
                                </div>
                              </div>

                     <br>
                  </div>
               </div>
            </div>
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
                                    <font color="blue"><i>* Hubungan Dengan Kepala Rumah Tangga</i></font>
                                    <input type="text" class="form-control" id="hub_kepala_keluarga" name="hub_kepala_keluarga" placeholder="Status Hubungan Keluarga"  value="<?php echo $keterangan_sosial_ekonomi[0]['hub_kepala_keluarga']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>

                            
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <font color="blue"><i>* Jenis Cacat</i></font>
                                    <input type="text" class="form-control" id="jenis_cacat" name="jenis_cacat" placeholder="Status Hubungan Keluarga"  value="<?php echo $keterangan_sosial_ekonomi[0]['jenis_cacat']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>
                        
                
                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <font color="blue"><i>* Penyakit Kronis</i></font>
                                    <input type="text" class="form-control" id="penyakit_kronis" name="penyakit_kronis" placeholder="Status Hubungan Keluarga"  value="<?php echo $keterangan_sosial_ekonomi[0]['penyakit_kronis']?>" readonly required autofocus />
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
                                    <font color="blue"><i>* Jenjang Pendidikan</i></font>
                                    <input type="text" class="form-control" id="jenjang_pendidikan" name="jenjang_pendidikan" placeholder="Status Hubungan Keluarga"  value="<?php echo $keterangan_sosial_ekonomi[0]['jenjang_pendidikan']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>
                       


                              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <font color="blue"><i>* Lapangan Usaha</i></font>
                                    <input type="text" class="form-control" id="lapangan_usaha" name="lapangan_usaha" placeholder="Status Hubungan Keluarga"  value="<?php echo $keterangan_sosial_ekonomi[0]['lapangan_usaha']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>
                       
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <font color="blue"><i>* Status Kedudukan</i></font>
                                    <input type="text" class="form-control" id="status_kedudukan" name="status_kedudukan" placeholder="Status Hubungan Keluarga"  value="<?php echo $keterangan_sosial_ekonomi[0]['status_kedudukan']?>" readonly required autofocus />
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
                                    <font color="blue"><i>* Apakah Sudah Menerima KIS?</i></font>
                                    <input type="text" class="form-control" id="KIS" name="KIS" placeholder="Status Hubungan Keluarga"  value="<?php echo $keterangan_sosial_ekonomi[0]['KIS']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>
                         

                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <font color="blue"><i>* Apakah Sudah Menerima KKS?</i></font>
                                    <input type="text" class="form-control" id="KKS" name="KKS" placeholder="Status Hubungan Keluarga"  value="<?php echo $keterangan_sosial_ekonomi[0]['KKS']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <font color="blue"><i>* Apakah Sudah Menerima KIP?</i></font>
                                    <input type="text" class="form-control" id="KIP" name="KIP" placeholder="Status Hubungan Keluarga"  value="<?php echo $keterangan_sosial_ekonomi[0]['KIP']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>


                             <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                        <i class="notika-icon notika-house"></i>
                                    </div>
                                    <div class="nk-int-st">
                                    <font color="blue"><i>* Apakah Sudah Menerima RASKIN?</i></font>
                                    <input type="text" class="form-control" id="KIP" name="KIP" placeholder="Status Hubungan Keluarga"  value="<?php echo $keterangan_sosial_ekonomi[0]['KIP']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>

                         </div>
                       </div>
                      </div>
                     </div>
                   </div>
                   <br>  
                  </div>
                </div>
              </div>

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
                                        <font color="blue"><i><option value="">*Jumlah Tabung Gas</option></i></font>
                                        <input type="number" class="form-control" id="jml_tabung_gas" name="jml_tabung_gas" placeholder="Jumlah Tabung Gas" value="<?php echo $kepemilikan_aset[0]['jml_tabung_gas']?>" readonly required autofocus />
                                    </div>
                                </div>
                              </div>
                       
                       
                       
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah AC</option></i></font>
                                        <input type="number" class="form-control" id="jml_AC" name="jml_AC" placeholder="jumlah AC" value="<?php echo $kepemilikan_aset[0]['jml_AC']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
               
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah pemanas air</option></i></font>
                                        <input type="number" class="form-control" id="jml_pemanas_air" name="jml_pemanas_air" placeholder="jumlah pemanas air" value="<?php echo $kepemilikan_aset[0]['jml_pemanas_air']?>" readonly required autofocus />
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
                                        <font color="blue"><i><option value="">*Jumlah telepon rumah</option></i></font>
                                        <input type="number" class="form-control" id="jml_telepon_rumah" name="jml_telepon_rumah" placeholder="jumlah telepon_rumah" value="<?php echo $kepemilikan_aset[0]['jml_telepon_rumah']?>" readonly required autofocus />
                                    </div>
                                </div>
                          </div>

                   
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah televisi</option></i></font>
                                        <input type="number" class="form-control" id="jml_televisi" name="jml_televisi" placeholder="jumlah televisi" value="<?php echo $kepemilikan_aset[0]['jml_televisi']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                  
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah emas</option></i></font>
                                        <input type="number" class="form-control" id="jml_emas" name="jml_emas" placeholder="jumlah emas" value="<?php echo $kepemilikan_aset[0]['jml_telepon_rumah']?>" readonly required autofocus />
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
                                        <font color="blue"><i><option value="">*Jumlah komputer</option></i></font>
                                        <input type="number" class="form-control" id="jml_komputer" name="jml_komputer" placeholder="jumlah komputer" value="<?php echo $kepemilikan_aset[0]['jml_komputer']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                          
              
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah sepeda</option></i></font>
                                        <input type="number" class="form-control" id="jml_sepeda" name="jml_sepeda" placeholder="jumlah sepeda" value="<?php echo $kepemilikan_aset[0]['jml_sepeda']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                 
                     
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah sepeda motor</option></i></font>
                                        <input type="number" class="form-control" id="jml_spdmotor" name="jml_spdmotor" placeholder="jumlah sepeda motor" value="<?php echo $kepemilikan_aset[0]['jml_spdmotor']?>" readonly required autofocus />
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
                                        <font color="blue"><i><option value="">*Jumlah mobil</option></i></font>
                                        <input type="number" class="form-control" id="jml_mobil" name="jml_mobil" placeholder="jumlah mobil" value="<?php echo $kepemilikan_aset[0]['jml_mobil']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                  
                     
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah perahu</option></i></font>
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
                                        <font color="blue"><i><option value="">*Jumlah motor tempel</option></i></font>
                                        <input type="number" class="form-control" id="jml_motor_tempel" name="jml_motor_tempel" placeholder="jumlah motor_tempel" value="<?php echo $kepemilikan_aset[0]['jml_motor_tempel']?>" readonly required autofocus />
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
                                        <font color="blue"><i><option value="">*Jumlah perahu motor</option></i></font>
                                        <input type="number" class="form-control" id="jml_perahumotor" name="jml_perahumotor" placeholder="Jumlah ah Perahu Motor" value="<?php echo $kepemilikan_aset[0]['jml_perahumotor']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah kapal</option></i></font>
                                        <input type="number" class="form-control" id="jml_kapal" name="jml_kapal" placeholder="jumlah kapal" value="<?php echo $kepemilikan_aset[0]['jml_kapal']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                          

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah lahan</option></i></font>
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
                                        <font color="blue"><i><option value="">*Jumlah rumah lain</option></i></font>
                                        <input type="number" class="form-control" id="jml_rumahlain" name="jml_rumahlain" placeholder="jumlah rumahlain" value="<?php echo $kepemilikan_aset[0]['jml_rumahlain']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>

                   
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah sapi</option></i></font>
                                        <input type="number" class="form-control" id="jml_sapi" name="jml_sapi" placeholder="jumlah sapi" value="<?php echo $kepemilikan_aset[0]['jml_sapi']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
          
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah kerbau</option></i></font>
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
                                        <font color="blue"><i><option value="">*Jumlah kuda</option></i></font>
                                        <input type="number" class="form-control" id="jml_kuda" name="jml_kuda" placeholder="jumlah kuda" value="<?php echo $kepemilikan_aset[0]['jml_kuda']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah babi</option></i></font>
                                        <input type="number" class="form-control" id="jml_babi" name="jml_babi" placeholder="jumlah babi" value="<?php echo $kepemilikan_aset[0]['jml_babi']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group ic-cmp-int">
                                    <div class="form-ic-cmp">
                                     <i class="notika-icon notika-edit"></i>
                                    </div>
                                      <div class="nk-int-st">
                                        <font color="blue"><i><option value="">*Jumlah kambing</option></i></font>
                                        <input type="number" class="form-control" id="jml_kambing" name="jml_kambing" placeholder="jumlah kambing" value="<?php echo $kepemilikan_aset[0]['jml_kambing']?>" readonly required autofocus />
                                    </div>
                                </div>
                            </div>
                          </div>
                      <!--   </div> -->
                     <br>
                 </div>
               </div>
             </div>
           </div>
         </div>
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
