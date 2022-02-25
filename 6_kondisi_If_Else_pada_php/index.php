<!-- 
Mengenal kondisi If-Else pada PHP :
 -->
<?php
echo "====Example 1 If-Else====" . "<br/>";
$teman = "andi";
if ($teman == "andi") {
    echo "dia adalah teman saya";
} else {
    echo "dia bukan teman saya";
}

echo "<br/>";
echo "====Example 2 If-Elseif-else" . "<br/>";
$friends = "udin";
if ($friends == "Budi") {
    echo "Budi adalah teman saya";
} elseif ($friends == "udin") {
    echo "Andi adalah teman saya";
} else {
    echo "Saya tidak punya teman";
}

echo "<br/>";
echo "====Example 3 If-ElseIf-Else====" . "<br/>";
$uang_programmer = 1000;
$keyboard = 2000;
$uang_designer = 5000;
if ($uang_programmer > $keyboard) {
    echo 'dibeli';
} elseif ($uang_designer > $keyboard) {
    echo 'dibeli';
} else {
    echo 'Uang Tidak Cukup';
}
?>

<!-- 
Selengkapnya bisa kunjungi disini :
https://www.malasngoding.com/belajar-php-kondisi-if-else-pada-php/
 -->