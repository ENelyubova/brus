<?php if($pages) : ?>
	<div class="block-flex">
        <div class="main-text">
            <div class="main-title"><?= $pages->title; ?></div>
            <div class="main-body"><?= $pages->body; ?></div>
            <a href="#assortment" class="btn btn-purple">Узнать подробнее</a>
        </div>
            <!-- <img src="<?= $pages->getIconUrl(); ?>" class="image-hover" href="<?= $pages->getIconUrl(); ?>"> -->
    </div>
<?php endif; ?>

