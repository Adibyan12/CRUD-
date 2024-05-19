<?php

include('config.php');

$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$pekerjaan = $_GET['pekerjaan'];

$sql = "DELETE FROM tb_crud WHERE nama = '$nama' AND alamat = '$alamat' AND pekerjaan = '$pekerjaan'";

$result = mysqli_query($db, $sql);

if ($result) {
    echo "Data berhasil dihapus!";
    header("Location: index.php"); 
} else {
    echo "Gagal menghapus data: " . mysqli_error($db);
}

mysqli_close($db);
?>