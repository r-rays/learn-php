<?php
$hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
$bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];


var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
echo $hari[1];

echo "<br>";
echo "<br>";

var_dump($hari);
$hari[] = "Hari";
echo "<br>";
var_dump($hari);

echo "<br>";
echo "<br>";
?>

<?php
$angka = [3, 2, 15, 20, 11, 77, 89];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            float: left;
            margin: 3px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($angka); $i++) : ?>
        <div class="kotak"><?= $angka[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>

    <div class="clear"></div>
</body>

</html>

<?php
echo "<br>";
echo "<br>";

$mahasiswa = [["Rieky Rayson", "3505171511040003", "Rekayasa Perangkat Lunak", "r.rayyysss@gmail.com"], ["Fitaria Gustina", "3505171511040003", "Rekayasa Perangkat Lunak", "greenfithea@gmail.com"]];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><?= $mhs[0]; ?></li>
            <li><?= $mhs[1]; ?></li>
            <li><?= $mhs[2]; ?></li>
            <li><?= $mhs[3]; ?></li>
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
    <title>Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            float: left;
            margin: 3px;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php
    $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    // echo $angka[2][1]
    ?>

    <?php foreach ($angka as $a) : ?>
        <?php foreach ($a as $b) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>
</body>

</html>