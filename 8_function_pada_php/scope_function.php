<?php
$a = 10000;
$b = 20000;
function menghitung(){
    // menggunakan "global $a, $b;"
    global $a, $b;
    $c = $a + $b;
    // atau menggunakan $GLOBALS['a'] + $GLOBALS['b'];
    $c = $GLOBALS['a'] + $GLOBALS['b'];
    return $c;
}
echo menghitung();
?>