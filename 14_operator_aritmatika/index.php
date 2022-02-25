<?php
$a = 4;
$b = 19;
$c = 2.64;

// penjumlahan :
echo "Penjumlahan: " . $a + $b . "<br/>";

// pengurangan :
echo "Pengurangan: " . $a - $b . "<br/>";

// perkalian :
echo "Perkalian: " . $a * $b . "<br/>";

// pembagian :
echo "Pembagian: " . $a / $b . "<br/>";

// modulus :
echo "Modulus: " . $a % $b . "<br/>";

// ++ :
echo "Increment: " . $a++ . "<br/>";

// Methode Math Funcion :
// - round(), 
echo "Angka Round ini adalah : " . round($c) . "<br/>";

// - rand(min, max) :
echo "Angka rand ini adalah : " . rand(5, 10) . "<br/>";

// - max() :
echo "Angka max ini adalah : " . max($c, $b, $a) . "<br/>";

// - min() :
echo "Angka min ini adalah : " . min($a, $b, $c);

?>

<!-- 
Penjelasan lebih detail :
https://www.malasngoding.com/belajar-php-operator-aritmatika-di-php/
 -->