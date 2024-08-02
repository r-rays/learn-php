<?php
class Produk
{
    // Property
    private $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon;

    // Constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $diskon = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->diskon = $diskon;
    }

    // method
    public function sayHello()
    {
        return "Hello World!";
    }

    public function getJudul()
    {
        return $this->judul;
    }
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
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
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} jam.";
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

echo "<br>";
echo "<br>";

echo "<hr>";

echo "<br>";

// $game->harga = 0;
// echo $game->harga;

echo $game->getHarga();

echo "<br>";
echo "<br>";

echo $komik->getJudul();
echo "<br>";
$komik->setJudul('One Piece');
echo $komik->getJudul();
