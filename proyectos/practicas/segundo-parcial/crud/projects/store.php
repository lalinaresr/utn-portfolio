<?php
require_once '../connection.php';

if (count($_POST) > 0) {
    list('type' => $type, 'name' => $name, 'description' => $description, 'link' => $link, 'image' => $image) = $_POST;

    $response = mysqli_query($connection, sprintf("SELECT id FROM projects WHERE type_id = '%d' AND name = '%s' AND description = '%s' AND created_at IS NOT NULL LIMIT 1", $type, $name, $description));

    if (mysqli_num_rows($response) == 0) {
        mysqli_query($connection, sprintf("INSERT INTO projects VALUES (NULL, '%d', '%s', '%s', '%s', '%s', '%s', '%s', NULL, NULL)", $type, $name, strtolower($name), $description, $link, $image, date('Y-m-d H:i:s')));

        $id = mysqli_insert_id($connection);

        $find = mysqli_query($connection, sprintf("SELECT p.*, t.name as type FROM projects p LEFT JOIN types t ON t.id = p.type_id WHERE p.id = '%d' LIMIT 1", $id));

        $project = mysqli_fetch_assoc($find);

        echo json_encode(['type' => 'success', 'data' => $project]);
    } else {
        echo json_encode(['type' => 'duplicate', 'data' => null]);
    }
}
