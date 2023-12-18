<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="css/home.css" />
    <title></title>
</head>

<body>
    <!-- Judul -->
    <div class="kotak shadow">
        <div class="judul">
            <h2>Modularisasi</h2>
            <div class="jumbotron">
                <button type="button" class="btn btn-light"><a href="home.php">Home</a></button>
                <button type="button" class="btn btn-light"><a href="index.php">About</a></button>
                <button type="button" class="btn btn-light"><a href="Contact.php">Contact</a></button>
            </div>
        </div><br><br>
        <div class="str">
            <h3>Data Barang</h3><br><br>
            <button type="button" class="btn btn-primary"><a class="tambah" href="form_tambah.php">Tambah
                    Barang</a></button>
        </div>



        <table class="table table-striped table-hover table-bordered table-center">
            <tr>
                <th class="text-center card-header" ;>No</th>
                <th class="text-center">Gambar</th>
                <th class="text-center">Nama Barang</th>
                <th class=" text-center">Kategori</th>
                <th class=" text-center">Harga Beli</th>
                <th class=" text-center">Harga Jual</th>
                <th class=" text-center">Stok</th>
                <th class="text-center card-header " ;>Aksi</th>
            </tr>
            <?php
include "koneksi.php";

$no = 1;
$data = mysqli_query($koneksi,"SELECT * FROM tb_barang");

while ($hasil = mysqli_fetch_array($data)) {

?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><img src="img/30pro.jpg" alt="" width="100" height="100"></td>
                <td><?php echo $hasil['nama']; ?></td>
                <td><?php echo $hasil['kategori'];  ?></td>
                <td><?php echo $hasil['beli'];  ?></td>
                <td><?php echo $hasil['jual'];  ?></td>
                <td><?php echo $hasil["stok"];  ?></td>


                <td>
                    <a onclick="return confirm('Anda yakin Ingin Mengubah Data Barang ini ?')"
                        href="form_update.php?id=<?php echo $hasil ['id']?>"><button type="submit"
                            class="btn btn-warning"
                            style="margin-right: 10px; background-color: #515689; color:white;">Ubah</button></a>
                    <a onclick="return confirm('Anda Yakin Ingin Menghapus Data Barang ini')"
                        href="Hapus2.php?id=<?php echo $hasil ['id']?>"><button type="submit" class="btn btn-danger"
                            style="background-color: #515689">Hapus</button></a>
                </td>
            </tr>
            <tr>


            </tr>
            <?php
} 
?>
        </table><br>
        <footer>
            <p>Copyright & copy; Dean pratama saputra</p>
        </footer>
    </div>



    <!-- Judul -->







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="js/home.js"></script>
</body>

</html>