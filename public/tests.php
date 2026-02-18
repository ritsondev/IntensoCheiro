<?php
$dataAtual = new DateTime("now", new DateTimeZone('Africa/Luanda'));
$inputdata=$dataAtual->format('Y-m-d H:i:s');

echo $inputdata;

?>