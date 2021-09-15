<?php
    include('config.php');
?>
<table>
    <thead>
        <tr>
            <th>Nama Menu</th>
            <th>Harga </th>
            <th>Foto</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
            $sql = mysqli_query($koneksi, "SELECT * FROM data_menu") or die(mysqli_error($koneksi));
            //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
            if(mysqli_num_rows($sql) > 0){
                //membuat variabel $no untuk menyimpan nomor urut
                $no = 1;
                //melakukan perulangan while dengan dari dari query $sql
                while($data = mysqli_fetch_assoc($sql)){
                    //menampilkan data perulangan
                    echo '
                    <tr>
                        <td>'.$no.'</td>
                        <td>'.$data['id_menu'].'</td>
                        <td>'.$data['nama_menu'].'</td>
                        <td>'.$data['deskripsi'].'</td>
                        <td>'.$data['harga_menu'].'</td>
                        
                    </tr>
                    ';
                    $no++;
                }
            //jika query menghasilkan nilai 0
            }else{
                echo '
                <tr>
                    <td colspan="6">Tidak ada data.</td>
                </tr>
                ';
            }
        ?>
    </tbody>
</table>