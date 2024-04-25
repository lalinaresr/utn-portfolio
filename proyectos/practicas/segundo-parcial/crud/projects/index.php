<?php

$data = mysqli_query($connection, 'SELECT p.*, t.name as type FROM projects p LEFT JOIN types t ON t.id = p.type_id WHERE p.deleted_at IS NULL ORDER BY p.created_at DESC');

$projects = mysqli_fetch_all($data, MYSQLI_ASSOC);