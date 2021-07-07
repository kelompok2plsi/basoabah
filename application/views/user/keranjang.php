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