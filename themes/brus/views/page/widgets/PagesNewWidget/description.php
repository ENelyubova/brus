<?php if($pages) : ?>
    <div class="heading-before"><?= $pages->title_short; ?></div>
    <h2 class="heading heading-black" data-text="<?= str_replace('<br />', '&#10;', $pages->name_h1); ?>"><?= $pages->title; ?></h2>
    <div class="description-block">
        <div class="item description__img">
            <div class="img-over">
                <?= CHtml::image($pages->getImageUrl(), ''); ?>
            </div>
            <?= CHtml::image($pages->getIconUrl(), ''); ?>
        </div>
        <div class="item description__info">
            <div class="description__title"><?= $pages->desc_img; ?></div>
            <div class="description__body"><?= $pages->body_short; ?></div>
            <div class="description__advant"><?= $pages->body; ?></div>
        </div>
    </div>
<?php endif; ?>




