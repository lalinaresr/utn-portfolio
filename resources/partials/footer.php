    <script type="text/javascript" src="<?= RESOURCES_URL; ?>/js/libs/jquery.min.js"></script>
    <script type="text/javascript" src="<?= RESOURCES_URL; ?>/js/libs/bootstrap.min.js"></script>
    <?php if (isset($scripts)) : ?>
        <?php foreach ($scripts as $script) : ?>
            <?php if (is_array($script)) : ?>
                <script type="<?= $script['type']; ?>" src="<?= $script['src']; ?>"></script>
            <?php else : ?>
                <script type="text/javascript" src="<?= $script; ?>"></script>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>