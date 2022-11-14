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

/* loading page */
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

/* error page */
.wrapp-error-page{
	display: flex;
	height: 100vh;
	width: auto;
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
	font-size: 80px;
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
        margin-top: 250px;
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
	transform: rotateX(83deg);
    /* box-shadow: 0 80px 20px -1px rgba(0,0,0,0.9); */
	opacity: 0.5;
	margin-top: 400px;
	animation: loadSend 3s ease-out infinite;
}

@keyframes loadSend {
    0%{
		height: 130px;
        width: 90px;
    }
	50%{
		height: 200px;
        width: 150px;
    }
	100%{
		height: 130px;
        width: 90px;
    }
}

</style>
</head>
<body>
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

    <script>
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

        // to page
        function toPage(path){
            const origin = window.location.origin
            const pathname = window.location.pathname.split('/')[1]

            window.location.href = `${origin}/${pathname}/${path}`
        }
    </script>
</body>
</html>