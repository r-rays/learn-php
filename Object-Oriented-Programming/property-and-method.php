<?php
class Produk
{
    // Property
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    // method
    public function sayHello()
    {
        return "Hello World!";
    }

    public function getLabel()
    {
        return "$this->judul : $this->penulis, $this->penerbit";
    }
}

$komik = new Produk();
$komik->judul = "Naruto";
$komik->penulis = "Masashi Kishimoto";
$komik->penerbit = "Shonen Jump";
$komik->harga = 300000;

$game = new Produk();
$game->judul = "Uncharted";
$game->penulis = "Neil Druckman";
$game->penerbit = "Sony Computer";
$game->harga = 250000;

echo "$komik->judul : $komik->penulis, $komik->penerbit";
echo "<br>";
echo $komik->sayHello();

echo "<br>";
echo "<br>";

echo $komik->getLabel();
echo "<br>";
echo $game->getLabel();
