<!DOCTYPE html>
<html>

<head>
    <title>Menambah Data Menu</title>
</head>

<body background="images/wallpaper.jpg"></body>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Pembayaran.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/tambah.css">

<body>
    <!-- Judul -->
    <div class="kotak shadow">
        <h2 shadow>Update Barang</h2>

        <table class="table table-striped table-hover table-bordered">
            <form method="post" action="update.php">
                <label>Nomor</label><br>
                <input type="text" name="id"><br>
                <label>Nama Barang</label><br>
                <input type="text" name="nama"><br>
                <label>Kategori</label><br>
                <select>
                    <option>Elektronik</option>
                    <option>Accessoris</option>
                </select><br>
                <label>Harga beli</label><br>
                <input type="text" name="beli"><br>
                <label>Harga jual</label><br>
                <input type="text" name="jual"><br>
                <label>Stok</label><br>
                <input type="text" name="stok"><br>
                <button type="submit" class="btn btn-primary" name="simpan"
                    style="background-color: #515689; color: white; margin: 10px 0 0 0;">Simpan</button>
            </form>
            <a href="home.php" style="padding-left: 3px;"><button type="submit" class="btn btn-primary"
                    style="background-color: #515689; color: white; margin: 10px 0 0 15px;">Keluar</button></a>
        </table>



        <footer>
            <p>Copyright &copy; Dean pratama saputra</p>
        </footer>
    </div>

    <!-- Judul -->







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="js/home.js"></script>
</body>




</html>