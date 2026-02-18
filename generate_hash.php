<?php
$h=file_put_contents('hash.txt', password_hash('000000', PASSWORD_DEFAULT));
echo $h;
?>
