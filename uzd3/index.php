<?php

include __DIR__ . '/Grybas.php';
include __DIR__ . '/Helper.php';
include __DIR__ . '/Krepsys.php';


$grybai = new Grybas();

echo '<pre>';
echo $grybai->getSvoris();
echo '<br>';
$krepsys = new Krepsys($grybai->getSvoris());
var_dump($grybai);
var_dump($krepsys);
