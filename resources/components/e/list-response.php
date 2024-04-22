<?php

/**
 * Variable donde se almacena un listado de personas con datos en común como el nombre y edad
 * @var Array[]
 */
$list = [
    ['name' => 'Rosa', 'age' => rand(10, 30)],
    ['name' => 'Alan', 'age' => rand(10, 30)],
    ['name' => 'Joan', 'age' => rand(10, 30)],
    ['name' => 'Luis', 'age' => rand(10, 30)],
    ['name' => 'Zury', 'age' => rand(10, 30)]
];

/**
 * Variable que contendrá los elementos HTML generados con los resultados que se mostrarán al usuario
 * @var String
 */
$html = '';

/**
 * Variable que contendrá la suma total de las edades que se encuentran en cada fila de la lista
 * @var int
 */
$sum = 0;

foreach ($list as $key => $item) {
    $html .= '<button class="btn btn-custom btn-block" style="cursor: default;">' . $item['name'] . ' tiene ' . $item['age'] . ' años de edad</button>';
    $sum += $item['age'];
}

$html .= '<hr><h5 class="text-center">La suma de las edades es: ' . $sum . '</h5>';

echo $html;
