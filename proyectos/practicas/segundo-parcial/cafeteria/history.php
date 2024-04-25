<?php
require_once 'config.php';

$title = APP_NAME . ' | Historia';

$styles = [
   RESOURCES_URL . '/css/libs/animate.css',
   'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700',
   'https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300',
   RESOURCES_URL . '/css/c.css'
];

$scripts = [
   RESOURCES_URL . '/js/libs/wow.js',
   RESOURCES_URL . '/js/c.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/c/history.php';
include_once PARTIALS_PATH . '/footer.php';
