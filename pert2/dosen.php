<?php //filename: dosen.php
// 1. koneksi
include("db.php");

// 2. query
$query = "SELECT * FROM dosen";
$hasil = mysqli_query($koneksi, $query);
?>

<h1>Data Dosen</h1>
<a href="template.php?page=formdosen&action=add">Tambah Data</a>
<thead>
	<tr>
		<th>id</th>
		<th>kode Dosen</th>
		<th>nama_dosen</th>
	</tr>
</thead>
<tbody>
	<?php
	while($row = mysqli_fetch_assoc($hasil)){
	?>
	<tr>
		<td><?php echo $row['id']; ?> </td>
		<td><?php echo $row['kode_dosen']; ?> </td>
		<td><?php echo $row['nama_dosen']; ?> </td>
		<td>
			<a href="template.php?page=formdosen&id=<?php echo $row['id'];?>&action=edit">Edit</a>
			<a href="proses_dosen.php?action=delete&id=<?php echo $row['id'];?>">Delete</a>
		</td>
	</tr>
	<?php
	}
	?>
</tbody>
</table>