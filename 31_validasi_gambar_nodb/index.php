<?php
if (isset($_POST['submit'])) {
    $nama = $_FILES['gambar']['name'];
    $error = $_FILES['gambar']['error'];
    $size = $_FILES['gambar']['size'];
    $asal = $_FILES['gambar']['tmp_name'];
    $format = $_FILES['gambar']['type'];

    // untuk melihat extensi / type:
    // $ex = pathinfo($name, PATHINFO_EXTENSION);

    if ($error == 0) {
        if ($size < 25000000) {
            if ($format == 'image/jpeg' || 'image/png') {
                // mengupload
                move_uploaded_file($asal, 'uploads/' . $nama);
                echo 'berhasil upload';
            }
        } else {
            echo 'gambarnya kegedean';
        }
    } else {
        echo 'ada error';
    }
}
?>

<form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="gambar">
    <input type="submit" name="submit" value="uploads">
</form>