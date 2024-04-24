<?php

# Extraemos los valores enviados mediante el formulario y las asignamos directamente a su respectiva variable
extract($_POST);

# Obtenemos la fecha y hora del pedido
$order_date = date('Y-m-d H:i:s');

function price_by_size(string $size): int
{
    return match ($size) {
        'grande' => 90,
        'mediana' => 70,
        'chica' => 40,
        default => 0,
    };
}

function increment_is_special(string $type): int
{
    $increment = 0;
    if (strrpos($type, 'E') !== false) {
        $increment = 20;
    }
    return $increment;
}

function get_type_selected(string $type): string
{
    $types = [
        ['id' => 'S1', 'name' => 'Hawaiana'],
        ['id' => 'S2', 'name' => 'Pepperoni'],
        ['id' => 'S3', 'name' => 'Carnes frías'],
        ['id' => 'E1', 'name' => 'Mexicana'],
        ['id' => 'E2', 'name' => 'Suprema'],
        ['id' => 'E3', 'name' => 'Tres quesos']
    ];

    foreach ($types as $item) {
        if ($item['id'] == $type) {
            return $item['name'];
            break;
        }
    }
}

$final_price = price_by_size($size)  + increment_is_special($type);

mysqli_query($connection, sprintf("INSERT INTO venta VALUES(NULL, '%s')", $order_date));

$id = mysqli_insert_id($connection);

$response = mysqli_query($connection, sprintf("INSERT INTO detalle_venta VALUES('%d', '%s', '%s', '%d', '%d', '%d')", $id, get_type_selected($type), ucfirst(strtolower($size)), $final_price, $amount, (($final_price * $amount) * 1.16)));

if ($response) {
    $message = 'Su orden fue recibida con éxito (<i> ' . $order_date . '</i>)';
}

echo '<tbody>
    <tr>
        <th>Especialidad</th>
        <td>' . get_type_selected($type) . '</td>
    </tr>
    <tr>
        <th>Tamaño</th>
        <td>' . ucfirst(strtolower($size)) . '</td>
    </tr>
    <tr>
        <th>Precio</th>
        <td>$' . number_format($final_price, 2) . '</td>
    </tr>
    <tr>
        <th>Cantidad</th>
        <td>' . $amount . '</td>
    </tr>
    <tr>
        <th>Subtotal</th>
        <td>$' . number_format(($final_price * $amount), 2) . '</td>
    </tr>
    <tr>
        <th>IVA %16</th>
        <td>$' . number_format((($final_price * $amount) * 0.16), 2) . '</td>
    </tr>
    <tr>
        <th>Total</th>
        <td>$' . number_format((($final_price * $amount) * 1.16), 2) . '</td>
    </tr>
</tbody>
<tfoot>
    <tr class="success">
        <th colspan="2">' . $message . '</th>
    </tr>
</tfoot>';
