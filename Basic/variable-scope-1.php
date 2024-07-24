<?php
// Variable Scope
$x = 10;

function tampilX()
{
    global $x;
    echo $x;
}

tampilX();

echo "<br>";
echo "<br>";

$_GET["nama"] = "Rieky Rayson";
$_GET["nrp"] = 123456789;
var_dump($_GET);

echo "<br>";
echo "<br>";

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
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><a href="variable-scope-2.php?nama=<?= $mhs["nama"]; ?>&<?= $mhs["nrp"]; ?>"><?= $mhs["nama"]; ?></a></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>

<?php
echo "<br>";
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>

<body>
    <form action="variable-scope-2.php" method="post">
        Masukkan Nama : <input type="text" name="nama" id="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>

</html>