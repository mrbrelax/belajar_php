<!-- 
mkdir() : untuk membuat sebuah folder atau directory
rmdir() : untuk menghapus folder atau directory
 -->
<?php
// cara penggunakan mkdir()
function hai(){
    echo "Folder berhasil dibuat";
}

mkdir("mrbrelax", hai());
// cara penggunaan rmdir()
rmdir("mrbrelax");
?>