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

<div class="wrapp-about">
        <!-- header -->
        <div class="header" style="background-image: url(images/header-about.png);">
            <div class="wrapp-txt-header">
                <div class="desk-header">
                    <ul class="list-link-page">
                        <p class="link-page" onclick="toPage('home')" style="margin: 0; cursor: pointer;">Home/</p>
                        <p class="link-page" onclick="toPage('about')" style="margin: 0; cursor: pointer;">About Us</p>
                    </ul>
                    <p class="txt-header">
                        ABOUT US
                    </p>
                </div>
            </div>
        </div>

        <!-- content -->
        <div class="wrapp-content-about">
            <!-- we are tod -->
            <div class="wrapp-we-are-tod">
                <!-- bg-black-top -->
                <div class="bg-black-top"></div>

                <div class="container-we-are-tod">
                    <!-- deskripsi we are tod -->
                    <div class="deskripsi-we-are-tod">
                        <!-- kiri deskripsi tod -->
                        <div class="kiri-deskripsi">
                            <p class="title">
                                WE ARE TOD
                            </p>
                            <div class="deskripsi">
                                TOD Project’s Adalah sebuah digital clothing store karya
                                anak bangsa yang berbasis di Cilebut - Citayem
                                mempunyai Visi untuk turut berpartisipasi dalam
                                kearifan lokal.
                            </div>
                        </div>
                        <!-- kanan deskripsi tod -->
                        <div class="kanan-deskripsi">
                            <img src="images/we.png" alt="" class="img-deskripsi">
                            <div class="back-image"></div>
                        </div>

                    </div>

                    <!-- pengiriman antar alam -->
                    <div class="pengiriman-antar-alam">
                        <div class="col-antar-alam" style="padding-right: 20px;">
                            <img src="images/Vector.png" alt="" class="icon-pengiriman">

                            <p class="title-antar-alam">
                                PENGIRIMAN ANTAR ALAM
                            </p>
                            <p class="deskripsi-antar-alam">
                                Mengirim paket anda hingga
                                berbeda alam dalam waktu
                                yang mustahil
                            </p>
                        </div>
                        <div class="col-antar-alam" style="border-right: 2px solid #000; border-left: 2px solid #000; padding-right: 20px; padding-left: 20px;">
                            <img src="images/XMLID_8897_.png" alt="" class="icon-pengiriman">

                            <p class="title-antar-alam">
                                100% AUTHENTIC HIGH QUALITY
                            </p>
                            <p class="deskripsi-antar-alam">
                                Baju yang kami jual sudah terjamin
                                sekali kualitasnya asli cibaduyut
                                pokona mah
                            </p>
                        </div>
                        <div class="col-antar-alam" style="padding-left: 20px;">
                            <img src="images/Phone logo.png" alt="" class="icon-pengiriman">

                            <p class="title-antar-alam">
                                LAYANAN CS 24/7
                            </p>
                            <p class="deskripsi-antar-alam">
                                CS kami siap melayani anda tanpa henti
                                bahkanuntuk curhat sekalipun tentang
                                asmara anda
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- shop by categories -->
            <div class="wrapp-shop-categories">
                <div class="container-shop-categories">
                    <p class="title-shop-categories">
                        SHOP BY CATEGORIES
                    </p>
                    <p class="deskripsi-shop-categories">
                        Pick a category you need
                    </p>

                    <!-- img men and women -->
                    <div class="image-men-women">
                        <div class="kiri-men">
                            <img src="images/men.jfif" alt="" class="bg-img-men-women">
                            <p class="title-img">
                                MEN
                            </p>
                            <p class="deskripsi-img">
                                10 Products
                            </p>
                        </div>
                        <div class="kanan-women">
                            <img src="images/women.jfif" alt="" class="bg-img-men-women">
                            <p class="title-img txt-kanan-img">
                                WOMEN
                            </p>
                            <p class="deskripsi-img txt-kanan-img">
                                5 Products
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- our team -->
            <div class="wrapp-our-team">
                <!-- background black -->
                <div class="bg-black-bottom"></div>
                <div class="bg-black-bottom-two"></div>

                <div class="container-our-team">
                    <p class="title-our-team">
                        OUR TEAM
                    </p>
                    <p class="deskripsi-our-team">
                        Pekerja Keras
                    </p>

                    <!-- card our team -->
                    <div class="card-our-team">
                        <div class="card-person">
                            <img src="images/ridwan.png" alt="" class="img-person">

                            <p class="title-person">
                                FRONT-END ENGINEER
                            </p>
                            <P class="name-person">
                                M RIDWAN APRIYADI
                            </P>
                            <p class="nim-person">
                                15200060
                            </p>
                        </div>
                        <div class="card-person">
                            <img src="images/rizky.png" alt="" class="img-person">

                            <p class="title-person">
                                BACK-END ENGINEER
                            </p>
                            <P class="name-person">
                                RIZKI AGUNG SENTOSA
                            </P>
                            <p class="nim-person">
                                15200048
                            </p>
                        </div>
                        <div class="card-person">
                            <img src="images/marchel.png" alt="" class="img-person">

                            <p class="title-person">
                                UI/UX DESIGNER
                            </p>
                            <P class="name-person">
                                MARSELINO RAJA P.T
                            </P>
                            <p class="nim-person">
                                15200180
                            </p>
                        </div>
                        <div class="card-person">
                            <img src="images/thio.png" alt="" class="img-person">

                            <p class="title-person">
                                TEST ENGINEER
                            </p>
                            <P class="name-person">
                                M RIZKY THIO
                            </P>
                            <p class="nim-person">
                                15200237
                            </p>
                        </div>
                        <div class="card-person">
                            <img src="images/aoo.png" alt="" class="img-person">

                            <p class="title-person">
                                TEST ENGINEER
                            </p>
                            <P class="name-person">
                                M ALDI RAMADHAN
                            </P>
                            <p class="nim-person">
                                15200063
                            </p>
                        </div>
                    </div>

                    <!-- people say about us -->
                    <p class="title-people-say">
                        WHAT PEOPLE SAY ABOUT US
                    </p>

                    <!-- carousel people -->
                    <div id="carousel-people-about" class="carousel slide carousel-people" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="deskripsi">
                                    <p class="comment-people">
                                    “Wah barang di sini bagus-bagus sekali”
                                    </p>
                                    <p class="name-people">
                                    -Aldi (Aooo)
                                    </p>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="deskripsi">
                                    <p class="comment-people">
                                    “Barang disini cukup bagus yah, dari impor juga ternyata”
                                    </p>
                                    <p class="name-people">
                                    -Rizky Agung
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="deskripsi">
                                    <p class="comment-people">
                                    “Hmm Barang disini oke-oke banget”
                                    </p>
                                    <p class="name-people">
                                    -Thio
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carousel-people-about"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true" style="background-image: none;">
                                <i class="fa-solid fa-angle-left"></i>
                            </span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carousel-people-about"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true" style="background-image: none;">
                                <i class="fa-solid fa-angle-right"></i>
                            </span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                    <!-- sponsor -->
                    <div class="sponsor-about">
                        <li class="list-sponsor">
                            <img src="images/dickies logo.png" alt="" class="img-sponsor">
                        </li>
                        <li class="list-sponsor">
                            <img src="images/Adidas logo.png" alt="" class="img-sponsor">
                        </li>
                        <li class="list-sponsor">
                            <img src="images/Camel_Logo_old logo.png" alt="" class="img-sponsor">
                        </li>
                        <li class="list-sponsor">
                            <img src="images/Gucci logo.png" alt="" class="img-sponsor">
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>