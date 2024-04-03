<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            $nisn = $_POST['nisn'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $foto = $_FILES['foto']['name'];
            $alamat = $_POST['alamat'];

            $directory = "img/";
            $tmpFile = $_FILES['foto']['tmp_name'];

            move_uploaded_file($tmpFile,$directory.$foto);

            $query = "INSERT INTO tb_siswa VALUES(null,'$nisn','$nama','$jk','$foto','$alamat')";
            $sql = mysqli_query($conn,$query);

            if($sql){
                header("Location: index.php");
            } else{
                echo $query;
            }

        } else if($_POST['aksi'] == "edit"){
            echo "Edit Data <a href='index.php'>[Home]</a> ";
            $id = $_POST['id_siswa'];
            $nisn = $_POST['nisn'];
            $nama = $_POST['nama'];
            $jk = $_POST['jk'];
            $alamat = $_POST['alamat'];

            $query = "UPDATE tb_siswa SET nisn='$nisn', nama_lengkap='$nama', jenis_kelamin='$jk', alamat='$alamat' WHERE id_siswa='$id_siswa';";
            $sql = mysqli_queery($conn,$query);
        }
    }
    if(isset($_GET['hapus'])){
        $id_siswa = $_GET['hapus'];

        $queryShow = "SELECT * FROM tb_siswa WHERE id_siswa =' $id_siswa'";
        $sqlShow = mysqli_query($conn,$queryShow);
        $result = mysqli_fetch_assoc($sqlShow);

        unlink("img/".$result['foto_siswa']);
        
        $query = "DELETE FROM tb_siswa WHERE id_siswa='$id_siswa'";
        $sql = mysqli_query($conn,$query);
        
        if($sql){
            header("Location: index.php");
        } else{
            echo $query;
        }
    }
?>
