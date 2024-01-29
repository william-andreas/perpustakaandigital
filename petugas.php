<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Petugas</title>
    <style>
   body {
    background-color: #black;
    padding-top: 60px;
    }


  
  .alert {
    font-weight: bold;
    text-align: center;
  }

  .tombol {
    font-weight: bold;
  }

  h2{
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color: #080808;
    text-align: center;
  }

  button {

  }
        
    </style>
</head>
<body>
    <br>    
<center>
    <h2>Aplikasi Perpustakaan Digital</h2>

<div class="alert alert-primary" class="alert">
      Anda Login Sebagai <b>PETUGAS</b> Aplikasi Perpustakaan Digital
    </div>
    </center>
    <div class="card mt-2" class="card">
      <div class="card-body">
        <!-- ini isi web kita -->
        <?php
        $file = @$_GET['url'];
        if (empty($file)) {
          echo "<h4>Selamat Datang Di Halaman Petugas.</h4>";
          echo "Aplikasi Perpustakaan Digital digunakan untuk mempermudah siswa/siswi membaca dan meminjam buku di SMK Management Training Systems.";
        } else {
          include $file . '.php';
        }
        ?>
      </div>
    </div>
    <center>
    <br>
    <div class="button">
    <button type="button" class="btn btn-info" >Admin</button>
    <button type="button" class="btn btn-info">Bukti Peminjaman</button>
    <button type="button" class="btn btn-info">Logout</button>
    </div>

    </center>
</body>
</html>