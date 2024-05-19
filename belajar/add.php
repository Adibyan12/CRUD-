<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link href="fontawesome/css/all.css" rel="stylesheet">  </head>
<body>
  <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">CRUD - Create Read Update Delete</a>
    </div>
  </nav>

  <div class="container-fluid">
    <h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
    <blockquote>
      <p>Menampilkan data dari database</p>
    </blockquote>
   <br>
    <figcaption class="blockquote-footer">
      <cite title="Source Title">Paket Pemrograman II</cite>
    </figcaption>
  </div>
</br>

  <div class="container-fluid">
    <h2>Input Data Baru</h2>
    <form action="input-aksi.php" method="post"> <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="nama" name="nama"> </div>
      </div>
      <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="alamat" name="alamat"> </div>
      </div>
      <div class="mb-3 row">
        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="pekerjaan" name="pekerjaan"> </div>
      </div>
      <div class="mb-3 row">
        <div class="col-sm-10 offset-sm-2">
          <button type="submit" class="btn btn-primary">
			<i class="fa-solid fa-floppy-disk"></i>
          	Simpan Data
      	  </button>
        </div>
      </div>
    </form>
  </div>

  <br/>

  <div class="container-fluid">
    <a href="index.php" class="btn btn-outline-dark">
		<i class="fa-regular fa-eye"></i>
		Lihat Semua Data
	</a>
  </div>

</body>
</html>
	