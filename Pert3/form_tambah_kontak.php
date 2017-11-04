<?php // filename: form_tambah_kontak.php

include("koneksi.php");
$query = "SELECT * FROM kategori ";
$hasil = mysqli_query($db, $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Phone Book</title>
</head>
<body>
<h1>Phone Book</h1>
<div id="menu">
	<ul>
		<li><a href="index.php">Kontak</a></li>
		<li><a href="kategori.php">Kategori</a></li>
	</ul>
</div>
<div id="konten">
	<h2>Tambah Kontak</h2>
	<form action="prosses_tambah_kontak.php" method="post">
		Nama:
		<input type="text" name="nama" />
		<br />
		Phone:
		<input type="text" name="phone" />
		<br />
		Email:
		<input type="text" name="email" />
		<br />
		Kategori:
		<select name="kategori">
		<?php while($row1 = mysqli_fetch_array($hasil)):;?>
		<option value="<?php echo $row1[0]; ?>"> <?php echo $row1[1]; ?> </option>
		<?php endwhile; ?>
		</select>
		<br />
		<input type="submit" value="Simpan" />
	</form>
</div>
</body>
</html>