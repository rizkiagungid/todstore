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
            <?php
					$username = $_SESSION['username'];
					$query_users = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
					$da = mysqli_fetch_array($query_users);
					//var_dump($da);
					?>
                <img src="images/tzuyu.jpg" alt="" class="img-profile">

                <p class="nama">
                <?= $da['namalengkap']; ?>
                </p>
                <p class="nama-lengkap">
                <?= $da['email']; ?>
                </p>

                <form method="post" class="edit-profile">
                    <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Nama
                            </label>
                        </div>
                        <input type="text" class="input-profile" value="<?= $da['namalengkap']; ?>">
                    </div>

                    <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Telepon
                            </label>
                        </div>
                        <input type="text" class="input-profile" readonly value="<?= $da['telepon']; ?>" style="background-color: #ddd">
                    </div>

                    <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Id User
                            </label>
                        </div>
                        <input type="text" class="input-profile" readonly value="<?= $da['id']; ?>" style="background-color: #ddd">
                    </div>

                    <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Alamat
                            </label>
                        </div>
                        <input type="text" class="input-profile" readonly value="<?= $da['alamat']; ?>" style="background-color: #ddd">
                    </div>

                    <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Status
                            </label>
                        </div>
                        <input type="text" class="input-profile" readonly value="<?= $da['level']; ?>" style="background-color: #ddd">
                    </div>

                    <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Password
                            </label>
                        </div>
                        <input type="password" class="input-profile" readonly value="<?= $da['password']; ?>" style="background-color: #ddd">
                    </div>

                    <button type="submit" name="submit" class="btn-submit-profile">
                        Edit Profile
                    </button>
                </form>
            </div>
        </div>