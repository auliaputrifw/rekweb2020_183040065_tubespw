<?php

require 'function.php';

if(isset($_POST['tambah'])){
	if(tambah($_POST, $_FILES) > 0){
		echo "<script>
			alert('Data berhasil ditambahkan.');
			document.location.href='index.php';
			</script>";
	}else{
		echo "<script>
			alert('Data gagal ditambahkan.');
			document.location.href='index.php';
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

<h2>Tambah Data Peralatan</h2>

<form action="" method="post">
	<label for="nama">Nama barang: </label><br>
	<input type="text" name="nama" id="nama"><br><br>
	<label for="manfaat">Manfaat: </label><br>
	<input type="text" name="manfaat" id="manfaat"><br><br>
	<label for="harga">Harga: </label><br>
	<input type="number" name="harga" id="harga"><br><br>
	<label for="daya">Daya: </label><br>
	<input type="text" name="daya" id="daya"><br><br>
	<label for="gambar">Gambar: </label><br>
	<input type="text" name="gambar" id="gambar"><br><br>

	<button type="submit" name="tambah">Tambah</button>
	<a href="index.php"><button>Kembali</button></a>

</form>

</body>
</html> 