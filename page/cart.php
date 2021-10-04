<?php
    session_start();
    include('../config.php');

    if (!empty($_GET['action'])) {
        switch ($_GET['action']) {
            // add product to cart
            case 'empty': 
                unset($_SESSION['cart']);
            break;
        }
    }
    if(isset($_POST['Mod_Quantity'])){
        foreach($_SESSION['cart'] as $key => $value){
            if($value['menuId'] == $_POST['menuId']){
                $_SESSION['cart'][$key]['quantity']= $_POST['Mod_Quantity'];
            }
        }
    }
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <div class="content-wrapper bg-white">
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <h1>Keranjang Pemesanan</h1>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                        <div class="row">
                                            <div class="col-6">
                                                <?php
                                                    if (isset($_SESSION['cart'])){
                                                        $count  = count($_SESSION['cart']);
                                                        echo "<h6>Anda memiliki $count items di cart anda</h6>";
                                                    }else{
                                                        echo "<h6>Anda memilik 0 items di cart anda</h6>";
                                                    }
                                                ?>
                                            </div>
                                            <div class="col-6">
                                                <div class="col-md-4 float-right">
                                                    <a href="cart.php?action=empty">
                                                    <button type="submit" class="btn btn-block btn-secondary" name="remove" value="remove">Hapus Pesanan</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table action="cart.php" method="get" class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                        <th class="col-4"></th>
                                        <th class="col-2">Menu</th>
                                        <th class="col-4">Quantity</th>
                                        <th class="col-2">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $total = 0;
                                        if (isset($_SESSION['cart'])){
                                            foreach($_SESSION['cart'] as $key => $value){                        
                                                echo'
                                                    <tr>
                                                        <td>
                                                            <img class="img-circle min-vw-50 w-50 " src="../dist/img/'.$value['foto'].'" >
                                                        </td>
                                                        <td>'.$value['nama_menu'].'</td>
                                                        <td>
                                                            <form action="cart.php" method="POST">
                                                                    <button type="button" name="btnMinus" class="btn minus-btn bg-light border rounded ">
                                                                        <i class="fas fa-minus"></i>
                                                                    </button>
                                                                <input type="text" class="quantity" name="Mod_Quantity" onchange="this.form.submit();" value='.$value['quantity'].' size="2">                                                              
                                                                    <button type="button" name="btnPlus" class="btn plus-btn bg-light border rounded">   
                                                                        <i class="fas fa-plus"></i>
                                                                    </button>
                                                                    <input type="hidden" name="menuId" value="'.$value['menuId'].'" />                                                                    
                                                            </form>
                                                        </td>
                                                        <td>'.$value['harga'].'</td>
                                                    </tr>
                                                ';
                                                
                                                $total = $total + (int)$value['harga'] * (int)$value['quantity'];     
                                            }
                                        }else{
                                            echo"<script>alert('Cart Empty!')</script>";
                                        }
                                        ?>
                                        <tr>
                                            <td colspan="4" class="text-right"><?=$total?></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="col-6">
                            <div class="col-md-4 ">
                                <button type="button" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#modal-default">Pesan</button>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="modal fade" id="modal-default">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Default Modal</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="pesanan.php">
                                        <input type="hidden" name="gTotal" value="<?=$total?>" />
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Nama ...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">No. Telepon</label>
                                            <input type="text" name="tlp" class="form-control" id="tlp" placeholder="Enter Nomor Telepon ...">
                                        </div>
                                        <button type="submit" class="btn btn-block btn-primary btn-lg" name="purchase">Pesan</button>
                                    </form>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                </div>
            </section>
            <!-- /.content -->
    </div>
</div>
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="..//dist/js/demo.js"></script>
</body>