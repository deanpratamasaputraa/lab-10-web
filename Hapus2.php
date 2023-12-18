<?php
Include"koneksi.php";
$id=$_GET['id'];
$data=mysqli_query($koneksi,"DELETE FROM tb_barang where id='$id'");

if ($data) {
	header('location:home.php');

}else{
	echo "Tidak Berhasil";

}
?>