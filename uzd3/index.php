<?php

include __DIR__ . '/Grybas.php';
include __DIR__ . '/Helper.php';
include __DIR__ . '/Krepsys.php';

$grybuKiekis = 0;
$krepsys = new Krepsys;

echo '<pre>';

do {
    $grybas = new Grybas();
    if ($grybas->getArValgomas() == true && $grybas->getArSukirmijes() == false) {
        $krepsys->pridetiGrybu($grybas->getSvoris());
        $grybuKiekis++;
        var_dump($grybas);
        var_dump($krepsys);
    } else {
        echo '<br><br>';
        echo 'Blogas grybas';
        echo '<br><br>';
    }
} while ($krepsys->svoris <= 500);

echo "Viso pririnkom grybų: $grybuKiekis";
