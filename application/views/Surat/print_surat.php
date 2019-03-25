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
  padding-left: 20px;
  padding-bottom: -200px;
  margin-top: 50px;
  margin:100px auto;
  height: 300px; /* Should be removed. Only for demonstration */
}
.column3 {
  float: left;
  width: 75%;
  padding: 10px;
  padding-left: 30px;
  padding-bottom: -200px;
/*  margin-top: 0px;*/
  margin:100px auto;
  height: 300px;
}
.column0 {
  float: right;
  padding-right: :50px;
  width: 30%;
  margin-top:20px;
}
.column1 {
  float: right;
  padding-right: :50px;
  width: 100%;
  margin-top:20px;
}
.column2 {
  float: right;
  padding-right: :50px;
  width: 30%;
  margin-top:20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>

<head>
  <img src="<?php echo base_url() ?>assets/img/satu.png" width="50px" height="55px"/>

  <?php foreach ($surat as $key) { ?>
  <center><h4>PEMERINTAH KOTA BATU<br>
          KECAMATAN JUNREJO</h4><h3>DESA <?php echo $key['nama_desa'] ?></h3>
<hr/>

          <u><b>SURAT KETERANGAN TIDAK MAMPU</b></u></center>
             <center>Nomor:470/00<?php echo $key['id_surat'] ?>/422 310.2/2019
             <br>
             <br>

Kepala Desa <?php echo $key['nama_desa'] ?> Kecamatan Junrejo Pemerintah Kota Batu menerangkan bahwa menerangkan bahwa<br></center>

 <div class="column">
  Nama                        :<?php echo $key['nama_penduduk'] ?><br>
  Jenis Kelamin               :<?php echo $key['jenis_kelamin'] ?><br>
  Tempat / Tanggal Lahir      :<?php echo $key['tempat_lahir'] ?>
  /                            <?php echo $key['tanggal_lahir'] ?><br>
  Agama                       :<?php echo $key['agama'] ?><br>
  Pekerjaan                   :<?php echo $key['pekerjaan'] ?><br>
  Status Perkawinan           :<?php echo $key['status'] ?><br>  
  Kewarganegaraan             :<?php echo $key['kewarganegaraan'] ?><br>
  Alamat                      :<?php echo $key['alamat'] ?>
                                RT.<?php echo $key['RT'] ?>
                                RW.<?php echo $key['RW'] ?><br>
                                Desa <?php echo $key['nama_desa'] ?> Kecamatan Junrejo Kota Batu</div>
<!--        <div class="column3">

        Nama<br>                        
        Jenis Kelamin<br>           
        Tempat / Tanggal Lahir   
        /<br>                          
        Agama<br>                   
        Pekerjaan<br>          
        Status Perkawinan<br>          
        Kewarganegaraan<br>       
        Alamat<br></div>   -->
      
                                  

<br>
<br>
<br>
<!-- <div class="column0"> -->
Adalah benar-benar penduduk Desa <?php echo $key['nama_desa'] ?> Kecamatan Junrejo<br>
                1.Menerangkan Berdasarkan Surat Keterangan RT <?php echo $key['RT'] ?> RW <?php echo $key['RW'] ?> serta pernyataan yang bersangkutan <b>bahwa nama diatas tersebut benar-benar berasal dari keluarga tidak mampu</b><br>
                2.<?php echo $key['keterangan'] ?><br><!-- </div> -->                        

<br>
<br>                                         
Demikian surat keterangan ini dibuat dengan sebenarnya dan agar dapat dipergunakan sebagaimana mestinya
<br>
<br>
<br>   

<div class="column2">
Batu,<?php echo $key['tanggal_surat'] ?><br>
a.n <b>Desa <?php echo $key['nama_desa'] ?></b><br>
Kasi Kesra<br>

<br>
<b><?php echo $key['nama_kepala_desa'] ?></b>


</div>
</div>
</head>                 
</tbody>
                               
<?php  } ?>

</body>

</html>