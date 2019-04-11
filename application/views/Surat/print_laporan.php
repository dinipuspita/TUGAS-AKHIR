<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Report Data Laporan</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.theme.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/normalize.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/notika-custom-icon.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/wave/waves.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css">
  <script src="<?php echo base_url() ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 75%;
  padding: 10px;
  padding-left: -200px;
  padding-bottom: -200px;
  /*  margin-top:-50px;*/
  margin-left: -500px;
  margin:100px auto;
  height: 300px; /* Should be removed. Only for demonstration */
}
.column2 {
  float: right;
  padding-right: :20px;
  width: 18%;
  margin-top:20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

<body>

<center><h3>LAPORAN PENERIMA SURAT <?php echo $surat[0]['nama_desa']?><br></h3></center>
<br>

                                  <div class="breadcomb-list">
                                      <table class="table table-bordered">
                                         <thead>
                                            <tr class="success">
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama Penduduk</th>
                                                <th>Tanggal Surat</th>
                                                <th>Keterangan</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $no=1; ?>
                                           <?php foreach ($surat as $key) {
                                        ?>
                                        <tr>
                                          <td><?php echo $no ?></td>
                                          <td><?php echo $key['NIK'] ?></td>
                                          <td><?php echo $key['nama_penduduk'] ?></td>
                                          <td><?php echo $key['tanggal_surat'] ?></td>
                                          <td><?php echo $key['keterangan'] ?></td>
                                        </td>  
                                        </tr> 
                                      <?php $no++ ?>
                                      <?php } ?>
                                    </tbody>
                                </table>
                                </div>
                              </div>

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
    <script src="<?php echo base_url() ?>assets/js/wave/waves.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/wave/wave-active.js"></script>
  </body>

  </html>