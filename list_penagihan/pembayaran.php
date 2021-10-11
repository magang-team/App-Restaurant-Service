<?php
    include('../config.php');
    $orderId = $_POST['orderId'];
    $sql = "SELECT * FROM `order` WHERE id_order = $orderId";
    $result = mysqli_query($koneksi,$sql);
    $dta     = mysqli_fetch_assoc($result);
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
                            <h4 class="modal-title">BAYAR</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="date">Tanggal</label>
                                    <input type="text" class="form-control" value="<?=$dta['created_at']?>" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Pemesan</label>
                                    <input type="text" class="form-control" value="<?=$dta['nama_pemesan']?>" disabled>
                                </div>
                                <form method="POST" action="test.php">
                                        <div class="form-group">
                                            <label for="uang">Jumlah Uang</label>
                                            <input type="text" class="form-control " id="bayar" name="bayar" onchange="pembayaran()" autocomplete="off">
                                        </div>
                                      
                                            <label for="cara">Cara Bayar</label>
                                            <div class="col-12 px-0">
                                                <div class="form-group">
                                                    <select name="paymode" class="form-control">
                                                    <option value="cash">Cash</option>
                                                    <option value="debit">Debit</option>
                                                    <option value="">DLL</option>
                                                    </select>
                                                </div>
                                            </div>
                                        
                                        <div class="row-sm-12 d-flex">
                                            <div class="col-md-3 px-0">Total</div>
                                            <div class="col-md-1 px-0">:</div>
                                            <div class="col-md-8">
                                                <input type="numer" class="form-control form-control-border bg-white" id="hargaTotal" name="hargaTotal" value="<?=$dta['total_harga']?>"disabled/>
                                            </div>
                                        </div>
                                        <div class="row-sm-12 d-flex">
                                            <div class="col-md-3 px-0">Kembalian</div>
                                            <div class="col-md-1 px-0">:</div>
                                            <div class="col-md-8">
                                                <input type="numer" class="form-control form-control-border bg-white" id="sisaUang" name="sisaUang" disabled/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="submit" class="btn btn-primary" name="btnBayar">Bayar</button>
                                        <input type="hidden" name="id" value="<?=$orderId?>" />
                                </form> 
                                <?php 
                                    if(isset($dta['id_order']) && empty($dta['cara_bayar']) && empty($dta['jumlah_uang'])){
                                        echo'<button type="submit" class="btn btn-primary disabled" name="btnPrint" >Print</button>';
                                    }
                                    else{
                                        echo'
                                        <form method="POST" action="print.php">
                                            <button type="submit" class="btn btn-primary" name="btnPrint">Print</button>
                                            <input type="hidden" id="sisaUang" name="sisaUang" value=""/>
                                            <input type="hidden" name="hargaTotal" value="'.$dta['total_harga'].'"/>
                                            <input type="hidden" name="bayar" value="'.$dta['jumlah_uang'].'"/>
                                            <input type="hidden" name="tanggal" value="'.$dta['created_at'].'"/>
                                            <input type="hidden" name="id" value="'.$orderId.'" />
                                        </form>
                                        ';
                                    }
                                ?>
                                   
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

    <script>
        function pembayaran(){
            var jmlh_uang = parseInt(document.getElementById("bayar").value);
            var total = parseInt(document.getElementById("hargaTotal").value);
            kembalian = jmlh_uang - total;
            document.getElementById("sisaUang").value=kembalian;
        }
    </script>

    <!-- jQuery -->
    <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    </body>
</html>              