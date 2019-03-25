<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard One | Kota Batu</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/meanmenu/meanmenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jvectormap/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/notika-custom-icon.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/wave/waves.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
    <script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo base_url() ?>assets/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                        <a href="#"><img src="<?php echo base_url() ?>assets/img/logo/satu.png" alt="" width="50px" height="50px"/></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span><i class="notika-icon notika-search"></i></span></a>
                                <div role="menu" class="dropdown-menu search-dd animated flipInX">
                                    <div class="search-input">
                                        <i class="notika-icon notika-left-arrow"></i>
                                        <input type="text" />
                                    </div>
                                </div>
                            </li>
                                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <!-- Mobile Menu start -->

    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
    <div class="main-menu-area mg-tb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <ul class="nav nav-tabs notika-menu-wrap menu-it-icon-pro">
                        <li class="active"><a data-toggle="tab" href="#Home"><i class="notika-icon notika-house"></i> Home</a>
                        </li>
                        <li><a data-toggle="tab" href="#Interface"><i class="notika-icon notika-edit"></i> Surat</a>
                        </li>
                        <li><a data-toggle="tab" href="#Charts"><i class="notika-icon notika-app"></i> Bantuan</a>
                        </li>
                        <li><a data-toggle="tab" href="#Tables"><i class="notika-icon notika-windows"></i> Desa</a>
                        </li>
                        <li><a data-toggle="tab" href="#Page"><i class="notika-icon notika-support"></i> Penduduk</a>
                        </li>
                    </ul>
                    <div class="tab-content custom-menu-content">
                        <div id="Home" class="tab-pane in active notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                             <li><a href='<?php echo base_url("index.php/Admin"); ?>'>Dashboard</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Interface" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="animations.html">Buat Surat</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Charts" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href='<?php echo base_url("index.php/ListBantuan"); ?>'>Data Bantuan</a>
                                </li>
                                <li><a href="bar-charts.html">Syarat & Ketentuan</a>
                                </li>
                                <li><a href="line-charts.html">Cek Penduduk</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Tables" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href='<?php echo base_url("index.php/ListDesa"); ?>'>Data Desa</a>
                                </li>
                                <li><a href='<?php echo base_url("index.php/ListKepalaDesa"); ?>'>Data Kepala Desa</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Forms" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href="form-elements.html">Form Elements</a>
                                </li>
                                <li><a href="form-components.html">Form Components</a>
                                </li>
                                <li><a href="form-examples.html">Form Examples</a>
                                </li>
                            </ul>
                        </div>
                        <div id="Page" class="tab-pane notika-tab-menu-bg animated flipInX">
                            <ul class="notika-main-menu-dropdown">
                                <li><a href='<?php echo base_url("index.php/ListPenduduk"); ?>'>Data Penduduk</a>
                                </li>
                                <li><a href='<?php echo base_url("index.php/ListPenduduk/create"); ?>'>Tambah Penduduk</a>
                                </li>
                                <li><a href="typography.html">Cek Penduduk</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
    <!-- Main Menu area start-->
   <div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcomb-list">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="breadcomb-wp">
                                    <div class="breadcomb-icon">
                                        <i class="notika-icon notika-support"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <h2>Data Penduduk</h2>
                                        <p>Data Penduduk Kota Batu <span class="bread-ntd"></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                                <div class="breadcomb-report">
                                   <!--  <a href="<?php echo base_url('index.php/Raskin')?>"class="btn btn-danger"> -->
                                     <a href="<?php echo base_url('index.php/Raskin/report')?>" button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="breadcomb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-20 col-md-20 col-sm-20 col-xs-20">
                    <div class="breadcomb-list">
                         <div class="normal-table-list mg-t-30">

                         <td><a href="<?php echo base_url('index.php/Raskin/create/')?>" class="btn btn-success"><i class="fa fa-edit fa-fw" aria-hidden="true"></i>Tambah</a>

                            <div class="basic-tb-hd">
                              <div class="bsc-tbl-bdr">
                                 <table class="table table-bordered">

                                <br><br>
                                    <thead>
                                        <tr class="success">
                                            <th>No</td>
                                            <th>Jumlah Tanggungan Keluarga</th>
                                            <th>Nama Bantuan</th>
                                            <th>Nama Penduduk</th>
                                            <th>Nama Desa</th>
                                            <th>Options</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php $no=1; ?>
                                         
                                               <?php foreach ($raskin as $key) {
                                            ?>
                                        
                                          <td><?php echo $no ?></td>
                                          <td><?php echo $key['tanggungan_keluarga'] ?></td>
                                          <td><?php echo $key['nama_bantuan'] ?></td>
                                          <td><?php echo $key['nama_penduduk'] ?></td>
                                          <td><?php echo $key['nama_desa'] ?></td>
                                          </td>

                                          <td><a href="<?php echo base_url('index.php/Raskin/update/'.$key['id_raskin'])?>" class="btn btn-success"><i class="fa fa-edit fa-fw" aria-hidden="true"></i>Edit</a>                             
                                           <a href="<?php echo base_url('index.php/Raskin/delete/'.$key['id_raskin'])?>" class="btn btn-danger"><i class="fa fa-trash fa-fw" aria-hidden="true"></i>Delete</a>

                                      </tr> 
                                    </tbody>
                                <?php $no++ ?>
                                    <?php  } ?>
                                </table>
                            </div>
                               
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Realtime sts area-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. Sistem Pelayanan Bantuan dan Pengajuan SKTM</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!-- bootstrap JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- jvectormap JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jvectormap/jvectormap-active.js"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/sparkline/sparkline-active.js"></script>
    <!-- sparkline JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url() ?>assets/js/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url() ?>assets/js/flot/curvedLines.js"></script>
    <script src="<?php echo base_url() ?>assets/js/flot/flot-active.js"></script>
    <!-- knob JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/knob/jquery.knob.js"></script>
    <script src="<?php echo base_url() ?>assets/js/knob/jquery.appear.js"></script>
    <script src="<?php echo base_url() ?>assets/js/knob/knob-active.js"></script>
    <!--  wave JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/wave/waves.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/wave/wave-active.js"></script>
    <!--  todo JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/todo/jquery.todo.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/plugins.js"></script>
  <!--  Chat JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/chat/moment.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/chat/jquery.chat.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
  <!-- tawk chat JS
    ============================================ -->
    <script src="<?php echo base_url() ?>assets/js/tawk-chat.js"></script>
</body>

</html>