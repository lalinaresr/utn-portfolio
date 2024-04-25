<?php
require_once '../../../../globals.php';
require_once '../../../../helpers.php';
require_once '../config.php';
require_once '../connection.php';

if (count($_POST) > 0) {
    list('element' => $id, 'type' => $type, 'name' => $name, 'description' => $description, 'link' => $link, 'image' => $image) = $_POST;

    $response = mysqli_query($connection, sprintf("SELECT id FROM projects WHERE type_id = '%d' AND name = '%s' AND description = '%s'  LIMIT 1", $type, $name, $description));

    if (mysqli_num_rows($response) == 0) {
        mysqli_query($connection, sprintf("UPDATE projects SET type_id = '%d', name =  '%s', slug = '%s', description = '%s', link = '%s', image = '%s', updated_at  = '%s' WHERE id = '%d'", $type, $name, Str::slug($name), $description, $link, $image, date('Y-m-d H:i:s'), $id));
        
        $find = mysqli_query($connection, sprintf("SELECT p.*, t.name as type FROM projects p LEFT JOIN types t ON t.id = p.type_id WHERE p.id = '%d' LIMIT 1", $id));
        
        $project = mysqli_fetch_assoc($find);

        echo json_encode(['type' => 'success', 'data' => $project]);
    } else {
        echo json_encode(['type' => 'duplicate', 'data' => null]);
    }
}
