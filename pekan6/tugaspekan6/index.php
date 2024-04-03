<?php
    include 'koneksi.php';

    $query = "SELECT * FROM tb_siswa";
    $result = $conn->query($query);
    $no = 0;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum 6</title>
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      CRUD-Siswa praktikum 6
    </a>
  </div>
</nav>

<!-- Judul -->
<div class="container">
<h1 class="mt-4">Data Siswa SMA Harapan Kita</h1>
<figure>
    <blockquote class="blockquote">
        <p>Berisi data yang telah disimpan di database</p>
    </blockquote>
    <figcaption class="blockquote-footer">
        CRUD<cite title="Source Title"> Create Read Update Delete</cite>
    </figcaption>
</figure>
<a href="kelola.php" type="button" class="btn btn-primary mb-3">
    <i class=" fa fa-plus"></i>
    Tambah Data
</a>
<div class="table-reponsive">
    <table class="table align-middle table-bordered table-hover">
        <thead align="center">
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Nama Siswa</th>
                <th>Jenis Kelamin</th>
                <th>Foto Siswa</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody align="center">
    <?php
     while( $row = $result->fetch_assoc() ) :
    ?>
            <tr>
                <td><?=++$no?></td>
                <td><?=$row['nisn']?></td>
                <td><?=$row['nama_siswa']?></td>
                <td><?=$row['jenis_kelamin']?></td>
                <td>
                    <img src="img/<?=$row['foto_siswa']?>" style="width:100px">
                </td>
                <td><?=$row['alamat']?></td>
                <td>
                <a href="kelola.php?ubah=<?=$row['id_siswa']?>" type="button" class="btn btn-success btn-sm">
                    <i class="fa fa-pencil"></i>
                </a>
                <a  href="proses.php?hapus=<?=$row['id_siswa']?>" type="button" class="btn btn-danger btn-sm" onClick ="return confirm ('Apakah anda yakin ingin menghapus data tersebut???')">
                    <i class="fa fa-trash"></i>
                </a>
                </td>
            </tr>
    <?php endwhile
    ?>
        </tbody>

    </table>
</div>
</div>
    
</body>
</html>