<?php
require_once "class_persegipanjang.php";

$Luas_dan_Keliling = new persegipanjang (20, 20);

echo "Panjang Persegi Panjang =".$Luas_dan_Keliling->panjang();
echo "<br>Lebar Persegi Panjang =".$Luas_dan_Keliling->lebar();
echo "<br>---Hasil Luas dan Keliling Persegi Panjang ---";
echo "<br>Luas persegi panjang =".$Luas_dan_Keliling->getLuas();
echo "<br>keliling persegi panjang =".$Luas_dan_Keliling->getKeliling();

?>