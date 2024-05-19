<?php

include('config.php'); // Include database connection

// Get data from the form
$nama = mysqli_real_escape_string($db, $_POST['nama']);
$alamat = mysqli_real_escape_string($db, $_POST['alamat']);
$pekerjaan = mysqli_real_escape_string($db, $_POST['pekerjaan']);

// Get original data from hidden fields (assuming they are named correctly)
$nama_awal = mysqli_real_escape_string($db, $_POST['nama_awal']);
$alamat_awal = mysqli_real_escape_string($db, $_POST['alamat_awal']);
$pekerjaan_awal = mysqli_real_escape_string($db, $_POST['pekerjaan_awal']);

// Construct the UPDATE query
$sql = "UPDATE tb_crud SET Nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' 
        WHERE Nama='$nama_awal' AND alamat='$alamat_awal' AND pekerjaan='$pekerjaan_awal'";

// Execute the query
$result = mysqli_query($db, $sql);

// Check if the update was successful
if ($result) {
  echo "Data berhasil diperbarui!";
  // Redirect to index.php after successful update
  header("Location: index.php"); 
  exit;
} else {
  echo "Gagal memperbarui data: " . mysqli_error($db);
}

mysqli_close($db); // Close the database connection

?>
