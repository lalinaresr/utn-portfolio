<?php

/**
 * Variable donde se almacena la información del primer trabajo de quien llene el formulario de experiencia
 * @var String
 */
$first_job = $_POST['first_job'];

/**
 * Variable donde se almacena la información del último trabajo de quien llene el formulario de experiencia
 * @var String
 */
$last_job = $_POST['last_job'];

/**
 * Variable donde se almacenan los valores de conocimientos de quien llene el formulario de experiencia
 * @var String[]
 */
$knowledges = $_POST['knowledges'];

echo '<tr><th class="text-center" colspan="2">Experiencia</th></tr>
<tr>
    <th>Primer Trabajo</th>
    <td>' . $first_job . '</td>
</tr>
<tr>
    <th>Segundo Trabajo</th>
    <td>' . $last_job . '</td>
</tr>
<tr>
    <th>Conocimientos</th>
    <td>' . implode(', ', $knowledges) . '</td>
</tr>';
