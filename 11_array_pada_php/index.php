<?php
// Membuat dan memanggil data pada array secara biasa :
$buah = array('semangka', 'jeruk', 'apel', 'angur');

// Membuat dan memberi penamaan pada isi Array :
$buah2['semangka'] = "isinya merah";
$buah3['jeruk'] = "rasanya manis asem";
$buah4['apel'] = "warnanya merah";
$buah5['anggur'] = "harganya mahal";

// atau penamaan isi array variable buah :
$buah6 = array(
    'semangka' => "Isinya merah",
    'jeruk' => "Rasanya manis asem",
    'apel' => "Warnanya merah",
    'anggur' => "Harganya mahal",
);
// Menerapkan array dengan for :
$buah7 = array('semangka', 'jeruk', 'apel', 'anggur');
for ($x = 0; $x < count($buah7); $x++) {
    echo $buah[$x] . "<br/>";
};

echo "<br/>";

// metode array :
$nama = array('anjing', 'kurakura', 'koala', 'banteng');
$angka = [1, 4, 6, 8, 10];
echo "dengan metode sort :" . sort($nama) . "<br/>"; // metode sort.
echo "dengan metode array_unique: " . print_r(array_unique($nama)) . "<br/>"; // metode array_unique
echo "dengan metode shuffle: " . shuffle($nama) . "<br/>"; // metode shuffle
echo "dengan metode count: " . count($angka) . "<br/>";

echo "<br/>";

// Metode Associative Array :
// array_values(), array_keys(), array_merge()
$data1 = array(
    "Nama" => "Udin",
    "Umur" => 20,
    "Kerja" => "Programmer",
);
$data2 = array(
    'Istri' => "Belom ada",
    'Laptop' => "MacBook Pro",
);
// output metode associative array :
print_r(array_values($data1));
echo "<br/>";
print_r(array_keys($data1));
echo "<br/>";
print_r(array_merge($data1, $data2));

echo "<br/>";
echo "<br/>";

// Multi dimensi array :
$multidi = array(
    array("Programmer", "20", "Rajin"),
    array("Designer", "21", "Males"),
    array("Manager", "22", "Males Banget"),
);
// print_r($multidi);
echo $multidi[1][1];


echo "<br/>";
echo "<br/>";

// menghasilkan ouput :
print_r($buah) . "<br/>"; // lihat index seperti [1,2,3]
echo $buah[2] . "<br/>"; // ouput data array biasa.
echo $buah3['jeruk'] . "<br/>"; // ouput penamaan pada isi Array.
echo $buah6['semangka'] . "<br/>" // output atau penamaan array variable buah. 

?>

<!-- 
Penjelasan selengkapnya bisa disini :
https://www.malasngoding.com/belajar-php-mengenal-array-pada-php/
 -->