<!doctype html>
<html class="no-js" lang="">

<head>
  <?php foreach ($penduduk as $key) { ?>
  <center><h3>PEMERINTAH KOTA BATU<br>
          KECAMATAN BATU</h3><h2>KELURAHAN NGALIK</h2>

          <u><b>SURAT KETERANGAN TIDAK MAMPU</b></u></center>
             <center>Nomor:470/.../......
             <br>
             <br>

Kepala Kelurahan<?php echo $key['id_desa'] ?>Kecamatan Batu Pemerintah Kota Batu menerangkan bahwa menerangkan bahwa<br><br></center>

<table width="100%">
<tr><td width="10px">
        Nama:                       <?php echo $key['nama_penduduk'] ?><br>
        Jenis Kelamin:              <?php echo $key['jenis_kelamin'] ?><br>
        Tempat / Tanggal Lahir:     <?php echo $key['tempat_lahir'] ?>
        /                           <?php echo $key['tanggal_lahir'] ?><br>
        Agama:                      <?php echo $key['agama'] ?><br>
        Pekerjaan:                  <?php echo $key['pekerjaan'] ?><br>
        Status Perkawinan:          <?php echo $key['status'] ?><br>  
        Kewarganegaraan:            <?php echo $key['kewarganegaraan'] ?><br>
        Alamat:                     <?php echo $key['alamat'] ?>
                                    RT.<?php echo $key['RT'] ?>
                                    RW.<?php echo $key['RW'] ?><br> 

<br>
<br>                                         
Demikian surat keterangan ini dibuat dengan sebenarnya dan agar dapat dipergunakan sebagaimana mestinya


</div>
</head>                 
</tbody>
                               
<?php  } ?>

</body>

</html>