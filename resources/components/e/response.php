<?php

/**
 * Variable donde se almacena un listado de personas con datos en común como el nombre y edad
 * @var Array[]
 */
$people = [
    ['name' => 'Rosa', 'age' => rand(10, 30)],
    ['name' => 'Alan', 'age' => rand(10, 30)],
    ['name' => 'Joan', 'age' => rand(10, 30)],
    ['name' => 'Luis', 'age' => rand(10, 30)],
    ['name' => 'Zury', 'age' => rand(10, 30)]
];

/**
 * Variable que contendrá la suma total de las edades que se encuentran en cada fila de la lista
 * @var int
 */
$sum = 0;

/**
 * Variable que contendrá los elementos HTML generados con los resultados que se mostrarán al usuario
 * @var String
 */
$html = '';

foreach ($people as $key => $person) {
    $sum += $person['age'];
    $html .= '<button class="btn btn-custom btn-block" style="cursor: default;">' . $person['name'] . ' tiene ' . $person['age'] . ' años de edad</button>';
}

$html .= '<hr><p class="text-center">' . $sum . ' es la suma de las edades en el listado</p>';

echo $html;
