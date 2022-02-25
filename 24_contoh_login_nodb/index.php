<?php
$user = 'hilman';
$password = '123';

if(isset($_POST['submit'])){
    if($_POST['nama'] == $user && $_POST['password'] == $password){
        // memindahkan halaman
        header('Location: profile.php?nama=' . $user);
    }else{
        echo 'login gagal';
    }
}
?>

<form action="index.php" method="post">
    <label>Masukkan username</label><br/>
    <input type="text" name="nama"><br/>
    <label>Masukkan Password</label><br/>
    <input type="password" name="password"><br/>
    <input type="submit" name="submit">
</form>