<div class="container">
  <div class="row">
    <div class="col">
      <?= $this->session->flashdata('message'); ?>
      <div class="card">
        <h5 class="card-header">Data Pesanan</h5>
        <div class="card-body">
          <div class="container">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">no_order</th>
                  <th scope="col">id_user</th>
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
                    <td><?= $data['id_user']; ?></td>
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
                    <td colspan="4">
                      <a href="<?= base_url('penjual/detail_pesanan/' . $data['no_order']) ?>" class="btn btn-sm btn-primary">detail</a>
                      <a href="<?= base_url('penjual/edit_pesanan/' . $data['id']) ?>" class="btn btn-sm btn-success">edit</a>
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