<?php
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
