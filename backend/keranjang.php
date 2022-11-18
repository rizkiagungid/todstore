<head>
    <title>HALAMAN HOMEPAGE</title>
</head>
<?php
include 'includes/db.php';
require_once 'berhasil_login.php';
//var_dump($_SESSION);
?>

<div class="container">
    <div class="jumbotron text-center">
        <h2>KERANJANG</h2>
        <?php echo "<h1>" . $_SESSION['username'] . "!" . "</h1>"; ?>
    </div>
    <br>

    <a href="admin_index.php" role="button" class="btn btn-primary pull-right">KE HALAMAN ADMIN</a>

    <a href="keranjang.php" role="button" class="btn btn-primary pull-leaft">Keranjang</a>
    <a href="checkout.php" role="button" class="btn btn-primary pull-leaft">Checkout</a>
    <a href="order/shopping.php" role="button" class="btn btn-primary pull-leaft">Shoping</a>
    <br>

    <br>
    <table class="table table-hover table-striped">
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Model Produk</th>
            <th>Size</th>
            <th>Image</th>
            <th>Qty</th>
            <th>Total</th>
        </tr>
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
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $name; ?></td>
                    <td>RP.<?= $harga; ?></td>
                    <td><?= $model; ?></td>
                    <td><?= $ukuran; ?></td>
                    <td><img src="images/<?= $image; ?>" width="100px" height="100px"></td>
                    <td>
                        <form action="keranjang_action.php" method="GET">
                            <input type="hidden" name="id" value="<?= $id; ?>">
                            <input type="number" name="jumlah" value="<?= $jumlah; ?>" min="0" max="<?= $row['stok']; ?>">
                            <button type="submit" name="action" value="update" class="btn btn-primary">Update</button>
                        </form>

                    </td>
                    <td>Rp.<?= number_format($total); ?></td>
                </tr>
            <?php

                $no++;
            }

            ?>
            <!-- total keseluruhan -->
            <tr>
                <td colspan="7" align="right">Total Keseluruhan</td>
                <td>Rp.<?= number_format($total_keseluruhan); ?></td>
            </tr>

        <?php
        } else {
            echo "<tr><td colspan='8'>Keranjang Kosong</td></tr>";
        }
        ?>
    </table>
    <!-- update keranjang -->
    <!-- <button type="submit" role="button" class="btn btn-primary pull-left">Update Keranjang</button> -->
    <a href="homepage.php" role="button" class="btn btn-primary pull-left">Lanjutkan Belanja</a>
    <a href="checkout.php" role="button" class="btn btn-primary pull-right">Checkout</a>
</div>



<div>
    <center>
        <h1>about us</h1>
        <h3>aku adalah seorang manusia biasa</h3>
        <button type="button"><a href="about-us.php">Selengkapnya disini</a></button>
    </center>
</div>

<script>
    $(document).ready(function() {

        $('#delete').click(function() {
            if (!confirm("do you want to delete?")) {
                return false;
            } else {
                return true;
            }
        });


    });
</script>