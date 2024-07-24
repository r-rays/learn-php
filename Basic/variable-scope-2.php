<?php
// if (!isset($_GET["nama"]) || !isset($_GET["nrp"])) {
//     header("Location: variable-scope-1.php");
//     exit;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Detail Mahasiswa</h1>
    <ul>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>NRP : <?= $_GET["nrp"]; ?></li>
    </ul>
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
    <h1>Selamat Datang, <?= $_POST["nama"]; ?>!</h1>
</body>

</html>