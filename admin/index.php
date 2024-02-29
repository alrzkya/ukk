<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Administator</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
  <h1>Dasboard</h1>
  <?php
  //ambil koneksi
  include "../config.php";

  //hitung jumlah barang dari tb_barang
  $barang = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_barang");
  $jumlahBarang = mysqli_fetch_assoc($barang);

  //hitung jumlah pembelian dari tb_penjualan
  $penjualan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_penjualan");
  $jumlahPenjualan = mysqli_fetch_assoc($penjualan);

  //hitung jumlah pengguna dari tb_pelanggan
  $pelanggan = mysqli_query($koneksi, "SELECT COUNT(*) as Jumlah FROM tb_pelanggan");
  $jumlahPelanggan = mysqli_fetch_assoc($pelanggan);
  ?>

  <div class="row">
      <div class="col">
        <div class="card" style="width: 300px;">
          <img src="../img/barangg.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <center>
              <button type="button" class="btn btn-primary">
                Data Barang <span class="badge text-bg-secondary"> <?= $jumlahBarang['Jumlah']; ?></span>
              </button>
              </center>
            </p>
          </div>
        </div>
        </div>
      <div class="col">
        <div class="card" style="width: 300px;">
          <img src="../img/pembelian.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <center>
              <button type="button" class="btn btn-primary">
                Data Penjualan <span class="badge text-bg-secondary"> <?= $jumlahPenjualan['Jumlah']; ?></span>
              </button>
              </center>
            </p>
          </div>
        </div>

      </div>
      <div class="col">
        <div class="card" style="width: 300px;">
          <img src="../img/pelanggan.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">
              <center>
              <button type="button" class="btn btn-primary">
                Data Pelanggan <span class="badge text-bg-secondary"> <?= $jumlahPelanggan['Jumlah']; ?></span>
              </button>
              </center>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="shadow-lg p-3 mb-5 bg-body-tertiary rounded">
    <div class="card">
      <div class="card-header">
        ID : <?= $_SESSION['id_login']; ?>
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>Pengguna</p>
          <footer class="blockquote-footer"><?= $_SESSION['nama']; ?></footer>
        </blockquote>
      </div>
    </div>
  </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>