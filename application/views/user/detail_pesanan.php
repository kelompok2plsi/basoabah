<div class="container">
  <div class="row">
    <div class="col">
      <?= $this->session->flashdata('message'); ?>
      <div class="card">
        <h5 class="card-header">
          <div class="row">
            <div class="col-6">
              Pesanan Saya
            </div>
            <div class="col-6 text-right">
              <a href="<?= base_url('user/pesanan_saya') ?>" class="btn btn-warning">Kembali</a>
            </div>
          </div>

        </h5>
        <div class="card-body">
          <table class="table table-borderless">
            <thead>
              <tr>
                <th scope="col">no_order</th>
                <th scope="col">menu</th>
                <th scope="col">jumlah</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($nilai as $data) : ?>
                <?php $menu = $this->db->get_where('tbl_menu', ['id' => $data['id_menu']])->row_array(); ?>
                <tr>
                  <th scope="row"><?= $data['no_order']; ?></th>
                  <td><?= $menu['menu']; ?> </td>
                  <td><?= $data['jumlah']; ?></td>
                </tr>

              <?php endforeach ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>