<?php
require_once 'connection.php';
require_once 'plants/index.php';

$styles = [
	RESOURCES_URL . '/css/p.css'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/p/index.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
