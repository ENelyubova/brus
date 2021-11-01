<?php if($pages) : ?>
    <div class="text-wrapper">
    	<div class="main-text">
    	    <div class="main-title"><?= $pages->title; ?></div>
    	    <div class="main-body"><?= $pages->body; ?></div>
    	    <a href="#assortment" class="btn btn-purple">Узнать подробнее</a>
    	    <div class="label"><span class="icon-hand"></span>Наведите курсор</div>
    	</div>
    </div>
    <img src="<?= $pages->getImageUrl(); ?>" class="image" href="<?= $pages->getImageUrl(); ?>">
    <img src="<?= $pages->getIconUrl(); ?>" class="image-hover" href="<?= $pages->getIconUrl(); ?>">
<?php endif; ?>

