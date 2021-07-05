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

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto" style="font-family: 'Cuprum', sans-serif;">
          <a class="nav-item nav-link mr-3" href="<?= base_url('auth/menu') ?>" style="color: #ffffff;">MENU</a>
          <a class="btn btn-outline-light mr-3" style="border-radius:20px" href="<?= base_url('auth/masuk') ?>">MASUK</a>
          <a class="btn btn-warning mr-3" href="<?= base_url('auth/daftar') ?>" style="color: #ffffff; border-radius:20px;">DAFTAR</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- jumbotron -->
  <div class="jumbotron jumbotron-fluid" style="background-image: url(http://localhost/basoabah/assets/bakso1.jpg); background-size: cover; height: 652px; margin-top: -75px;">
    <div class="container">
      <div class="text" style="color: #ffffff; text-align:center; margin-top:200px; font-family: 'Cuprum', sans-serif;">
        <h1 style="font-weight: 400; font-size:144px">BAKSO <span style="color: #FFA115;
">ABAH</span></h1>
        <p>CARA BARU MENIKMATI BAKSO DENGAN SENSASI URAT YANG LUAR BIASA.</p>
      </div>
    </div>
  </div>

  <!-- tentang kami -->
  <div class="container" style="font-family: 'Cuprum', sans-serif;">
    <h3 class="text-center">TENTANG KAMI</h3>
    <div class="row">
      <div class="col-6">
        <p class="mt-4">
          Siapa yang tau bakso? Bakso adalah makanan asal indonesia yang merupakan olahan daging sapi yang digiling dan disajikan dengan kuah kaldu dan juga mie dan sayuran.
        </p>
        <br>
        <p>
          Bakso Abah adalah toko yang menyajikan olahan daging istimewa dengan kuah kaldu dengan bumbu khas sunda yang diwariskan turun temurun oleh keluarga kami.
        </p>
        <br>
        <p>
          Kami memiliki beberapa cabang yang berada di Kota Bogor. Selain dapat dihidangkan di kedai kami, kami juga memiliki menu frozen bakso.
        </p>
        <br>
        <p>
          Bagi kami pelanggan adalah raja, kami akan melayani anda dengan sepenuh hati kami. Tanpa anda semua para pelanggan kami, kami tidaklah berarti.
        </p>
      </div>
      <div class="col-6">
        <div class="gambar mt-4 text-center">
          <img src="http://localhost/basoabah/assets/bakso3.png" alt="" style="height: 350px; width: 402px;">
        </div>
      </div>
    </div>
  </div>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>