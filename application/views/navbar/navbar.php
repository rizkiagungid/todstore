<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.2/css/all.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

<body onscroll="navbarScroll()">
    <script>
        // untuk subscribe di input footer
        const serviceID = 'service_hmqukxt'
        const templateID = 'template_fwpgdpp'
        const publicKey = '9OBxoKBI85PFlIkj7'

        let data = {
            fullName: 'TOD E-Commerce',
            email: '',
            message: 'user telah subscribe di website kami (TOD-Ecommerce).'
        }

        function changeInput() {
            return data.email = document.getElementById('subscribe').value
        }

        let submitCondition = true

        function submit() {
            const mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
            const errorMessage = document.getElementById('error-message-subscribe')
            const popUpMessage = document.getElementById('pop-up-success')
            const loadSend = document.getElementById('loading-send')

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
                            errorMessage.innerHTML = ''
                            loadSend.style.display = 'none'
                            popUpMessage.style.marginTop = '100px'
                            document.getElementById('subscribe').value = ''
                            data.email = ''
                            console.log(res)

                            setTimeout(() => {
                                popUpMessage.style.marginTop = '1px'
                                submitCondition = true
                            }, 4000);
                        })
                        .catch(err => console.log(err))
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
                <li class="menu" onclick="toPage('home')">
                    HOME
                </li>
                <li class="menu" onclick="toPage('shop')">
                    SHOP
                </li>
                <li class="menu">
                    PRODUCT
                </li>
                <li class="menu">
                    BLOG
                </li>
                <li class="menu">
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