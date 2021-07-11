<div class="container">
  <div class="row">
    <div class="col-6">
      <h1>Bayar</h1>
      <div class="card">
        <div class="container mb-3 mt-4">
          <form method="post" action="<?= base_url('pembayaran') ?>">
            <div class="form-group">
              <label for="exampleFormControlInput1">Nama</label>
              <input type="text" class="form-control" name="nama" value="<?= $user['nama'] ?>" readonly>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Alamat</label>
              <input type="text" class="form-control" name="alamat">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">no.Telp (WhatsApp)</label>
              <input type="text" class="form-control" name="nohp">
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Pembayaran</label>
              <select class="form-control" name="jenisbayar">
                <option>Transfer Bank</option>
                <option>Bayar di Tempat</option>
              </select>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-6" style="margin-top: 55px;">
      <div class="card">
        <div class="card-body">
          <?= form_open('belanja/update'); ?>

          <table class="table table-borderless" style="width:100%">
            <?php $i = 1; ?>
            <?php foreach ($this->cart->contents() as $items) : ?>
              <?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>
              <tr>
                <td><?= $items['qty'] ?></td>
                <td><?= $items['name']; ?></td>
                <td style="text-align:right">Rp.<?= $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right">Rp.<?= $this->cart->format_number($items['subtotal']); ?></td>
              </tr>

              <?php $i++; ?>

            <?php endforeach; ?>

            <tr>
              <td colspan="2"> </td>
              <td class="right"><strong>Total</strong></td>
              <td class="text-right">
                <h3><strong>Rp.<?= $this->cart->format_number($this->cart->total()); ?></strong></h3>
              </td>
            </tr>

          </table>
        </div>
      </div>
      <div class="btn-bayar mt-3" style="width: auto;">
        <button class="btn btn-success btn-lg btn-block" type="submit" name="bayar">Bayar</button>
      </div>
    </div>
  </div>