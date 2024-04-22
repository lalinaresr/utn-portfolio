<?php

/**
 * Variable que contendrá los elementos HTML generados con los resultados que se mostrarán al usuario
 * @var String
 */
$html = '';

/**
 * Variable que contiene las operaciones permitidas para el manejo del dinero
 * @var Array
 */
$movements = ['D', 'R'];

/**
 * Variable donde se almacena un listado de transacciones bancarias con datos en común como el id, fecha, tipo de movimiento y cantidad (depositar o retirar)
 * @var Array[]
 */
$transactions = [
    ['id' => 1, 'date' => '01/02/2018', 'movement' => $movements[rand(0, 1)], 'amount' => rand(10, 300)],
    ['id' => 2, 'date' => '02/02/2018', 'movement' => $movements[rand(0, 1)], 'amount' => rand(10, 300)],
    ['id' => 3, 'date' => '02/02/2018', 'movement' => $movements[rand(0, 1)], 'amount' => rand(10, 300)],
    ['id' => 4, 'date' => '03/02/2018', 'movement' => $movements[rand(0, 1)], 'amount' => rand(10, 300)],
    ['id' => 5, 'date' => '04/02/2018', 'movement' => $movements[rand(0, 1)], 'amount' => rand(10, 300)],
];

/**
 * Variable que contiene el número de elementos que tiene la lista
 * @var int
 */
$rows = count($transactions);

/**
 * Variable que contiene el saldo según las transacciones
 * @var int
 */
$balance = 1000;

/**
 * Variable que contendrá el nombre del movimiento según la operación a realizar
 * @var String
 */
$movement  = '';

/**
 * Variable que re-calculará el saldo dependiendo el tipo de movimiento y la cantidad
 * @var String
 */
$make_transaction = function ($operation) use (&$balance, &$movement) {
    if (strcmp($operation['movement'], 'D') == 0) {
        $balance += $operation['amount'];
        $movement  = 'Depósito';
    } else if (strcmp($operation['movement'], 'R') == 0) {
        $balance -= $operation['amount'];
        $movement  = 'Retiro';
    }
};

for ($i = 0; $i < $rows; $i++) {
    $make_transaction($transactions[$i]);
    $html .= '<tr>
        <td>' . $transactions[$i]['id'] . '</td>
        <td>' . $transactions[$i]['date'] . '</td>
        <td>' . $movement  . '</td>
        <td>$' . number_format($balance, 2) . '</td>
        <td>$' . number_format($transactions[$i]['amount'], 2) . '</td>
    </tr>';
}

echo $html;
