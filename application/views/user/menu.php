<!-- CARD MENU -->
<div class="container">
  <?= $this->session->flashdata('message'); ?>
  <?= $this->session->flashdata('berhasil'); ?>
  <?= $this->session->flashdata('deleteall'); ?>

  <?php
  foreach ($menu as $data) : ?>
    <div class="card" style="width: auto; height:220px;">
      <?php
      echo form_open('belanja/add');
      echo form_hidden('id', $data['id']);
      echo form_hidden('qty', 1);
      echo form_hidden('price', $data['harga']);
      echo form_hidden('name', $data['menu']);
      echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));

      ?>
      <div class="container mt-3">
        <div class="row">
          <div class="col-2 offset-2">
            <img class="card-img-top" src="<?= base_url('assets/') ?><?= $data['gambar'] ?>" alt="Card image cap" style="height:180px; width:180px; border-radius:30%;">
          </div>
          <div class="col-6">
            <div class="card-body ml-3" style="color: black;">
              <h5 class="card-title"><?= $data['menu'] ?></h5>
              <p class="card-text"><?= $data['deskripsi'] ?></p>
              <div class="row">
                <div class="col-4">
                  <p class="mt-2"><b>Rp <?= $data['harga'] ?></b></p>
                </div>
                <div class="col-4">
                  <button class="btn btn-warning">Tambah ke Keranjang</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?= form_close(); ?>
    </div>
  <?php endforeach ?>
</div>