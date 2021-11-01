<?php if($pages) : ?>
    <div class="heading-before"><?= $pages->title_short; ?></div>
    <h2 class="heading heading-black" data-text="<?= str_replace('<br />', '&#10;', $pages->name_h1); ?>"><?= $pages->title; ?></h2>

    <?php $childPages = $pages->childPages(['condition' => 'status=1', 'order' => 'childPages.order ASC']); ?>
    <div class="product-wrapper">
        <div class="product-arrow"></div>
        <div class="product-carousel-wrapper">
            <div class="product-carousel slick-slider">
                <?php foreach ($childPages as $key => $data) : ?>
                    <div>
                        <div class="product-carousel__item">
                            <div class="slide-num">
                                <?php echo sprintf("%02d", $key + 1); ?>
                            </div>
                                <div class="slide-icon">
                                    <div class="slide-icon_wrap">
                                        <?= $data->svg1; ?>
                                        <!-- <?= $data->svg2; ?> -->
                                    </div>
                                    <?= CHtml::image($data->getImageUrl(), ''); ?>
                                </div>
                            <div class="slide-content">
                                <div class="slide-title"><?= $data->title; ?></div>
                                <div class="slide-subtitle"><?= $data->title_short; ?></div>
                                <div class="slide-hover">
                                    <div class="slide-short"><?= $data->body; ?></div>
                                    <div class="slide-price"><?= $data->price; ?></div>
                                    <button class="btn btn-dafault js-modal-show repeat_captha" data-modal="#orderProduct" data-name="<?= $data->title ?>">Сделать заказ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php endif; ?>