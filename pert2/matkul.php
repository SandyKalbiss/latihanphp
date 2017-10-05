<?php //filename: matkul.php
// 1. koneksi
include("db.php");

// 2. query
$query = "SELECT * FROM matkul";
$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data Matkul</h1>
<a href="template.php?page=formmatkul&action=add">Tambah Data</a>
<table>
<thead>
	<tr>
		<th>Id</th>
		<th>Kode Mata kuliah</th>
		<th>Nama Mata kuliah</th>
	</tr>
</thead>
<tbody>
	<?php
	while($row = mysqli_fetch_assoc($hasil)){
	?>
	<tr>
		<td><?php echo $row['id']; ?> </td>
		<td><?php echo $row['kode_mtk']; ?> </td>
		<td><?php echo $row['nama_mtk']; ?> </td>
		<td>
			<a href="template.php?page=formmatkul&id=<?php echo $row['id'];?>&action=edit">Edit</a>
			<a href="proses_matkul.php?action=delete&id=<?php echo $row['id'];?>">Delete</a>
		</td>
	</tr>
	<?php
	}
	?>
</tbody>
</table>