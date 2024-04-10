<div class="col-xs-12 col-sm-8 col-md-9 content-column">
    <div class="small-navbar visible-xs">
        <button type="button" data-toggle="offcanvas" class="btn btn-ghost pull-left"> <i class="fa fa-align-left"> </i></button>
        <h1 class="small-navbar-heading"><a href="index.php">Luis Linares</a></h1>
    </div>
    <div class="grid">
        <div class="row">
            <?php foreach ($projects as $key => $project) : ?>
                <div class="col-xs-12 col-sm-12 col-md-<?= ($rows % 2 == 0 ? '6' : ((($key + 1) == $rows) ? 12 : 6)); ?> masonry-item">
                    <div class="box-masonry">
                        <a href="<?= $project['link']; ?>" class="box-masonry-image with-hover-overlay with-hover-icon">
                            <img src="<?= $project['image']; ?>" alt="" class="img-responsive">
                        </a>
                        <div class="box-masonry-text text-center">
                            <h4><a href="<?= $project['link']; ?>"><?= $project['title']; ?></a></h4>
                            <div class="box-masonry-description">
                                <p><?= $project['description']; ?></p>
                                <a href="<?= $project['link']; ?>"><i class="fa fa-fw fa-eye"></i> Ver</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>