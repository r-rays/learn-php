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
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->getLabel()} (Rp {$this->harga})";
        return $str;
    }
}

class Komik extends Produk
{
    public $jumlahHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->penulis}, {$this->getLabel()} (Rp {$this->harga}) ~ {$this->waktuMain} jam.";
        return $str;
    }
}

$komik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
$game = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

echo $komik->getLabel();
echo "<br>";
echo $game->getLabel();

echo "<br>";
echo "<br>";

echo $komik->getInfoProduk();
echo "<br>";
echo $game->getInfoProduk();
