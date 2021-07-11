<div class="container">
  <div class="row">
    <div class="col">
      <form method="POST" style="width: 50%;">
        <div class="form-group">
          <?= form_open('penjual/edit_pesanan'); ?>
          <input type="text" name="id" hidden value="<?= $nilai['id'] ?>">
          <label for="exampleFormControlSelect1">Status</label>
          <select class="form-control" name="status">
            <option>Belum Bayar</option>
            <option>Sudah Bayar</option>
            <option>Selesai</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary" name="sub">Submit</button>
        <?= form_close(); ?>
      </form>
    </div>
  </div>
</div>