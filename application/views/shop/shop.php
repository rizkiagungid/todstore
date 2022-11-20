<?php
include 'includes/db.php';
// require_once 'berhasil_login.php';
//var_dump($_SESSION);
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

    <!-- wrapp shop -->
    <div class="wrapp-shop">
        <!-- header -->
        <div class="header" style="background-image: url(images/head-shop.png);">
            <div class="wrapp-txt-header">
                <div class="desk-header">
                    <ul class="list-link-page">
                    <p class="link-page" onclick="toPage('home')" style="margin: 0; cursor: pointer;">Home/</p>
                        <p class="link-page" onclick="toPage('shop')" style="margin: 0; cursor: pointer;">Shop</p>
                    </ul>
                    <p class="txt-header">
                        SHOP
                    </p>
                </div>
            </div>
        </div>

        <!-- content -->
        <div class="wrapp-content">
            <div id="container-content-shop" class="container-content">
                <!-- sort by -->
                <div class="dropdown-sort-by">
                    <!-- <button class="btn-sort" onclick="clickSortBy()">
                        <i class="fa-solid fa-gear" style="margin-right: 5px;"></i>
                        Sort by
                        <i class="fa-sharp fa-solid fa-sort-down" style="margin: 0px 0 4px 5px;"></i>
                    </button> -->

                    <!-- on dropdown -->
                    <!-- <div id="on-dropdown" class="on-dropdown">
                        <li class="list-menu">
                            Baju
                        </li>
                        <li class="list-menu">
                            sepatu
                        </li>
                    </div> -->

                    <!-- card shop -->
                    <div id="card-shop" class="card-shop">
                    <?php
                    $no = 1;
                    $query = "SELECT * FROM produk ORDER BY id ASC ";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {

                        while ($row = mysqli_fetch_array($result)) {

                            $id    = $row['id'];
                            $name  = $row['name'];
                            $harga = $row['harga'];
                            $model = $row['model'];
                            $stok = $row['stok'];
                            $ukuran = $row['ukuran'];
                            $image = $row['image'];
                    ?>                
                    <div class="card-products" id="<?= $stok; ?>">
                    <img src="<?= "images/" . $image; ?>" alt="" class="img-products">
                                <p class="gender">
                                <?= $model; ?>
                                </p>
                                <p class="name-products">
                                <?= $name; ?>
                                </p>
                                <p class="price">
                                RP.<?= $harga; ?>
                                </p>
                                <button class="view-product" id="<?= $id; ?>">
                                    Tambah
                                </button>
                    </div>
                    <?php
                }
            }
        ?>
                    </div>

                    <!-- pagination -->
                    <div class="pagination">
                        <i id="left-pagination" class="fa-solid fa-angle-left" style="margin-right: 3px; display: none;" onclick="clickLeftPaginate()"></i>
                        <ul id="list-index-paginate" class="list-index-paginate"></ul>
                        <i id="right-pagination" class="fa-solid fa-angle-right" style="margin-left: 3px;" onclick="clickRightPaginate()"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>