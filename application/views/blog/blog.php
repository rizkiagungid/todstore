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

<!-- wrapp blog -->
<div class="wrapp-page-blog">
        <!-- header -->
        <div class="header" style="background-image: url(images/header-about.png);">
            <div class="wrapp-txt-header">
                <div class="desk-header">
                    <ul class="list-link-page">
                        <p class="link-page" onclick="toPage('home')" style="margin: 0; cursor: pointer;">Home/</p>
                        <p class="link-page" onclick="toPage('blog')" style="margin: 0; cursor: pointer;">Blog</p>
                    </ul>
                    <p class="txt-header">
                        BLOG
                    </p>
                </div>
            </div>
        </div>

        <!-- content -->
        <div class="content-page-blog">
            <div class="container-content">
                <!-- card -->
                <div id="container-card" class="container-card">
                <?php
        $no = 1;
        $query = "SELECT * FROM blog ORDER BY id ASC ";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_array($result)) {

                $id    = $row['id'];
                $judul  = $row['judul'];
                $date = $row['date'];
                $artikel = $row['artikel'];
                $posted = $row['posted'];

     
        }
    }
    ?>
    <div class="card-blog" id="<?= $id; ?>">
                        <img src="images/artikelfoto.jpg" alt="" class="img-card">

                        <div class="author">
                            <p class="date">
                            <?= $date; ?>
                            </p>
                            <p class="by-author">
                             <?= $posted; ?>
                            </p>
                        </div>
                        <p class="title">
                        <?= $judul; ?>
                        </p>
                        <p class="deskripsi">
                        <?= $artikel; ?>
                        </p>

                        <button class="read-more" id="<?= $id; ?>" style="display: none;">
                            Read More <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
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