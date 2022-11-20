<?php 
 
include './includes/db.php';
// error_reporting(0);

// session_start();
 
if (isset($_SESSION['username'])) {
    //header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        //id
        $_SESSION['id'] = $row['id'];
        header("Location: berhasil");

    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
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
            www.todstore.com
        </p>
    </div>

<!-- wrapp login -->
<div class="wrapp-login">
        <form action="" method="POST" class="container-black-login">
            <div style="display:flex; justify-content: center; margin-bottom: 10px;">
            <img src="images/logo.png" alt="" class="logo-login" style="width: 80px;">
            </div>
            
            <p class="title-login" style="font-weight: 500;">
                Log in to your account
            </p>

            <label for="label" class="label-input">
                Username
            </label>
            <input type="email" name="email" class="input-login" value="<?php echo @$email; ?>" required>

            <label for="label" class="label-input">
                Password
            </label>
            <input type="password" name="password" class="input-login" value="<?php echo @$_POST['password']; ?>" required>

            <button name="submit" class="btn-login">
                Login
            </button>

            <div class="non-akun">
                <p class="txt-non-akun">
                    Anda belum punya akun?
                </p>
                <button class="btn-register" onclick="toPage('register')">
                    Register
                </button>
            </div>
        </form>
    </div>