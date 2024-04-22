<?php
require_once 'config.php';

$title = APP_NAME . ' | Mostrar Datos';

$styles = [
	RESOURCES_PATH . '/css/cv.css'
];

$scripts = [
	RESOURCES_PATH . '/js/cv.js'
];

include_once PARTIALS_PATH . '/header.php';
echo '<div class="container"><div class="row">';
include_once PARTIALS_PATH . '/cv/response.php';
echo '</div></div>';
include_once PARTIALS_PATH . '/footer.php';
