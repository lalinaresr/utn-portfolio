<?php

date_default_timezone_set('America/Mexico_City');

const APP_NAME = 'Pizzería';

const APP_AUTHOR = 'Luis Linarez <dev.lalinaresr@gmail.com>';

define('CONNECTION', [
    'HOSTNAME' => 'localhost',
    'USERNAME' => 'root',
    'PASSWORD' => '',
    'DATABASE' => 'pizzeria',
    'PORT' => null,
    'SOCKET' => null
]);

const SITE_URL = 'http://127.0.0.1:8000';

const APP_URL = SITE_URL . '/examenes/segundo-parcial/pizzeria/';

const LAYOUTS_PATH = SITE_URL . '/layouts';