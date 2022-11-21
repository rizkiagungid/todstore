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

<!-- wrapp profile -->
<div class="wrapp-profile">
        <!-- header -->
        <div class="header" style="background-image: url(images/header-about.png);">
            <div class="wrapp-txt-header">
                <div class="desk-header">
                    <ul class="list-link-page">
                        <p class="link-page" onclick="toPage('home')" style="margin: 0; cursor: pointer;">Home/</p>
                        <p class="link-page" onclick="toPage('profile')" style="margin: 0; cursor: pointer;">Profile</p>
                    </ul>
                    <p class="txt-header">
                        YOUR PROFILE
                    </p>
                </div>
            </div>
        </div>

        <!-- content -->
        <div class="wrapp-content">
            <div class="container-content">
                <img src="images/tzuyu.jpg" alt="" class="img-profile">

                <form method="post"z>
					<?php
					$username = $_SESSION['username'];
					$query_users = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
					$da = mysqli_fetch_array($query_users);
					//var_dump($da);
					?>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
                                <p>ini nama lengkap</p>
								<input type="text" value="<?= $da['namalengkap']; ?>" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
                            <p>ini telepon</p>
								<input type="text" readonly value="<?= $da['telepon']; ?>" class="form-control">
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
                            <p>ini id</p>
								<input type="text" readonly value="<?= $da['id']; ?>" class="form-control">
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
                            <p>ini alamat</p>
								<input type="text" readonly value="<?= $da['alamat']; ?>" class="form-control">
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
                            <p>ini level</p>
								<input type="text" readonly value="<?= $da['level']; ?>" class="form-control">
							</div>
						</div>
                        <div class="col-md-4">
							<div class="form-group">
                            <p>ini password di encrypt</p>
								<input type="text" readonly value="<?= $da['password']; ?>" class="form-control">
							</div>
						</div>
					</div>