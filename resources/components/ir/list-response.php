<?php

/**
 * Variable donde se almacena un listado de productos con datos en común como el id, nombre, existencias y pedido
 * @var Array[]
 */
$list = [
    ['id' => 1, 'name' => 'Bujías', 'stock' => rand(1, 100), 'order' => rand(1, 100)],
    ['id' => 2, 'name' => 'Balatas', 'stock' => rand(1, 100), 'order' => rand(1, 100)],
    ['id' => 3, 'name' => 'Filtros', 'stock' => rand(1, 100), 'order' => rand(1, 100)],
    ['id' => 4, 'name' => 'Aceites', 'stock' => rand(1, 100), 'order' => rand(1, 100)],
    ['id' => 5, 'name' => 'Anticongelante', 'stock' => rand(1, 100), 'order' => rand(1, 100)]
];

/**
 * Variable que contiene el número de elementos que tiene la lista
 * @var int
 */
$rows = count($list);

/**
 * Variable que contendrá los elementos HTML generados con los resultados que se mostrarán al usuario
 * @var String
 */
$html = '';

/**
 * Función donde se obtendrá el color de cada fila según la comparación del pedido y el stock
 * @param int $stock contiene el número de existencias de cada producto
 * @param int $order contiene el número de productos pedidos por el usuario
 * @return string el color de cada fila según la comparación del pedido y el stock
 */
function _set_color_(int $stock, int $order): string
{
    $type = '';
    if (($order + 6) <= $stock) {
        $type = 'success';
    } else if (($order - 6) >= $stock) {
        $type = 'danger';
    } else if (in_array($stock, range(($order - 5), $order + 5))) {
        $type = 'warning';
    }
    return $type;
}

for ($i = 0; $i < $rows; $i++) {
    $html .= '<tr class="' . _set_color_($list[$i]['stock'], $list[$i]['order'])  . '">
        <td>' . $list[$i]['id'] . '</td>
        <td>' . $list[$i]['name'] . '</td>
        <td>' . $list[$i]['stock'] . '</td>
        <td>' . $list[$i]['order'] . '</td>
    </tr>';
}

echo $html;
