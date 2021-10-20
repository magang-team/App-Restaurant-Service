<?php
include('../config.php');

if(isset($_POST['btnBayar'])){
    $pay = $_POST['paymode'];
    $bayar = $_POST['bayar'];
    $status = 'Sudah Bayar';
    $id = $_POST['id'];
    $query1 =mysqli_query($koneksi,"UPDATE `order` SET `cara_bayar` = '$pay', `jumlah_uang`= $bayar, `status_order`= '$status'  WHERE id_order= $id");

    header("location: pageKasir.php");
    exit;
}

?>
