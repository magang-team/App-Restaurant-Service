<?php
    session_start();
    require_once('config.php');

    if(isset($_POST['add'])){
        if(isset($_SESSION['cart'])){
             $item_array_id = array_column($_SESSION['cart'],'menuId');
             if(in_array($_POST['menuId'],$item_array_id)){
                 echo'<script>alert("product readyy")</script>';
                 echo'<script>window.location("/pageMenu.php")</script>';
             }else{
 
                 $count = count($_SESSION['cart']);
                 $item_array =array(
                'menuId' => $_POST['menuId'],
                'harga' => $_POST['Price'],
                'quantity' => 1,
                'foto' => $_POST['Image'],
                'nama_menu' => $_POST['Menu']
                 );
                 $_SESSION['cart'][$count] = $item_array;
             };
        }else{
 
         $item_array = array(
             'menuId' =>$_POST['menuId'],
             'harga' => $_POST['Price'],
             'quantity' => 1,
             'foto' => $_POST['Image'],
             'nama_menu' => $_POST['Menu']
         );
         $_SESSION['cart'][0] = $item_array;
         print_r($_SESSION['cart']);
        };
    };

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <style>
.content-image {
    width: 100%
}


</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SidebarSearch Form -->
            <div class="row py-5">
                <div class="col">
                    <div class="form-inline-block">
                        <div class="input-group input-group-sm rounded">
                        <input class="form-control rounded-lg" id="keyword" type="search" placeholder="Search..." aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-lg btn-default" id="tombol_cari">
                                <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <button class="btn float-right">
                    <a href="page/cart.php">
                    <i class="fas fa-shopping-cart fa-lg"></i>
                    
                    <?php
                    
                    if(isset($_SESSION['cart'])){
                        $count = count($_SESSION["cart"]);
                        echo'<span class="badge badge-info navbar-badge" name="cart_count">'.$count.'</span>';
                    }else{
                        echo'<span class="badge badge-info navbar-badge" name="cart_count">0</span>';
                    }
                    ?>
                    </a>
                    </button>
                </div>
            </div>
            <div class="row" id="show">
                <?php
                $sql = mysqli_query($koneksi, "SELECT * FROM data_menu") or die(mysqli_error($koneksi));
                while($r1 = mysqli_fetch_assoc($sql)){
                    echo'
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 col-sm-8"><h3 class="card-title">'.$r1['nama_menu'].'</h3></div>
                                        <div class="col-6 col-ms-4"><h5 class="card-title">Rp.'.$r1['harga_menu'].'</h5></div>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="content">
                                        <div class="content-overlay"></div>
                                        <img class="img-fluid content-image" src="dist/img/'.$r1['foto_menu'].'" style="height:150px">
                                        <div class="content-details fadeIn-bottom">
                                            <p class="content-text">'.$r1['deskripsi'].'</p>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <form method="POST" class="form-submit" action="">
                                            <button type="submit" class="btn btn-block btn-secondary" name="add" value="add_to_cart">Add to Cart</button>
                                            <input type="hidden" name="menuId" value="'.$r1['id_menu'].'" />
                                            <input type="hidden" name="Price" value="'.$r1['harga_menu'].'" />
                                            <input type="hidden" name="Image" value="'.$r1['foto_menu'].'" />
                                            <input type="hidden" name="Menu" value="'.$r1['nama_menu'].'" />
                                        </form>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- ./col -->
                    ';
                }
                ?>
                
                
            </div>
            <!-- /.row --> 
        </div>
    </section>
    <!-- /.content -->


    <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
<script type="text/javascript">
    var keyword = document.getElementById('keyword');
    var btnCari = document.getElementById('tombol_cari');
    var show = document.getElementById('show');

    keyword.addEventListener('keyup', function(){
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function () {
            if( xhr.readyState == 4 && xhr.status ==200){
                show.innerHTML = xhr.responseText;
            }
        }
        
        xhr.open('GET','ajax/dataMenu.php?keyword=' + keyword.value, true);
        xhr.send();
    });
</script>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
</body>