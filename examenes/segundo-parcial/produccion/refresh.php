<?php
require_once 'connection.php';

$queries = '';

$plants = [
    ['planta_id' => 1, 'planta' => 'CDMX', 'unidades_producidas' => rand(1000, 25000), 'unidades_defectuosas' => rand(10, 950)],
    ['planta_id' => 2, 'planta' => 'Hermosillo', 'unidades_producidas' => rand(1000, 25000), 'unidades_defectuosas' => rand(10, 950)],
    ['planta_id' => 3, 'planta' => 'León', 'unidades_producidas' => rand(1000, 25000), 'unidades_defectuosas' => rand(10, 950)],
    ['planta_id' => 4, 'planta' => 'Oaxaca', 'unidades_producidas' => rand(1000, 25000), 'unidades_defectuosas' => rand(10, 950)],
    ['planta_id' => 5, 'planta' => 'Veracruz', 'unidades_producidas' => rand(1000, 25000), 'unidades_defectuosas' => rand(10, 950)],
    ['planta_id' => 6, 'planta' => 'Puebla', 'unidades_producidas' => rand(1000, 25000), 'unidades_defectuosas' => rand(10, 950)]
];

foreach ($plants as $plant) {
    $queries .= sprintf("INSERT INTO plantas VALUES('%d', '%s', '%d', '%d') ON DUPLICATE KEY UPDATE planta = '%s', unidades_producidas = '%d', unidades_defectuosas = '%d';", $plant['planta_id'], $plant['planta'], $plant['unidades_producidas'], $plant['unidades_defectuosas'], $plant['planta'], $plant['unidades_producidas'], $plant['unidades_defectuosas']);
}

echo mysqli_multi_query($connection, $queries) ? 'Actualización exitosa' : 'Algo salió mal en la actualización de los datos';