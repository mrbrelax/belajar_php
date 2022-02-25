<?php
$money_programmer = 2000;
$keyboard = 4000;
$money_designer = 8000;

if($money_programmer > $keyboard){
    echo 'dibeli gan';
}elseif($money_designer > $keyboard){
    echo 'dibeli gan oleh designer ';

    // Nested If (If Bercabang) :
    if($money_designer >= $keyboard * 2){
        echo 'dibeli dua kali oleh designer';
    } else{
        echo 'tidak bisa beli dua kali oleh designer';
    }
}
else{
    'yahhh ga bisa dibeli';
}
?>