<?php

/**
 * Variable donde se almacena el nombre completo de quien llene el formulario de datos personales
 * @var String
 */
$fullname = $_POST['fullname'];

/**
 * Variable donde se almacena la fecha de nacimiento de quien llene el formulario de datos personales
 * @var Date
 */
$birthday = $_POST['birthday'];

/**
 * Variable donde se almacena la direccion de quien llene el formulario de datos personales
 * @var String
 */
$address = $_POST['address'];

/**
 * Variable donde se almacena el sexo de quien llene el formulario de datos personales
 * @var char
 */
$sex = $_POST['sex'];

/**
 * Variable donde se almacena el numero de telefono de quien llene el formulario de datos personales
 * @var int
 */
$phone = $_POST['phone'];

/**
 * Variable donde se almacena el correo electronico de quien llene el formulario de datos personales
 * @var [type]
 */
$email = $_POST['email'];

echo '<tr><th class="text-center" colspan="2">Información personal</th></tr>
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