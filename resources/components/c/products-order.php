<?php

# Obtenemos los productos seleccionados por el usuario y los "deserializamos" para poder manejarlos como arreglos associativos
$_SESSION['products'] = array_reduce($_SESSION['products'], function ($carry, $item) {
    array_push($carry, unserialize($item));
    return $carry;
}, []);

# Ordenamos el arreglo con los productos seleccionados por el usuario
asort($_SESSION['products']);

function _print_selects_($id)
{
    $select = '';
    $select .= '<select id="' . $id . '" name="' . $id . '" class="form-control">';
    for ($i = 1; $i <= 50; $i++) {
        $select .= '<option value="' . $i . '">' . $i . '</option>';
    }
    $select .= '</select>';
    
    return $select;
}

$html .= '<tbody>';
foreach ($_SESSION['products'] as $product) {
    $html .= '<tr>
        <td>' . $product['name'] . '</td>
        <td>' . $product['description'] . '</td>
        <td>$' . number_format($product['price'], 2)  . '</td>
        <td>' . _print_selects_($product['id']) . '</td>
    </tr>';
}
$html .= '</tbody>';

echo $html;
