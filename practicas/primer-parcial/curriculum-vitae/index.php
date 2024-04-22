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
include_once PARTIALS_PATH . '/cv/tabs.php';
echo '<div class="container"><div class="row mt-4">';
include_once PARTIALS_PATH . '/cv/sidebar.php';
include_once PARTIALS_PATH . '/cv/forms.php';
echo '</div></div>';
include_once PARTIALS_PATH . '/footer.php';
