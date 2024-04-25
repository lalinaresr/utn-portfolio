<?php

/**
 * Variable donde se guarda el tipo de producto seleccionado por el usuario
 * @var String
 */
$type = $_POST['type'];

/**
 * Variable donde se guarda la marca seleccionada por el usuario
 * @var String
 */
$brand = $_POST['brand'];

/**
 * Variable donde se guarda la cantidad seleccionada por el usuario
 * @var int
 */
$amount = $_POST['amount'];

/**
 * Función donde se calcula el precio del producto según el tipo seleccionado
 * @param string $type contiene el tipo de producto seleccionado por el usuario
 * @return int el precio según el tipo de producto
 */
function price_by_type(string $type): int
{
    return match ($type) {
        'pants' => 700,
        'tenis' => 800,
        'playera' => 200,
        'short' => 150,
        default => 0
    };
}

/**
 * Función donde se calcula el porcentaje extra dependiendo la marca seleccionada
 * @param string $brand contiene la marca seleccionada por el usuario
 * @return float el porcentaje extra dependiendo la marca
 */
function percentage_by_brand(string $brand): float
{
    return match ($brand) {
        'puma' => 1.1,
        'nike' => 1.15,
        'reebok' => 1.2,
        'adidas' => 1.25,
        default => 0
    };
}

/**
 * Función en la que se obtiene el numero total de productos a pagar dependiendo la cantidad ingresada
 * @param string $amount contiene la cantidad ingresada por el usuario
 * @return float la cantidad final de productos a pagar
 */
function even_or_odd(int $amount): float
{
    if ($amount == 1) {
        return 1;
    }
    return (($amount * 0.75) + ($amount % 2 == 0 ? 0 : 1));
}

/**
 * Variable donde se guardará el precio del producto por la cantidad más el porcentaje extra según la marca
 * @var float
 * ((200 * 1.1) * 9) = 1980
 */
$subtotal = ((price_by_type($type) * percentage_by_brand($brand)) * $amount);

/**
 * Variable donde se guardará el precio del producto por la cantidad final más el porcentaje extra según la marca
 * @var float
 * ((200 * 1.1) * 7.75) = 1705
 */
$descuento = ((price_by_type($type) * percentage_by_brand($brand)) * even_or_odd($amount, $type));

echo '<tbody>
    <tr>
        <td colspan="2">
            <img src="' . RESOURCES_URL . "/images/td/{$brand}.png" . '" class="img-responsive center-block" width="40%" title="' . $brand . '">
        </td>
    </tr>
    <tr>
        <th>Marca</th>
        <td>' . ucfirst(strtolower($brand)) . '</td>
    </tr>
    <tr>
        <th>Precio</th>
        <td>$' . number_format(price_by_type($type), 2) . '</td>
    </tr>
    <tr>
        <th>Cantidad</th>
        <td>' . $amount . '</td>
    </tr>
    <tr>
        <th>Subtotal</th>
        <td>$' . number_format($subtotal, 2) . '</td>
    </tr>
    <tr>
        <th>Descuento</th>
        <td>$' . number_format(($subtotal - $descuento), 2) . '</td>
    </tr>
    <tr>
        <th>Total</th>
        <td>$' . number_format($descuento, 2) . '</td>
    </tr>
</tbody>';
