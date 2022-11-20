<?php
include 'includes/db.php';
// require_once 'berhasil_login.php';
//var_dump($_SESSION);
?>

<?php
// upload bukti pembayaran
if (isset($_POST['upload'])) {
    $id_order = $_POST['id'];
    // check if has uploaded file

    $bukti_pembayaran = $_FILES['bukti_pembayaran']['name'];
    $tmp = $_FILES['bukti_pembayaran']['tmp_name'];

    // check if file is image
    $ext = pathinfo($bukti_pembayaran, PATHINFO_EXTENSION);
    $ext = strtolower($ext);
    $exts = array('jpg', 'jpeg', 'png');
    if (!in_array($ext, $exts)) {
        echo "<script>alert('File bukti pembayaran harus berupa gambar!');</script>";
    } else {
        // rand file name
        $bukti_pembayaran = rand(1000, 1000000) . "." . $ext;
        //$bukti_pembayaran = 'bukti_pembayaran_'.$id_order.'.'.$ext;
        $path = 'uploads/bukti_pembayaran/' . $bukti_pembayaran;
        if (move_uploaded_file($tmp, $path)) {
            $query = "UPDATE transaksi SET bukti_pembayaran='$bukti_pembayaran', status='Menunggu Konfirmasi' WHERE id='$id_order'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<script>alert('Bukti pembayaran berhasil diupload!');</script>";
            } else {
                echo "<script>alert('Bukti pembayaran gagal diupload!');</script>";
            }
        } else {
            echo "<script>alert('Bukti pembayaran gagal diupload!');</script>";
        }
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/index.css">
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
    <title>TRANSAKSI TOD STORE</title>
</head>
   <!-- navbar -->
   <div class="main-navbar">
        <div class="navbar">
         <a href="../">   <img src="../images/logo.png" alt="" class="logo"></a>

            <ul class="list-menu">
                <li class="menu">
               HOME
                </li>
                <li class="menu">
                    SHOP
                </li>
                <li class="menu">
                    BLOG
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

    <div class="wrapp-about">
        <!-- header -->
        <div class="header" style="background-image: url(../images/header-about.png);">
            <div class="wrapp-txt-header">
                <div class="desk-header">
                    <ul class="list-link-page">
                        <a href="" class="link-page">Shop/</a>
                        <a href="" class="link-page">Transaksi</a>
                    </ul>
                    <p class="txt-header">
                        Riwayat Transaksi
                    </p>
                </div>
            </div>
        </div>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- semua transaksi -->
                <h1>History</h1>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal Transaksi</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $nomor = 1; ?>
                        <?php
                        $id_pelanggan = $_SESSION['id'];
                        $ambil = $conn->query("SELECT * FROM transaksi WHERE users_id='$id_pelanggan' ORDER BY tanggal_transaksi DESC");
                        ?>
                        <?php while ($pecah = $ambil->fetch_assoc()) {
                            // total harga pada tabel transaksi_detail
                            $id = $pecah['id'];
                            $totalharga = 0;
                            $total = $conn->query("SELECT * FROM transaksi_detail
                            JOIN produk ON transaksi_detail.produk_id=produk.id
                            WHERE transaksi_id='$id'");
                            while ($pecah2 = $total->fetch_assoc()) {
                                $totalharga = $pecah2['harga'] * $pecah2['jumlah'];
                            }

                        ?>
                            <tr>
                                <td><?php echo $nomor; ?></td>
                                <td><?php echo $pecah["tanggal_transaksi"]; ?></td>
                                <td>Rp. <?php echo number_format($totalharga); ?></td>
                                <td><?php echo $pecah["status"]; ?></td>
                                <td>
                                    <!-- konfirm pembayaran alert js confirm -->
                                    <?php
                                    if ($pecah["status"] == "Pending") {
                                    ?>
                                        <!-- modal -->
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#konfirmasi" data-id="<?= $pecah['id']; ?>">Konfirmasi Pembayaran</button>
                                        <!-- <a href="transaksi.php?konfirmasi=<?php echo $pecah['id']; ?>" class="btn btn-success">Konfirmasi</a> -->
                                    <?php } else { ?>
                                        <!-- modal lihat bukti pembayaran -->
                                        <button class="btn btn-success" data-toggle="modal" data-target="#lihatbukti" data-id="<?= $pecah['id']; ?>" data-bukti="<?= $pecah['bukti_pembayaran']; ?>">Lihat Bukti Pembayaran</button>
                                    <?php } ?>
                                </td>
                            </tr>
                            <?php $nomor++; ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- modal konfirmasi upload pembayaran -->
    <div class="modal fade" id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <form method="post" enctype="multipart/form-data" action="">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="bukti">Bukti Pembayaran</label>
                            <input type="file" class="form-control-file" id="bukti" name="bukti_pembayaran">
                        </div>
                        <button type="submit" class="btn btn-primary" name="upload">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal lihat bukti pembayaran -->
    <div class="modal fade" id="lihatbukti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bukti Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img src="" alt="" id="bukti_pem" width="100%">
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#konfirmasi').on('show.bs.modal', function(event) {
            // js get id
            var id = $(event.relatedTarget).data('id');
            // js set id
            $('#id').val(id);
        })

        $('#lihatbukti').on('show.bs.modal', function(event) {
            // js get id
            // var id = $(event.relatedTarget).data('id');
            var bukti = $(event.relatedTarget).data('bukti');
            // js set id
            // $('#id').val(id);
            $lokasi_foto = "uploads/bukti_pembayaran/" + bukti;
            // console.log($lokasi_foto);
            $('#bukti_pem').attr('src', $lokasi_foto);
        })
    </script>

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
                        Mau video/film bokep?, silahkan subscribe di web kami, Anda akan menerima pesan Email
                    </p>
                </div>
                <div class="kanan-search">
                    <div class="column-input">
                        <input type="email" class="input-search" id="subscribe" onchange="changeInput()">
                        <button class="btn-subscribe" onclick="submit()">
                            Subscribe
                        </button>
                    </div>

                    <!-- error message -->
                    <p id="error-message-subscribe" class="error-message-subscribe">
                        
                    </p>
                </div>
            </div>

            <!-- tod project -->
            <div class="tod-project">
                <li class="menu-footer">
                    <p class="title-menu">
                        TOD PROJECT
                    </p>
                    <p class="deskripsi-menu" style="cursor: text; color: #fff;">
                        Ya sakumaha aing weh nu bikin
                        tangkurank siaaa!!!
                    </p>
                </li>
                <li class="menu-footer">
                    <p class="title-menu">
                        INFORMATION
                    </p>
                    <p class="deskripsi-menu">
                        About TOD PROJECT
                    </p>
                    <p class="deskripsi-menu">
                        Contact Us
                    </p>
                </li>
                <li class="menu-footer">
                    <p class="title-menu">
                        QUICK LINKS
                    </p>
                    <p class="deskripsi-menu">
                        Wishlist
                    </p>
                    <p class="deskripsi-menu">
                        Checkout
                    </p>
                    <p class="deskripsi-menu">
                        Cart
                    </p>
                </li>
                <li class="menu-footer">
                    <p class="title-menu">
                        CONTACT US
                    </p>
                    <a href="#" class="deskripsi-menu">
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
</body>

</html>