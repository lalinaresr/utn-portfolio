<?php
require_once 'config.php';

$styles = [
   RESOURCES_URL . '/css/libs/owl.carousel.css',
   RESOURCES_URL . '/css/libs/owl.theme.css',
   RESOURCES_URL . '/css/libs/owl.transitions.css',
   RESOURCES_URL . '/css/cv.css'
];

$scripts = [
   RESOURCES_URL . '/js/libs/owl.carousel.min.js',
   RESOURCES_URL . '/js/cv.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/cv/index.php';
include_once PARTIALS_PATH . '/footer.php';
