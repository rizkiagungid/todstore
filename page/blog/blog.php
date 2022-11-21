<?php 
include '../includes/db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <!-- weight 400 -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>TOD E-Commerce</title>
</head>
<body>
     <!-- navbar -->
     <div id="main-navbar" class="main-navbar" style="box-shadow: none;">
        <div class="navbar" style="margin: 0;">
            <div class="link-logo" onclick="toPage('home')">
                <img src="../images/logo.png" alt="" class="logo">
            </div>

            <ul class="list-menu">
                <li class="menu menu-navbar" onclick="toPage('home')">
                    HOME
                </li>
                <li class="menu menu-navbar" onclick="toPage('shop')">
                    SHOP
                </li>
                <li class="menu menu-navbar" onclick="toPage('blog')">
                    BLOG
                </li>
                <li class="menu menu-navbar" onclick="toPage('about')">
                    ABOUT
                </li>
            </ul>

            <ul class="list-icon">
                <li class="icon-nav">
                    <i class="fa-solid fa-user ic-nav" onclick="<?php echo "window.location.assign('http://localhost/todstore/page/login.php')";?>"></i>
                </li>
                <li class="icon-nav">
                <i class="fa-solid fa-right-from-bracket ic-nav" onclick="<?php echo "window.location.assign('http://localhost/todstore/page/logout.php')";?>"></i>
                </li>
                <li class="icon-nav">
                    <i class="fa-solid fa-cart-shopping ic-nav" onclick="toPage('cart')"></i>
                </li>
            </ul>
        </div>
    </div>
    <div class="wrapp-page-blog">
        <!-- header -->
        <div class="header" style="background-image: url(../images/header-about.png);">
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
                <div id="container-card" class="container-card"></div>

              
            </div>
        </div>
    </div>

    <script>
