<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Kelola Data Anda - CRUD</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link href="fontawesome/css/all.css" rel="stylesheet">
  <style>
  </style>
</head>
<body><nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CRUD - Create Read Update Delete</a>
    </div>
  </nav>
  <br>
  <div class="container-fluid">
    <a href="add.php" class="btn btn-primary" type="button">
      <i class="fa-solid fa-plus"></i> Tambah Data Baru
    </a>
</div>
  <br>
  <div class="container-fluid">
    <h3>Tabel Data</h3>

    <?php
    require_once('config.php');

    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
    if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM tb_crud"; 
    $result = mysqli_query($db, $sql);
    if (!$result) {
      die("Query failed: " . mysqli_error($db));
    }

    // Check if data exists
    if (mysqli_num_rows($result) > 0) {
      echo '<div class="table-wrapper">'; 
      echo '<table class="table table-hover table-bordered">';
      echo '<thead class="table-light">';
      // Table header row
      echo '<tr>';
      echo '<th scope="col" style="width: 20%; text-align: center;">Nama</th>';
      echo '<th scope="col" style="width: 30%; text-align: center;">Alamat</th>';
      echo '<th scope="col" style="width: 25%; text-align: center;">Pekerjaan</th>';
      echo '<th scope="col" style="width: 20%;text-align: center;">Aksi</th>';
      echo '</tr>';
      echo '</thead>';
      echo '<tbody>';

      while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['Nama'] . '</td>';
        echo '<td>' . $row['Alamat'] . '</td>';
        echo '<td>' . $row['Pekerjaan'] . '</td>';
        echo '<td style="text-align: center;">';
        echo '<a href="edit.php?nama=' . $row['Nama'] . '&alamat=' . $row['Alamat'] . '&pekerjaan=' . $row['Pekerjaan'] . '" class="btn btn-success btn-sm"><i class="fa-solid fa-pencil"></i> Edit </a> ';
        echo '<a href="hapus.php?nama=' . $row['Nama'] . '&alamat=' . $row['Alamat'] . '&pekerjaan=' . $row['Pekerjaan'] . '" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i> Hapus </a>';
        echo '</td>';
        echo '</tr>';
      }

      echo '</tbody>';
      echo '</table>';
      echo '</div>';
    } else {
      echo '<p>Tidak ada data yang ditemukan.</p>';
    }

    mysqli_close($db);
    ?>

  </body>
</html>