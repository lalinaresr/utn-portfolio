<?php

/**
 * Variable que contendrá los elementos HTML generados con los resultados que se mostrarán al usuario
 * @var String
 */
$html = '';

$html .= '<tbody>';
foreach ($records as $record) {
    $html .= '<tr>
        <td>' . $record['resultado_id'] . '</td>
        <td>' . $record['planta_mayor_produccion'] . '</td>
        <td>' . number_format($record['cantidad_mayor_produccion'], 0) . '</td>
        <td>' . $record['planta_menor_produccion'] . '</td>
        <td>' . number_format($record['cantidad_menor_produccion'], 0) . '</td>
        <td>' . $record['planta_mayor_defecto'] . '</td>
        <td>' . number_format($record['cantidad_mayor_defecto'], 2) . '%</td>
        <td>' . $record['planta_menor_defecto'] . '</td>
        <td>' . number_format($record['cantidad_menor_defecto'], 2) . '%</td>
    </tr>';
}
$html .= '</tbody>';

echo $html;
