<?php
require_once '../connection.php';

if (isset($_POST['id'])) {
    $response = mysqli_query($connection, sprintf("SELECT id FROM projects WHERE id = '%d' LIMIT 1", $_POST['id']));

    if (mysqli_num_rows($response) > 0) {
        mysqli_query($connection, sprintf("UPDATE projects SET deleted_at = '%s' WHERE id = '%d'", date('Y-m-d H:i:s'), $_POST['id']));
        
        echo json_encode(['type' => 'success']);
    }
}