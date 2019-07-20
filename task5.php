<?php

$bmw = [
    'model' => 'X5',
    'speed' => '120',
    'doors' => '5',
    'year' => '2015'
];

$toyota = [
    'model' => 'Camry',
    'speed' => '150',
    'doors' => '4',
    'year' => '2016'
];

$opel = [
    'model' => 'Astra',
    'speed' => '130',
    'doors' => '3',
    'year' => '2017'
];

$cars = ['bmw' => $bmw,'toyota' => $toyota, 'opel' =>$opel];

foreach ($cars as $car => $item){
    echo "CAR $car<br>";
    echo $item['model'] . ' ' . $item['speed']. ' ' . $item['doors']. ' ' . $item['year']. '<br>';
}
