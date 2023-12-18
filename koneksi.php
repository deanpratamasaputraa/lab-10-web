<?php
$koneksi = mysqli_connect("localhost","root","","web3");
if (mysqli_connect_error()) {
	echo "koneksi database gagal:".mysqli_connect_error();
	$username = $_POST['username'];
	$password = $_POST['password'];
}
?>