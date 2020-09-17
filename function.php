<?php 

//function untuk koneksi ke DB
function koneksi(){
	$conn = mysqli_connect('localhost', 'root', '') or die("Koneksi ke DB gagal!");
	mysqli_select_db($conn, 'tugas_pw') or die("Database salah!");

	return $conn;
}
//end of function

//function untuk query
function query($sql){
	$conn = koneksi();
	$results = mysqli_query($conn, "$sql");

	$rows = [];
	while($row = mysqli_fetch_assoc($results)){
		$rows[] = $row;
	};

	return $rows;
}
//end of function

function tambah($data){
	$conn = koneksi();

	$nama = htmlspecialchars($data['nama']);
	$manfaat= htmlspecialchars($data['manfaat']);
	$harga = htmlspecialchars($data['harga']);
	$daya = htmlspecialchars($data['daya']);
	$gambar = htmlspecialchars($data['gambar']);

	$querytambah = "INSERT INTO peralatan 
	 					VALUES ('', '$nama', '$manfaat', '$harga', '$daya', '$gambar')";

	 mysqli_query($conn, $querytambah);

	 return mysqli_affected_rows($conn);
}

function hapus($id){
	$conn = koneksi();
	mysqli_query($conn, "DELETE FROM peralatan WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data){
	$conn = koneksi();

	$id = $data['id'];
	$nama = htmlspecialchars($data['nama']);
	$manfaat= htmlspecialchars($data['manfaat']);
	$harga = htmlspecialchars($data['harga']);
	$daya = htmlspecialchars($data['daya']);
	$gambar = htmlspecialchars($data['gambar']);

	$queryubah = "UPDATE peralatan 
					SET 
					nama_barang = '$nama',
					manfaat = '$manfaat',
					harga = '$harga',
					daya = '$daya',
					gambar = '$gambar',
				WHERE id = '$id' ";

	 mysqli_query($conn, $queryubah);

	 return mysqli_affected_rows($conn);
}


?>