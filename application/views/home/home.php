<?php
include 'includes/db.php';
// require_once './application/views/berhasil/berhasil.php';
// var_dump($_SESSION);

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
    
    <!-- carousel top -->

    <?php  		            
		
$query = "SELECT * FROM tentangtodstore ORDER BY id DESC ";

$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        
       
        $deskripsi = $row['deskripsi'];
        $judul  = $row['judul'];
?> 
<?php
    }
}  
?>
     
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
                    <?=$judul; ?>
                    </p>
                    
                    <p class="deskripsi">
                    <?=$deskripsi; ?>
                    
                    </p>
                    <button class="shop-now" onclick="toPage('shop')">
                        <p class="txt-btn">
                            SHOP NOW
                        </p>
                    </button>
                </div>
            </div>

            <div class="carousel-item active">
                <div class="container-deskripsi">
                    <div class="deskripsi-carousel">
                        <img src="images/baju1-carousel-top-removebg-preview.png" alt="" class="img-baju1">
                        <img src="images/baju1-carousel-top-removebg-preview.png" alt="" class="img-baju2">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-deskripsi">
                    <div class="deskripsi-carousel">
                        <img src="images/baju2-carousel-top-removebg-preview.png" alt="" class="img-baju1">
                        <img src="images/baju2-carousel-top-removebg-preview.png" alt="" class="img-baju2">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container-deskripsi">
                    <div class="deskripsi-carousel">
                        <img src="images/baju3-carousel-top-removebg-preview.png" alt="" class="img-baju1">
                        <img src="images/baju3-carousel-top-removebg-preview.png" alt="" class="img-baju2">
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
                <div class="our-products">
                    <p class="title-our-products">
                        OUR PRODUCTS
                    </p>

                    <div class="card-our-products">
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
                                <button class="view-product" onclick="tambahKeranjang(<?= $stok; ?>, <?= $id; ?>)">Add to cart</button>
                        </div>
            <?php
                }
            }
        ?>
                        <!-- <div class="card-products">
                            <img src="images/products.jfif" alt="" class="img-products">

                            <p class="gender">
                                Men
                            </p>
                            <p class="name-products">
                                Daster Yogs Lorem
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
                        </div> -->
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
                        <img src="images/aboutus.png" alt="" class="img-about">
                        <div class="kanan-about">
                            <p class="title-about">
                                ABOUT US
                            </p>
                            <div class="deskripsi-about">
                            TOD Project’s Adalah sebuah digital clothing store karya
                            anak bangsa yang berbasis di Cilebut - Citayem 
                            mempunyai Visi untuk turut berpartisipasi dalam 
                            kearifan lokal.
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
                            <img src="images/Adidas logo.png" alt="" class="img-sponsor">
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
                            Berita terbaru kami mengenai fashion
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
    