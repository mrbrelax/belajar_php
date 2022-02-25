<?php
session_start();
if(isset($_SESSION['nama_user'])){
    echo 'Selamat datang di profile ' . $_SESSION['nama_user'];
}else{
    echo 'login dulu';
}
?>

<br/>
<a href="logout.php">Logout</a>