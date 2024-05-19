<!DOCTYPE html>
<html>
<head>
  <title>Membuat CRUD Dengan PHP Dan MySQL - Edit Data</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    form {
      width: 50%;
      margin: 40px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    table {
      width: 100%;
    }
    th, td {
      padding: 10px;
      border-bottom: 1px solid #ccc;
    }
    th {
      background-color: #f0f0f0;
    }
    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <div class="judul">
    <h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
    <h2>Edit Data</h2>
    <h3>Paket Pemrograman II</h3>
  </div>

  <?php
  $nama = isset($_GET['nama'])? $_GET['nama'] : ''; 
  $alamat = isset($_GET['alamat'])? $_GET['alamat'] : '';
  $pekerjaan = isset($_GET['pekerjaan'])? $_GET['pekerjaan'] : '';

  include('config.php');

  $sql = "SELECT * FROM tb_crud WHERE Nama='". mysqli_real_escape_string($db, $nama). "' AND alamat='". mysqli_real_escape_string($db, $alamat). "' AND pekerjaan='". mysqli_real_escape_string($db, $pekerjaan). "'";

  $result = mysqli_query($db, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

   ?>
    <form action="update-aksi.php" method="post">
      <table>
        <tr>
          <th>Nama</th>
          <td><input type="text" name="nama" value="<?php echo $row['Nama'];?>"></td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td><input type="text" name="alamat" value="<?php echo $row['Alamat'];?>"></td>
        </tr>
        <tr>
          <th>Pekerjaan</th>
          <td><input type="text" name="pekerjaan" value="<?php echo $row['Pekerjaan'];?>"></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="hidden" name="nama_awal" value="<?php echo $row['Nama'];?>">
            <input type="hidden" name="alamat_awal" value="<?php echo $row['Alamat'];?>">
            <input type="hidden" name="pekerjaan_awal" value="<?php echo $row['Pekerjaan'];?>">
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" value="Simpan">
          </td>
        </tr>
      </table>
    </form>

    <?php
  } else {
    echo "Data tidak ditemukan.";
  }

  // Close the database connection
  mysqli_close($db);
 ?>

  <br/>
  <a href="index.php">Kembali ke Daftar Data</a>
</body>
</html>