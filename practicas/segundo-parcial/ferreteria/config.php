<?php

date_default_timezone_set('America/Mexico_City');

const APP_NAME = 'Ferretería';

const APP_AUTHOR = 'Luis Linarez <dev.lalinaresr@gmail.com>';

define('CONNECTION', [
    'HOSTNAME' => 'localhost',
    'USERNAME' => 'root',
    'PASSWORD' => '',
    'DATABASE' => 'ferreteria',
    'PORT' => null,
    'SOCKET' => null
]);

const SITE_URL = 'http://127.0.0.1:8000';

const APP_URL = SITE_URL . '/practicas/segundo-parcial/ferreteria/';

const LAYOUTS_PATH = SITE_URL . '/layouts';

const IMAGES_PATH = '../../../layouts/images';

const LIBRARIES_PATH = '../../../layouts/libraries';