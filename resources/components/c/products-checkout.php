<?php

# Ordenamos el arreglo con los productos seleccionados por el usuario
asort($_SESSION['products']);

$amount = $total = 0;

$html .= '<tbody>';
foreach ($_SESSION['products'] as $product) {
    $amount_by_product = $_SESSION['amounts'][$product['id']];
    $amount += $amount_by_product;
    $total += ($amount_by_product * $product['price']);

    $html .= '<tr>
        <td>' . $product['name'] . '</td>
        <td>' . $product['description'] . '</td>
        <td>$' . number_format($product['price'], 2)  . '</td>
        <td>' . $amount_by_product . '</td>
        <td>$' . number_format(($amount_by_product * $product['price']), 2) . '</td>
    </tr>';
}
$html .= '</tbody><tfoot><tr class="warning"><th colspan="3">Totales</th><th>' . $amount  . '</th><th>$' . number_format($total, 2)  . '</th></tr></tfoot>';

echo $html;
