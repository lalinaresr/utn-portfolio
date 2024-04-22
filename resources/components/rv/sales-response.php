<?php
require_once 'data.php';

$_SESSION['sales'] = null;
if (isset($sales) && is_array($sales)) {
    $_SESSION['sales'] = $sales;
}

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

$html .= '<tr bgcolor="#D9534F">';
foreach ($headers as $header) {
    $html .= '<th class="tx-white">' . $header . '</th>';
}
$html .= '</tr>';

for ($i = 0; $i < $rows; $i++) {
    $sales_first_week += $sales[$i]['first_week'];
    $sales_second_week += $sales[$i]['second_week'];
    $sales_third_week += $sales[$i]['third_week'];
    $sales_fourth_week += $sales[$i]['fourth_week'];
    $sales_by_mounth = $sales[$i]['first_week'] + $sales[$i]['second_week'] + $sales[$i]['third_week'] + $sales[$i]['fourth_week'];
    $all_sales += $sales_by_mounth;
    $commissions += ($sales_by_mounth * 0.02);
    $salaries += $sales[$i]['salary'];
    $insurance_money += (($sales[$i]['salary'] + ($sales_by_mounth * 0.02)) * 0.03);
    $total += ($sales_by_mounth + ($sales_by_mounth * 0.02) + $sales[$i]['salary'] +  ((($sales_by_mounth * 0.02) + $sales[$i]['salary']) * 0.03));

    if ($sales_by_mounth > $major_sale) {
        $major_sale = $sales_by_mounth;
        $major_seller = $sales[$i]['name'];
    }

    if ($minor_sale > $sales_by_mounth) {
        $minor_sale = $sales_by_mounth;
        $minor_seller = $sales[$i]['name'];
    }

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
            <td class="info"><span class="glyphicon glyphicon-arrow-left"></span> $' . number_format(($sales_by_mounth + ($sales_by_mounth * 0.02) + $sales[$i]['salary'] + (($sales[$i]['salary'] + ($sales_by_mounth * 0.02)) * 0.03)), 2);
    '</td>
    </tr>';
}

$html .= '<tr class="info">
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
</tr>';

echo $html;
