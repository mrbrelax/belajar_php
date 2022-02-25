<?php
echo "====Example 1 while====";
$x = 1;

while ($x <= 10) {
    echo "Angka $x <br>";
    $x++;
}

echo "<br/>";
echo "====Example 2 do while====";
$hewan = ["Anjing", "Babi", "Domba", "Ayam"];
$i = 0;
do {
    echo $hewan[0] . "<br/>";
    $i++;
} while ($i < count($hewan));
?>

<!-- 
Penjelasan Lebih selengkapnya disini :
https://www.malasngoding.com/belajar-php-perulangan-while-pada-php/
 -->