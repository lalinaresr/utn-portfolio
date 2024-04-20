<?php
require_once 'connection.php';
require_once 'types/index.php';
require_once 'projects/index.php';

$styles = [
    LAYOUTS_PATH . '/css/libs/sweetalert2.min.css',
    LAYOUTS_PATH . '/css/libs/dataTables.bootstrap.min.css',
    LAYOUTS_PATH . '/css/libs/buttons.bootstrap.min.css',
    LAYOUTS_PATH . '/css/crud.css'
];

$scripts = [
    LAYOUTS_PATH . '/js/libs/sweetalert2.min.js',
    LAYOUTS_PATH . '/js/libs/jszip.min.js',
    LAYOUTS_PATH . '/js/libs/pdfmake.min.js',
    LAYOUTS_PATH . '/js/libs/vfs_fonts.js',
    LAYOUTS_PATH . '/js/libs/dataTables.min.js',
    LAYOUTS_PATH . '/js/libs/dataTables.bootstrap.min.js',
    LAYOUTS_PATH . '/js/libs/dataTables.buttons.min.js',
    LAYOUTS_PATH . '/js/libs/buttons.bootstrap.min.js',
    LAYOUTS_PATH . '/js/libs/buttons.html5.min.js',
    LAYOUTS_PATH . '/js/crud.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/crud/index.php';
include_once PARTIALS_PATH . '/crud/create.php';
include_once PARTIALS_PATH . '/crud/edit.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
