<?php

if($_POST['username'] == 'admin' && $_POST['password'] == 'admin'){
	echo "Selamat datang Admin"; ?>

	<br>
	<button type="" name="back"><a href="index.php">Logout<a></button>

<?php }else{ 
	echo "Username/password salah"; ?>

	<br>
	<button type="button" name="back"><a href="index.php">Back<a></button>
<?php } ?>

<?php 

require 'function.php';

if(isset($_GET['cari'])){
	$keyword = $_GET['s'];
	$peralatan = query("SELECT * FROM peralatan WHERE 
						nama_barang LIKE '%$keyword%' OR
						manfaat LIKE '%$keyword%' OR
						harga LIKE '%$keyword%' OR
						daya LIKE '%$keyword%'");
}else{
	$peralatan = query("SELECT * FROM peralatan");
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
	h2, p{
		text-align: center;
	}
	</style>
</head>
<body>

<h2>Data Peralatan Elektronik</h2>

<p><a href="tambah.php">Tambah Data Peralatan</a></p>

<form action="" method="get" align="center">
	<input type="text" name="s" id="s" class="form-control" placeholder="Search...">
	<button type="submit" name="cari" id="cari">Cari</button>
</form><br>

<table border="1" cellspacing="0" cellpadding="7" align="center">
	<tr>
		<th>#</th>
		<th>Nama Barang</th>
		<th>Manfaat</th>
		<th>Harga</th>
		<th>Daya</th>
		<th>Gambar</th>
		<th>Opsi</th>
	</tr>

<?php if(empty($peralatan)) : ?>
		<tr>
			<td colspan="7">
				<h13align="center">Data tidak ditemukan.</h3>
			</td>
		</tr>
<?php else : ?>
	<?php $a = 1; ?>
	<?php foreach($peralatan as $p) : ?>
	<tr>
		<td><?= $a ?></td>
		<td><?= $p['nama_barang']; ?></td>
		<td><?= $p['manfaat']; ?></td>
		<td>Rp. <?= $p['harga']; ?></td>
		<td><?= $p['daya']; ?></td>
		<td><img src = "../assets/images/<?= $p['gambar']; ?>"></td>
		<td style=" text-align: center; ">
			<a href="ubah.php?id=<?= $p['id']; ?>"><button type="button">Ubah</button></a>
			<a href="hapus.php?id=<?= $p['id']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><button type="button" class="btn btn-danger">Hapus</button></a>
		</td>
	</tr>
	<?php $a++; ?>
	<?php endforeach; ?>
<?php endif; ?>

</table>	

</body>
</html>