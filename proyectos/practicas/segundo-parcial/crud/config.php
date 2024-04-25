<?php

date_default_timezone_set('America/Mexico_City');

const APP_NAME = 'CRUD';

const APP_AUTHOR = 'Luis Linarez <dev.lalinaresr@gmail.com>';

define('CONNECTION', [
    'HOSTNAME' => 'localhost',
    'USERNAME' => 'root',
    'PASSWORD' => '',
    'DATABASE' => 'crud',
    'PORT' => null,
    'SOCKET' => null
]);

const SITE_URL = 'http://127.0.0.1:8000';

const APP_URL = SITE_URL . '/proyectos/practicas/segundo-parcial/crud';

const RESOURCES_PATH = SITE_URL . '/resources';

const PARTIALS_PATH = '../../../../resources/partials';

const COMPONENTS_PATH = '../../../../resources/components';