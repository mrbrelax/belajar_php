<!-- 
1. Menghitung jumlah karakter dengan strlen():
mengitung jumlah string dapat menggunakan fungsi strlen().
2. Menghitung jumlah kata pada string dengan str_word_count():
untuk menghitung jumlah kata yang terdapat pada sebuah string anda bisa menggunakan 
fungsi yang sudah disediakan oleh PHP yaitu fungsi str_word_count(). 
3. Membalik String dengan strrev():
Fungsi strrev digunakan untuk membalikkan urutan karakter pada string.
4. Memfilter dan mengganti string dengan str_replace():
fungsi str_replace berfungsi sebagai pengganti string, misalnya di dalam sebuah string 
terdapat kata atau harus yang ingin di ganti dengan kata lain maka bisa menggunakan fungsi 
str_replace().
 -->
<?php
$kalimat = "Belajar pemrograman di mrbrelax " ;
echo strlen($kalimat) . "<br/>";
echo str_word_count($kalimat) . "<br/>";
echo strrev($kalimat) . "<br/>";
echo str_replace("Belajar","Tutorial",$kalimat) . "<br/>";
echo str_repeat("Belajar", 8) . "<br/>";
echo str_repeat(str_replace("Belajar " , "Mantap " , $kalimat) , 10);
?>

<!-- 
Lebih lanjutnya bisa kunjungi :
https://www.malasngoding.com/belajar-php-manipulasi-string-pada-php/
 -->