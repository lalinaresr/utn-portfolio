<?php
require_once 'connection.php';
require_once 'types/index.php';
require_once 'projects/index.php';

$styles = [
    RESOURCES_PATH . '/css/libs/sweetalert2.min.css',
    RESOURCES_PATH . '/css/libs/dataTables.bootstrap.min.css',
    RESOURCES_PATH . '/css/libs/buttons.bootstrap.min.css',
    RESOURCES_PATH . '/css/crud.css'
];

$scripts = [
    RESOURCES_PATH . '/js/libs/sweetalert2.min.js',
    RESOURCES_PATH . '/js/libs/jszip.min.js',
    RESOURCES_PATH . '/js/libs/pdfmake.min.js',
    RESOURCES_PATH . '/js/libs/vfs_fonts.js',
    RESOURCES_PATH . '/js/libs/dataTables.min.js',
    RESOURCES_PATH . '/js/libs/dataTables.bootstrap.min.js',
    RESOURCES_PATH . '/js/libs/dataTables.buttons.min.js',
    RESOURCES_PATH . '/js/libs/buttons.bootstrap.min.js',
    RESOURCES_PATH . '/js/libs/buttons.html5.min.js',
    RESOURCES_PATH . '/js/crud.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/crud/index.php';
include_once PARTIALS_PATH . '/crud/create-modal.php';
include_once PARTIALS_PATH . '/crud/edit-modal.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
