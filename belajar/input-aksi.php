<?php

include('config.php');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];

$sql = "INSERT INTO tb_crud (nama, alamat, pekerjaan) VALUES ('$nama', '$alamat', '$pekerjaan')";

if ($db->query($sql) === TRUE) {
    echo "Data berhasil disimpan!";
    header("Location: index.php");
} else {
    echo "Error: " . $db->error;
}

$db->close();
