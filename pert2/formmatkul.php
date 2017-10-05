<?php
if($_GET['action'] == "edit"){
	echo "<h1>Edit Matkul</h1>";
	include("db.php");
	$query = "SELECT * FROM matkul
			  WHERE id = $_GET[id]";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($hasil);
}else{
	echo "<h1>Add Matkul</h1>";
	$row['id'] = "";
	$row['kode_mtk'] = "";
	$row['nama_mtk'] = "";
}
?>
<form action="proses_matkul.php?action=<?php echo $_GET['action']; ?>" method="post">
	Id &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
	<input type="text" name="id" value="<?php echo $row['id']; ?>" />
	<br />
	Kode Matkul &nbsp:
	<input type="text" name="kode_mtk" value="<?php echo $row['kode_mtk']; ?>" />
	<br />
	Nama Matkul &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:
	<input type="text" name="nama_mtk" value="<?php echo $row['nama_mtk']; ?>" />
	<br />
	<input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
	<input type="submit" name="submit" />
</form>