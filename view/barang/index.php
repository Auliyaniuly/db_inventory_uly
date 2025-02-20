<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>barang</title>
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
    <from class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="search" aria-label="search">
        <button class="btn btn-outline-success" type="sub,it">search</button>
      </from>
  </div>
</nav>
<div class="container">
    <h1>Data Barang</h1>
    <a href="view.tambah.php" class="btn btn-info">tambah data baru</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">id_barang</th>
                <th scope="col">nama_barang</th>
                <th scope="col">id_jenis</th>
                <th scope="col">harga</th>
                <th scope="col">stok</th>
                <th scope="col">aksi</th>
            </tr>
            <?php
         include '../../config/koneksi.php';
         $query = mysqli_query($conn, "SELECT * FROM barang");
         $no=1;
         if(mysqli_num_rows($query)){
            while($result=mysqli_fetch_assoc($query)){
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $result['id_barang']?></td>
                    <td><?php echo $result['nama_barang'] ?></td>
                    <td><?php echo $result['id_jenis'] ?></td>
                    <td><?php echo $result['harga'] ?></td>
                    <td><?php echo $result['stok'] ?></td>

                    <td>
                        <a href="" class="btn btn-warning">edit |</a>
                       <a href="" class="btn btn-danger">hapus |</a>
                    </td>
                </tr>
                <?php
                $no++;
            }
            }else{
                echo "data kosong";
         }
         ?>
        </thead>
    </table>
</div>
</body>
</html>
