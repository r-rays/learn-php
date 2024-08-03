<?php

require_once "App/init.php";

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

// $komik = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 300000, 100);
// $game = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($komik);
// $cetakProduk->tambahProduk($game);
// echo $cetakProduk->cetak();

// new User();
new ProdukUser();
echo "<br>";
new ServiceUser();
