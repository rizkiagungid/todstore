<?php
include 'includes/db.php';
// require_once 'berhasil_login.php';
//var_dump($_SESSION);

// check session start or not
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
 
if (!isset($_SESSION['username'])) {
    header("Location: login");
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
            www.todstore.com
        </p>
    </div>

    <!-- wrapp cart -->
    <div class="wrapp-cart">
        <!-- header -->
        <div class="header" style="background-image: url(images/head-shop.png);">
            <div class="wrapp-txt-header">
                <div class="desk-header">
                    <ul class="list-link-page">
                        <p class="link-page" onclick="toPage('home')" style="margin: 0; cursor: pointer;">Home/</p>
                        <p class="link-page" onclick="toPage('cart')" style="margin: 0; cursor: pointer;">Shopping Cart</p>
                    </ul>
                    <p class="txt-header" style="color: #fff;">
                        SHOPPING CART
                    </p>
                </div>
            </div>
        </div>

        <!-- content -->
        <div class="content-cart">
            <div id="container-cart" class="container-cart">
                <p class="title-product">
                    PRODUCT
                </p>

                <!-- card -->
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
                <div class="card-cart">
                    <button class="btn-close-cart">
                        <i class="fa-solid fa-xmark"></i>
                    </button>

                    <img src="images/<?= $image; ?>" alt="" class="img-cart">

                    <p class="name-product-cart">
                    <?= $name; ?>
                    </p>

                    <div class="btn-total">
                    <form action="keranjangaction" method="GET" style="display: flex; justify-content: center;">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <input type="hidden" name="jumlah" value="<?= $jumlah - 1; ?>">
                        <button type="submit" name="action" value="update" class="fa-solid fa-angle-left" style="background-color: transparent; border: none; outline: none;"></button>
                    </form>
                        <p class="number-total">
                        <?= $jumlah; ?>
                        </p>
                        <form action="http://localhost/todstore/keranjangaction" method="GET" style="display: flex; justify-content: center;">
                            <input type="hidden" name="id" value="<?= $id; ?>">
                            <input type="hidden" name="jumlah" value="<?= $jumlah + 1; ?>">
                            <button type="submit" name="action" value="update" class="fa-solid fa-angle-right" style="background-color: transparent; border: none; outline: none;"></button>
                        </form>
                    </div>

                    <p class="total-price">
                        Rp <?= number_format($total); ?>
                    </p>
                </div>
                <?php
        }   
        }
        ?>
                <!-- <div class="card-cart">
                    <button class="btn-close-cart">
                        <i class="fa-solid fa-xmark"></i>
                    </button>

                    <img src="images/products.jfif" alt="" class="img-cart">

                    <p class="name-product-cart">
                        DASTER YOGS
                    </p>

                    <div class="btn-total">
                        <i class="fa-solid fa-angle-left"></i>
                        <p class="number-total">
                            1
                        </p>
                        <i class="fa-solid fa-angle-right"></i>
                    </div>

                    <p class="total-price">
                        Rp 150,000
                    </p>
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
                    <button class="btn-checkout" onclick="toPage('checkout')">
                        Proceed to checkout
                    </button>
                    <button class="btn-shopping" onclick="toPage('shop')">
                        Continue Shopping
                    </button>
                </div>
            </div>

            <!-- container cart empty -->
            <div id="container-cart-empty" class="container-cart-empty" style="display: flex; flex-direction: column; width: 900px; justify-content: center; align-items: center; padding: 0px 0; height: 80vh;">
                <p class="title-cart-empty" style="font-size: 22px; font-family: 'Montserrat', sans-serif; font-weight: 600; color: #000; margin: 0;">
                    Your cart is empty
                </p>
                <p class="deskripsi-cart-empty" style="font-size: 14px; font-family: 'Montserrat', sans-serif; font-weight: 500; color: #000; margin: 10px 0 60px 0; width: 300px; text-align: center;">
                    Looks like you haven't added any courses to your cart yet.
                </p>
                <button class="btn-go-home" style="font-size: 15px; font-family: 'Montserrat', sans-serif; font-weight: 500; border-radius: 10px; padding: 10px 80px" onclick="toPage('home')">
                    ADD COURSES TO CART
                </button>
            </div>
        </div>
    </div>