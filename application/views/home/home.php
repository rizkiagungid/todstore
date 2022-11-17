<?php
include 'includes/db.php';
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
    
    <!-- carousel top -->
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade carousel-slide carousel-top" data-bs-ride="carousel"
        style="background-image: url(images/banner-top.jfif)">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="wrapp-text-carousel-top">
                <div class="text-carousel-top">
                    <p class="title-deskripsi">
                        CHOOSE YOUR CLOTHES WITH US.
                    </p>
                    <p class="deskripsi">
                        We will help you to choose the product that without the doubt and suits you bestand we
                        mean
                        it.
                    </p>
                    <button class="shop-now">
                        <p class="txt-btn">
                            SHOP NOW
                        </p>
                    </button>
                </div>
            </div>

            <div class="carousel-item active">
                <div class="container-deskripsi">
                    <div class="deskripsi-carousel">
                        <img src="images/baju1.png" alt="" class="img-baju1">
                        <img src="images/baju2.png" alt="" class="img-baju2">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-deskripsi">
                    <div class="deskripsi-carousel">
                        <img src="images/LINE_ALBUM_2933-2936-TNW 112146-2933-2936-SP_220108_8-1279x1280.jpg" alt="" class="img-baju1">
                        <img src="images/baju2.png" alt="" class="img-baju2">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-deskripsi">
                    <div class="deskripsi-carousel">
                        <img src="images/normal_69234ea215.jpg" alt="" class="img-baju1">
                        <img src="images/baju2.png" alt="" class="img-baju2">
                    </div>
                </div>
            </div>
        </div>
        <div class="wrapp-indicator">
            <div class="indicator-top">
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- shop by categories -->
    
    <div class="wrapp-shop-categories">
        <div class="bg-black-top"></div>

        <div class="content-shop-categories">
            <div class="shop-categories">
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

                <!-- our products -->
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
                
                <div class="our-products">
                    <p class="title-our-products">
                        OUR PRODUCTS
                    </p>

                    <div class="card-our-products">
                        <div class="card-products">
                            <img src="images/products.jfif" alt="" class="img-products">

                            <p class="gender">
                                Men
                            </p>
                            <p class="name-products">
                                Daster Yogs
                            </p>
                            <p class="price">
                                Rp 1,000,000
                            </p>
                            <button class="view-product">
                                View Product
                            </button>
                        </div>
                        <div class="card-products">
                            <img src="images/products.jfif" alt="" class="img-products">

                            <p class="gender">
                                Men
                            </p>
                            <p class="name-products">
                                Daster Yogs Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, quibusdam nam
                                ad illum facere hic repudiandae debitis culpa unde, dolorum aperiam distinctio est
                                vitae. Dolorem labore minus ipsum nam obcaecati?
                            </p>
                            <p class="price">
                                Rp 1,000,000
                            </p>
                            <button class="view-product">
                                View Product
                            </button>
                        </div>
                        <div class="card-products">
                            <img src="images/products.jfif" alt="" class="img-products">

                            <p class="gender">
                                Men
                            </p>
                            <p class="name-products">
                                Daster Yogs
                            </p>
                            <p class="price">
                                Rp 1,000,000
                            </p>
                            <button class="view-product">
                                View Product
                            </button>
                        </div>
                        <div class="card-products">
                            <img src="images/products.jfif" alt="" class="img-products">

                            <p class="gender">
                                Men
                            </p>
                            <p class="name-products">
                                Daster Yogs
                            </p>
                            <p class="price">
                                Rp 1,000,000
                            </p>
                            <button class="view-product">
                                View Product
                            </button>
                        </div>
                        <div class="card-products">
                            <img src="images/products.jfif" alt="" class="img-products">

                            <p class="gender">
                                Men
                            </p>
                            <p class="name-products">
                                Daster Yogs
                            </p>
                            <p class="price">
                                Rp 1,000,000
                            </p>
                            <button class="view-product">
                                View Product
                            </button>
                        </div>
                        <div class="card-products">
                            <img src="images/products.jfif" alt="" class="img-products">

                            <p class="gender">
                                Men
                            </p>
                            <p class="name-products">
                                Daster Yogs
                            </p>
                            <p class="price">
                                Rp 1,000,000
                            </p>
                            <button class="view-product">
                                View Product
                            </button>
                        </div>
                        <div class="card-products">
                            <img src="images/products.jfif" alt="" class="img-products">

                            <p class="gender">
                                Men
                            </p>
                            <p class="name-products">
                                Daster Yogs
                            </p>
                            <p class="price">
                                Rp 1,000,000
                            </p>
                            <button class="view-product">
                                View Product
                            </button>
                        </div>
                        <div class="card-products">
                            <img src="images/products.jfif" alt="" class="img-products">

                            <p class="gender">
                                Men
                            </p>
                            <p class="name-products">
                                Daster Yogs
                            </p>
                            <p class="price">
                                Rp 1,000,000
                            </p>
                            <button class="view-product">
                                View Product
                            </button>
                        </div>
                    </div>

                    <div class="container-btn-show">
                        <button class="show-more">
                            Show More
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- from bg black bottom -->
        <div class="container-bg-black-bottom">
            <div class="bg-black-bottom"></div>
            <div class="bg-black-bottom-two"></div>

            <div class="container-content-about">
                <div class="content-about">
                    <!-- about -->
                    <div class="banner-about">
                        <img src="images/about.jfif" alt="" class="img-about">
                        <div class="kanan-about">
                            <p class="title-about">
                                ABOUT RIDWAN
                            </p>
                            <div class="deskripsi-about">
                                Ridwan adalah seorang karnivora wanita pemakan segala
                                wanita pecinta wanita bahkan memiliki sensual gila tidak
                                terbatas melampaui siapapun di muka bumi ini jadi
                                hati - hati ya gais kalo ketemu ridwan
                                Cheersss...
                            </div>
                        </div>
                    </div>

                    <!-- people say about us -->
                    <div class="people-say-about">
                        <p class="title-people-say">
                            WHAT PEOPLE SAY ABOUT US
                        </p>

                        <!-- carousel people -->
                        <div id="carousel-people" class="carousel slide carousel-people" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carousel-people" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carousel-people" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carousel-people" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="deskripsi">
                                        <p class="comment-people">
                                            “ Wahhh barang disini legit sekali ya gaes yah kalian wajib
                                            beut dah beli dimarih”
                                        </p>
                                        <p class="name-people">
                                            -GUS SAMSUDIN
                                        </p>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <div class="deskripsi">
                                        <p class="comment-people">
                                            “ Wahhh barang disini legit sekali ya gaes yah kalian wajib
                                            beut dah beli dimarih”
                                        </p>
                                        <p class="name-people">
                                            -GUS SAMSUDIN
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="deskripsi">
                                        <p class="comment-people">
                                            “ Wahhh barang disini legit sekali ya gaes yah kalian wajib
                                            beut dah beli dimarih”
                                        </p>
                                        <p class="name-people">
                                            -GUS SAMSUDIN
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carousel-people"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"
                                    style="background-image: none;">
                                    <i class="fa-solid fa-angle-left"></i>
                                </span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carousel-people"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"
                                    style="background-image: none;">
                                    <i class="fa-solid fa-angle-right"></i>
                                </span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                    <!-- sponsor -->
                    <div class="sponsor-home">
                        <li class="list-sponsor">
                            <img src="images/dickies logo.png" alt="" class="img-sponsor">
                        </li>
                        <li class="list-sponsor">
                            <img src="images/Durex logo.png" alt="" class="img-sponsor">
                        </li>
                        <li class="list-sponsor">
                            <img src="images/Camel_Logo_old logo.png" alt="" class="img-sponsor">
                        </li>
                        <li class="list-sponsor">
                            <img src="images/Gucci logo.png" alt="" class="img-sponsor">
                        </li>
                    </div>

                    <!-- latest news -->
                    <div class="latest-news">
                        <p class="title-latest-news">
                            LATEST NEWS
                        </p>
                        <p class="deskripsi-latest-news">
                            Berita gosip terhangat wow ya cuman di marih ya ges yah.
                        </p>

                        <div class="card-latest-news">
                            <div class="card-news">
                                <div class="con-img-news">
                                    <img src="images/latest-news.jfif" alt="" class="img-news">
                                </div>

                                <p class="title-news">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic fugiat, fuga laudantium porro itaque dolor quia. Odit voluptate cumque corporis, praesentium doloribus consectetur at cupiditate modi assumenda, nobis accusantium tempora.
                                </p>
                                <button class="read-more">
                                    Read More <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="card-news">
                                <div class="con-img-news">
                                    <img src="images/latest-news.jfif" alt="" class="img-news">
                                </div>

                                <p class="title-news">
                                    TIPS ANTI BEGAL Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum eius
                                    sunt, blanditiis dignissimos quos odit aperiam iste totam nihil voluptate quibusdam,
                                    voluptatem ullam, nisi fugiat cumque nesciunt adipisci earum. Et?
                                </p>
                                <button class="read-more">
                                    Read More <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                            <div class="card-news">
                                <div class="con-img-news">
                                    <img src="images/latest-news.jfif" alt="" class="img-news">
                                </div>

                                <p class="title-news">
                                    TIPS ANTI BEGAL
                                </p>
                                <button class="read-more">
                                    Read More <i class="fa-solid fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <?php
            }
        }