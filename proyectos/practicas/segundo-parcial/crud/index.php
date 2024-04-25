<?php
require_once '../../../globals.php';
require_once 'config.php';
require_once 'connection.php';
require_once 'types/index.php';
require_once 'projects/index.php';

$styles = [
    RESOURCES_URL . '/css/libs/sweetalert2.min.css',
    RESOURCES_URL . '/css/libs/dataTables.bootstrap.min.css',
    RESOURCES_URL . '/css/libs/buttons.bootstrap.min.css',
    RESOURCES_URL . '/css/crud.css'
];

$scripts = [
    RESOURCES_URL . '/js/libs/sweetalert2.min.js',
    RESOURCES_URL . '/js/libs/jszip.min.js',
    RESOURCES_URL . '/js/libs/pdfmake.min.js',
    RESOURCES_URL . '/js/libs/vfs_fonts.js',
    RESOURCES_URL . '/js/libs/dataTables.min.js',
    RESOURCES_URL . '/js/libs/dataTables.bootstrap.min.js',
    RESOURCES_URL . '/js/libs/dataTables.buttons.min.js',
    RESOURCES_URL . '/js/libs/buttons.bootstrap.min.js',
    RESOURCES_URL . '/js/libs/buttons.html5.min.js',
    RESOURCES_URL . '/js/crud.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/crud/index.php';
include_once PARTIALS_PATH . '/crud/create-modal.php';
include_once PARTIALS_PATH . '/crud/edit-modal.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
