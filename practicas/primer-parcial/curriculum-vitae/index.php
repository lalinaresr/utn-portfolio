<?php
require_once 'config.php';

$styles = [
   RESOURCES_PATH . '/css/libs/owl.carousel.css',
   RESOURCES_PATH . '/css/libs/owl.theme.css',
   RESOURCES_PATH . '/css/libs/owl.transitions.css',
   RESOURCES_PATH . '/css/cv.css'
];

$scripts = [
   RESOURCES_PATH . '/js/libs/owl.carousel.min.js',
   RESOURCES_PATH . '/js/cv.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/cv/index.php';
include_once PARTIALS_PATH . '/footer.php';
