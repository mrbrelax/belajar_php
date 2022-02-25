<!-- Menggunakan for -->
<!-- <?php
echo "<h1>MR.B RELAX</h1>";

$data = array("Andi", "Budi", "Caca");
for($x=0;$x<count($data);$x++){
    echo $data[$x]."<br/>";
}
?> -->

<!-- Foreach menampilkan data yang berbentuk array -->
<?php
echo "<h1>MR.B RELAX</h1>";

$data = array("Andi", "Budi", "Caca");

foreach($data as $d){
    echo $d."<br/>";
}
?>