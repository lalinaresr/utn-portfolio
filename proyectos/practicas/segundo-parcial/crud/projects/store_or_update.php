<?php
require_once '../../../../globals.php';
require_once '../../../../helpers.php';
require_once '../config.php';
require_once '../connection.php';

if (count($_POST) > 0) {
    list('element' => $id, 'type' => $type, 'name' => $name, 'description' => $description, 'link' => $link, 'image' => $image) = $_POST;

    mysqli_query($connection, sprintf("INSERT INTO projects VALUES ('%d', '%d', '%s', '%s', '%s', '%s', '%s', '%s', NULL, NULL) ON DUPLICATE KEY UPDATE type_id = '%d', name = '%s', slug = '%s', description = '%s', link = '%s', image = '%s', updated_at = '%d'", $id, $type, $name, Str::slug($name), $description, $link, $image, date('Y-m-d H:i:s'), $type, $name, Str::slug($name), $description, $link, $image, date('Y-m-d H:i:s')));

    $find = mysqli_query($connection, sprintf("SELECT p.*, t.name as type FROM projects p LEFT JOIN types t ON t.id = p.type_id WHERE p.id = '%d' LIMIT 1", (mysqli_insert_id($connection) ?? $id)));

    $project = mysqli_fetch_assoc($find);

    echo json_encode(['type' => 'success', 'data' => $project]);
}
