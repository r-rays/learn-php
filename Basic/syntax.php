<?php
// Standart Output
echo "Hello World!<br>";
print "Hello World!<br>";

echo "<br>";

// Array Value Output
print_r([1, 2, "Hello", True]);

echo "<br>";
echo "<br>";

// Debugging Output
var_dump("Hello World!");

echo "<br>";
echo "<br>";

// Variable
$name = "Rieky Rayson";
?>

<!-- // PHP Inside HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syntax</title>
</head>

<body>
    <h1>Halo, Selamat Datang <?php echo $name; ?>!</h1>
</body>

</html>

<?php
echo "<br>";
echo "<br>";

// Operator
$x = 10;
$y = 20;

echo $x + $y;
echo $x - $y;
echo $x / $y;
echo $x * $y;
echo $x % $y;

echo "<br>";
echo "<br>";

// Contatenation
$first_name = "Rieky";
$last_name = "Rayson";

echo "Halo, nama saya" . $first_name . " " . $last_name;

echo "<br>";
echo "<br>";

// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x += 5;
echo $x;

$name = "Rieky";
$name .= " ";
$name .= "Rayson";

// Perbandingan
// <, >, <=, >=, ==
var_dump(1 == 5);

echo "<br>";
echo "<br>";

// Identitas
// ===, !==
var_dump(1 !== "5");

echo "<br>";
echo "<br>";

// Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
?>