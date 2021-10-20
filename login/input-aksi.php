<?php
include 'koneksi.php';
$nama_pemesan = $_POST['nama_pemesan'];
$no_tlp = $_POST['no_tlp'];

mysqli_query($koneksi,"INSERT INTO `order`(`nama_pemesan`, `no_tlp`) VALUES ('$nama_pemesan','$no_tlp');");

//header("location:index.php?pesan=input");
  ?>