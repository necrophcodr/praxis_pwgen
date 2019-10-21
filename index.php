<?php
include_once "inc/Praxis/PasswordGenerator.php";

$pwgen = new Praxis\Helpers\SimplePasswordGenerator();

printf( "\$pwgen->Generate(16): %s<br/>", $pwgen->Generate(10) );

$pwgen->src = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

printf( "\$pwgen->src = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';<br/>" );
printf( "\$pwgen->Generate(16): %s<br/>", $pwgen->Generate(10) );

$vlpwgen = new Praxis\Helpers\VariableLengthPasswordGenerator();

printf( "\$vlpwgen->Generate(): %s<br/>", $vlpwgen->Generate() );
printf( "\$vlpwgen->Generate(16): %s<br/>", $vlpwgen->Generate(16) );
printf( "\$vlpwgen->Generate(16,10): %s<br/>", $vlpwgen->Generate(16,10) );
?>