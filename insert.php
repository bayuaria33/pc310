<!-- Pijarcamp Preclass
Level 3 Tugas 10
Ariabayu Prayogo Kamilain -->
<?php
include "db_conn.php";
if (isset($_POST['submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO produk (`produk_id`, `nama_produk`, `keterangan`, `harga`, `jumlah`) VALUES (NULL,'$nama_produk','$keterangan','$harga','$jumlah')";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: index.php");
    } else {
        echo "Failed: " . mysqli_error($conn);
        var_dump($conn);
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PC-3-10 Insert product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:cornflowerblue">
        CRUD Sederhana
    </nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3>Add new product</h3>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="POST" style="min-width:300px">
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" name="nama_produk">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Keterangan Produk</label>
                        <input type="text" class="form-control" name="keterangan">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Harga Produk</label>
                        <input type="text" class="form-control" name="harga">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="" class="form-label">Jumlah Produk</label>
                        <input type="text" class="form-control" name="jumlah">
                    </div>
                </div>
                <div>
                    <br>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>