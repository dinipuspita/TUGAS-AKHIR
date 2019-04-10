<?php $data = $this->session->userdata(); ?>

       <!--  <img src="http://localhost/robot.png" alt="" width="200px"> -->
        <br><br>
           <!--  <h1 style="color: #3399ff;">@<?= $data['username']; ?></h1> -->
        <br>

        <form action="<?= base_url('ListProfil/ganti_password'); ?>" method="POST">
            <hr>

            <br><br>

              <input type="text" name="password" class="inputan" placeholder="password" value="<?= $data['password']; ?>" readonly> <br><br>

            <input type="password" name="pw_baru"  class="inputan" placeholder="password baru">    <br>
            <?= form_error('pw_baru'); ?>

            <br>

            <input type="text" name="cpw_baru"  class="inputan" placeholder="ulangi password baru">  <br>
            <?= form_error('cpw_baru'); ?>

            <br>

            <input type="submit" name="submit" value="Ganti Password">
        </form>