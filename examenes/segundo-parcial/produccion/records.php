<?php
require_once 'connection.php';
require_once 'results/index.php';

$title = APP_NAME . ' | Historial';

$styles = [
	RESOURCES_PATH . '/css/libs/dataTables.bootstrap.min.css',
    RESOURCES_PATH . '/css/libs/buttons.bootstrap.min.css',
	RESOURCES_PATH . '/css/p.css'
];

$scripts = [
    RESOURCES_PATH . '/js/libs/jszip.min.js',
    RESOURCES_PATH . '/js/libs/pdfmake.min.js',
    RESOURCES_PATH . '/js/libs/vfs_fonts.js',
    RESOURCES_PATH . '/js/libs/dataTables.min.js',
    RESOURCES_PATH . '/js/libs/dataTables.bootstrap.min.js',
    RESOURCES_PATH . '/js/libs/dataTables.buttons.min.js',
    RESOURCES_PATH . '/js/libs/buttons.bootstrap.min.js',
    RESOURCES_PATH . '/js/libs/buttons.html5.min.js',
    RESOURCES_PATH . '/js/p.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/p/records.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
