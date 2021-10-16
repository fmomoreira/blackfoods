<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Pizzaria Blackfoods</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  <a href="https:/blackfoodspizza.com.br" style="font-size:24px">&#x1f355;<b>PIZZARIA</b></a><br>
    <a href="https:/blackfoodspizza.com.br/"><b>BLACKFOODS</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Insira o login e senha para entrar.</p>

      <form action="src/backend/valida.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email"class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="senha" class="form-control" placeholder="Senha" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
           
            
         
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Entrar</button>
          </div>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
      <div class="msg pt-4">
                    <p class="text-center text-danger">
                      <?php if (isset($_SESSION['loginErro'])) {
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                      } ?>
                    </p>
                    <p class="text-center text-success">
                      <?php
                      if (isset($_SESSION['logindeslogado'])) {
                        echo $_SESSION['logindeslogado'];
                        unset($_SESSION['logindeslogado']);
                      } ?>
                    </p>
                  </div>
     
      </div>
      <!-- /.social-auth-links -->

     
    </div>
    
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
