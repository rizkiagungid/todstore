<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/logo.png" type="image/icon type">
	<link rel="stylesheet" href="assets/index.css">
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
<title>404 Page Not Found</title>
<style type="text/css">

/* error page */
.wrapp-error-page{
	display: flex;
	height: 95vh;
	width: auto;
	padding-top: 80px;
	background-color: #F8BB31;
	justify-content: center;
	align-items: center;
	overflow: hidden;
}

.wrapp-error-page .content-error{
	display: flex;
	flex-direction: column;
	align-items: center;
	width: 900px;
	justify-content: center;
}

.wrapp-error-page .content-error .column-desk-error{
	display: flex;
	align-items: center;
	justify-content: center;
	margin-bottom: 180px;
	z-index: 1;
}

.wrapp-error-page .content-error .deskripsi-error{
	display: flex;
	flex-direction: column;
	margin-left: 30px;
}

.wrapp-error-page .content-error .deskripsi-error .title-error{
	font-size: 30px;
	font-weight: 800;
	font-family: 'Montserrat', sans-serif;
	color: #000;
	margin: 0;
}

.wrapp-error-page .content-error .deskripsi-error .text-desk-error{
	font-size: 14px;
	font-weight: 500;
	font-family: 'Montserrat', sans-serif;
	color: #000;
	margin-bottom: 0px;
}

.wrapp-error-page .content-error .deskripsi-error .column-button-error{
	display: flex;
	align-items: center;
	margin-top: 20px;
}

.wrapp-error-page .content-error .deskripsi-error .column-button-error .back-to-home{
	display: flex;
    padding: 7px 0;
    width: 180px;
    justify-content: center;
    align-items: center;
    outline: none;
    border: 2px solid #fff;
    border-radius: 10px;
    background-color: #fff;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    color: #000;
    font-size: 11px;
	cursor: pointer;
    transition: 0.3s ease-in-out;
}
.wrapp-error-page .content-error .deskripsi-error .column-button-error .back-to-home:hover{
	background-color: #000;
	border: 2px solid #000;
	color: #fff;
}

.wrapp-error-page .content-error .deskripsi-error .column-button-error .to-contact-us{
	display: flex;
    padding: 7px 0;
    width: 150px;
    justify-content: center;
    align-items: center;
    outline: none;
    border: 2px solid #000;
    border-radius: 10px;
    background-color: transparent;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    color: #000;
    font-size: 11px;
	cursor: pointer;
    transition: 0.3s ease-in-out;
	margin-left: 15px;
}
.wrapp-error-page .content-error .deskripsi-error .column-button-error .to-contact-us:hover{
	background-color: #000;
	color: #fff;
}

/* number error */
.wrapp-error-page .content-error .number-error{
	display: flex;
	position: absolute;
	font-size: 70px;
	font-weight: 700;
	font-family: 'Montserrat', sans-serif;
	color: #000;
	margin-top: 200px;
	margin-bottom: 0;
	z-index: 1;
	animation: loadNumber 3s ease-out infinite;
}

@keyframes loadNumber {
	50%{
        margin-top: 150px;
    }
}

/* bulet */
.wrapp-error-page .content-error .bulet{
	display: flex;
	position: absolute;
	height: 150px;
	width: 100px;
	border-radius: 50%;
	background-color: #000;
	transform: rotateX(76deg);
	opacity: 0.5;
	margin-top: 310px;
	animation: loadSend 3s ease-out infinite;
}

@keyframes loadSend {
    0%{
		height: 100px;
        width: 60px;
    }
	50%{
		height: 150px;
        width: 100px;
    }
	100%{
		height: 100px;
        width: 60px;
    }
}

