<?php

include ("koneksi.php");

$id = $_GET['id'];

$query = "DELETE FROM kategori
		  WHERE id=$id";

mysqli_query($db, $query);

header("location: kategori.php");