<?php //filename:proses_tambah_kategori.php

// 1. Koneksi
include("koneksi.php");

// 2. Query
// Data dari form
$ket = mysqli_real_escape_string($db, $_POST['ket']);
$query = "INSERT INTO kontak (nama,phone,email) VALUES ('$_POST[nama]','$_POST[phone]','$_POST[email]')";

mysqli_query($db,$query);

header('Location: index.php');