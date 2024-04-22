<?php

/**
 * Variable donde se almacena el modelo del auto que haya seleccionado el usuario
 * @var String
 */
$model = $_POST['model'];

/**
 * Variable donde se almacena el color del auto que haya seleccionado el usuario
 * @var String
 */
$color = $_POST['color'];

/**
 * Variable donde se almacena la versión del auto que haya seleccionado el usuario
 * @var String
 */
$version = $_POST['version'];

/**
 * Variable donde se almacena el plan de pago que haya seleccionado el usuario
 * @var String
 */
$payment_plan = $_POST['payment_plan'];

/**
 * Función donde se obtendrá el precio del auto según el modelo seleccionado
 * @param string $model contiene el modelo seleccionado por el usuario
 * @return int el precio según el modelo del auto
 */
function price_by_model(string $model): int
{
    return match ($model) {
        'M2' => 250000,
        'M3' => 320000,
        'M5' => 400000,
        'M6' => 500000,
        'CXR' => 700000,
        default => 0
    };
}

/**
 * Función donde se obtiene el valor con un costo extra en caso de ser un auto equipado (5%) o de lujo (10%)
 * @param string $version contiene la versión del auto seleccionado
 * @param string $model contiene el modelo del auto seleccionado
 * @return float el valor del auto ya con el porcentaje adicional
 */
function total_by_version(string $version, string $model): float
{
    return match ($version) {
        'equipado' => price_by_model($model) * 1.05,
        'lujo' => price_by_model($model) * 1.1,
        default => price_by_model($model)
    };
}

/**
 * Función donde se suma un porcentaje adicional sobre el monto original mas el porcentaje dependiendo su versión
 * @param string $payment_plan contiene el plan de pago que seleccionó el usuario
 * @param string $version contiene la versión del auto seleccionado
 * @param string $model contiene el modelo del auto seleccionado
 * @return float el valor final de pago ya con los porcentajes dependiendo el tiempo a pagar
 */
function total_by_plan(string $payment_plan, string $version, string $model): float
{
    return match ($payment_plan) {
        '12' => total_by_version($version, $model) * 1.025,
        '24' => total_by_version($version, $model) * 1.032,
        '36' => total_by_version($version, $model) * 1.04,
        '48' => total_by_version($version, $model) * 1.052,
        default => 0,
    };
}

echo '<tbody>
    <tr>
        <td colspan="2">
            <img src="' . RESOURCES_PATH . "/images/ac/{$model}.jpg" . '" class="img-responsive center-block" width="40%" title="' . $model . '">
        </td>
    </tr>
    <tr>
        <th>Modelo</th>
        <td>' . $model . '</td>
    </tr>
    <tr>
        <th>Color</th>
        <td>' . ucfirst(strtolower($color)) . '</td>
    </tr>
    <tr>
        <th>Versión</th>
        <td>' . ucfirst(strtolower($version)) . '</td>
    </tr>
    <tr>
        <th>Forma de pago</th>
        <td>' . ($payment_plan == 0 ? 'De contado' : 'A ' . $payment_plan . ' meses') . '</td>
    </tr>
    <tr>
        <th>Total a pagar</th>
        <td>$' . number_format(($payment_plan == 0) ? total_by_version($version, $model) : total_by_plan($payment_plan, $version, $model), 2) . '</td>
    </tr>
    <tr>
        <th>Mensualidad</th>
        <td>$' . number_format((($payment_plan == 0) ? '0' : total_by_plan($payment_plan, $version, $model) / $payment_plan), 2) . '</td>
    </tr>
    <tr>
        <th>Enganche</th>
        <td>$' . number_format((($payment_plan == 0) ? '0' : total_by_plan($payment_plan, $version, $model) * 1.2), 2) . '</td>
    </tr>
</tbody>';
