<body style="font-family: 'Cuprum', sans-serif;">
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm p-3 mb-5 bg-white rounded">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('') ?>" style="font-size: 36px;">BAKSO <span style="color: #FFA115;">ABAH</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <!-- Nav Item - Messages -->
          <?php
          $keranjang = $this->cart->contents();
          $jml_item = 0;
          foreach ($keranjang as $key => $value) {
            $jml_item = $jml_item + $value['qty'];
          }
          ?>
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-shopping-cart fa-fw"></i>
              <!-- Counter - Messages -->
              <span class="badge badge-danger badge-counter"><?= $jml_item ?></span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
              <?php if (empty($keranjang)) {  ?>
                <a href="" class="dropdown-item">
                  <p>Keranjang Kosong</p>
                </a>
              <?php } ?>

              <h6 class="dropdown-header">
                Keranjang
              </h6>
              <?php foreach ($keranjang as $key => $value) {
                $gambar = $this->m_user->get_row($value['id']); ?>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="<?= base_url('assets/' . $gambar['gambar']) ?>" alt="" style="width:52px; height:52px;">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-black-500"><?= $value['name'] ?></div>
                    <div class="small text-gray-500"><?= $value['qty'] ?> X Rp. <?= number_format($value['price']) ?></div>
                    <div class="text-black-500"><?= number_format($value['subtotal']); ?></div>
                  </div>
                </a>
              <?php } ?>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="font-weight-bold">
                  <tr>
                    <td colspan="2"> </td>
                    <td class="right"><strong>Total:</strong></td>
                    <td class="right">Rp.<?= $this->cart->format_number($this->cart->total()); ?></td>
                  </tr>
              </a>
              <a class="dropdown-item text-center text-danger" href="<?= base_url('belanja/keranjang') ?>">Lihat Keranjang</a>
              <a class="dropdown-item text-center text-success" href="<?= base_url('pembayaran') ?>">Checkout</a>
            </div>
          </li>
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle mr-3 no-arrow" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black; text-transform:uppercase;"><span class="ml-2"><?= $user['nama'] ?></span><i class="fas fa-user fa-sm ml-2"></i></a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="<?= base_url('user/changepassword') ?>">
                <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
                Ganti Password
              </a>
              <a class="dropdown-item" href="<?= base_url('user/pesanan_saya') ?>">
                <i class="fas fa-shopping-bag fa-sm fa-fw mr-2 text-gray-400"></i>
                Pesanan Saya
              </a>
              <a class="dropdown-item" href="<?= base_url('user/logout') ?>">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
          </li>
        </div>
      </div>
    </div>
    </div>
  </nav>