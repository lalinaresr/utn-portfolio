<?php

$data = mysqli_query($connection, 'SELECT id, name, slug FROM types WHERE deleted_at IS NULL ORDER BY created_at DESC');

$types = mysqli_fetch_all($data, MYSQLI_ASSOC);