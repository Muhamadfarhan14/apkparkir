<?php
include('koneksi.php');

$id = $_GET['id'];

$query = "UPDATE tbl_parkiran SET jam_keluar = NOW() WHERE id_parkir = '$id'";


if($con->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>