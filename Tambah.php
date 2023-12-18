<?php 
		include "koneksi.php";

		if (isset($_POST['simpan'])) {
			$nama =$_POST['nama'];
			$kategori =$_POST['kategori']; 
			$beli =$_POST['beli'];
			$jual =$_POST['jual'];
			$stok =$_POST['stok']; 
			
			$sql = "INSERT INTO tb_barang (id, nama, kategori, beli, jual, stok)VALUES('$id', '$nama', '$kategori', '$beli', '$jual', '$stok')";
			//Apakah Menu Masuk
			if (mysqli_query($koneksi,$sql)) {
			// Jika Masuk Maka Menu ada di index.php
				header('location:home.php');
			}else{
				// JIka Tidak Masuk Akan Tampil
				echo("Upss..maaf proses pemyimpanan data tidak berhasil");
			}

		}
 ?>