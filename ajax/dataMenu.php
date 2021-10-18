<?php
    include('../config.php');

    $keyword = $_GET["keyword"];

    $sql = mysqli_query($koneksi, "SELECT * FROM data_menu WHERE nama_menu LIKE '%$keyword%' OR deskripsi LIKE '%$keyword%'");
    
    while($r1 = mysqli_fetch_assoc($sql)){
?>    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <div class="row">
                        <div class="col-12"><h3><?=$r1['nama_menu']?></h3></div>
                        <div class="col-12"><h5>Rp.<?=$r1['harga_menu']?></h5></div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="content ">
                    <div class="imghvr-fade">
                    <img class="img-fluid" src="dist/img/<?=$r1['foto_menu']?>" style=" width:100%; height: 300px !important;">
                        <figcaption>
                            <h3>Deskripsi :</h3>
                            <p class="text-justify"><?=$r1['deskripsi']?></p>
                        </figcaption><a href="javascript:;"></a>
                    </div>
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
