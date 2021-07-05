<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">

  <title>BASO ABAH!</title>
</head>

<body style="font-family: 'Cuprum', sans-serif;">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('') ?>" style="font-size: 36px;">BAKSO <span style="color: #FFA115;">ABAH</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link mr-3" href="<?= base_url('') ?>" style="color: black;">HOME</a>
          <a class="nav-item nav-link mr-3" href="<?= base_url('auth/menu') ?>" style="color:black;">MENU</a>
          <a class="btn btn-warning mr-3" href="<?= base_url('auth/masuk') ?>">MASUK</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- CARD MENU -->
  <div class="container">
    <?php
    foreach ($menu as $data) : ?>
      <div class="card" style="width: auto; height:220px;">
        <div class="container mt-3">
          <div class="row">
            <div class="col-2 offset-2">
              <img class="card-img-top" src="<?= base_url('assets/') ?><?= $data['gambar'] ?>" alt="Card image cap" style="height:180px; width:180px; border-radius:30%;">
            </div>
            <div class="col-6">
              <div class="card-body ml-3">
                <h5 class="card-title"><?= $data['menu'] ?></h5>
                <p class="card-text"><?= $data['deskripsi'] ?></p>
                <div class="row">
                  <div class="col-4">
                    <p class="mt-2"><b>Rp <?= $data['harga'] ?></b></p>
                  </div>
                  <div class="col-4">
                    <a href="#" class="btn btn-warning">Tambah ke Keranjang</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>






  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>