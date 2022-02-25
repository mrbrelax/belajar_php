<?php
echo "====Example 1====";
for ($kata = 1; $kata <= 20; $kata++) {
    echo "Belajar pemrograman PHP di mrbrelax" . "<br/>";
}

echo "<br/>";
echo "====Example 2 count()====";
// for loop mengulang dengan batas
$hewan = ["Anjing", "Babi", "Buaya", "Ular"];
for ($i = 0; $i < count($hewan) - 1; $i++) {
    echo $hewan;
}
// count() => untuk mengeluarkan array

echo "<br/>";
echo "====Example 3 foreach()====";
// foreach untuk mengulang tanpa dibatasin
$animal = ["Jerapah", "Macan", "Singa", "Harimau"];
foreach ($animal as $an) {
    echo "$h";
}

echo "<br/>";
echo "====Example 4 foreach assosiatif array====";
$data = [
    'nama' => 'Mr.B',
    'Umur' => 20,
    'Sifat' => 'Rajin'
];
foreach($data as $key => $value){
    echo $value . "<br/>";
}

?>

<!-- 
Penjelasan lebih lengkap :
https://www.malasngoding.com/belajar-php-perulangan-for-pada-php/
 -->