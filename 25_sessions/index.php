<?php
session_start();

$user = 'bima';
$password = 123;

if(isset($_POST['submit'])){
    if($_POST['nama'] == $user && $_POST['password'] == $password){
        header('Location: profile.php');
        setcookie("nama_user", $_POST['nama'],time()+120);
        $_SESSION['nama_user'] = $_POST['nama'];
    }else{
        echo 'Gagal login';
    }
}
?>
<form action="index.php" method="post">
    <label>Masukkan username</label><br/>
    <input type="text" name="nama"><br/>
    <label>Masukkan password</label><br/>
    <input type="password" name="password"><br/>
    <input type="submit" name="submit">
</form>