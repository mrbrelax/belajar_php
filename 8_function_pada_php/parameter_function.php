<?php
function print_text($text, $angka){
    $text = "Sekolah " . $text . " " . $angka;
    echo "====";
    echo $text;
    echo "====";
}
function jarakDong(){
    "<br/>";
}
print_text("Koding", 21);
jarakDong();
print_text("Mengemudi", 20);
jarakDong();
print_text("perawat", 19);

?>