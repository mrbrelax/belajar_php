<?php
$grav_url = "https://www.gravatar.com/avatar/" . md5('kali@gmail.com') . "?s=200&d=identicon";
/*
Please read documentation
https://en.gravatar.com/site/implement
*/
?>

<img src="<?php echo $grav_url; ?>" alt="">