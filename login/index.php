<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    
 <?php 
  if(isset($_GET['pesan'])){
    if($_GET['pesan']=="gagal"){
      echo "
      <center>
        <div class='alert' style='color:red;'>
          <h3>Tidak Dapat Login, Karena Username / Password Tidak Benar !</h3>
        </div>
      </center>";
    }
  }
  ?>

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">



 

          <form action="cek_login.php" method="post">
            <div class="form-group">
              <div class="">
                <input type="text" name="username" class="form-control" placeholder="Masukan Username" required="required" autofocus="autofocus">
              </div>
            </div>
            <div class="form-group">
              <div class="">
                <input type="password" name="password" class="form-control" placeholder="Masukan Password" required="required">
              </div>
            </div>
            <button type="submit" name="submit" class="btn btn-block btn-secondary">Login</button>
            <a class="btn btn-primary btn-block" href="../">Batal</a>
          </form>

        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
