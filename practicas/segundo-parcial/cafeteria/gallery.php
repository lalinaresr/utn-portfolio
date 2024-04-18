<?php
require_once 'config.php';

$title = APP_NAME . ' | Galería';

$styles = [
   LAYOUTS_PATH . '/css/libs/touchTouch.css"',
   LAYOUTS_PATH . '/css/libs/animate.css',
   'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700',
   'https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300',
   LAYOUTS_PATH . '/css/c.css'
];

$scripts = [
   LAYOUTS_PATH . '/js/libs/touchTouch.jquery.js',
   LAYOUTS_PATH . '/js/libs/masonry.js',
   LAYOUTS_PATH . '/js/libs/wow.js',
   LAYOUTS_PATH . '/js/c_gallery.js',
   LAYOUTS_PATH . '/js/c.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/c/gallery.php';
include_once PARTIALS_PATH . '/footer.php';
