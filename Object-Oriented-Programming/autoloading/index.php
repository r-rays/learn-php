<?php
require_once "App/init.php";

$komik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
$game = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($komik);
$cetakProduk->tambahProduk($game);
echo $cetakProduk->cetak();
