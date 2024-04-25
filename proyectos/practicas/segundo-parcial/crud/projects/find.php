<?php
require_once '../../../../globals.php';
require_once '../config.php';
require_once '../connection.php';

if (isset($_POST['id'])) {
    $response = mysqli_query($connection, sprintf("SELECT * FROM projects WHERE id = '%d' LIMIT 1", $_POST['id']));
    
    if (mysqli_num_rows($response) > 0) {
        $project = mysqli_fetch_assoc($response);
        
        echo json_encode(['data' => $project]);
    }
}