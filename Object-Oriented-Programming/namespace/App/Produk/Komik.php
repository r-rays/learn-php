<?php
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
