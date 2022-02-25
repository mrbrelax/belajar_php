<?php
echo "<h2>Penggunaan fungsi number_format() di PHP</h2>";
$angka = "2000000";
echo number_format($angka) . "<br/>"; // hasilnya 2.000.000

echo number_format($angka, 2) . "<br/>"; // hasilnya 2.000.000.00

echo number_format($angka, 2, ",",".") . "<br/>"; // hasilnya : 2.000.000.00

echo "Rp. " . number_format($angka) . ",-"; //hasilnya 2.000.000,-

?>