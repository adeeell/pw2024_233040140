<?php

$mahasiswa = [
    [
        "nama" => "Adell Lailla Amallia",
        "nrp" => "233040140",
        "email" => "adelllaillaamallia@gmail.com"
    ],
    [
        "nama" => "Anindya Gita Lestari",
        "nrp" => "233040134",
        "email" => "anindyagitalestari@gmail.com"
    ],
    [
        "nama" => "Dennis Setya Pradana",
        "nrp" => "233040167",
        "email" => "denissetyapradana@gmail.com"
    ],
    [
        "nama" => "Eka Guntara",
        "nrp" => "233040168",
        "email" => "ekaguntara@gmail.com"
    ],
    [
        "nama" => "Muhammad Dhiaulhaq Triyudhistira Laturua",
        "nrp" => "233040171",
        "email" => "ul@gmail.com"
    ],
    [
        "nama" => "Novan Ramanda Putra",
        "nrp" => "233040143",
        "email" => "novanramandaputra@gmail.com"
    ],
    [
        "nama" => "Rafi Adyatma Sukanto",
        "nrp" => "233040147",
        "email" => "rafiadyatmasukanto@gmail.com"
    ],
    [
        "nama" => "Roy Martin Silaban ",
        "nrp" => "233040130",
        "email" => "roymartinsilaban@gmail.com"
    ],
    [
        "nama" => "Syah Putra Sopiyan ",
        "nrp" => "233040145",
        "email" => "syahputrasopiyan@gmail.com"
    ],
    [
        "nama" => "Tampan Putra Tri Pamungkas ",
        "nrp" => "233040170",
        "email" => "tampanputratripamungkas@gmail.com"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Array Associative</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ( $mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>Nrp : <?= $mhs["nrp"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>