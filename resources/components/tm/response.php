<?php

/**
 * Variable donde se guarda el número ingresado por el usuario
 * @var int
 */
$number = $_POST['number'];

/**
 * Variable que contendrá los elementos HTML generados con los resultados que se mostrarán al usuario
 * @var String
 */
$html = '';

$html .= '<tbody>';
for ($i = 1; $i <= 10; $i++) {
    $html .= '<tr class="' . (($i % 2 == 0) ? 'success' : 'danger') . '">
        <td>' . $i . '</td>
        <td>*</td>
        <td>' . $number . '</td>
        <td>=</td>
        <td>' . ($number * $i) . '</td>
    </tr>';
}
$html .= '</tbody>';

echo $html;
