<?php
include 'includes/db.php';
// require_once 'berhasil_login.php';

// check session start or not
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
 
if (!isset($_SESSION['username'])) {
    // header("Location: login");
    echo "<script>window.location.assign('http://localhost/todstore/page/login.php')</script>";
}

// get transaksi_id
if (isset($_GET['id'])) {
  $id_transaksi = $_GET['id'];
  $id_user = $_SESSION['id'];
  // get total harga
  $query = "SELECT transaksi_detail.produk_id, transaksi_detail.jumlah, produk.harga FROM transaksi_detail 
  INNER JOIN produk ON transaksi_detail.produk_id = produk.id
  JOIN transaksi ON transaksi.id = transaksi_detail.transaksi_id
  WHERE transaksi.id = $id_transaksi AND transaksi.users_id = $id_user";
  $result2 = mysqli_query($conn, $query);
  $total_harga = 0;
  while ($row2 = mysqli_fetch_array($result2)) {
    $total_harga += $row2['harga'] * $row2['jumlah'];
  }
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

<!-- wrapp checkout success -->
<div class="wrapp-checkout-success">
    <!-- header -->
    <div class="header" style="background-image: url(images/head-shop.png);">
        <div class="wrapp-txt-header">
            <div class="desk-header">
                <ul class="list-link-page">
                    <p class="link-page" onclick="toPage('home')" style="margin: 0; cursor: pointer;">Home/</p>
                    <p class="link-page" onclick="toPage('checkoutsuccess')" style="margin: 0; cursor: pointer;">Shopping Cart</p>
                </ul>
                <p class="txt-header">
                    CHECKOUT
                </p>
            </div>
        </div>
    </div>

    <!-- content -->
    <div class="wrapp-content-checkout-success">
        <div class="container-content-checkout-success">
            <p class="title-checkout-success">
                THANK YOU YOUR ORDER
            </p>
            <p class="deskripsi-checkout-success">
                Your order is accepted. The managaer will 
                contact your shortly
            </p>
        </div>
    </div>

    <!-- button -->
    <button class="btn-checkout" onclick="toPage('shop')" style="border: 1px solid #7A7A7A;">
        Go to shop
    </button>
</div>