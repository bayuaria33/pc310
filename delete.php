<!-- Pijarcamp Preclass
Level 3 Tugas 10
Ariabayu Prayogo Kamilain -->
<?php
include "db_conn.php";
$produk_id = $_GET['produk_id'];

$sql = "DELETE FROM produk WHERE produk_id = $produk_id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: index.php");
} else {
    echo "Failed: " . mysqli_error($conn);
}
?>