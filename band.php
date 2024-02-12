<?php

$albums = array(
    "Citizen of Glass" => '4.5',
    "Night" => '9',
    "New Eyes" => '5',
    "Strange Trails" => '10'
);

echo ("Het albumoverzicht:" . PHP_EOL);

foreach ($albums as $album => $cost) {
    echo $album . "kost €" . $cost . PHP_EOL;
}

echo "Het totaalbedrag van alle albums is €28.5" . PHP_EOL;

$average = array_sum($albums) / count($albums);

echo "De gemiddelde prijs can alle albums is €" . $average;


?>