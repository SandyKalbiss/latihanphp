<?php

include("koneksi.php");

$nama = mysqli_real_escape_string($db, $_POST['nama']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$kategori = $_POST['kategori'];
$query = "INSERT INTO kontak (nama, phone, email, kategori_id) 
		  VALUES ('$nama', '$phone', '$email', '$kategori')";

mysqli_query($db, $query);
header('Location: index.php');