<?php
require_once 'config.php';

$styles = [
   LAYOUTS_PATH . '/css/libs/owl.carousel.css',
   LAYOUTS_PATH . '/css/libs/owl.theme.css',
   LAYOUTS_PATH . '/css/libs/owl.transitions.css',
   LAYOUTS_PATH . '/css/cv.css'
];

$scripts = [
   LAYOUTS_PATH . '/js/libs/owl.carousel.min.js',
   LAYOUTS_PATH . '/js/cv.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/cv/tabs.php';
echo '<div class="container"><div class="row">';
include_once PARTIALS_PATH . '/cv/sidebar.php';
include_once PARTIALS_PATH . '/cv/forms.php';
echo '</div></div>';
include_once PARTIALS_PATH . '/footer.php';
