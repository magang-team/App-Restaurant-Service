<?php
    include('../config.php');

    $keyword = $_GET["keyword"];

    $sql = mysqli_query($koneksi, "SELECT * FROM data_menu WHERE nama_menu LIKE '%" . $keyword . "%'");
    
    while($r1 = mysqli_fetch_assoc($sql)){
?>    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-12 col-sm-6 col-sm-8"><h3 class="card-title"><?=$r1['nama_menu']?></h3></div>
                    <div class="col-6 col-ms-4"><h5 class="card-title"><?=$r1['harga_menu']?></h5></div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="content-details fadeIn-bottom">
                    <p><?=$r1['deskripsi']?></p>
                </div>
                <div class="img-fluid">
                <img class="img-fluid content-image" src="dist/img/<?=$r1['foto_menu']?>" style="max-height:150px">
                </div>
                <div class="info">
                    <form method="post"class="form-submit">
                        <input type="hidden" name="menuId" value='<?=$r1["id_menu"]?>'/>
                        <input type="hidden" name="Price" value="<?=$r1['harga_menu']?>" />
                        <input type="hidden" name="Image" value="<?=$r1['foto_menu']?>" />
                        <input type="hidden" name="Menu" value="<?=$r1['nama_menu']?>" />
                        <button type="submit" class="btn btn-block btn-secondary" name="add" value="add_to_cart">Add to Cart</button>
                    </form>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- ./col -->
<?php
    }   
?>
