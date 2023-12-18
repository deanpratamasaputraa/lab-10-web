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
    <link rel="stylesheet" href="css/contact.css" />
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
                <button type="button" class="btn btn-light"><a href="Contact">Contact</a></button>
            </div>
        </div><br><br>
        <div class="str">
            <h3>Contact form me</h3>
            <p>Send us a your message using the form below :</p>
        </div>

        <div class="name">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="please input your name">
        </div>
        <div class="email">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="message">
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="simpan"
            style="background-color: #515689; color: white; margin: 3px 0 0 43%;">Simpan</button>

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