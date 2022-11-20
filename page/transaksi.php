<?php
include 'includes/db.php';
require_once 'berhasil_login.php';
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


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- semua transaksi -->
                <h1>Transaksi</h1>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tanggal Transaksi</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
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

</body>

</html>