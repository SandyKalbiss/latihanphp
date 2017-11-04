<?php

include ("koneksi.php");

$query = "DELETE FROM kontak 
		  WHERE id=$_GET[id]";

mysqli_query($db, $query);

header("location: index.php");
