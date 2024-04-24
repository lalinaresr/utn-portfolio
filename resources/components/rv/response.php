<?php

/**
 * Variable que contiene el número de elementos que tiene la lista
 * @var int
 */
$rows = count($_SESSION['sales']);

/**
 * Variable que contendrá los elementos HTML generados con los resultados que se mostrarán al usuario
 * @var String
 */
$html = '';

$html .= '<thead>
        <tr class="rv">
            <th colspan="11">' . APP_NAME . '</th>
        </tr>
        <tr class="rv">';
        foreach ($headers as $header) {
            $html .= '<th>' . $header . '</th>';
        }
        $html .= '</tr>
    </thead>
<tbody>';

for ($i = 0; $i < $rows; $i++) {
    _calculate_results_($sales[$i], $sales_first_week, $sales_second_week, $sales_third_week, $sales_fourth_week, $sales_by_mounth, $all_sales, $commissions, $salaries, $insurance_money, $total, $major_sale, $major_seller, $minor_sale, $minor_seller);
    $html .= '<tr>
        <td>' . $sales[$i]['id'] . '</td>
        <td>' . $sales[$i]['name'] . '</td>
        <td>$' . number_format($sales[$i]['first_week'], 2) . '</td>
        <td>$' . number_format($sales[$i]['second_week'], 2) . '</td>
        <td>$' . number_format($sales[$i]['third_week'], 2) . '</td>
        <td>$' . number_format($sales[$i]['fourth_week'], 2) . '</td>
        <td>$' . number_format($sales_by_mounth, 2) . '</td>
        <td>$' . number_format(($sales_by_mounth * 0.02), 2) . '</td>
        <td>$' . number_format($sales[$i]['salary'], 2) . '</td>
        <td>$' . number_format((($sales[$i]['salary'] + ($sales_by_mounth * 0.02)) * 0.03), 2) . '</td>
        <td class="info"><span class="glyphicon glyphicon-arrow-left"></span> $' . number_format(($sales_by_mounth + ($sales_by_mounth * 0.02) + $sales[$i]['salary'] + (($sales[$i]['salary'] + ($sales_by_mounth * 0.02)) * 0.03)), 2) . '</td>
    </tr>';
}
$html .= '</tbody>
<tfoot>
    <tr class="info">
        <td colspan="2">Totales</td>
        <td><span class="glyphicon glyphicon-arrow-up"></span> $' . number_format($sales_first_week, 2) . '</td>
        <td><span class="glyphicon glyphicon-arrow-up"></span> $' . number_format($sales_second_week, 2) . '</td>
        <td><span class="glyphicon glyphicon-arrow-up"></span> $' . number_format($sales_third_week, 2) . '</td>
        <td><span class="glyphicon glyphicon-arrow-up"></span> $' . number_format($sales_fourth_week, 2) . '</td>
        <td><span class="glyphicon glyphicon-arrow-up"></span> $' . number_format($all_sales, 2) . '</td>
        <td><span class="glyphicon glyphicon-arrow-up"></span> $' . number_format($commissions, 2) . '</td>
        <td><span class="glyphicon glyphicon-arrow-up"></span> $' . number_format($salaries, 2) . '</td>
        <td><span class="glyphicon glyphicon-arrow-up"></span> $' . number_format($insurance_money, 2) . '</td>
        <td><span class="glyphicon glyphicon-arrow-up"></span> $' . number_format($total, 2) . '</td>
    </tr>
    <tr class="success">
        <td colspan="11">La mayor venta fue de $' . number_format($major_sale, 2) . ' hecha por ' . $major_seller . '</td>
    </tr>
    <tr class="warning">
        <td colspan="11">La menor venta fue de $' . number_format($minor_sale, 2) . ' hecha por ' . $minor_seller . '</td>
    </tr>
</tfoot>';

echo $html;