</style>
</head>
<body onscroll="navbarScroll()">
<script>
        // untuk subscribe di input footer
        const serviceID = 'service_hmqukxt'
        const templateID = 'template_fwpgdpp'
        const publicKey = '9OBxoKBI85PFlIkj7'

        let data = {
            fullName: 'TOD E-Commerce',
            email: '',
            toEmail: 'iwanwawan455@gmail.com',
            message: 'user telah subscribe di website kami (TOD E-Commerce).'
        }

        let dataToUser = {
            to_name: 'Rizky',
            fullName: 'TOD E-Commerce',
            phone: 'Terima kasih, Anda telah berhasil subscribe di website kami (TOD E-Commerce)!.',
            nations: 'Anda akan menerima informasi berbagai pakaian baju terbaru dari kami.',
            toEmail: '',
            message: 'Kunjungi TOD E-Commerce : https://rizkiagungid.github.io/'
        }

        function changeInput() {
            data.email = document.getElementById('subscribe').value
            dataToUser.toEmail = document.getElementById('subscribe').value
        }

        let submitCondition = true

        async function sendToUser(){
            return await new Promise((resolve, reject)=>{
                emailjs.send(serviceID, templateID, dataToUser, publicKey)
                .then(res=>resolve('success'))
                .catch(err=>reject('Terjadi kesalahan server, mohon coba beberapa saat lagi!'))
            })
        }

        function submitMessage(textSuccess, bgColor, second){
            const errorMessage = document.getElementById('error-message-subscribe')
            const loadSend = document.getElementById('loading-send')
            const txtSuccess = document.getElementById('txt-success')
            const popUpMessage = document.getElementById('pop-up-success')

            errorMessage.innerHTML = ''
            loadSend.style.display = 'none'
            txtSuccess.style.backgroundColor = bgColor
            txtSuccess.style.color = '#fff'
            txtSuccess.textContent = textSuccess

            popUpMessage.style.marginTop = '100px'

            setTimeout(() => {
                popUpMessage.style.marginTop = '1px'
                submitCondition = true
            }, second);
        }

        function submit() {
            const errorMessage = document.getElementById('error-message-subscribe')
            const loadSend = document.getElementById('loading-send')
            
            const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/

            let err = ''

            if (data.email.length === 0 && !data.email.trim()) {
                err = 'Email harus di isi'
            } else if (!document.getElementById('subscribe').value.match(mailformat)) {
                err = 'Email harus di isi dengan benar'
            }

            if (err.length === 0) {
                loadSend.style.display = 'flex'

                data.email = `email user : ${document.getElementById('subscribe').value}`

                if (submitCondition) {
                    submitCondition = false

                    emailjs.send(serviceID, templateID, data, publicKey)
                        .then((res) => {
                            sendToUser()
                            .then(resolve=>{
                                if(resolve === 'success'){
                                    submitMessage('Terima kasih sudah subscribe!', '#1E1E1E', 4000)

                                    document.getElementById('subscribe').value = ''
                                    data.email = ''
                                    dataToUser.toEmail = ''
                                    console.log(resolve)
                                }
                            })
                            .catch(err=>{
                                submitMessage(err, '#FF0000', 5000)
                                console.log(err)
                            })
                        })
                        .catch(err => {
                            submitMessage('Terjadi kesalahan server, mohon coba beberapa saat lagi!', '#FF0000', 5000)
                            console.log(err)
                        })
                }
            } else {
                errorMessage.innerHTML = err
            }
        }
    </script>

    <!-- navbar -->
    <div id="main-navbar" class="main-navbar" style="box-shadow: none;">
        <div class="navbar">
            <div class="link-logo" onclick="toPage('home')">
                <img src="images/logo.png" alt="" class="logo">
            </div>

            <ul class="list-menu">
			<li class="menu menu-navbar" onclick="toPage('home')">
                    HOME
                </li>
                <li class="menu menu-navbar" onclick="toPage('shop')">
                    SHOP
                </li>
                <li class="menu menu-navbar" onclick="toPage('product')">
                    PRODUCT
                </li>
                <li class="menu menu-navbar" onclick="toPage('blog')">
                    BLOG
                </li>
                <li class="menu menu-navbar" onclick="toPage('page')">
                    PAGE
                </li>
            </ul>

            <ul class="list-icon">
                <li class="icon-nav">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </li>
                <li class="icon-nav">
                    <i class="fa-solid fa-heart"></i>
                </li>
                <li class="icon-nav">
                    <i class="fa-solid fa-cart-shopping"></i>
                </li>
            </ul>
        </div>
    </div>

	<!-- loading page -->
    <div id="wrapp-loading-page" class="wrapp-loading-page" style="display: flex; position: fixed; top: 0; left: 0; right: 0; bottom: 0; justify-content: center; align-items: center; background-color: #fff; z-index: 99999999999999999999999999;">
        <div class="circle-loading-page" style="display: flex; height: 40px; width: 40px; border: 4px solid #1E1E1E; border-top-color: #fff; border-radius: 500px;">
        </div>
    </div>

	<!-- content -->
	<!-- error page -->
	<div class="wrapp-error-page">
		<div class="content-error">
			<div class="column-desk-error">
				<div class="deskripsi-error">
					<p class="title-error">
						PAGE NOT FOUND!
					</p>
					<p class="text-desk-error">
						The page you are looking for was moved, removed, renamed or might never existed.
					</p>
					<div class="column-button-error">
						<button class="back-to-home" onclick="toPage('home')">
							BACK TO HOMEPAGE
						</button>
						<button class="to-contact-us" onclick="toPage('contact')">
							CONTACT US
						</button>
					</div>
				</div>
			</div>

			<!-- number error -->
			<p class="number-error">
				404
			</p>

			<!-- bulet -->
			<div class="bulet">

			</div>
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
                        silahkan subscribe di web kami.
                    </p>
                </div>
                <div class="kanan-search">
                    <div class="column-input">
                        <input type="email" class="input-search" id="subscribe" onchange="changeInput()">
                        <button class="btn-subscribe" onclick="submit()">
                            Subscribe

                            <!-- loading send -->
                            <div id="loading-send" class="loading-send">
                                <div class="circle-loading-send"></div>
                            </div>
                        </button>
                    </div>

                    <!-- error message -->
                    <p id="error-message-subscribe" class="error-message-subscribe"></p>

                    <!-- pop up message success -->
                    <div id="pop-up-success" class="pop-up-success">
                        <p id="txt-success" class="txt-success" style="background-color: #ff0000; color: #fff; margin-top: 0px; width: auto; padding: 0 40px;">
                        
                        </p>
                    </div>
                </div>
            </div>

            <!-- tod project -->
            <div class="tod-project">
                <li class="menu-footer">
                    <p class="title-menu">
                        TOD PROJECT
                    </p>
                    <p class="deskripsi-menu" style="cursor: text; color: #fff;">
                        Ya sakumaha aing weh nu bikin
                        tangkurank siaaa!!!
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
                    <a target="_blank" href="https://maps.google.com/maps/dir//Jl.+Sunan+Muria+IV+Pabuaran+Kecamatan+Bojonggede+Kabupaten+Bogor,+Jawa+Barat+16921/@-6.4547463,106.7950764,15z/data=!4m5!4m4!1m0!1m2!1m1!1s0x2e69e9e7ede517f7:0xb8953bf5dd0f86f1" class="deskripsi-menu">
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

    <script>
        // active menu navbar
        const menuNavbar = document.getElementsByClassName('menu-navbar')

        function activeNavbar(){
            const pathname = window.location.pathname.split('/')[2]

            if(menuNavbar.length > 0){
                for(let i = 0; i < menuNavbar.length; i++){
                    if(menuNavbar[i].innerText.toLowerCase() === pathname.toLowerCase()){
                        menuNavbar[i].style.color = '#F8BB31'
                    }
                }
            }
        }
        activeNavbar()

        // onscroll navbar
        const navbar = document.getElementById('main-navbar')

        function navbarScroll(){
            const topPosition = Math.floor(window.pageYOffset)

            if(topPosition > 50){
                navbar.style.boxShadow = '0 1px 7px -1px rgba(0,0,0,0.2)'
            }else if(topPosition < 49){
                navbar.style.boxShadow = 'none'
            }
        }

        // name products di home
        const nameProducts = document.getElementsByClassName('name-products')

        if (nameProducts.length > 0) {
            for (let i = 0; i < nameProducts.length; i++) {
                const slice = nameProducts[i].innerText.length > 70 ? `${nameProducts[i].innerHTML.substr(0, 70)}...` : nameProducts[i].innerHTML
                nameProducts[i].innerHTML = slice
            }
        }

        // latest news di home
        const titleNews = document.getElementsByClassName('title-news')

        if (titleNews.length > 0) {
            for (let i = 0; i < titleNews.length; i++) {
                const slice = titleNews[i].innerText.length > 60 ? `${titleNews[i].innerHTML.substr(0, 90)}...` : titleNews[i].innerHTML
                titleNews[i].innerHTML = slice
            }
        }

        // sort by di shop
        function clickSortBy() {
            const dropdown = document.getElementById('on-dropdown')

            if (dropdown.style.display == '') {
                dropdown.style.display = 'flex'
            } else if (dropdown.style.display == 'none') {
                dropdown.style.display = 'flex'
            } else {
                dropdown.style.display = 'none'
            }
        }

        // card shop
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

        const list_element = document.getElementById('card-shop')
        const pagination = document.getElementById('list-index-paginate')

        let current_page = 1
        let rows = 8

        function DisplayList(items, wrapper, rows_per_page, page) {
            wrapper.innerHTML = ''
            page--

            let start = rows_per_page * page
            let end = start + rows_per_page
            let paginatedItems = items.slice(start, end)

            let newData = []

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

        const leftPagination = document.getElementById('left-pagination')
        const rightPagination = document.getElementById('right-pagination')

        function clickPaginate(index) {
            current_page = index
            DisplayList(dataShop, list_element, rows, index)

            setTimeout(() => {
                SetupPagination(dataShop, pagination, rows)
            }, 0)

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

                DisplayList(dataShop, list_element, rows, current_page)

                setTimeout(() => {
                    SetupPagination(dataShop, pagination, rows)
                }, 0)

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

                DisplayList(dataShop, list_element, rows, current_page)

                setTimeout(() => {
                    SetupPagination(dataShop, pagination, rows)
                }, 0)

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

        const newPathName = window.location.pathname.split('/')[2]

        if(newPathName === 'shop'){
            DisplayList(dataShop, list_element, rows, current_page)
            SetupPagination(dataShop, pagination, rows)
        }
        
        // to page
        function toPage(path){
            const origin = window.location.origin
            const pathname = window.location.pathname.split('/')[1]

            window.location.href = `${origin}/${pathname}/${path}`
        }

        // loading page
        const wrappLoadPage = document.getElementById('wrapp-loading-page')

        function loadingPage(){
            if(wrappLoadPage){
                setTimeout(() => {
                    window.scrollTo(0, 0)
                    wrappLoadPage.style.display = 'none'
                }, 3000);
            }
        }
        loadingPage()
    </script>

    <!-- emailjs cdn -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
</body>
</html>