<?php

/**
 * Variable que contendrá los elementos HTML generados con los resultados que se mostrarán al usuario
 * @var String
 */
$html = '';

$html .= '<tbody>';
foreach ($projects as $key => $project) {
    $html .= '<tr>
        <td>' . $project['type'] . '</td>
        <td>' . $project['name'] . '</td>
        <td>' . substr($project['description'], 0, 70) . '...</td>
        <td>' . $project['created_at'] . '</td>
        <td>
            <button class="btn btn-sm btn-warning btn-edit" data-key="' . $key . '" data-element="' . $project['id'] . '">
                <span class="glyphicon glyphicon-pencil"></span> Editar
            </button>
            <button class="btn btn-sm btn-danger btn-delete" data-key="' . $key . '" data-element="' . $project['id'] . '">
                <span class="glyphicon glyphicon-trash"></span> Eliminar
            </button>
        </td>
    </tr>';
}
$html .= '</tbody>';

echo $html;