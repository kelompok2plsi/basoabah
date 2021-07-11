<div class="container">
  <div class="row">
    <div class="col">
      <?= $this->session->flashdata('message'); ?>
      <div class="card">
        <h5 class="card-header">Pesanan Saya</h5>
        <div class="card-body">
          <div class="container">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th scope="col">no_order</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Telp</th>
                  <th scope="col">Pembayaran</th>
                  <th scope="col">Status</th>
                  <th scope="col">Total</th>
                  <th scope="col">#</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($pesanan as $data) : ?>
                  <tr>
                    <th scope="row"><?= $data['no_order']; ?></th>
                    <td><?= $data['alamat']; ?></td>
                    <td><?= $data['tgl_transaksi']; ?></td>
                    <td><?= $data['telp']; ?></td>
                    <td><?= $data['pembayaran']; ?></td>
                    <td>
                      <?php if ($data['status'] == 'Sudah Bayar') : ?>
                        <span class="badge badge-warning">Sudah Bayar</span>
                      <?php elseif ($data['status'] == 'Selesai') :  ?>
                        <span class="badge badge-success">Selesai</span>
                      <?php elseif ($data['status'] == 'Belum Bayar') :  ?>
                        <span class="badge badge-danger">Belum Bayar</span>
                      <?php endif ?>
                    </td>
                    <td><?= $data['total']; ?></td>
                    <td>
                      <a href="<?= base_url('user/detail_pesanan/' . $data['no_order']) ?>" class="btn btn-sm btn-primary">detail</a>
                      <?php if ($data['status'] == 'Belum Bayar') : ?>
                        <a href="<?= base_url('pembayaran/transfer') ?>" class="btn btn-sm btn-success">bayar</a>
                      <?php endif ?>
                    </td>
                  </tr>

                <?php endforeach ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>