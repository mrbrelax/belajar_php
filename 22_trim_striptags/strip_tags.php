<?php
$text2 = "<script>alert('halo semuanya!')</script>";
echo strip_tags($text2);
echo "<br/>";
echo "<br/>";

$text3 = "<b> Hallo <b/> semua";
echo strip_tags($text3, '<br/>');
?>