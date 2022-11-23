<!DOCTYPE html>
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
    <title>TOD E-Commerce</title>

<style type="text/css">
    .wrapp-loading-page .logo-loading{
        position: absolute;
        width: 100px;
        margin-top: -180px;
        opacity: 0;
        animation: wrappLoad 0.3s ease-in-out forwards;
        animation-delay: 0.3s;
    }

    .wrapp-loading-page .container-loading{
    display: flex;
    height: 100px;
    width: 600px;
    position: relative;
    align-items: center;
    justify-content: center;
    padding: 40px 0;
}

.wrapp-loading-page .container-loading .border-loading{
    display: flex;
    position: absolute;
    height: 30px;
    width: 30px;
    border-radius: 500px;
    transition: 0.2s ease-in-out;
    z-index: 1;
}

.wrapp-loading-page .container-loading .border-satu{
    background-color: #1e1e1e;
    animation: load1 1.1s infinite;
}

.wrapp-loading-page .container-loading .border-dua{
    background-color: #F8BB31;
    margin-left: 50px;
    animation: load2 1.1s infinite;
}

.wrapp-loading-page .txt-link-web-load{
    position: absolute;
    bottom: 40px;
    font-size: 13px;
    font-weight: 500;
    font-family: 'Montserrat', sans-serif;
    color: #000;
    opacity: 0;
    animation: wrappLoad 0.3s ease-in-out forwards;
    animation-delay: 0.4s;
}

@keyframes wrappLoad {
    to{
        opacity: 1;
    }
}

@keyframes load1 {
    0%{
        margin-left: -30px;
    }
    50%{
        margin-left: 30px;
    }
    100%{
        margin-left: -30px;
        z-index: 9999999;
    }
}
@keyframes load2 {
    0%{
        margin-left: 30px;
    }
    50%{
        margin-left: -30px;
        z-index: 9999999;
    }
    100%{
        margin-left: 30px;
    }
}


/* wrapp pdf */
.wrapp-pdf{
    display: flex;
    position: fixed;
    background-color: #fff;
    justify-content: center;
    z-index: -999;
    width: 100%;
    top: 0;
}

.wrapp-pdf .container-pdf{
    display: flex;
    flex-direction: column;
    width: 900px;
    background-color: #fff;
}

.wrapp-pdf .container-pdf .logo-pdf{
    width: 100px;
    padding-bottom: 50px;
    margin: 0 auto;
}

.wrapp-pdf .container-pdf .nama-user-pdf{
    font-size: 14px;
    color: #000;
    margin: 5px 0;
}

.wrapp-pdf .container-pdf .detail-transaksi{
    display: flex;
    flex-direction: column;
    margin-top: 80px;
    width: auto;
    background-color: #1E1E1E;
    color: #fff;
    padding: 40px 100px 60px 100px;
}

.wrapp-pdf .container-pdf .detail-transaksi .qty{
    margin: 0;
    font-size: 18px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    border-bottom: 4px solid #D9D9D980;
    padding-bottom: 3px;
}

.wrapp-pdf .container-pdf .detail-transaksi .qtytotals{
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 4px solid #D9D9D980;
    padding-bottom: 3px;
    margin-top: 3px;
}

.wrapp-pdf .container-pdf .detail-transaksi .qtytotals .txt-qtytotals{
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    color: #D9D9D980;
    margin: 0;
}

.wrapp-pdf .container-pdf .detail-transaksi .qtytotals .number-total-qty{
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    color: #fff;
    margin: 0;
}

.wrapp-pdf .container-pdf .detail-transaksi .cart-totals{
    font-size: 18px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    color: #fff;
    margin: 0;
    border-bottom: 4px solid #D9D9D980;
    padding-bottom: 3px;
    margin-top: 3px;
}

.wrapp-pdf .container-pdf .detail-transaksi .harga-dan-total{
    display: flex;
    flex-direction: column;
    border-bottom: 4px solid #D9D9D980;
    padding: 5px 0;
}

.wrapp-pdf .container-pdf .detail-transaksi .harga-dan-total .subtotals{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.wrapp-pdf .container-pdf .detail-transaksi .harga-dan-total .subtotals .txt-subtotals{
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    color: #D9D9D980;
    margin: 0;
}

.wrapp-pdf .container-pdf .detail-transaksi .harga-dan-total .subtotals .number-subtotals{
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    color: #fff;
    margin: 3px 0 0 0;
}

.wrapp-pdf .container-pdf .detail-transaksi .total{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 3px;
}

.wrapp-pdf .container-pdf .detail-transaksi .total .txt-total{
    font-size: 18px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    color: #fff;
    margin: 0;
}

.wrapp-pdf .container-pdf .detail-transaksi .total .number-total{
    font-size: 14px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    color: #fff;
    margin: 0;
}

/* card */
.wrapp-pdf .container-pdf .card-cart-pdf{
    display: flex;
    align-items: center;
    padding-top: 30px;
}

.wrapp-pdf .container-pdf .card-cart-pdf .btn-close-cart{
    display: flex;
    background-color: transparent;
    border: 2px solid #000;
    border-radius: 500px;
    height: 25px;
    width: 25px;
    justify-content: center;
    align-items: center;
}

.wrapp-pdf .container-pdf .card-cart-pdf .btn-close-cart i{
    font-size: 14px;
}

.wrapp-pdf .container-pdf .card-cart-pdf .img-cart{
    width: 130px;
    margin: 0 30px;
}

.wrapp-pdf .container-pdf .card-cart-pdf .name-product-cart{
    font-size: 14px;
    font-weight: 600;
    font-family: 'Montserrat', sans-serif;
    color: #000;
    margin: 0;
    width: 300px;
}

.wrapp-pdf .container-pdf .card-cart-pdf .btn-total{
    display: flex;
    /* height: 40px; */
    width: 150px;
    /* margin: 0 60px; */
    overflow: hidden;
    border-radius: 5px;
    /* padding: 0 10px; */
}

.wrapp-pdf .container-pdf .card-cart-pdf .btn-total i{
    cursor: pointer;
}

.wrapp-pdf .container-pdf .card-cart-pdf .btn-total .number-total{
    font-size: 14px;
    font-weight: 600;
    font-family: 'Montserrat', sans-serif;
    color: #000;
    margin: 0;
    display: flex;
}

.wrapp-pdf .container-pdf .card-cart-pdf .total-price{
    font-size: 14px;
    font-weight: 600;
    font-family: 'Montserrat', sans-serif;
    color: #000;
    margin: 0;
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
            to_name: '',
            fullName: 'TOD E-Commerce',
            phone: 'Terima kasih, Anda telah berhasil subscribe di website kami (TOD E-Commerce)!.',
            nations: 'Anda akan menerima informasi berbagai pakaian baju terbaru dari kami.',
            toEmail: '',
            message: 'Selamat menikmati baju fashion dari TOD-Store kami! :)'
        }

        function changeInput() {
            data.email = document.getElementById('subscribe').value
            dataToUser.toEmail = document.getElementById('subscribe').value
            dataToUser.to_name = document.getElementById('subscribe').value
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
                                    dataToUser.to_name = ''
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
        <div class="navbar" style="margin: 0;">
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
                <li class="menu menu-navbar" onclick="toPage('blog')">
                    BLOG
                </li>
                <li class="menu menu-navbar" onclick="toPage('about')">
                    ABOUT
                </li>
            </ul>

            <ul class="list-icon">
                <li class="icon-nav">
                    <i class="fa-solid fa-user ic-nav"  onclick="toPage('profile')";?></i>
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