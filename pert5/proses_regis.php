<?php //filename : proses_regis.php

//data dari form
$username = $_POST['username'];
$password = $_POST['password'];

//enskripsi password
$enc_pass = password_hash(
$password, PASSWORD_BCRYPT);

//koneksi