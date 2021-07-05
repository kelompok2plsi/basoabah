<div class="container">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Menu</h1>
  </div>
  <div class="card" style="width: 50%;">
    <div class="card-body">
      <form method="POST" action="<?= base_url('menu/tambah') ?>">
        <div class="form-group">
          <div class="mb-2">
            <label for="menu"><b>Menu</b></label>
            <input type="text" class="form-control" name="menu" placeholder="Menu">
          </div>
          <div class="mb-2">
            <label for="deskripsi"><b>Deskripsi</b></label>
            <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
          </div>
          <div class="mb-2">
            <label for="harga"><b>Harga</b></label>
            <input type="text" class="form-control" name="harga" placeholder="Harga">
          </div>
          <div class="mb-2">
            <label for="gambar"><b>Gambar</b></label>
            <input type="text" class="form-control" name="gambar" placeholder="Gambar">
          </div>
          <div class="text-center">
            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
  </div>
</div>