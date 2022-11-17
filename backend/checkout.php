<?php
include 'includes/db.php';
require_once 'berhasil_login.php';

//var_dump($_SESSION);

?>
<!DOCTYPE html>
<html>

<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Checkout</h1>
				<hr>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor = 1; ?>
						<?php $totalbelanja = 0; ?>

						<?php
						if (isset($_SESSION['keranjang'])) {
							foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) : ?>
								<!-- menampilkan produk yang sedang diperulangkan berdasarkan id_produk -->
								<?php
								$ambil = $conn->query("SELECT * FROM produk WHERE id='$id_produk'");
								$pecah = $ambil->fetch_assoc();
								$subharga = $pecah["harga"] * $jumlah;
								?>
								<tr>
									<td><?php echo $nomor; ?></td>
									<td><?php echo $pecah["name"]; ?>
									</td>
									<td>Rp.
										<?php echo number_format($pecah["harga"]); ?>
									</td>
									<td><?php echo $jumlah; ?></td>
									<td>Rp.
										<?php echo number_format($subharga); ?>
									</td>
								</tr>
								<?php $nomor++; ?>
								<?php $totalbelanja += $subharga; ?>
							<?php endforeach ?>
						<?php
						} else {
							echo "<script>alert('Keranjang Belanja Kosong');</script>";
							echo "<script>location='homepage.php';</script>";
						} ?>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="4">Total Belanja</th>
							<th>Rp.
								<?php echo number_format($totalbelanja) ?>
							</th>
						</tr>
					</tfoot>
				</table>
				<form method="post"z>
					<?php
					$username = $_SESSION['username'];
					$query_users = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
					$da = mysqli_fetch_array($query_users);
					//var_dump($da);
					?>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" readonly value="<?= $da['namalengkap']; ?>" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" readonly value="<?= $da['telepon']; ?>" class="form-control">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Alamat Lengkap Pengiriman</label>
						<textarea class="form-control" name="alamat_pengiriman" placeholder="Masukkan alamat lengkap pengiriman (termasuk kode pos)" readonly><?= $da['alamat']; ?></textarea>
					</div>
					<button class="btn btn-primary" name="checkout">Checkout</button>
				</form>
				<?php
				if (isset($_POST["checkout"])) {
					$id_user = $da['id'];
					$tanggal_pembelian = date("Y-m-d H:i:s");
					$alamat_pengiriman = $_POST["alamat_pengiriman"];
					$total_pembelian = $totalbelanja;
					// 1. menyimpan data ke tabel pembelian
					//INSERT INTO `transaksi`(`id`, `users_id`, `status`, `tanggal_transaksi`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
					$query_transaksi = "INSERT INTO transaksi (users_id, status, bukti_pembayaran, tanggal_transaksi) VALUES ('$id_user', 'Pending', '', '$tanggal_pembelian')";
					$eksekusi_query_transaksi = mysqli_query($conn, $query_transaksi);
					$id_transaksi = mysqli_insert_id($conn);
					// 2. menyimpan data ke tabel detail transaksi
					foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
						//INSERT INTO `detail_transaksi`(`id`, `transaksi_id`, `produk_id`, `jumlah`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
						$query_detail_transaksi = "INSERT INTO transaksi_detail (transaksi_id, produk_id, jumlah) VALUES ('$id_transaksi', '$id_produk', '$jumlah')";
						$eksekusi_query_detail_transaksi = mysqli_query($conn, $query_detail_transaksi);
					}
					// 3. kurangi stok
					foreach ($_SESSION["keranjang"] as $id_produk => $jumlah) {
						$query_produk = mysqli_query($conn, "SELECT * FROM produk WHERE id = '$id_produk'");
						$data_produk = mysqli_fetch_array($query_produk);
						$stok_produk = $data_produk['stok'];
						$stok_produk_baru = $stok_produk - $jumlah;
						if ($stok_produk_baru < 0) {
							$stok_produk_baru = 0;
						}
						$query_update_stok = mysqli_query($conn, "UPDATE produk SET stok = '$stok_produk_baru' WHERE id = '$id_produk'");
					}
					// 4. mengkosongkan keranjang belanja
					unset($_SESSION["keranjang"]);
					// 5. tampilan dialihkan ke halaman nota, nota dari pembelian yang barusan
					echo "<script>alert('pembelian sukses');</script>";
					echo "<script>location='checkout_success.php?id=$id_transaksi';</script>";
				}
				?>
			</div>
		</div>
	</div>




</body>