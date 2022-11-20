<head>
    <title>HALAMAN HOMEPAGE</title>
</head>
<?php
include 'includes/db.php';
// require_once 'berhasil_login.php';

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
        header("Location: berhasil_login.php");

    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
//var_dump($_SESSION);
?>

<div class="container">
    <div class="jumbotron text-center">
        <h3>HALAMAN ADMIN</h3>
        Anda Login Sebagai: 
       
       <h4> <?php echo "<h4>" . $_SESSION['username'] . "!" . "</h4>"; ?></h4>
    </div>
    <br>

    <a href="admin_index.php" role="button" class="btn btn-primary pull-right">KE HALAMAN ADMIN</a>

    <a href="keranjang.php" role="button" class="btn btn-primary pull-leaft">Keranjang</a>
    <a href="checkout.php" role="button" class="btn btn-primary pull-leaft">Checkout</a>
    <br>

    <br>
    <table class="table table-hover table-striped">
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Model Produk</th>
            <th>Stok</th>
            <th>Size</th>
            <th>Image</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $query = "SELECT * FROM produk ORDER BY id ASC ";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {

            while ($row = mysqli_fetch_array($result)) {

                $id    = $row['id'];
                $name  = $row['name'];
                $harga = $row['harga'];
                $model = $row['model'];
                $stok = $row['stok'];
                $ukuran = $row['ukuran'];
                $image = $row['image'];

        ?>

                <tr>
                    <td><?= $id; ?></td>
                    <td><?= $name; ?></td>
                    <td>RP.<?= $harga; ?></td>
                    <td><?= $model; ?></td>
                    <td><?= $stok; ?></td>
                    <td><?= $ukuran; ?></td>
                    <td>
                        <img src="<?= "images/" . $image ?>" alt="<?= $name ?>" class="thumbnail" width="100px" height="75px">
                    </td>
                    <td>
                        <!-- <a href="detail.php?id=<?= $id; ?>" class="btn btn-primary">Detail</a> -->
                        <!-- check Stok -->
                        <?php if ($stok > 0) { ?>
                            <a href="keranjang_action.php?id=<?= $id; ?>" class="btn btn-success">Tambah Keranjang</a>
                        <?php } else { ?>
                            <a class="btn btn-primary" disabled>Stok Habis</a>
                        <?php } ?>

                    </td>
                </tr>
        <?php
            }
        }

        if (isset($_GET['delete'])) {

            $id = $_GET['delete'];

            $image = "SELECT * FROM produk WHERE id = $id";

            $query1 = mysqli_query($conn, $image);

            while ($row = mysqli_fetch_array($query1)) {
                $img = $row['image'];
            }

            unlink("images/" . $img);

            $query = "DELETE FROM produk WHERE id = $id";

            $result = mysqli_query($conn, $query);

            if ($result) {

                header('location:index.php');
            }
        }

        ?>

    </table>
</div>



<script>
    $(document).ready(function() {

        $('#delete').click(function() {
            if (!confirm("do you want to delete?")) {
                return false;
            } else {
                return true;
            }
        });


    });
</script>