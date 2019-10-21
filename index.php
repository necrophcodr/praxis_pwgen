<?php
include_once "inc/Praxis/SimplePasswordGenerator.php";

$pwgen = new Praxis\Helpers\SimplePasswordGenerator();

printf( "\$pwgen->Generate(10): %s<br/>", $pwgen->Generate(10) );

$pwgen->src = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

printf( "\$pwgen->src = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';<br/>" );
printf( "\$pwgen->Generate(10): %s<br/>", $pwgen->Generate(10) );
?>