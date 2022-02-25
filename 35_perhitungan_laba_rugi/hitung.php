<?php
$harga = $_POST['harga'];
$modal = $_POST['modal'];

if($harga > $modal){
    $laba = $harga-$modal;
    echo "Anda mendapatkan LABA Sebesar = " . $laba;
}elseif($modal > $harga){
    $rugi = $modal-$harga;
    echo "Anda mendapatkan RUGI sebesar = " . $rugi;
}else{
    echo "Tidak laba tidak rugi";
}
?>