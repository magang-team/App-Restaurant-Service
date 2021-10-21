<?php
    include('../config.php');
    
    if(!isset($_SESSION['login'])){
        echo'<script>window.location="../pageLogin.php"</script>';
        exit; 
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3</title>

    <!-- Google Font: Source Sans Pro -->
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
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">
    
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1>LIST  TAGIHAN</h1>
                        <div class="card">
                            <div class="card-body table-responsive p-0 "style="height: 470px;">
                                <table class="table table-bordered table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                    <th style="width: 10px">NO MEJA</th>
                                    <th>NAMA PEMESAN</th>
                                    <th>TOTAL HARGA</th>
                                    <th>STATUS ORDER</th>
                                    <th>PEMBAYARAN</th>
                                    <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `order`ORDER BY `id_order` DESC ";
                                    $result = mysqli_query($koneksi,$sql);
                                    
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo'
                                        <tr>
                                            <td>Meja '.$row["nomor_meja"].'</td>
                                            <td>'.$row["nama_pemesan"].'</td>
                                            <td>'.$row['total_harga'].'</td>
                                            <td>'.$row['status_order'].'</td>
                                            <form method="POST" class="form-submit" action="pembayaran.php">
                                            <td>
                                                <button type="submit" class="btn btn-block bg-gradient-secondary" data-toggle="modal" data-target="#modal-lg">BAYAR</button>
                                                <input type="hidden" name="orderId" value="'.$row['id_order'].'" />
                                            </td>
                                            </form>
                                            <form method="POST" class="form-submit" action="detail.php">
                                            <td>
                                                <button type="submit" class="btn btn-block bg-gradient-primary" name="detail">DETAILS</button>
                                                <input type="hidden" name="orderId" value="'.$row['id_order'].'" />
                                                <input type="hidden" name="orderTlp" value="'.$row['no_tlp'].'" />
                                                <input type="hidden" name="orderDate" value="'.$row['created_at'].'" />
                                                <input type="hidden" name="orderTotal" value="'.$row['total_harga'].'" />
                                                <input type="hidden" name="orderMeja" value="'.$row["nomor_meja"].'" />
                                            </td>
                                            </form>
                                        </tr>
                                        ';
                                    }

                                    ?>
            
                                </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
                    
        </section>
        <!-- /.content -->
    </div>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
