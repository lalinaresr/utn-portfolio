<?php

$_SESSION['amounts'] = null;
if (isset($_POST['products-order']) && count($_POST) > 0) {
    $_SESSION['amounts'] = $_POST;
}

# Ordenamos el arreglo con los productos seleccionados por el usuario
asort($_SESSION['products']);

$amount = $total = 0;

$html .= '<thead>
<tr class="warning">
    <th colspan="5">Verifique su compra e imprima su ticket</th>
</tr>
<tr class="warning">
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Precio</th>
    <th>Cantidad</th>
    <th>Subtotal</th>
</tr>
</thead>
<tbody>';

foreach ($_SESSION['products'] as $key => $product) {
    $amount_by_product = $_POST['amount-' . $product['id']];

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
