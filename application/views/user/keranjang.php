<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!-- font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">

	<!-- fontawesome -->
	<link href="<?= base_url('vendor/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('vendor/') ?>css/sb-admin-2.min.css" rel="stylesheet">

	<title>BASO ABAH!</title>
</head>

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
							<a class="dropdown-item text-center text-danger" href="#">Lihat Keranjang</a>
							<a class="dropdown-item text-center text-success" href="#">Checkout</a>
						</div>
					</li>
					<li class="nav-item dropdown no-arrow">
						<a class="nav-link dropdown-toggle mr-3 no-arrow" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black; text-transform:uppercase;"><span class="ml-2"><?= $user['nama'] ?></span><i class="fas fa-user fa-sm ml-2"></i></a>
						<!-- Dropdown - User Information -->
						<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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

	<div class="container">
		<div class="card card-solid">
			<div class="card-body container pb-0">
				<div class="row">
					<div class="col-sm-12">
						<?= form_open('belanja/update'); ?>

						<table class="table table" style="width:100%">

							<tr>
								<th>Jumlah</th>
								<th>Menu</th>
								<th style="text-align:right">Harga satuan</th>
								<th style="text-align:right">Sub-Total</th>
								<th style="text-align:right">#</th>
							</tr>

							<?php $i = 1; ?>

							<?php foreach ($this->cart->contents() as $items) : ?>

								<?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

								<tr>
									<td><?= $items['qty']; ?></td>
									<td><?= $items['name']; ?></td>
									<td style="text-align:right">Rp.<?= $this->cart->format_number($items['price']); ?></td>
									<td style="text-align:right">Rp.<?= $this->cart->format_number($items['subtotal']); ?></td>
									<td style="text-align: right;">
										<a href="<?= base_url('belanja/delete/' . $items['rowid']) ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
									</td>
								</tr>

								<?php $i++; ?>

							<?php endforeach; ?>

							<tr>
								<td colspan="3"> </td>
								<td class="right"><strong>Total</strong></td>
								<td class="text-right"><strong>Rp.<?= $this->cart->format_number($this->cart->total()); ?></strong></td>
							</tr>

						</table>

						<div class="aksi mb-3 text-right">
							<a href="<?= base_url('belanja/deleteall') ?>" class="btn btn-danger">Bersihkan Keranjang</a>
							<a href="" class="btn btn-success">CheckOut</a>
						</div>
						<?= form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>









	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>