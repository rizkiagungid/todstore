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


<?php
if(isset($_GET['update'])){
    
    
    $id = $_GET['update'];
    

$query = "SELECT * FROM users WHERE id = $id";
$username = $_SESSION['username'];
$query_users = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");
$da = mysqli_fetch_array($query_users);
$result = mysqli_query($conn,$query);

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_array($result)){
        
            $username  = $row['username'];
            $namalengkap = $row['namalengkap'];
            $alamat = $row['alamat'];
            $level = $row['level'];
            $telepon = $row['telepon'];

        }
    }
}

if(isset($_POST['update'])){
    

    $username         = clean($_POST['username']);
    $namalengkap      = clean($_POST['namalengkap']);
    $alamat        = clean($_POST['alamat']);
    $level        = clean($_POST['level']);
    $telepon        = clean($_POST['telepon']);
    $password        = clean($_POST['password']);
    // $id        = clean($_POST['id']);
    // $image_name   = $_FILES['image']['name'];
    // $image        = $_FILES['image']['tmp_name'];

    // $location     = "images/".$image_name;

    // move_uploaded_file($image, $location);

    $query  = "UPDATE users SET ";
    $query .= "namalengkap = '".escape($namalengkap)."', ";
    $query .= "username = '".escape($username)."', ";
    $query .= "alamat = '".escape($alamat)."', ";
    $query .= "telepon = '".escape($telepon)."', ";
    $query .= "level = '".escape($level)."', ";
    $query .= "password = '".escape($password)."', ";
    // $query .= "image = '{$image_name}' ";
    // $query .= "WHERE id = {$id} ";
    $query .= "WHERE id = {$id} ";
    
    $result = mysqli_query($conn,$query);
    
    if($result){
        // header('Location: profile');
        echo "<script>window.location.assign('http://localhost/todstore/profile')</script>";
    }
    else
    {
        die('error' . mysqli_error($conn));
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

                <form action="" method="post" class="edit-profile">
                    <!-- <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Nama
                            </label>
                        </div>
                        <input type="text" name="username" readonly class="input-profile" value="<?= $da['username']; ?>">
                    </div> -->

                    <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Nama Lengkap
                            </label>
                        </div>
                        <input type="text" name="namalengkap" readonly class="input-profile" value="<?= $da['namalengkap']; ?>">
                    </div>

                    <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Telepon
                            </label>
                        </div>
                        <input type="text" name="telepon" class="input-profile" readonly value="<?= $da['telepon']; ?>">
                    </div>

                    <!-- <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Id User
                            </label>
                        </div>
                        <input type="text" name="id" class="input-profile" readonly value="<?= $da['id']; ?>">
                    </div> -->

                    <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Alamat
                            </label>
                        </div>
                        <input type="text" name="alamat" class="input-profile" readonly value="<?= $da['alamat']; ?>">
                    </div>

                    <!-- <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Status
                            </label>
                        </div>
                        <input type="text" name="level" class="input-profile" readonly value="<?= $da['level']; ?>">
                    </div> -->

                    <!-- <div class="container-input">
                        <div class="column-label">
                            <label for="label" class="label-profile">
                                Password
                            </label>
                        </div>
                        <input type="password" name="password" class="input-profile" readonly value="<?= $da['password']; ?>">
                    </div> -->

                    <!-- <button type="submit" name="submit" class="btn-submit-profile">
                        Edit Profile
                    </button> -->
                </form>
            </div>
        </div>