<?php
$koneksi = mysqli_connect("localhost","root","","db_restaurant");

if(mysqli_connect_errno()){
    echo "gagal melakukan koneksi ke MySQL:" . mysqli_connect_errno();
}
?>