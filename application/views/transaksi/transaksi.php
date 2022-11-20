<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<!-- Button trigger modal -->
<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <!-- alert berhasil sukses checkout -->
      <div class="row">
        <div class="col-md-19">
          <div class="alert alert-success">
            <p class="text-center">
              Checkout Berhasil pada:
              <br>
              <?php

echo date('d/m/Y') . '<br>';
?>
              <br>
            <b>Terima kasih sudah belanja di Tod store !</b>

<center>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  PEMBAYARAN BERHASIL DITERIMA
</button>
</center>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">TRANSAKSI TERKONFIRMASI</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        selamat anda sudah berhasil melunasi pembayaran
      </div>
      <div class="modal-footer">
     <a href="home"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Home</button></a>
      <a href="./page/transaksi.php"><button type="button" class="btn btn-primary">Riwayat</button></a>
      </div>
    </div>
  </div>
</div>