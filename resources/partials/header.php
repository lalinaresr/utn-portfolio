<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="<?= constant('APP_AUTHOR'); ?>">
    <title><?= $title ?? constant('APP_NAME'); ?></title>
    <link rel="stylesheet" type="text/css" href="<?= RESOURCES_URL; ?>/css/libs/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= RESOURCES_URL; ?>/css/libs/font-awesome.min.css">
    <?php if (isset($styles)) : ?>
        <?php foreach ($styles as $style) : ?>
            <?php if (is_array($style)) : ?>
                <link rel="stylesheet" type="<?= $style['type']; ?>" href="<?= $style['href']; ?>">
            <?php else : ?>
                <link rel="stylesheet" type="text/css" href="<?= $style; ?>">
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="<?= RESOURCES_URL; ?>/css/styles.css">
</head>

<body <?= $body ?? ''; ?>>