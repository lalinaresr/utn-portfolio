<?php
require_once 'config.php';

$title = APP_NAME . ' | Contacto';

$styles = [
   LAYOUTS_PATH . '/css/libs/animate.css',
   'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700',
   'https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300',
   LAYOUTS_PATH . '/css/c.css'
];

$scripts = [
   'https://maps.googleapis.com/maps/api/js?v=3.exp',
   LAYOUTS_PATH . '/js/libs/wow.js',
   LAYOUTS_PATH . '/js/c_contact.js',
   LAYOUTS_PATH . '/js/c.js'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/c/contact.php';
include_once PARTIALS_PATH . '/footer.php';
