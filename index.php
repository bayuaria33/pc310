<!-- Pijarcamp Preclass
Level 3 Tugas 10
Ariabayu Prayogo Kamilain -->
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PC-3-10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:cornflowerblue">
        CRUD Sederhana
    </nav>

    <div class="container">
        <a href="insert.php" class="btn btn-dark mb-3">Insert New Data</a>
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "db_conn.php";
                $sql = "SELECT * FROM produk";
                $result = mysqli_query($conn, $sql);

                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?= $row['produk_id']; ?></td>
                        <td><?= $row['nama_produk']; ?></td>
                        <td><?= $row['keterangan']; ?></td>
                        <td><?= $row['harga']; ?></td>
                        <td><?= $row['jumlah']; ?></td>

                        <td>
                            <a href="edit.php?produk_id=<?= $row['produk_id']; ?>" class="link-dark">Update</a>
                            <a href="delete.php?produk_id=<?= $row['produk_id']; ?>" class="link-dark">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>