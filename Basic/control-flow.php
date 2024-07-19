<?php
// Pengulangan
for ($i = 0; $i < 5; $i++) {
    echo "Hello World!<br>";
}

echo "<br>";

$i = 0;
while ($i > 5) {
    echo "Hello World!<br>";
    $i++;
}

echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 3; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>

</html>

<?php
echo "<br>";
echo "<br>";

// Pengkondisian / Percabangan
$x = 20;
if ($x < 20) {
    echo "benar";
} elseif ($x == 20) {
    echo "bingo!";
} else {
    echo "salah";
}

echo "<br>";
echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr style="background-color: silver;">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>
</body>

</html>