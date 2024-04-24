<?php

/**
 * Variable donde se almacena el primer número que haya ingresado el usuario
 * @var double
 */
$first = $_POST['first'];

/**
 * Variable donde se almacena el segundo número que haya ingresado el usuario
 * @var double
 */
$second = $_POST['second'];

/**
 * Variable donde se almacenará un texto informando cual es el valor numérico más grande ingresado por el usuario
 * @var string
 */
$major_number = '';

if ($first > $second) {
    $major_number = 'El primer valor ' . $first . ' es mayor al segundo ' . $second;    
} else if ($second > $first) {
    $major_number = 'El segundo valor ' . $second . ' es mayor al primero ' . $first;
} else if ($first == $second) {
    $major_number = 'Ambos números tienen el mismo valor';
}

echo '<tbody>
    <tr>
        <td>' . $first . '</td>
        <td>+</td>
        <td>' . $second . '</td>
        <td>=</td>
        <td>' . number_format(($first + $second), 2) . '</td>
    </tr>
    <tr>
        <td>' . $first . '</td>
        <td>-</td>
        <td>' . $second . '</td>
        <td>=</td>
        <td>' . number_format(($first - $second), 2) . '</td>
    </tr>
    <tr>
        <td>' . $first . '</td>
        <td>*</td>
        <td>' . $second . '</td>
        <td>=</td>
        <td>' . number_format(($first * $second), 2) . '</td>
    </tr>
    <tr>
        <td>' . $first . '</td>
        <td>/</td>
        <td>' . $second . '</td>
        <td>=</td>
        <td>' . number_format(($first / $second), 2) . '</td>
    </tr>
    <tr>
        <td>' . $first . '</td>
        <td>%</td>
        <td>' . $second . '</td>
        <td>=</td>
        <td>' . number_format(($first % $second), 2) . '</td>
    </tr>
    <tr>
        <td>' . $first . '</td>
        <td>^</td>
        <td>' . $second . '</td>
        <td>=</td>
        <td>' . number_format(($first ** $second), 2) . '</td>
    </tr>
    <tr>
        <td>' . $first . '</td>
        <td>+</td>
        <td>1</td>
        <td>=</td>
        <td>' . number_format(($first + 1), 2) . '</td>
    </tr>
    <tr>
        <td>' . $second . '</td>
        <td>+</td>
        <td>1</td>
        <td>=</td>
        <td>' . number_format(($second + 1), 2) . '</td>
    </tr>
    <tr>
        <td>' . $first . '</td>
        <td>-</td>
        <td>1</td>
        <td>=</td>
        <td>' . number_format(($first - 1), 2) . '</td>
    </tr>
    <tr>
        <td>' . $second . '</td>
        <td>-</td>
        <td>1</td>
        <td>=</td>
        <td>' . number_format(($second - 1), 2) . '</td>
    </tr>
</tbody>
<tfoot>
    <tr class="info">
        <th colspan="5">' . $major_number . '</th>
    </tr>
<tfoot>';
