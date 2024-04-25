<?php
require_once 'config.php';

if (count($_POST) == 0) {
	header('Location: ' . APP_URL);
	exit;
}

$title = APP_NAME . ' | Respuesta';

$styles = [
	RESOURCES_PATH . '/css/cv.css'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/cv/response.php';
include_once PARTIALS_PATH . '/footer.php';
