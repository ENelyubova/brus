<?php if($pages) : ?>
    <div class="branch-block">
        <div class="item branch__info">
            <div class="heading-before heading-before-white"><?= $pages->title_short; ?></div>
            <h2 class="heading heading-white" data-text="<?= str_replace('<br />', '&#10;', $pages->name_h1); ?>"><?= $pages->title; ?></h2>
            <div class="branch__body"><?= $pages->body; ?></div>
        </div>
        <div class="item branch__img">
            <div class="img-over">
                <?= CHtml::image($pages->getImageUrl(), ''); ?>
            </div>
            <img src="<?= $pages->getIconUrl(); ?>" class="image-abs" href="<?= $pages->getIconUrl(); ?>">
        </div>
    </div>
<?php endif; ?>




