<?php

require 'function.php';

$id = $_GET['id'];
$p = query("SELECT * FROM peralatan WHERE id = $id")[0];

if(isset($_POST['ubah'])){
	if(ubah($_POST) > 0){
		echo "<script>
			alert('Data berhasil diubah.');
			document.location.href = 'index.php';
			</script>";
	}else{
		echo "<script>
			alert('Data gagal diubah.');
			document.location.href = 'index.php';
			</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2>Ubah Data Peralatan</h2>

<form action="" method="post">
	<input type="hidden" name="id" value="<?php echo $p['id']; ?>">
	<label for="nama">Nama barang: </label><br>
	<input type="text" name="nama" id="nama" value="<?php echo $p['nama_barang']; ?>"><br><br>
	<label for="manfaat">Manfaat: </label><br>
	<input type="text" name="manfaat" id="manfaat" value="<?php echo $p['manfaat']; ?>"><br><br>
	<label for="harga">Harga: </label><br>
	<input type="number" name="harga" id="harga" value="<?php echo $p['harga']; ?>"><br><br>
	<label for="daya">Daya: </label><br>
	<input type="text" name="daya" id="daya" value="<?php echo $p['daya']; ?>"><br><br>
	<label for="gambar">Gambar: </label><br>
	<input type="text" name="gambar" id="gambar" value="<?php echo $p['gambar']; ?>"><br><br>

	<button type="submit" name="ubah">Ubah</button>
	<a href="index.php"><button>Kembali</button></a>

</form>

</body>
</html> 