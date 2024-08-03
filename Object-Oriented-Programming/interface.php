<?php
interface InfoProduk
{
    public function getInfoProduk();
}

abstract class Produk
{
    // Property
    protected $judul,
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

    abstract public function getInfo();
}

class Komik extends Produk implements InfoProduk
{
    public $jumlahHalaman;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->getLabel()} (Rp {$this->harga})";
        return $str;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jumlahHalaman} halaman.";
        return $str;
    }
}

class Game extends Produk implements InfoProduk
{
    public $waktuMain;
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->penulis}, {$this->getLabel()} (Rp {$this->harga})";
        return $str;
    }
    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public $daftarProduk = array();

    public function tambahProduk(Produk $produk)
    {
        $this->daftarProduk[] = $produk;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK :<br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()}<br>";
        }

        return $str;
    }
}

$komik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
$game = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($komik);
$cetakProduk->tambahProduk($game);
echo $cetakProduk->cetak();
