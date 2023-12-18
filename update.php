<?php
include"koneksi.php";

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

if (isset($_POST["simpan"])) {
	$id = $_POST["id"];
	$nama = $_POST["nama"];
	$kategori = $_POST["kategori"];
	$beli= $_POST["beli"];
	$jual= $_POST["jual"];
	$stok = $_POST["stok"];

	
	$query = "UPDATE tb_barang SET id = '$id', nama = '$nama', kategori = '$kategori', beli = '$beli', jual = '$jual', stok='$stok' WHERE id =$id";

	if (mysqli_query($koneksi, $query)) {
		header("Location:home.php"); // Ganti dengan halaman daftar data Anda
	} else {
		echo "Gagal memperbarui data: " . mysqli_error($koneksi);
	}
}
	mysqli_close($koneksi);

?>