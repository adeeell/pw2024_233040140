<?php

//koneksi ke database

$db = mysqli_connect("localhost", "root", "", "phpdasar");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

//ambil data dari tabel siswa / query data siswa

$hasil = mysqli_query($db, "SELECT * FROM mahasiswa");

//ambil data (mengambil) siswa dari hasil objek
//myqsli_fetch_row() //mengembalikan 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman admin</title>
</head>
<body>
    
<h1>daftar mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>no.</th>
    <th>aksi</th>
    <th>gambar</th>
    <th>NRP</th>
    <th>nama</th>
    <th>email</th>
    <th>jurusan</th>
</tr>

<?php $i = 1; ?>
<?php while ($baris = mysqli_fetch_assoc( $hasil )): ; ?>

<tr>
    <td> <?= $i;?></td>
    <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
    </td>
    <td img src="img/<?= $baris ["gambar"]; ?>" alt =""lebar ="80" "tinggi = "80"></td>

    <td> <?= $baris ["nrp"];?></td>
    <td> <?= $baris ["nama"];?></td>
    <td> <?= $baris ["email"];?></td>
    <td> <?= $baris ["jurusan"];?></td>
</tr>
<?php $i++ ?>
<?php endwhile; ?>
</table>

</body>
</html>