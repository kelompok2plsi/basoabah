<div class="container">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Menu</h1>
  </div>
  <div class="card" style="width: 50%;">
    <div class="card-body">
      <form method="POST" action="" novalidate>
        <input type="hidden" value="<?= $nilai['id'] ?>" name="id">
        <div class="form-group">
          <div class="mb-2">
            <label for="menu"><b>Menu</b></label>
            <input type="text" class="form-control" name="menu" value="<?= $nilai['menu'] ?>">
          </div>
          <div class="mb-2">
            <label for="deskripsi"><b>Deskripsi</b></label>
            <input type="text" class="form-control" name="deskripsi" value="<?= $nilai['deskripsi'] ?>">
          </div>
          <div class="mb-2">
            <label for="harga"><b>Harga</b></label>
            <input type="text" class="form-control" name="harga" value="<?= $nilai['harga'] ?>">
          </div>
          <div class="mb-2">
            <label for="gambar"><b>Gambar</b></label>
            <input type="text" class="form-control" name="gambar" value="<?= $nilai['gambar'] ?>">
          </div>
          <div class="text-center">
            <button type="submit" name="edit" class="btn btn-primary">Submit</button>
          </div>
      </form>
    </div>
  </div>
</div>