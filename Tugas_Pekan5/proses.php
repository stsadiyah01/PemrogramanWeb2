<?php
$merk=$_POST['merk'];
$harga=$_POST['harga'];
$ukuran=$_POST['ukuran'];

include 'Televisi.php';

$tv = new Televisi($merk,$harga,$ukuran);
$UkTv = $tv->ukuranTv();
$kualitas = $tv->kualitas();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Form</title>
    <style>
        h1{
            text-align:center;
        }
        .tabel1{
            font-family:sans-serif;
            color: #444;
            width : 100%;
            border : 1px solid white;
            margin-top : 20px;
        }
        .tabel1 thead{
            background-color:rgb(47, 171, 173); 
            color:#fff;
            font-weight:normal;
        }
        .tabel1 tbody{
            text-align:center;
            background-color:rgb(193, 220, 226);
        }

    </style>
</head>
<body>
    <h1>Data Pembelian Televisi</h1>
<table class="tabel1">
        <thead>
            <tr>
                <th>No</th>
                <th>Merk Televisi</th>
                <th>Harga</th>
                <th>Ukuran (Inci)</th>
                <th>Jenis Ukuran Tv</th>
                <th>Kualitas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td> <?=$merk?></td>
                <td><?=$harga?></td>
                <td><?=$ukuran?></td>
                <td><?=$UkTv?></td>
                <td><?=$kualitas?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>