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

<html>

<body>
  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- alert berhasil sukses checkout -->
        <div class="row">
          <div class="col-md-19">
            <div class="alert alert-success">
              <p class="text-center">
                Checkout Berhasil
                <br>
                <b>Segera transfer</b>  
                <br>
                ID Enkripsi Pesanan:
                <?php
echo rand() . "\n";
?>
<br>
                Silahkan lakukan pembayaran Rp. <?php echo number_format($total_harga); ?> ke rekening <strong>Bank BCA 123-456-789</strong> a.n. <strong>TOD STORE OFFICIAL</strong> dan lakukan konfirmasi pembayaran Otomatis<a href="transaksi"> disini</a>
              </p>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


</body>

</html>