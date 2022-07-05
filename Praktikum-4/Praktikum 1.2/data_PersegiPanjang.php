<?php
require_once "class_PersegiPanjang.php";

$pp1 = new PersegiPanjang(12, 4);
$pp2 = new PersegiPanjang(16, 8);

echo "<br/>Luas Persegi Panjang I " . $pp1->getLuas();
echo "<br>Luas Persegi Panjang II " . $pp2->getLuas();

echo "<br>Keliling Persegi Panjang I " . $pp1->getKeliling();
echo "<br>Keliling Persegi Panjang II " . $pp2->getKeliling();
?>
