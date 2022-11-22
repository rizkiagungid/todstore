<?php
include 'includes/db.php';
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

if(isset($_POST['users'])){
    

    $username         = clean($_POST['username']);
    $namalengkap      = clean($_POST['namalengkap']);
    $alamat        = clean($_POST['alamat']);
    $level        = clean($_POST['level']);
    $telepon        = clean($_POST['telepon']);
    $password        = clean($_POST['password']);
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
    $query .= "WHERE id = {$id} ";
    
    $result = mysqli_query($conn,$query);
    
    if($result){
        
        header('location:profile.php');
    }
    else
    {
        die('error' . mysqli_error($conn));
    }
    
}

?>
<div class="container">
    <div class="jumbotron text-center">
        <h2>CRUD TODSTORE PROFILE</h2>
    </div>
    <br>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Nama Lengkap:</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?= $da['namalengkap']; ?>">
    </div>
    <div class="form-group">
        <label for="name">Telepon:</label>
        <input type="text" name="model" class="form-control" placeholder="Enter batch" value="<?= $da['telepon']; ?>">
    </div>
    <div class="form-group">
        <label for="name">Username:</label>
        <input type="text" name="harga" class="form-control" placeholder="Enter harga" value="<?= $da['username']; ?>">
    </div>
    <div class="form-group">
        <label for="name">Email:</label>
        <input type="text" name="stok" class="form-control" placeholder="Enter harga" value="<?= $da['email']; ?>">
    </div>
    <div class="form-group">
        <label for="name">Password:</label>
        <input type="text" name="ukuran" class="form-control" placeholder="Enter harga" value="<?= $da['password']; ?>">
    </div>
    <div class="form-group">
        <label for="name">Level:</label>
        <input type="text" name="ukuran" class="form-control" placeholder="Enter harga" value="<?= $da['level']; ?>">
    </div>
    <div class="form-group">
        <label for="name">Image:</label>
        <img src= "../images/tzuyu.jpg" alt="" width="100px" height="100px" class="thumbnail">
    </div>

    <div class="form-group">
        <input type="submit" class="btn btn-success" value="Update data" name="update">
    </div>
</form>

</div>
