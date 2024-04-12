<?php

/**
 * Variable donde se almacena el bachillerato de quien llene el formulario de educacion
 * @var String
 */
$preparatory = $_POST['preparatory'];

/**
 * Variable donde se almacena el nivel superior de quien llene el formulario de educacion
 * @var String
 */
$university = $_POST['university'];

/**
 * Variable donde se almacenan los valores de cursos de quien llene el formulario de educacion
 * @var String[]
 */
$courses = $_POST['courses'];

echo '<tr><th class="text-center" colspan="2">Educación</th></tr>
<tr>
    <th>Preparatoria</th>
    <td>' . $preparatory . '</td>
</tr>
<tr>
    <th>Universidad</th>
    <td>' . $university . '</td>
</tr>
<tr>
    <th>Cursos</th>
    <td>' . implode(', ', $courses) . '</td>
</tr>';
