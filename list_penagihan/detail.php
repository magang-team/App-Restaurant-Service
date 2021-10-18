<?php
    include('../config.php');

    if(isset($_POST['detail'])){
        $orderId = $_POST['orderId'];
        $noTlp = $_POST['orderTlp'];
        $date = $_POST['orderDate'];
        $total = $_POST['orderTotal'];
        $meja = $_POST['orderMeja'];
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
    <!-- jsGrid -->
    <link rel="stylesheet" href="../plugins/jsgrid/jsgrid.min.css">
    <link rel="stylesheet" href="../plugins/jsgrid/jsgrid-theme.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">
                                    <h4 class="modal-title">Tagihan Details</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-10 ml-3 py-2 my-3">
                                        <div class="row-sm-12 d-flex ml-3 pt-3">
                                            <div class="col-md-3 px-0">Date</div>
                                            <div class="col-md-1 px-0">:</div>
                                            <div class="col-md-8"><?=$date?></div>
                                        </div>
                                        <div class="row-sm-12 d-flex ml-3 pt-3">
                                            <div class="col-md-3 px-0">No Tlp</div>
                                            <div class="col-md-1 px-0">:</div>
                                            <div class="col-md-8"><?=$noTlp?></div>
                                        </div>
                                        <div class="row-sm-12 d-flex ml-3 pt-3">
                                            <div class="col-md-3 px-0">No Meja</div>
                                            <div class="col-md-1 px-0">:</div>
                                            <div class="col-md-8">Meja <?=$meja?></div>
                                        </div>
                                        <div class="row-sm-12 d-flex ml-3 pt-3">
                                            <div class="col-md-3 px-0">Total</div>
                                            <div class="col-md-1 px-0">:</div>
                                            <div class="col-md-8"><?=$total?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10 ml-3 py-2 my-3">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                            <th>NO</th>
                                            <th>PRODUCT</th>
                                            <th>QUANTITY</th>
                                            <th>PRICE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $no = 1;
                                                $order_query="SELECT * FROM `order_user`WHERE `id_order`='$orderId'";
                                                $order_result= mysqli_query($koneksi,$order_query);
                                                if(mysqli_num_rows($order_result)>0){
                                                    while($order = mysqli_fetch_assoc($order_result)){
                                                        echo'
                                                        <tr>
                                                        <td>'.$no++.'</td>
                                                        <td>'.$order['nama_menu'].'</td>
                                                        <td>'.$order['quantity_menu'].'</td>
                                                        <td>'.$order['harga_menu'].'</td>
                                                        </tr>
                                                        ';
                                                    }
                                                }else{
                                                    echo'
                                                    <tr>
                                                        <td colspan="4">Tidak Ada Data</td>
                                                    </tr>
                                                    ';
                                                }  
                                            ?>
                    
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- /.content -->

    </div>
    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    </body>
</html>
