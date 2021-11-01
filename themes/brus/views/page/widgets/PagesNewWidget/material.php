<?php if($pages) : ?>
    <div class="material-block">
        <div class="item material__img">
            <img src="<?= $pages->getIconUrl(); ?>" class="image-abs" href="<?= $pages->getIconUrl(); ?>">
            <div class="img-over">
                <img src="<?= $pages->getImageUrl(); ?>" class="image-preview" href="<?= $pages->getImageUrl(); ?>">
            </div>
        </div>
        <div class="item material__info">
            <div class="heading-before"><?= $pages->title_short; ?></div>
            <h2 class="heading heading-black" data-text="<?= str_replace('<br />', '&#10;', $pages->name_h1); ?>"><?= $pages->title; ?></h2>
            <div class="material__body"><?= $pages->body; ?></div>
            <div class="material__advant"><?= $pages->body_short; ?></div>
        </div>
    </div>
<?php endif; ?>




