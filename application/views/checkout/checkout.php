<?php
include 'includes/db.php';
// require_once 'berhasil_login.php';
//var_dump($_SESSION);

// check session start or not
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
 
if (!isset($_SESSION['username'])) {
    // header("Location: login");
    echo "<script>window.location.assign('http://localhost/todstore/page/login.php')</script>";
}
?>

<!-- loading page -->
<div id="wrapp-loading-page" class="wrapp-loading-page" style="display: flex; position: fixed; top: 0; left: 0; right: 0; bottom: 0; justify-content: center; align-items: center; background-color: #fff; z-index: 99999999999999999999999999;">
        <img src="images/logo.png" alt="" class="logo-loading">
        <div class="container-loading">
            <div class="border-loading border-satu"></div>
            <div class="border-loading border-dua"></div>
        </div>
        <p class="txt-link-web-load">
            our dream together
        </p>
    </div>

<!-- wrapp cart -->
<div class="wrapp-checkout" style="z-index: 1; background-color: #fff;">
        <!-- header -->
        <div class="header" style="background-image: url(images/head-shop.png);">
            <div class="wrapp-txt-header">
                <div class="desk-header">
                    <ul class="list-link-page">
                        <p class="link-page" onclick="toPage('home')" style="margin: 0; cursor: pointer;">Home/</p>
                        <p class="link-page" onclick="toPage('checkout')" style="margin: 0; cursor: pointer;">Shopping Cart</p>
                    </ul>
                    <p class="txt-header">
                        SHOPPING CART
                    </p>
                </div>
            </div>
        </div>

        <!-- content -->
        <div class="content-cart">
            <div class="container-cart">
                <p class="title-product">
                    BILLING DETAILS
                </p>

                <?php
                $no = 1;
                $total_keseluruhan = 0;
                // get id produk from session
                if (isset($_SESSION['keranjang'])) {
                    foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {

                        // get data produk from database
                        $query = "SELECT * FROM produk WHERE id = $id_produk";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($result);

                        $id    = $row['id'];
                        $name  = $row['name'];
                        $harga = $row['harga'];
                        $model = $row['model'];
                        $ukuran = $row['ukuran'];
                        $image = $row['image'];

                        $total = $harga * $jumlah;
                        $total_keseluruhan += $total;

                ?>
                <div class="card-cart" style="display: none;">
                    <button class="btn-close-cart">
                        <i class="fa-solid fa-xmark"></i>
                    </button>

                    <img src="images/<?= $image; ?>" alt="" class="img-cart">

                    <p class="name-product-cart">
                    <?= $name; ?>
                    </p>

                    <div class="btn-total">
                        <i class="fa-solid fa-angle-left"></i>
                        <p class="number-total">
                        <?= $jumlah; ?>
                        </p>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>

                    <p class="total-price">
                        Rp <?= number_format($total); ?>
                    </p>
                </div>
                <?php
        }   
        }
        ?>

                <!-- form checkout -->
                <form action="" method="post" class="form-checkout" style="background-color: #fff;">
                <?php
					$username = $_SESSION['username'];
					$query_users = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
					$da = mysqli_fetch_array($query_users);
					//var_dump($da);
					?>

                    <div class="container-input">
                        <label for="label" class="label-input">
                            Name
                        </label>
                        <input type="text" class="input-checkout" readonly value="<?= $da['namalengkap']; ?>">
                    </div>

                    <div class="container-input">
                        <label for="label" class="label-input">
                            Phone Number
                        </label>
                        <input type="text" class="input-checkout" readonly value="<?= $da['telepon']; ?>">
                    </div>

                    <div class="container-input">
                        <label for="label" class="label-input">
                            Address
                        </label>
                        <input type="text" name="alamat_pengiriman" class="input-checkout" readonly value="<?= $da['alamat']; ?>">
                    </div>

                    <div class="container-input">
                        <label for="label" class="label-input">
                            E-mail
                        </label>
                        <input type="email" name="email" class="input-checkout" value="<?= $da['email']; ?>" readonly>
                    </div>

                    <!-- <div class="container-input">
                        <label for="label" class="label-input">
                            Note
                        </label>
                        <input type="text" name="alamat_pengiriman" class="input-checkout" value="Note">
                    </div> -->

                    <!-- detail transaksi -->
                <div class="detail-transaksi">
                    <p class="qty">
                        QTY
                    </p>
                    <div class="qtytotals">
                        <p class="txt-qtytotals">
                            qtytotals:
                        </p>
                        <p id="number-total-qty" class="number-total-qty">
                            0
                        </p>
                    </div>
                    <p class="cart-totals">
                        CART TOTALS
                    </p>
                    <div class="harga-dan-total">
                        <div class="subtotals">
                            <p class="txt-subtotals">
                                subtotals:
                            </p>
                            <p class="number-subtotals">
                            Rp <?= number_format($total_keseluruhan); ?>
                            </p>
                        </div>
                        <div class="subtotals">
                            <p class="txt-subtotals">
                                qtytotals:
                            </p>
                            <p id="number-subtotals" class="number-subtotals" style="margin: 0;">
                                0
                            </p>
                        </div>
                    </div>
                    <div class="total">
                        <p class="txt-total">
                            TOTAL:
                        </p>
                        <p class="number-total">
                        Rp <?= number_format($total_keseluruhan); ?>
                        </p>
                    </div>
                </div>

                <!-- btn eksekusi -->
                <div class="container-button-cart">
                    <button name="checkout" class="btn-checkout" onclick="toFinishCheckout()" style="width: 100%; border: 1px solid #7A7A7A;">
                        Place Order
                    </button>
                    <!-- <button class="btn-shopping" onclick="toPage('shop')">
                        Continue Shopping
                    </button> -->
                </div>
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
					echo "<script>location='checkoutsuccess?id=$id_transaksi';</script>";
				}
				?>
            </div>
        </div>
    </div>

    <!-- wrapp pdf transaksi -->
    <div id="wrapp-pdf" class="wrapp-pdf" style="background-color: #fff;">
        <div class="container-pdf" style="background-color: #fff;">
            <img src="images/logo.png" alt="" class="logo-pdf">

            <?php
					$username = $_SESSION['username'];
					$query_users = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
					$da = mysqli_fetch_array($query_users);
					//var_dump($da);
					?>

            <p class="nama-user-pdf">
                Nama : <?= $da['namalengkap']; ?>
            </p>
            <p class="nama-user-pdf">
                No telp : <?= $da['telepon']; ?>
            </p>
            <p class="nama-user-pdf">
                Alamat : <?= $da['alamat']; ?>
            </p>
            <p class="nama-user-pdf">
                Email : <?= $da['email']; ?>
            </p>

            <div class="oke" style="margin-bottom: 40px;"></div>

            <?php
                $no = 1;
                $total_keseluruhan = 0;
                // get id produk from session
                if (isset($_SESSION['keranjang'])) {
                    foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {

                        // get data produk from database
                        $query = "SELECT * FROM produk WHERE id = $id_produk";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($result);

                        $id    = $row['id'];
                        $name  = $row['name'];
                        $harga = $row['harga'];
                        $model = $row['model'];
                        $ukuran = $row['ukuran'];
                        $image = $row['image'];

                        $total = $harga * $jumlah;
                        $total_keseluruhan += $total;

                ?>
            <div class="card-cart-pdf">
                <img src="images/<?= $image; ?>" alt="" class="img-cart">

                <p class="name-product-cart">
                <?= $name; ?>
                </p>

                <div class="btn-total">
                    <p class="number-total">
                        jumlah baju : <?= $jumlah; ?>
                    </p>
                </div>

                <p class="total-price">
                    Harga baju : Rp <?= number_format($total); ?>
                </p>
            </div>
            <?php
        }   
        }
        ?>

            <div class="detail-transaksi">
                <p class="qty">
                    QTY
                </p>
                <div class="qtytotals">
                    <p class="txt-qtytotals">
                        qtytotals:
                    </p>
                    <p id="number-total-qty-pdf" class="number-total-qty">
                        5
                    </p>
                </div>
                <p class="cart-totals">
                    CART TOTALS
                </p>
                <div class="harga-dan-total">
                    <div class="subtotals">
                        <p class="txt-subtotals">
                            subtotals:
                        </p>
                        <p class="number-subtotals">
                            Rp <?= number_format($total_keseluruhan); ?>
                        </p>
                    </div>
                    <div class="subtotals">
                        <p class="txt-subtotals">
                            qtytotals:
                        </p>
                        <p id="number-subtotals-pdf" class="number-subtotals" style="margin: 0;">
                            5
                        </p>
                    </div>
                </div>
                <div class="total">
                    <p class="txt-total">
                        TOTAL:
                    </p>
                    <p class="number-total">
                        Rp <?= number_format($total_keseluruhan); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>