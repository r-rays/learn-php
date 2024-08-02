<?php
// PROBLEM
// class Produk
// {
//     // Property
//     public $judul,
//         $penulis,
//         $penerbit,
//         $harga,
//         $jumlahHalaman,
//         $waktuBermain,
//         $tipe;

//     // Constructor
//     public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuBermain = 0, $tipe = "tipe")
//     {
//         $this->judul = $judul;
//         $this->penulis = $penulis;
//         $this->penerbit = $penerbit;
//         $this->harga = $harga;
//         $this->jumlahHalaman = $jumlahHalaman;
//         $this->waktuBermain = $waktuBermain;
//         $this->tipe = $tipe;
//     }

//     // method
//     public function sayHello()
//     {
//         return "Hello World!";
//     }

//     public function getLabel()
//     {
//         return "$this->penulis, $this->penerbit";
//     }
// }

// class CetakInfoProduk
// {
//     public function cetak(Produk $produk)
//     {
//         $str = "{$produk->tipe} : {$produk->judul} | {$produk->penulis}, {$produk->getLabel()} (Rp {$produk->harga})";
//         if ($produk->tipe == "komik") {
//             $str .= " - {$produk->jumlahHalaman}";
//         } else if ($produk->tipe == "game") {
//             $str .= " ~ {$produk->waktuBermain}";
//         }
//         return $str;
//     }
// }

// $komik = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100, null, "Komik");
// $game = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, null, 50, "Game");

// echo $komik->getLabel();
// echo "<br>";
// echo $game->getLabel();

// echo "<br>";
// echo "<br>";

// $infoKomik = new CetakInfoProduk();
// echo $infoKomik->cetak($komik);



// SOLVE
class Produk
{
    // Property
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jumlahHalaman,
        $waktuBermain;

    // Constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuBermain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuBermain = $waktuBermain;
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
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->penulis}, {$this->getLabel()} (Rp {$this->harga}) - {$this->jumlahHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->penulis}, {$this->getLabel()} (Rp {$this->harga}) - {$this->waktuBermain} jam.";
        return $str;
    }
}

$komik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100, null);
$game = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, null, 50);

echo $komik->getLabel();
echo "<br>";
echo $game->getLabel();

echo "<br>";
echo "<br>";

echo $komik->getInfoProduk();
echo "<br>";
echo $game->getInfoProduk();
