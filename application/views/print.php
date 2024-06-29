<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h4>Laporan Penjualan Tahun 2021</h4></center><br>
				<div class="table-responsive">
					  <table class="table">
						  <thead>
						    <tr class="bg-info">
						      <th scope="col">No</th>
						      <th scope="col">Nama Barang</th>
						      <th scope="col">Satuan</th>
						      <th scope="col">Jumlah Penjualan</th>
						      <th scope="col">Harga Jual</th>
<!-- 						      <th scope="col">Total Harga Jual</th>
						      <th scope="col">Total Harga Pembelian</th>
						      <th scope="col">Pendapatan</th> -->
						    </tr>
						  </thead>
						  <tbody><?php $i=1; foreach ($print as $data) : ?>
						    <tr>
						      <td><?= $i++;?></td>
						      <td><?= $data['nama_barang'];?></td>
						      <td>PCS</td>
						      <td><?= $data['jumlah'];?></td>
						      <td>Rp. <?=  number_format($data['harga_jual']);?>,00</td>
<!-- 						      <td>Rp. <?= number_format($data['jumlah'] * $data['harga_jual']);?>,00</td>
						      <td>Rp. <?= number_format($data['jumlah'] * $data['harga_pembelian']);?>,00</td>
						      <td>Rp. <?= number_format(($data['jumlah'] * $data['harga_jual'])-($data['jumlah'] * $data['harga_pembelian']));?>,00</td> -->
						    </tr>
						<?php endforeach; ?>
						  </tbody>
						</table>
					</div>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>