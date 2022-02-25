<?php
function berteriak($callback){
    echo 'HALOOOO <br/>';
    // $callback();
    // call_user_func($callback);
    if(is_callable($callback)){
        call_user_func($callback, 'Selamat Datang');
    }else{
        echo ' dia bukan function ';

    }
}

// berteriak(function(){
//     echo 'Saya adalah anonymous function';
// });

$panggil = function($text){
    echo $text;
};
berteriak($panggil);
?>

<!-- 
is_callable() => untuk menguji apakah dia function atau bukan menggunakan If-else
call_user_func() => Bawaan dari PHP
 -->