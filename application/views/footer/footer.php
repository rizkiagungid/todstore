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
                        Menantikan kabar dari kami mengenai baju terbaru, yang akan kami sebarkan melalui email Anda!.
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
                    <p id="error-message-subscribe" class="error-message-subscribe">
                        
                    </p>

                    <!-- pop up success -->
                    <div id="pop-up-success" class="pop-up-success" style="margin-top: 1px;">
                        <p id="txt-success" class="txt-success" style="padding: 14px 80px; overflow: hidden;">

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
                        website ini dibangun untuk Anda yang cocok dengan baju fashion.
                    </p>
                </li>
                <li class="menu-footer">
                    <p class="title-menu">
                        INFORMATION
                    </p>
                    <p class="deskripsi-menu" onclick="toPage('about')">
                        About TOD PROJECT
                    </p>
                    <p class="deskripsi-menu" onclick="toPage('blog')">
                        Blog
                    </p>
                </li>
                <li class="menu-footer">
                    <p class="title-menu">
                        QUICK LINKS
                    </p>
                    <p class="deskripsi-menu" onclick="toPage('shop')">
                        Shop
                    </p>
                    <p class="deskripsi-menu" onclick="toPage('checkout')">
                        Checkout
                    </p>
                    <p class="deskripsi-menu" onclick="toPage('cart')">
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
        const iconNavbar = document.getElementsByClassName('ic-nav')

        function activeNavbar(){
            const pathname = window.location.pathname.split('/')[2]

            if(menuNavbar.length > 0){
                // menu nav
                for(let i = 0; i < menuNavbar.length; i++){
                    if(menuNavbar[i].innerText.toLowerCase() === pathname.toLowerCase()){
                        menuNavbar[i].style.color = '#F8BB31'
                    }
                }

                // icon nav
                if(pathname === 'cart'){
                    iconNavbar[2].style.color = "#F8BB31"
                }
                if(pathname === 'profile'){
                    iconNavbar[0].style.color = "#F8BB31"
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

        const newPathName = window.location.pathname.split('/')[2]
        const popUpMessage = document.getElementById('pop-up-success')
        const footer = document.getElementById('main-footer')

        // page login
        if(navbar && newPathName === 'login'){
            navbar.style.display = 'none'
            popUpMessage.style.display = 'none'
            footer.style.display = 'none'
        }

        // page register
        if(navbar && newPathName === 'register'){
            navbar.style.display = 'none'
            popUpMessage.style.display = 'none'
            footer.style.display = 'none'
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
// data page shop
const dataShop = []

        const dataBlog = [
            {
                img: 'images/topup.jpg',
                date: '30-juni-1987',
                byAuthor: 'iwan',
                title: 'Topup saldo tod gratis baju',
                deskripsi: 'Event Topup saldo ini berakhir sampai akhir tahun, Anda akan mendapatkan gratis baju sesuai pilihan Anda, Anda akan menerima 10 gratis baju dari pilihan Anda sendiri!.',
                url: `detailblog?=1`
            },
            {
                img: 'images/promo2.jpg',
                date: '13-juni-1990',
                byAuthor: 'thio',
                title: 'Promo Ceria',
                deskripsi: 'Event akhir tahun ini kami mengadakan promo besar-besaran untuk baju dengan kategori gender/jenis kelamin perempuan saja',
                url: `detailblog?=2`
            },
            {
                img: 'images/coach.jpg',
                date: '18-juli-2000',
                byAuthor: 'thio',
                title: 'Sambut Akhir Tahun, Coach Holiday 2022 Hadirkan Koleksi Super Gemas!',
                deskripsi: 'Nggak terasa kita sudah berada di akhir tahun 2022, dan seperti biasa beberapa brand sudah siap memanjakan kita dengan rangkaian koleksi liburan mereka yang susah untuk ditolak. Yup! Salah satunya adalah koleksi Coach Holiday 2022. Sekaligus merupakan butik terpilih di Asia, penataan jendela "Windows of The Future" milik Coach di Senayan City pun tampil baru dengan suasana festive yang mendukung.',
                url: `detailblog?=3`
            },
            {
                img: 'images/jongkok.jpg',
                date: '23-mei-2020',
                byAuthor: 'marchel',
                title: '7 Pakaian Mewah Jungkook BTS, Harganya Nggak Kalah Mahal dari Rumah!',
                deskripsi: 'Kabar Jungkook BTS yang baru saja membeli rumah mewah di kawasan Itaewon, Korea Selatan memang membuat para penggemar K-Idol tercengang. Bukan tanpa alasan, rumah di kawasan elit itu diketahui memiliki harga super mahal hingga mencapai lebih dari 97,6 miliar rupiah!. Selain rumah, ternyata Jungkook juga memiliki selera pakaian yang nggak kalah mewah lho. Maknae BTS ini gemar menggunakan pakaian branded yang harganya puluhan juta rupiah untuk OOTD sehari-hari hingga hadir di karpet merah.',
                url: `detailblog?=4`
            },
            {
                img: 'images/jongkook2.jpg',
                date: '31-mei-2021',
                byAuthor: 'aldi',
                title: 'Deretan Baju Produksi TOD Ini Langsung Sold Out Setelah Digunakan Jungkook BTS',
                deskripsi: 'Memiliki popularitas dalam industri musik, para member BTS juga memiliki pengaruh yang besar dalam kehidupan sehari-hari. Hal tersebut dibuktikan dengan deretan barang yang langsung sold out setelah dipakai oleh BTS. Salah satu member yang sering membuat barang yang digunakan terjual habis ialah Jungkook. Nggak butuh waktu lama setelah digunakan oleh Jungkook, deretan pakaian ini langsung sold out dibeli oleh para ARMY yang ingin kembaran dengan si maknae. Nggak heran jika dirinya dijuliki "Sold Out King".',
                url: `detailblog?=5`
            },
            {
                img: 'images/kolaborasi.png',
                date: '22-mei-2021',
                byAuthor: 'ridwan',
                title: `10 Kolaborasi Eksklusif Brand TOD dengan KOL di Lazada Women's Fest`,
                deskripsi: `Rangkaian Lazada Women's Fest 2022 telah sukses digelar pada 11-13 November kemarin di JIEXPO Convention & Theater, Kemayoran. Hayo, siapa Bela yang kemarin datang ke acaranya Lazada Indonesia? Seru banget ya event-nya! Banyak aktivitas seru yang bisa dilakukan pengunjung selama berada di area LazBeauty dan LazLook. Bertepatan dengan event Lazada Women's Fest beberapa waktu lalu, Lazada Indonesia juga meluncurkan produk koleksi eksklusif hasil kolaborasi dari brand fashion dan beauty lokal ternama bareng para influencer lho, Bela. Ada produk skincare, makeup, hingga koleksi busana.`,
                url: `detailblog?=6`
            },
            {
                img: 'images/bg2.jpg',
                date: '22-mei-2022',
                byAuthor: 'Aoo',
                title: `5 Kolaborasi Eksklusif Brand TOD dengan KOL di Lazada Women's Fest`,
                deskripsi: `Brand asli Indonesia yang pertama ada Erigo. Bagi para pencinta fashion, mungkin sudah tidak asing lagi dengan nama ini. Brand yang didirikan sejak 2010 silam ini, awalnya bernama “Selected and Co”, di mana mereka hanya fokus untuk memproduksi batik kasual saja. Namun, sang founder, Muhammad Sadad, mulai berinovasi dengan nama Erigo lalu menjual pakaian unisex dengan konsep street style dan travelling yang kekinian.`,
                url: `detailblog?=6`
            }
        ]

        const cardProducts = document.getElementsByClassName('card-products')
        const cardBlog = document.getElementsByClassName('card-blog')

        if(newPathName === 'shop' && cardProducts.length > 0){
            for(let i = 0; i < cardProducts.length; i++){
                dataShop.push({
                    stok: cardProducts[i].id,
                    img: cardProducts[i].children[0].currentSrc,
                    gender: cardProducts[i].children[1].innerText,
                    nameProducts: cardProducts[i].children[2].innerText,
                    price: cardProducts[i].children[3].innerText,
                    id: cardProducts[i].children[4].id
                })   
            }
        }

        if(newPathName === 'blog' && cardBlog.length > 0){
            for(let i = 0; i < cardBlog.length; i++){
                dataBlog.splice(0, 0,{
                    img: cardBlog[i].children[0].currentSrc,
                    date: cardBlog[i].children[1].children[0].innerText,
                    byAuthor: cardBlog[i].children[1].children[1].innerText,
                    title: cardBlog[i].children[2].innerText,
                    deskripsi: cardBlog[i].children[3].innerText,
                    url: `detailblog?=${cardBlog[i].children[4].id}`
                })
            }
        }

        const list_element = document.getElementById('card-shop')
        const list_element_blog = document.getElementById('container-card')
        const pagination = document.getElementById('list-index-paginate')

        let current_page = 1
        let rows = 8
        let rowsBlog = 4

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
                                <button class="view-product" onclick="tambahKeranjang(${e.stok}, ${e.id})">
                                    Add to cart
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
                        <p class="deskripsi" style="text-align: justify;">
                            ${e.deskripsi}
                        </p>

                        <button class="read-more" onclick="toPage('${e.url}')" style="display: none;">
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

            if(items.length - 1 < rows_per_page){
                rightPagination.style.display = 'none'
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

        // page cart
        const nameProductCart = document.getElementsByClassName('name-product-cart')

        if(newPathName === 'cart' && nameProductCart.length > 0){
            for(let i = 0; i < nameProductCart.length; i++){
                if(nameProductCart[i].innerText.length > 50){
                    nameProductCart[i].style.fontSize = '15px'
                }
            }
        }

        // card products di home
        const containerCardProductsHome = document.getElementById('card-our-products')
        const cardProductsHome = document.getElementsByClassName('card-products-home')

        let newDataProductsHome = []
        let batasLoop = 8

        if(newPathName === 'home' && cardProductsHome.length > 0){
            for(let i = 0; i < batasLoop; i++){
                newDataProductsHome.push({
                    img: cardProductsHome[i].children[0].currentSrc,
                    gender: cardProductsHome[i].children[1].innerText,
                    name: cardProductsHome[i].children[2].innerText,
                    price: cardProductsHome[i].children[3].innerText,
                    stok: cardProductsHome[0].children[4].id,
                    id: cardProductsHome[i].id,
                })
            }

            containerCardProductsHome.innerHTML =  newDataProductsHome.map((e)=>{
                return `
                <div class="card-products" id="${e.id}">
                        <img src="${e.img}" alt="" class="img-products">
                                <p class="gender">
                                    ${e.gender}
                                </p>
                                <p class="name-products">
                                    ${e.name}
                                </p>
                                <p class="price">
                                RP ${e.price}
                                </p>
                                <button class="view-product" id="${e.stok}" onclick="tambahKeranjang(${e.stok}, ${e.id})">Add to cart</button>
                    </div>
                `
            }).join('')
        }

        // name products di home
        const nameProducts = document.getElementsByClassName('name-products')

        if (newPathName === 'home' && nameProducts.length > 0) {
            for (let i = 0; i < nameProducts.length; i++) {
                if(nameProducts[i].innerText.length > 30){
                    nameProducts[i].innerHTML = `${nameProducts[i].innerText.substr(0, 40)}...`
                }
            }
        }
        
        // to page
        function toPage(path){
            const origin = window.location.origin
            const pathname = window.location.pathname.split('/')[1]

            window.location.href = `${origin}/${pathname}/${path}`
        }

        const txtSuccess = document.getElementById('txt-success')

        // tambah ke keranjang
        function tambahKeranjang(stok, id){
            if(parseInt(stok) > 0){
                toPage(`keranjangaction?id=${id}`)
            }else{
                txtSuccess.style.backgroundColor = '#FF0000'
                txtSuccess.style.color = '#fff'
                txtSuccess.textContent = 'Stok baju sudah habis!'
                popUpMessage.style.marginTop = '100px'

                setTimeout(() => {
                    popUpMessage.style.marginTop = '1px'
                }, 2000);
            }
        }

        // detail transaksi di page cart
        const cardCart = document.getElementsByClassName('card-cart')
        const numberTotalQty = document.getElementById('number-total-qty')
        const numberTotalQtyTwo = document.getElementById('number-subtotals')

        let totalQty = []

        if(cardCart.length > 0){
            for(let i = 0; i < cardCart.length; i++){
                totalQty.push(parseInt(cardCart[i].children[3].children[1].innerText))
            }
            numberTotalQty.innerHTML = eval(totalQty.join('+'))
            numberTotalQtyTwo.innerHTML = eval(totalQty.join('+'))
        }

        // editing keranjang kosong di page cart
        const containerCart = document.getElementById('container-cart')
        const containerCartEmpty = document.getElementById('container-cart-empty')

        if(cardCart.length === 0 && containerCart){
            containerCart.style.display = "none"
        }
        if(cardCart.length > 0 && containerCartEmpty){
            containerCartEmpty.style.display = "none"
        }

        // page checkout
        if(newPathName === 'checkout' && cardCart.length === 0){
            const loc = window.location
            const pisah = loc.href.split('/')
            const getHRF = `${pisah[0]}//${pisah[2]}/${pisah[3]}/cart`
            window.location.assign(getHRF)
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

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>
</body>

</html>