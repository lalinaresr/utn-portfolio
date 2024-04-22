<?php
    extract($_POST);

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
            ['id' => 'E3', 'name' => 'Tres quesos'],
        ];

        $rows = count($types);

        for ($i = 0; $i < $rows; $i++) {
            if (strcmp($types[$i]['id'], $type) == 0)
                return $types[$i]['name'];
        }
    }

    $final_price = price_by_size($size)  + increment_is_special($type);

    mysqli_query($connection, sprintf("INSERT INTO venta VALUES(NULL, '%s')", $order_date));

    $id = mysqli_insert_id($connection);

    $response = mysqli_query($connection, sprintf("INSERT INTO detalle_venta VALUES('%d', '%s', '%s', '%d', '%d', '%d')", $id, get_type_selected($type), ucfirst(strtolower($size)), $final_price, $amount, (($final_price * $amount) * 1.16)));

    mysqli_close($connection);
?>
<tbody>
    <tr>
        <th>Especialidad</th>
        <td><?= get_type_selected($type); ?></td>
    </tr>
    <tr>
        <th>Tamaño</th>
        <td><?= ucfirst(strtolower($size)); ?></td>
    </tr>
    <tr>
        <th>Precio</th>
        <td><?= '$' . number_format($final_price, 2); ?></td>
    </tr>
    <tr>
        <th>Cantidad</th>
        <td><?= $amount; ?></td>
    </tr>
    <tr>
        <th>Subtotal</th>
        <td><?= '$' . number_format(($final_price * $amount), 2); ?></td>
    </tr>
    <tr>
        <th>IVA %16</th>
        <td><?= '$' . number_format((($final_price * $amount) * 0.16), 2); ?></td>
    </tr>
    <tr>
        <th>Total</th>
        <td><?= '$' . number_format((($final_price * $amount) * 1.16), 2); ?></td>
    </tr>
</tbody>

<?php if ($response) : ?>
    <tfoot>
        <tr class="success">
            <th colspan="2">Su orden fue recibida con éxito (<i><?= $order_date; ?></i>)</th>
        </tr>
    </tfoot>
<?php endif; ?>