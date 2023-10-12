<?php
include('koneksi.php');

$plat_nomer = $_POST['plat_nomer'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];

$query = "INSERT INTO tbl_parkiran (plat_nomer, jenis_kendaraan, jam_masuk) VALUES ('$plat_nomer', '$jenis_kendaraan', NOW())";

if ($con->query($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Disimpan!";
}
?>