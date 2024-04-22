<?php

$response = mysqli_query($connection, 'SELECT * FROM plantas ORDER BY planta_id DESC');

$plants = mysqli_fetch_all($response, MYSQLI_ASSOC);