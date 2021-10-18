<?php
   
    include('config.php');

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
	$sql = "SELECT * FROM `data_meja`";
    $result = mysqli_query($koneksi,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row d-flex">
                <div class="col-12">
                    <div class="col-sm-6">
                        <h1>Keranjang</h1>
                    </div>
                </div>
            </div>
            <div class="row">
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
                                            <a href="index.php?page=cart&action=empty">
                                            <button type="submit" class="btn btn-block btn-secondary" name="remove" value="remove">Hapus Pesanan</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table action="index.php?page=cart" method="get" class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th style="width: 50%"> </th>
                                    <th style="width:  8.33%">Menu</th>
                                    <th style="width: 25%">Quantity</th>
                                    <th style="width: 16.66%">Price</th>
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
                                                    <div class="row">
                                                        <div class="col-md-6 pr-0">
                                                            <img class="img-circle img-fluid" src="dist/img/'.$value['foto'].'" style=" width:100%; height: 100px !important;">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><p class="text-break">'.$value['nama_menu'].'</p></td>
                                                <td>
                                                <div class="row">
                                                <div class="col-md-6">
                                                    <form action="index.php?page=cart" method="POST">
                                                        <input type="number" class="form-control form-control-sm text-center" name="Mod_Quantity" onchange="this.form.submit();" value='.$value['quantity'].' autocomplete="off"> 
                                                        <input type="hidden" name="menuId" value="'.$value['menuId'].'" />
                                                    </form>
                                                </div>
                                                </div>
                                                </td>
                                                <td>Rp.'.$value['harga'].'</td>
                                            </tr>
                                        ';
                                        if($value['quantity'] < 1 ){
                                            echo'<script>window.location="index.php?page=cart"</script>';
                                            echo'<script>alert("product delete")</script>';
                                            unset($_SESSION['cart'][$key]);
                                        }
                                        $total = $total + (int)$value['harga'] * (int)$value['quantity'];     
                                    }
                                }else{
                                    echo"
                                    <tr>
                                        <td>Tidak Ada Data</td>
                                    </tr>
                                    ";
                                }
                                ?>
                                <tr>
                                    <td colspan="4" class="text-right">Rp.<?=$total?></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-6 mb-5">
                    <div class="col-md-4 ">
                        <?php
                            if(empty($_SESSION['cart'])){
                                echo'<button type="button" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#modal-default" disabled>Pesan</button>';
                            }else{
                                echo'<button type="button" class="btn btn-block btn-primary btn-lg" data-toggle="modal" data-target="#modal-default">Pesan</button>';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">CEKOUT PESANAN</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="page/pesanan.php">
                                <input type="hidden" name="gTotal" value="<?=$total?>" />
                                <input type="hidden" name="meja" value="<?= $dta['nomer_meja']?>" />
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Enter Nama ..."required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">No. Telepon</label>
                                    <input type="text" name="tlp" class="form-control" id="tlp" placeholder="Enter Nomor Telepon ..."required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">No. Meja</label>
                                    <select name="meja" class="form-control">
                                        <?php
                                            foreach($result as $dta){
                                        ?>
                                        <option value="<?= $dta['nomer_meja']?>"><?= $dta['nomer_meja']?></option>
                                        <?php
                                            }
                                        ?>    
                                    </select>
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

</body>