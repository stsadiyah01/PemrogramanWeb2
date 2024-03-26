<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Televisi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="proses.php" method="post" class="tv-left">
            <div class="tv-left-title">
                <h2>Television</h2>
                <hr>
            </div>
            <input type="text" name="merk" placeholder="Merk Televisi Anda" class="tv-inputs" required>
            <input type="text" name="harga" placeholder="Masukkan Harga Televisi Anda" class="tv-inputs" required>
            <input type="number" name="ukuran" placeholder="Ukuran Televisi Anda (satuan inci)" class="tv-inputs" required>
            <button type="submit">Submit 
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8"/>
            </svg>
            </button>
        </form>
        <div class="tv-right">
            <img src="nonton tv.jpg" alt="">
        </div>
    </div>
</body>
</html>