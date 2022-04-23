<?php
require_once "class_persegiPanjang.php";

echo "Nilai Persegi Panjang";
$pp1 = new PersegiPanjang(12, 6);
$pp2 = new PersegiPanjang(10, 7);

echo "<br/>Luas Persegi Panjang I: " . $pp1->getLuas();
echo "<br/>Luas Persegi Panjang II: " . $pp2->getLuas();

echo "<br/>Keliling Persegi Panjang I: " . $pp1->getKeliling();
echo "<br/>Keliling Persegi Panjang II: " . $pp2->getKeliling();
