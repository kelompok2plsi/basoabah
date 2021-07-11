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
    </div>
  </nav>

  <!-- card form -->
  <div class="container">
    <div class="row">
      <div class="col-6 offset-3">
        <?php if ($this->session->flashdata('salah_login')) : ?>
          <div class="alert alert-danger" role="alert">
            Wrong username or password!
          </div>
        <?php elseif ($this->session->flashdata('belum_login')) : ?>
          <div class="alert alert-danger" role="alert">
            Anda belum berhasil login!
          </div>
        <?php elseif ($this->session->flashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
            Akun Anda berhasil dibuat, silakan Masuk!
          </div>
        <?php endif ?>
        <div class="card mt-4 shadow p-3 mb-5 bg-white rounded" style="width:auto;">
          <div class="card-body">
            <form method="POST" action="<?= base_url('auth/masuk') ?>">
              <p class="text-center" style="font-size: 48px;">SELAMAT DATANG</p>
              <div class="container">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email">
                  <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                  <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="masuk text-center">
                  <button type="submit" class="btn btn-warning">MASUK</button>
                  <p class="mt-3">Belum Mendaftar? <span><a href="<?= base_url('auth/daftar') ?>" style="color: #FFA115;">Daftar</a></span></p>
                </div>
              </div>
            </form>
          </div>
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