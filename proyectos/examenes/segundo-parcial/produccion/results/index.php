<?php

$response = mysqli_query($connection, 'SELECT * FROM resultados ORDER BY resultado_id DESC');

$records = mysqli_fetch_all($response, MYSQLI_ASSOC);