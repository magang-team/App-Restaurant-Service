<?php
require_once('config.php');

if(isset($_POST['next'])){
  $nama = $_POST['nama'];
  $tlp = $_POST['tlp'];
  $query1 = "INSERT INTO `order` SET nama_pemesan='$nama', no_tlp='$tlp' ";
  mysqli_query($koneksi,$query1);
}
?>