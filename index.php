<?php

require_once 'classes/Prodotto.php';
require_once 'classes/Nuova-collezione.php';

$ch255 = new HandBags('JM8890','Chanel','2.55');
$ch255->prezzo = '1000';
echo $ch255->calcolaSconto();
var_dump($ch255);