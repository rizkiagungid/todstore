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

        </script>
      <!-- Page Header-->
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
      <header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?= $judul; ?></h1>
                            <span class="meta">
                                Posted by
                                <a href="#"><?= $posted; ?></a>
                                <?= $date; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>
                            <?= $artikel; ?>
                    </div>
                    <img style="height: 500px; width: 600px;" src="../images/blogfoto.jpg" alt="Blog-Images">
                    <style>
                   
                    </style>
                </div>
            </div>
        </article>
                </div>
            </div>