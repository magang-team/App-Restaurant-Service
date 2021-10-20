<?php
    session_start();
    include('config.php');

    if(isset($_SESSION['login'])){

        echo'<script>window.location="list_penagihan/dashboard.php"</script>';
    }

    if(isset($_POST["btnLogin"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];
      
        $result = mysqli_query($koneksi, "SELECT * FROM `user_restaurant` WHERE `username` = '$username' AND `password` = '$password'");
        

        //cek username
        if (mysqli_num_rows($result) === 1) {
            
            $row = mysqli_fetch_assoc($result);
            if($username = $row['username'] && $password = $row['password']){
                $_SESSION['login'] = $row['username'];
            }
            echo'<script>window.location="list_penagihan/dashboard.php"</script>';
            exit;
            
        }        
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
</head>
<body class="hold-transition login-page"style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('dist/img/photo1.png') no-repeat; background-size: cover;">
<div class="login-box">
    <div class="card card-outline card-secondary pt-5 pb-3">
        <div class="card-body login-card-body">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="name" class="form-control" placeholder="Username..." name="username" id="username" autocomplete="off">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password..." name="password" id="password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary" name="btnLogin" style="letter-spacing: 2px;">SIGN IN</button>
                    </div>
                </div>
            </form>

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
<script>
    <?php if (isset($error)) : ?>
    $(function() {
        var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
        });
        Toast.fire({
            icon: 'error',
            title: 'Username dan password anda salah, coba lagi !'
        });
    });
    <?php endif; ?>

</script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="plugins/toastr/toastr.min.js"></script>
</body>
</html>
