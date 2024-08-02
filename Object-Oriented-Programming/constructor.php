<?php
class Produk
{
    // Property
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    // Constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

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

$komik = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000);
$game = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);
$anime = new Produk("One Piece");

echo $komik->getLabel();
echo "<br>";
echo $game->getLabel();
echo "<br>";
echo $anime->getLabel();
