<?php $images = $pages->photos; ?>
<?php if($pages) : ?>
    <?php if($images): ?>
        <div class="gallery-block">
            <div class="item gallery__info">
                <div>
                    <div class="heading-before"><?= $pages->title_short; ?></div>
                    <h2 class="heading heading-black" data-text="<?= str_replace('<br />', '&#10;', $pages->name_h1); ?>"><?= $pages->title; ?></h2>
                    <div class="gallery__body"><?= $pages->body; ?></div>
                </div>
                <div class="gallery-carousel-thumb slick-slider">
                    <?php foreach ($images as $key => $image) : ?>
                        <div>
                            <div class="gallery-carousel-thumb__item item-img">
                                <img src="<?= $image->getImageUrl(); ?>" class="image-preview" href="<?= $image->getImageUrl(); ?>">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="item gallery__img">
                <div class="gallery-carousel slick-slider">
                    <?php foreach ($images as $key => $image) : ?>
                        <div class="gallery-carousel__item">
                            <img src="<?= $image->getImageUrl(); ?>" class="image-preview" href="<?= $image->getImageUrl(); ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>



