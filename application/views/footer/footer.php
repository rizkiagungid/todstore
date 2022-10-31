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

    <script>
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
            }, [])

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
                }, [])

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
                }, [])

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

        DisplayList(dataShop, list_element, rows, current_page)
        SetupPagination(dataShop, pagination, rows)

        // to page
        function toPage(path){
            const origin = window.location.origin
            const pathname = window.location.pathname.split('/')[1]

            window.location.href = `${origin}/${pathname}/${path}`
        }
    </script>

    <!-- emailjs cdn -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>