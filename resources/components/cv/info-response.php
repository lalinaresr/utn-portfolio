<?php

/**
 * Variable donde se almacena el nombre completo de quien llene el formulario de información personal
 * @var String
 */
$fullname = $_POST['fullname'];

/**
 * Variable donde se almacena la fecha de nacimiento de quien llene el formulario de información personal
 * @var Date
 */
$birthday = $_POST['birthday'];

/**
 * Variable donde se almacena la dirección de quien llene el formulario de información personal
 * @var String
 */
$address = $_POST['address'];

/**
 * Variable donde se almacena el sexo de quien llene el formulario de información personal
 * @var char
 */
$sex = $_POST['sex'];

/**
 * Variable donde se almacena el numero de teléfono de quien llene el formulario de información personal
 * @var int
 */
$phone = $_POST['phone'];

/**
 * Variable donde se almacena el correo electrónico de quien llene el formulario de información personal
 * @var String
 */
$email = $_POST['email'];

echo '<tr><th colspan="2">Información personal</th></tr>
<tr>
    <th>Nombre completo</th>
    <td>' . $fullname . '</td>
</tr>
<tr>
    <th>Fecha de nacimiento</th>
    <td>' . $birthday . '</td>
</tr>
<tr>
    <th>Dirección</th>
    <td>' . $address . '</td>
</tr>
<tr>
    <th>Sexo</th>
    <td>' . ($sex == 'M' ? 'Masculino' : 'Femenino') . '</td>
</tr>
<tr>
    <th>Teléfono</th>
    <td>' . $phone . '</td>
</tr>
<tr>
    <th>Correo electrónico</th>
    <td>' . $email . '</td>
</tr>';