<div class="container">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Menu</h1>
    <a href="<?= base_url('menu/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah</a>
  </div>
  <?= $this->session->flashdata('pesan'); ?>
  <table class="table table-hover">
    <thead class="text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Menu</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Harga</th>
        <th scope="col">Gambar</th>
        <th rowspan="2">Action</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <?php
      $no = 1;
      foreach ($menu as $data) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          <td><?= $data['menu'] ?></td>
          <td><?= $data['deskripsi']; ?></td>
          <td><?= $data['harga']; ?></td>
          <td><?= $data['gambar']; ?></td>
          <td>
            <a href="<?= base_url('menu/edit/' . $data['id']) ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= base_url('menu/hapus/' .  $data['id']) ?>" onclick="return confirm('Data ini akan dihapus. Anda yakin?')" class="btn btn-danger btn-sm">Hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>