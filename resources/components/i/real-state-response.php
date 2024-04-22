<?php
    /**
     * Variable donde se guarda el continente seleccionado por el usuario
     * @var String
     */
    $continent = $_POST['continent'];

    /**
     * Variable donde se guarda los años a pagar seleccionados por el usuario
     * @var int
     */
    $years_to_pay = $_POST['years_to_pay'];

    /**
     * Variable donde se guarda el enganche ingresado por el usuario
     * @var float
     */
    $hitch = $_POST['hitch'];

    /**
     * Variable donde se guarda el sueldo ingresado por el usuario
     * @var float
     */
    $salary = $_POST['salary'];

    /**
     * Variable que contendrá el precio original del inmueble según el continente seleccionado por el usuario
     * @var int
     */
    $original_price = match ($continent) {
        'america' => 500000,
        'asia' => 600000,
        'europa' => 800000,
        'oceania' => 1000000,
        default => 0
    };

    /**
     * Variable que contendrá los intereses sobre el precio original del inmueble según los años seleccionados a pagar por el usuario
     * @var float
     */
    $interests = match ($years_to_pay) {
        '10' => $original_price * 0.015,
        '20' => $original_price * 0.032,
        '30' => $original_price * 0.05,
        default => 0
    };
    
    /**
     * Variable que contiene el 10% del precio original según en donde se encuentra el inmueble
     * @var float
     */
    $extra = $original_price * 0.10;

    /**
     * Variable que contiene el total a pagar sumando los intereses al precio original, pero restando el enganche ingresado por el usuario
     * @var float
     */
    $total = $original_price + ($interests - $hitch);

    /**
     * Variable que contiene el pago mensual que debe dar el usuario dependiendo los años seleccionados para pagar entre el total a deber
     * @var float
     */
    $monthly = $total / ($years_to_pay * 12);

    /**
     * Variable que contiene el 30% del salario que ingresó el usuario
     * @var float
     */
    $salary_30 = $salary * 0.30;
?>

<?php if ($hitch < $extra) : ?>
    <div class="alert alert-danger">
        <strong>¡Aviso!</strong> El enganche no es lo suficiente
    </div>
<?php elseif ($salary_30 > $monthly) : ?>
    <table class="table table-bordered table-condensed table-centered">
        <tr class="i">
            <th colspan="2">Verificar Compra</th>
        </tr>
        <tr>
            <th>Continente</th>
            <td><?= ucfirst($continent); ?></td>
        </tr>
        <tr>
            <th>Costo original</th>
            <td><?= '$' . number_format($original_price, 2); ?></td>
        </tr>
        <tr>
            <th>Años a pagar</th>
            <td><?= $years_to_pay; ?></td>
        </tr>
        <tr>
            <th>Interés</th>
            <td><?= '$' . number_format($interests, 2); ?></td>
        </tr>
        <tr>
            <th>Enganche mínimo</th>
            <td><?= '$' . number_format($extra, 2); ?></td>
        </tr>
        <tr>
            <th>Tu enganche</th>
            <td><?= '$' . number_format($hitch, 2); ?></td>
        </tr>
        <tr>
            <th>Total a pagar</th>
            <td><?= '$' . number_format($total, 2); ?></td>
        </tr>
        <tr>
            <th>Mensualidad</th>
            <td><?= '$' . number_format($monthly, 2); ?></td>
        </tr>
        <tr>
            <th>Sueldo mensual</th>
            <td><?= '$' . number_format($salary, 2); ?></td>
        </tr>
        <tr>
            <th>30% del sueldo mensual</th>
            <td><?= '$' . number_format($salary_30, 2); ?></td>
        </tr>
    </table>
<?php else : ?>
    <div class="alert alert-danger">
        <strong>¡Aviso!</strong> No eres apto para obtener el crédito
    </div>
<?php endif; ?>