<!-- 
base64_encode() : berguna untuk men-encode string.
base64_decode() : berguna untuk mengembalikan hasil encode atau men-decode string.
 -->
<?php
$data = "Tutorial Base64 bersama Mr.B Relax";

echo base64_decode(base64_encode($data));
?>

<!-- 
lebih lengkapnya bisa disini :
https://www.malasngoding.com/pengertian-dan-cara-membuat-base64-pada-php/
 -->