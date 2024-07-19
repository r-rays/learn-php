<?php
// Standart Output
echo "Hello World!\n";
print "Hello World!\n";

// Array Value Output
print_r([1, 2, "Hello", True, "\n"]);

// Debugging Output
var_dump("Hello World!");

nl2br("");
nl2br("");

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
nl2br("");
nl2br("");

// Operator
$x = 10;
$y = 20;

echo $x + $y;
echo $x - $y;
echo $x / $y;
echo $x * $y;
echo $x % $y;

nl2br("");
nl2br("");

// Contatenation
$first_name = "Rieky";
$last_name = "Rayson";

echo "Halo, nama saya" . $first_name . " " . $last_name;

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

// Identitas
// ===, !==
var_dump(1 !== "5");

// Logika
// &&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);
?>