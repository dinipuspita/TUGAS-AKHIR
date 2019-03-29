<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login System</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>assets/img/satu.png">

</head>
<br>
<center>


  <h4><img src="<?php echo base_url() ?>assets/img/satu.png" width="80px" height="100px"/></a>  
    <font color="white"><div align="center"><h4><font face="Times New Roman">Selamat Datang</font></h4>
        <font color="white"><div align="center"><h6><font face="Courier New">
             Lembaga Swadaya Masyarakat (LSM) Jawa Timur</p>
             Balaikota Amongtani Gedung B Lantai 2</p>
             Jl.Panglima Sudirman No.507, Pesanggrahan </p>
             Kec.Batu, Kota Batu, Jawa Timur 65314</h6></font></div>
</center>  
 <?php echo form_open('login/cekLogin') ?>
    <?php echo validation_errors(); ?>

<body class="bg-gradient-primary">
  <div class="container">
    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <b><h1 class="h3 text-gray-900 mb-4">Login</b></h1>
                  </div>

<!-- <!DOCTYPE html>
<html>
<body>


Password: <input type="password" value="FakePSW" id="myInput"><br><br>
<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

</body>
</html>
 -->






                  <form class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter Username" required autofocus>
                        
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="myInput" placeholder="Password" required autofocus>
                    </div>
                    <div class="form-group">
                    <h1 class="h6 mb-2 text-gray-800">Show Password</h1>
                      <div class="custom-control custom-checkbox small" input type="checkbox" onclick="myFunction()" class="custom-control-input" id="customCheck">
                        
                        <script>
                    function myFunction() {
                     var x = document.getElementById("myInput");
                    if (x.type === "password") {
                    x.type = "text";
                     } else {
                     x.type = "password";
                     }
                    }
                   </script>




                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                      Login</button> 
                 <!--    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <?php echo form_close(); ?>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
