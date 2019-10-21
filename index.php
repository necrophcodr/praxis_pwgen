<?php

include_once "inc/Praxis/SimplePasswordGenerator.php";

$pwgen = new Praxis\Helpers\SimplePasswordGenerator();

printf( "\$pwgen->Generate(10): %s<br/>", $pwgen->Generate(10) );

$pwgen->src = "ABCDEFGabcdefg1234567890";

printf( "\$pwgen->src = 'ABCDEFGabcdefg1234567890';<br/>" );
printf( "\$pwgen->Generate(10): %s<br/>", $pwgen->Generate(10) );

?>