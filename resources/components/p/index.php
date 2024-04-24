<?php

$major_production = $major_defective_production = $defective_percentage = 0;

$minor_production = $minor_defective_production = 99999;

$major_productor = $minor_productor = $major_defective_productor = $minor_defective_productor = '';

function _calculate_results_(array $plant, &$major_production, &$major_productor, &$minor_production, &$minor_productor, &$defective_percentage, &$major_defective_production , &$major_defective_productor , &$minor_defective_production , &$minor_defective_productor)
{
    if ($plant['unidades_producidas'] > $major_production) {
        $major_production = $plant['unidades_producidas'];
        $major_productor = $plant['planta'];
    }
    if ($minor_production > $plant['unidades_producidas']) {
        $minor_production = $plant['unidades_producidas'];
        $minor_productor = $plant['planta'];
    }

    $defective_percentage = (($plant['unidades_defectuosas'] * 100) / $plant['unidades_producidas']);

    if ($defective_percentage > $major_defective_production) {
        $major_defective_production = $defective_percentage;
        $major_defective_productor = $plant['planta'];
    }

    if ($minor_defective_production > $defective_percentage) {
        $minor_defective_production = $defective_percentage;
        $minor_defective_productor = $plant['planta'];
    }
}

/**
 * Variable que contendrá los elementos HTML generados con los resultados que se mostrarán al usuario
 * @var String
 */
$html = '';

$html .= '<tbody>';
foreach ($plants as $key => $plant) {
    _calculate_results_($plant, $major_production, $major_productor, $minor_production, $minor_productor, $defective_percentage, $major_defective_production , $major_defective_productor , $minor_defective_production , $minor_defective_productor);
    $html .= '<tr>
        <td>' . $plant['planta'] . '</td>
        <td>' . number_format($plant['unidades_producidas'], 0) . '</td>
        <td>' . $plant['unidades_defectuosas'] . '</td>
        <td>' . number_format($defective_percentage, 2) . '%</td>
    </tr>';
}
$html .= '</tbody>
<tfoot>
    <tr>
        <th class="success" colspan="2">La mayor producción fue de ' . number_format($major_production, 0) . ' hecha por ' . $major_productor . '</th>
        <th class="danger" colspan="2">La mayor producción de defectuosas fue de ' . number_format($major_defective_production, 2) . '% hecha por ' . $major_defective_productor . '</th>
    </tr>
    <tr>
        <th class="danger" colspan="2">La menor producción fue de ' . number_format($minor_production, 0) . ' hecha por ' . $minor_productor . '</th>
        <th class="success" colspan="2">La menor producción de defectuosas fue de ' . number_format($minor_defective_production, 2) . '% hecha por ' . $minor_defective_productor . '</th>
    </tr>';

mysqli_query($connection, sprintf("INSERT INTO resultados VALUES (NULL, '%s', '%d', '%s', '%d', '%s', '%.2F', '%s', '%.2F')", $major_productor, $major_production, $minor_productor, $minor_production, $major_defective_productor, floatval(number_format($major_defective_production, 2)), $minor_defective_productor, floatval(number_format($minor_defective_production, 2))));

$html .= '
    <tr>
        <th class="info" colspan="4">Estos valores han sido guardados con éxito en el historial</th>
    </tr>
</tfoot>';

echo $html;
