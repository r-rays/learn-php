<?php
class Contoh
{
    public static $angka = 1;

    // public static function halo()
    // {
    //     return "Halo " . self::$angka++ . " kali.";
    // }

    public function halo()
    {
        return "Halo " . self::$angka++ . " kali.<br>";
    }
}

echo Contoh::$angka;
// echo "<br>";
// echo Contoh::halo();
// echo "<br>";
// echo Contoh::halo();

echo "<br>";
echo "<br>";

$coba = new Contoh;
echo $coba->halo();
echo $coba->halo();
echo $coba->halo();
echo "<hr>";
$coba2 = new Contoh;
echo $coba2->halo();
echo $coba2->halo();
echo $coba2->halo();
