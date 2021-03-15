<?php

include __DIR__ .'/Pinigine.php';

$pinigai = new Pinigine;
$pinigai->ideti(1);
$pinigai->ideti(120);
$pinigai->ideti(2);
$pinigai->ideti(1);
$pinigai->ideti(1);
$pinigai->ideti(14);
$pinigai->ideti(18);
$pinigai->skaiciuoti();
echo '<br>';
$pinigai->monetos();
echo '<br>';
$pinigai->banknotai();

echo '<pre>';

var_dump($pinigai);