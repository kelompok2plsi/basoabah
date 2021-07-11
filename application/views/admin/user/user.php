<div class="container">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
    <a href="<?= base_url('list_user/tambah') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah</a>
  </div>
  <table class="table table-hover">
    <thead class="text-center">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Alamat</th>
        <th scope="col">role_id</th>
        <th rowspan="2">Action</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <?php
      $no = 1;
      foreach ($user as $data) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          <td><?= $data['nama'] ?></td>
          <td><?= $data['email']; ?></td>
          <td><?= $data['alamat']; ?></td>
          <td><?= $data['role_id']; ?></td>
          <td>
            <a class="btn btn-success btn-sm" href="<?= base_url('list_user/edit/' . $data['id']) ?>">Edit</a>
            <a class="btn btn-danger btn-sm" href="<?= base_url('list_user/hapus/' .  $data['id']) ?>" onclick="return confirm('Data ini akan dihapus. Anda yakin?')">Hapus</a>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
  <div class="card" style="width: 25%;">
    <div class="card-header">
      Keterangan
    </div>
    <div class="card-body">
      <p>role_id '1' = Admin</p>
      <p>role_id '2' = User-Penjual</p>
      <p>role_id '3' = User-Pembeli</p>
    </div>
  </div>
</div>