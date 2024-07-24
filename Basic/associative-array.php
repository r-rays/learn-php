<?php
$mahasiswa = [
    [
        "nama" => "Rieky Rayson",
        "nrp" => "123456789",
        "jurusan" => "Rekayasa Perangkat Lunak",
        "email" => "r.rayyysss@gmail.com"
    ],
    [
        "nama" => "Fitaria Gustina",
        "nrp" => "123456789",
        "jurusan" => "Manajemen",
        "email" => "greenfithea@gmail.com"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Associative</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>