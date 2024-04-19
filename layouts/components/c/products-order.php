<?php
 
$products = array_reduce($_POST['products'], function ($carry, $item) {
    array_push($carry, unserialize($item));
    return $carry;
}, []);

# Ordenamos el arreglo con los productos seleccionados por el usuario
asort($products);

$_SESSION['products'] = null;
if (isset($_POST['products']) && is_array($_POST['products'])) {
    $_SESSION['products'] = $products;
}

function _print_selects_($id)
{
    $select = '';
    $select .= '<select id="amount-' . $id . '" name="amount-' . $id . '" class="form-control">';
    for ($i = 1; $i <= 50; $i++) {
        $select .= '<option value="' . $i . '">' . $i . '</option>';
    }
    $select .= '</select>';
    return $select;
}

$html .= '<thead>
    <tr class="warning">
        <th colspan="4">Complete su pedido</th>
    </tr>
    <tr class="warning">
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Cantidad</th>
    </tr>
</thead>
<tbody>';

foreach ($products as $key => $product) {
    $html .= '<tr>
        <td>' . $product['name'] . '</td>
        <td>' . $product['description'] . '</td>
        <td>$' . number_format($product['price'], 2)  . '</td>
        <td>' . _print_selects_($product['id']) . '</td>
    </tr>';
}
$html .= '</tbody>';

echo $html;
