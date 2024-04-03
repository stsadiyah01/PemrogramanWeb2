<?php
    include 'koneksi.php';

    $id_siswa = '';
    $nisn = '';
    $nama ='';
    $jk = '';
    $alamat = '';

    if(isset($_GET['ubah'])){
        $id_siswa = $_GET['ubah'];

        $query= "SELECT * FROM tb_siswa WHERE id_siswa='$id_siswa'";
        $sql = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($sql);

        $nisn = $result['nisn'];
        $nama = $result['nama_siswa'];
        $jk = $result['jenis_kelamin'];
        $alamat = $result['alamat'];

    }
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
<nav class="navbar bg-body-tertiary mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      CRUD-Siswa praktikum 6
    </a>
  </div>
</nav>
<div class="container">
<form action="proses.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3 row">
        <label for="nisn" class="col-sm-2 col-form-label">
            NISN
        </label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Ex : 112233" required value="<?=$nisn?>">
        </div>
   </div>
   <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">
            Nama Siswa
        </label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Ex : Sagara Pratama" required  value="<?=$nama?>">
        </div>
   </div>
   <div class="mb-3 row">
        <label for="jk" class="col-sm-2 col-form-label">
            Jenis
        </label>
        <div class="col-sm-10">
        <select class="form-select" id="jk" name="jk" required  value="<?=$jk?>">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        </div>
   </div>
   <div class="mb-3 row">
        <label for="foto" class="col-sm-2 col-form-label">
            Foto Siswa
        </label>
        <div class="col-sm-10">
        <input <?php if (!isset($_GET['ubah'])) { echo "required"; } ?> class="form-control" type="file" id="foto" name="foto" accept="image/" required>
        </div>
   </div>
   <div class="mb-3 row">
        <label for="alamat" class="col-sm-2 col-form-label">
            Alamat Siswa
        </label>
        <div class="col-sm-10">
        <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Ex: Jl.Merderka No.45, Serengseng Sawah, Jagakarsa, Jakarta Selatan" required  value="<?=$alamat?>"></textarea>
        </div>
   </div>
   <div class="mb-3 row mt-4">
    <div class="col">
        
    <!-- sintak php -->
    <?php
        if(isset($_GET['ubah'])){
    ?>

        <button class="btn btn-primary" type="submit" name="aksi" value="edit">
        <i class="fa fa-floppy-o" aria-hidden="true"></i>
            Simpan Perubahan
        </button>
    <?php
     } else{
    ?>
        <button class="btn btn-primary" type="submit" value="add" name="aksi">
        <i class="fa fa-floppy-o" aria-hidden="true"></i>
            Tambahkan
        </button>
    <?php
        }
    ?>

        <a href="index.php" class="btn btn-danger" type="button">
        <i class="fa fa-backward" aria-hidden="true"></i>
            Batal
        </a>
    </div>
    </form>
   </div>
</div>
</body>
</html>