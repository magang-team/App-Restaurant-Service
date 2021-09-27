<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Login</title>
  <link href="assets/bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
  <img src="assets/img/bg.jpg" class="bg">
  <section class="container-fluid bg">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
        <form class="form-container" method="post" action="input-aksi.php">
          <br>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama_pemesan" class="form-control" placeholder="Nama" required oninvalid="this.setCustomValidity('Masukkan Nama Anda Terlebih dahulu')" oninput="setCustomValidity('')">
            </div>
          </div>
          <br>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">NoTlp.</label>
            <div class="col-sm-10">
              <input type="text" name="no_tlp" minlength="10" maxlength="12" class="form-control" placeholder="No Tlp." required oninvalid="this.setCustomValidity('Masukkan No Tlp. Anda Terlebih dahulu')" oninput="setCustomValidity('')">
            </div>
          </div>
          <br>
          <div class="form-group button">
            <button type="submit" class="btn btn-dark btn-block" name="next">Next</button>
          </div>
        </form>
      </section>
    </section>
  </section>
  
</body>
</html>