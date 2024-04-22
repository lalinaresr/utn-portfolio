<?php

/**
 * Variable donde se guarda el número ingresado por el usuario
 * @var double
 */
$number = $_POST['number'];

/**
 * Variable que contendrá las filas HTML generadas con los resultados de multiplicación
 * @var String
 */
$html = '';

for ($i = 1; $i <= 10; $i++) {
    $html .= '<tr class="' . (($i % 2 == 0) ? "success" : "danger") . '">
            <td>' . $i . '</td>
            <td>*</td>
            <td>' . $number . '</td>
            <td>=</td>
            <td>' . ($number * $i) . '</td>
        </tr>';
}

echo $html;
