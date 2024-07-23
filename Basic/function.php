<?php
// Date
echo date("l, d-M-Y");

echo "<br>";
echo "<br>";

// Time
// UNIX Timestamp / EPOCH Time
echo time();

echo "<br>";
echo "<br>";

echo date("l, d-M-Y", time() + (60 * 60 * 24 * 100));

echo "<br>";
echo "<br>";

// Membuat waktu sendiri
// mktime(jam, menit, detik, bulan, tanggal, tahun);
echo date("l, d-M-Y", mktime(0, 0, 0, 2, 18, 1979));

echo "<br>";
echo "<br>";

echo date("l, d-M-Y", strtotime("18 August 2005"));

strlen("Hello World!");

echo "<br>";
echo "<br>";

strcmp("Hello World!", "Hello");

echo "<br>";
echo "<br>";
?>

<?php
function salam($waktu = "Datang", $nama = "Admin")
{
    return "Selamat $waktu, $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>
    <h1><?= salam("Pagi", "Rieky"); ?></h1>
</body>

</html>