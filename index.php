<?php
/**
 * file: index.php
 * 
 * description: This file is only used to display example usage of the library.
 */

include_once "inc/Praxis/PasswordGenerator.php";

$pwgen = new Praxis\Helpers\SimplePasswordGenerator();

printf( "\$pwgen->Generate(10): %s<br/>", $pwgen->Generate(10) );

$pwgen->src = ["0123456789","abcdefghijklmnopqrstuvwxyz","ABCDEFGHIJKLMNOPQRSTUVWXYZ"];

printf( '$pwgen->src = ["0123456789","abcdefghijklmnopqrstuvwxyz","ABCDEFGHIJKLMNOPQRSTUVWXYZ"];<br/>' );
printf( "\$pwgen->Generate(10): %s<br/>", $pwgen->Generate(10) );

$vlpwgen = new Praxis\Helpers\VariableLengthPasswordGenerator();

printf( "\$vlpwgen->Generate(): %s<br/>", $vlpwgen->Generate() );
printf( "\$vlpwgen->Generate(16): %s<br/>", $vlpwgen->Generate(16) );
printf( "\$vlpwgen->Generate(16,10): %s<br/>", $vlpwgen->Generate(16,10) );
?>