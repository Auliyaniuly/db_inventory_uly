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
        <h1>Data Jenis</h1>
        <?php
        $id_barang=$_GET['id_barang'];
        include '../../config/koneksi.php';
        $query=mysqli_query($conn, "SELECT * FROM barang WHERE id_barang='$id_barang'");
        $result=mysqli_fetch_array($query);
        ?>
        <form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?>" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama barang</label>
    <input type="text" class="form-control" value="<?php echo $result['nama_barang']?>" name="nama_barang" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id jenis</label>
    <input type="text" class="form-control" value="<?php echo $result['id_jenis']?>" name="id_jenis" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">harga</label>
    <input type="text" class="form-control" value="<?php echo $result['harga']?>" name="harga" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">stok</label>
    <input type="text" class="form-control" value="<?php echo $result['stok']?>" name="stok" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

    <div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
 
</body>
</html>
