<?php
  date_default_timezone_set("Asia/Jakarta");
  $nama_website = 'Nexus77';
  $alamat_website = 'https://domain.com/'; //ganti domain.com -> diakhiri dengan slash /
  $alamat_website_admin = 'https://domain.com/mimintop/'; //ganti domain.com -> diakhiri dengan slash /
  $qris_link = '';
  
  $host = "localhost";
  $username = "USER_DATABASE";
  $password = "PASS_DATABASE";
  $database = "NAMA_DATABASE";
  $koneksi = mysqli_connect($host, $username, $password, $database);
  if (!$koneksi) {
    echo "Kesalahan : Tidak dapat terhubung ke database." . PHP_EOL;
    echo "Kode Kesalahan : " . mysqli_connect_errno() . PHP_EOL;
    echo "Pesan Kesalahan : " . mysqli_connect_error() . PHP_EOL;
    exit;
  }
?>