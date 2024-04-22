<?php
require_once 'connection.php';
require_once 'plants/index.php';

$styles = [
	LAYOUTS_PATH . '/css/p.css'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
include_once PARTIALS_PATH . '/p/container.php';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
