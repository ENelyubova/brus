<div class="news-box__item">
    <div class="news-box__img">
        <?php if ($data->image): ?>
            <?= CHtml::image($data->getImageUrl(380,230,true), $data->title); ?>
        <?php else : ?>
            <?= CHtml::image(Yii::app()->getTheme()->getAssetsUrl() . '/images/nophoto.jpg',''); ?>
        <?php endif; ?>
    </div>
    <div class="news-box__info">
        <div>
            <div class="news-box__short">
                <div class="news-box__name"><?= $data->title; ?></div>
                <!-- <div class="news-box__date"><?= $data->getDayMonthNews(); ?> <span><?= date("Y", strtotime($data->date)); ?></span></div> -->
            </div>
            <div class="news-box__desc">
                <?= $data->full_text; ?>
            </div>
        </div>
        <div class="news-box__bottom">
            <div class="price">
                <?= $data->short_text; ?>
            </div>
            <button class="btn btn-feed" data-toggle="modal" data-target="#callbackModal">Оставить заявку</button>
        </div>
    </div>
</div>




