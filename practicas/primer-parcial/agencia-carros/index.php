<?php
require_once 'config.php';

$styles = [
   RESOURCES_PATH . '/css/ac.css'
];

include_once PARTIALS_PATH . '/header.php';
include_once PARTIALS_PATH . '/basic/navbar.php';
echo '<div class="container"><div class="row mt-20">';
include_once PARTIALS_PATH . '/ac/form.php';
echo '</div></div>';
include_once PARTIALS_PATH . '/basic/footer.php';
include_once PARTIALS_PATH . '/footer.php';