// card shop
// data page shop
const dataShop = [
            {
                img: 'images/products.jfif',
                gender: 'Men',
                nameProducts: 'Baju',
                price: 'Rp 1,000,000'
            },
            {
                img: 'images/products.jfif',
                gender: 'Men',
                nameProducts: 'Baju',
                price: 'Rp 1,000,000'
            },
            {
                img: 'images/products.jfif',
                gender: 'Men',
                nameProducts: 'Baju',
                price: 'Rp 1,000,000'
            },
            {
                img: 'images/products.jfif',
                gender: 'Men',
                nameProducts: 'Baju',
                price: 'Rp 1,000,000'
            },
            {
                img: 'images/products.jfif',
                gender: 'Men',
                nameProducts: 'Sepatu',
                price: 'Rp 1,000,000'
            },
            {
                img: 'images/products.jfif',
                gender: 'Men',
                nameProducts: 'Sepatu',
                price: 'Rp 1,000,000'
            },
            {
                img: 'images/products.jfif',
                gender: 'Men',
                nameProducts: 'Sepatu',
                price: 'Rp 1,000,000'
            },
            {
                img: 'images/products.jfif',
                gender: 'Men',
                nameProducts: 'Sepatu',
                price: 'Rp 1,000,000'
            },
            {
                img: 'images/products.jfif',
                gender: 'Men',
                nameProducts: 'Sepatu',
                price: 'Rp 1,000,000'
            },
            {
                img: 'images/products.jfif',
                gender: 'Men',
                nameProducts: 'Sepatu',
                price: 'Rp 1,000,000'
            },
            {
                img: 'images/products.jfif',
                gender: 'Men',
                nameProducts: 'Sepatu',
                price: 'Rp 1,000,000'
            },
            {
                img: 'images/products.jfif',
                gender: 'Men',
                nameProducts: 'Sepatu',
                price: 'Rp 1,000,000'
            },
        ]

        const dataBlog = [
            {
                img: 'images/products.jfif',
                date: 'JUN 19, 2021',
                byAuthor: 'by Admin',
                title: 'NUNC RHONCUS AUCTOR RISUS TEMPOR',
                deskripsi: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo fugiat earum nobis, tempora repellendus veniam fuga debitis impedit in quia dolore eaque veritatis perspiciatis nulla aut, dicta voluptatibus ipsa consectetur?'
            },
        ]

        const list_element = document.getElementById('card-shop')
        const list_element_blog = document.getElementById('container-card')
        const pagination = document.getElementById('list-index-paginate')

        let current_page = 1
        let rows = 8
        let rowsBlog = 4

        const newPathName = window.location.pathname.split('/')[2]

        function DisplayList(items, wrapper, rows_per_page, page) {
            wrapper.innerHTML = ''
            page--

            let start = rows_per_page * page
            let end = start + rows_per_page
            let paginatedItems = items.slice(start, end)

            let newData = []
            let newDataBlog = []

            if(newPathName === 'shop'){
                for (let i = 0; i < paginatedItems.length; i++) {
                    let item = paginatedItems[i]
                    newData.push(item)
                }

            wrapper.innerHTML = newData.map((e) => {
                    return `<div class="card-products">
                    <img src="${e.img}" alt="" class="img-products">
                                <p class="gender">
                                    ${e.gender}
                                </p>
                                <p class="name-products">
                                    ${e.nameProducts.length > 35 ? `${e.nameProducts.substr(0, 35)}...` : e.nameProducts}
                                </p>
                                <p class="price">
                                    ${e.price}
                                </p>
                                <button class="view-product">
                                    View Product
                                </button>
                    </div>`
                }).join('')
            }

            if(newPathName === 'blog'){
                for (let i = 0; i < paginatedItems.length; i++) {
                    let item = paginatedItems[i]
                    newDataBlog.push(item)
                }

            wrapper.innerHTML = newDataBlog.map((e) => {
                    return `<div class="card-blog">
                        <img src="${e.img}" alt="" class="img-card">

                        <div class="author">
                            <p class="date">
                                ${e.date}
                            </p>
                            <p class="by-author">
                                • ${e.byAuthor}
                            </p>
                        </div>
                        <p class="title">
                            ${e.title}
                        </p>
                        <p class="deskripsi">
                            ${e.deskripsi}
                        </p>

                        <button class="read-more">
                            Read More <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>`
                }).join('')
            }
        }

        const leftPagination = document.getElementById('left-pagination')
        const rightPagination = document.getElementById('right-pagination')

        function clickPaginate(index) {
            current_page = index
            if(newPathName === 'shop'){
                DisplayList(dataShop, list_element, rows, index)

                setTimeout(() => {
                    SetupPagination(dataShop, pagination, rows)
                }, 0)
            }

            if(newPathName === 'blog'){
                DisplayList(dataBlog, list_element_blog, rowsBlog, index)

                setTimeout(() => {
                    SetupPagination(dataBlog, pagination, rowsBlog)
                }, 0)
            }
            
            const indexPaginate = document.getElementsByClassName('index-paginate')

            leftPagination.style.display = 'flex'
            rightPagination.style.display = 'flex'

            if(current_page === 1){
                leftPagination.style.display = 'none'
            }else if(current_page === indexPaginate.length){
                rightPagination.style.display = 'none'
            }

            window.scrollTo(0, 200)
        }

        function clickLeftPaginate() {
            if (current_page > 1) {
                current_page = current_page - 1

                if(newPathName === 'shop'){
                    DisplayList(dataShop, list_element, rows, current_page)

                    setTimeout(() => {
                        SetupPagination(dataShop, pagination, rows)
                    }, 0)
                }

                if(newPathName === 'blog'){
                    DisplayList(dataBlog, list_element_blog, rowsBlog, current_page)

                    setTimeout(() => {
                        SetupPagination(dataBlog, pagination, rowsBlog)
                    }, 0)
                }
                
                if(current_page === 1){
                    leftPagination.style.display = 'none'
                }
                rightPagination.style.display = 'flex'

                window.scrollTo(0, 200)
            }
        }

        function clickRightPaginate() {
            const indexPaginate = document.getElementsByClassName('index-paginate')

            if (current_page < indexPaginate.length) {
                current_page = current_page + 1

                if(newPathName === 'shop'){
                    DisplayList(dataShop, list_element, rows, current_page)

                    setTimeout(() => {
                        SetupPagination(dataShop, pagination, rows)
                    }, 0)
                }

                if(newPathName === 'blog'){
                    DisplayList(dataBlog, list_element_blog, rowsBlog, current_page)

                    setTimeout(() => {
                        SetupPagination(dataBlog, pagination, rowsBlog)
                    }, 0)
                }

                if(current_page === indexPaginate.length){
                    rightPagination.style.display = 'none'
                }
                leftPagination.style.display = 'flex'

                window.scrollTo(0, 200)
            }
        }

        function SetupPagination(items, wrapper, rows_per_page) {
            wrapper.innerHTML = ''

            let dataPaginate = []

            let page_count = Math.ceil(items.length / rows_per_page - 1)
            for (let i = 0; i < page_count + 1; i++) {
                dataPaginate.push(i)
            }

            wrapper.innerHTML = dataPaginate.map((e) => {
                return `<li class="index-paginate ${current_page === e + 1 ? 'active-paginate' : ''}" onclick="clickPaginate(${e + 1})">
                                ${e + 1}
                            </li>`
            }).join('')
        }

        if(newPathName === 'shop'){
            DisplayList(dataShop, list_element, rows, current_page)
            SetupPagination(dataShop, pagination, rows)
        }

        if(newPathName === 'blog'){
            DisplayList(dataBlog, list_element_blog, rowsBlog, current_page)
            SetupPagination(dataBlog, pagination, rowsBlog)
        }
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
                    <img style="height: 500px; width: 600px;" src="images/blogfoto.jpg" alt="">
                    </div>    
            </div>
        </article>
                </div>
            </div>
 <!-- footer -->
 <div class="main-footer">
        <div class="footer">
            <!-- search -->
            <div class="search">
                <div class="kiri-search">
                    <p class="title-search">
                        Subscribe to our website
                    </p>
                    <p class="deskripsi-search">
                      Subscribe Untuk Mendapatkan Informasi Terbaru mengenai Tod store
                    </p>
                </div>
                <div class="kanan-search">
                    <div class="column-input">
                        <input type="email" class="input-search" id="subscribe" onchange="changeInput()">
                        <button class="btn-subscribe" onclick="submit()">
                            Subscribe
                        </button>
                    </div>

                    <!-- error message -->
                    <p id="error-message-subscribe" class="error-message-subscribe">
                        
                    </p>
                </div>
            </div>
                 <!-- tod project -->
                 <div class="tod-project">
                <li class="menu-footer">
                    <p class="title-menu">
                        TOD PROJECT
                    </p>
                    <p class="deskripsi-menu" style="cursor: text; color: #fff;">
                      Web Aplikasi Belanja buatan anak bangsa
                    </p>
                </li>
                <li class="menu-footer">
                    <p class="title-menu">
                        INFORMATION
                    </p>
                    <p class="deskripsi-menu">
                        About TOD PROJECT
                    </p>
                    <p class="deskripsi-menu">
                        Contact Us
                    </p>
                </li>
                <li class="menu-footer">
                    <p class="title-menu">
                        QUICK LINKS
                    </p>
                    <p class="deskripsi-menu">
                        Wishlist
                    </p>
                    <p class="deskripsi-menu">
                        Checkout
                    </p>
                    <p class="deskripsi-menu">
                        Cart
                    </p>
                </li>
                <li class="menu-footer">
                    <p class="title-menu">
                        CONTACT US
                    </p>
                    <a href="#" class="deskripsi-menu">
                        <i class="fa-solid fa-location-dot"></i> Jalan YatemPiatu Sejahtera 01-00
                    </a>
                    <a href="tel:+6281383959452" class="deskripsi-menu">
                        <i class="fa-solid fa-phone-volume" style="transform: rotate(-50deg);"></i> (99) 100-500
                    </a>
                    <a href="mailto:yatempiatu@gmail.com" class="deskripsi-menu">
                        <i class="fa-solid fa-envelope"></i> yatempiatu@gmail.com
                    </a>
                </li>
            </div>

            <!-- copy right -->
            <div class="copy-right">
                <p class="txt-copy-right">
                    COPYRIGHT © 2022 TOD PROJECT
                </p>
                <p class="reserved">
                    ALL RIGHT RESERVED
                </p>
            </div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>
</html>