<?php
    session_start();
    include('../config.php');
    if(isset($_POST['purchase'])){
        $status="pesan";
        $total = $_POST['gTotal'];
        
        $query1 ="INSERT INTO `order`(`status_order`, `total_harga`, `nomor_meja`, `nama_pemesan`, `no_tlp`, `pesanan`) 
            VALUES ('$status','$total','null','$_POST[nama]','$_POST[tlp]','null')";
        if(mysqli_query($koneksi,$query1)){
            $id_order= mysqli_insert_id($koneksi);
            $query2 = "INSERT INTO `order_user`(`id_order`, `nama_menu`, `quantity_menu`, `harga_menu`) VALUES (?,?,?,?)";
            $stmt= mysqli_prepare($koneksi,$query2);
            
            if($stmt){
                mysqli_stmt_bind_param($stmt,"isii", $id_order,$nama_menu,$quantity,$harga_menu);
                foreach($_SESSION['cart'] as $key => $value){
                    $nama_menu = $value['nama_menu'];
                    $quantity = $value['quantity'];
                    $harga_menu = $value['harga'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo'
                <script>
                alert("Pesanan Sedang Dikirim");
                window.location.href="../index.php"
                </script>
                ';
            }

        }
    }
?>