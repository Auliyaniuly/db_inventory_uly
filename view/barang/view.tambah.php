<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title> tambah barang baru</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../barang/index.php">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../jenis/index.php">jenis</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <h1>Data Barang</h1>
    <form action="simpan.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id barang</label>
    <input type="number" class="form-control" name="id_barang" id="exampleInputNumber" >
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama barang</label>
    <input type="text" class="form-control" name="nama_barang" id="exampleInputNumber" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">id jenis</label>
    <input type="text" class="form-control" name="id_jenis" id="exampleInputText">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">harga</label>
    <input type="number" class="form-control" name="harga" id="exampleInputText">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">stok</label>
    <input type="number" class="form-control" name="stok" id="exampleInputText">
    </div>

    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
 
</body>
</html>

