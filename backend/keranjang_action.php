<?php
include 'includes/db.php';
require_once 'berhasil_login.php';
// tambah keranjang simpan session
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  //action update
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'update') {
      $jumlah = $_GET['jumlah'];
      if ($jumlah == 0) {
        unset($_SESSION['keranjang'][$id]);
        echo "<script>alert('Produk dihapus dari keranjang');</script>";
        echo "<script>location='keranjang.php';</script>";
      } else {
        // update session 
        $_SESSION['keranjang'][$id] = $jumlah;
        echo "<script>alert('Data Keranjang Berhasil Diupdate');</script>";
        echo "<script>location='keranjang.php';</script>";
      }
    }
  } else {
    // simpan session
    if (isset($_SESSION['keranjang'][$id])) {
      $_SESSION['keranjang'][$id] += 1;
    } else {
      $_SESSION['keranjang'][$id] = 1;
    }
    echo "<script>alert('Produk telah masuk ke keranjang belanja');</script>";
    echo "<script>location='homepage.php';</script>";
  }
}
