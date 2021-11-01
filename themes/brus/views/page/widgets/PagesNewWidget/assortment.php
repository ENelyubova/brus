<?php if($pages) : ?>
    <div class="heading-before heading-before-white"><?= $pages->title_short; ?></div>
    <h2 class="heading heading-white" data-text="<?= str_replace('<br />', '&#10;', $pages->name_h1); ?>"><?= $pages->title; ?></h2>

    <?php $childPages = $pages->childPages(['condition' => 'status=1', 'order' => 'childPages.order ASC']); ?>
    <div class="assortment-block">
        <?php foreach ($childPages as $key => $data) : ?>
            <div class="item">
                <div class="item-visible">
                    <div class="item-visible-top">
                        <div class="item-title"><?= $data->title; ?></div>
                        <div class="item-short"><?= $data->character; ?></div>
                    </div>
                    <div class="item-visible-bot">
                        <div class="mouse"><span class="icon-mouse"></span>Наведите мышь</div>
                        <span class="icon-plus-1"></span>
                    </div>
                </div>
                <div class="item-hide">
                    <div class="item-hide-info">
                        <div class="item-size"><?= $data->shema; ?></div>
                        <div class="item-table"><?= $data->sertificate; ?></div>  
                        <div class="item-price"><?= $data->price; ?></div>
                        <button class="btn btn-dafault js-modal-show repeat_captha"data-modal="#orderProduct" data-name="<?= $data->title ?>">Купить</button>
                    </div>
                    <?= CHtml::image($data->getImageUrl(), ''); ?>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- <div class="item tezis-1">
            <?php if (Yii::app()->hasModule('contentblock')) : ?>
                <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'tezis1']); ?>
            <?php endif; ?>
        </div>
        <div class="item tezis-2">
            <?php if (Yii::app()->hasModule('contentblock')) : ?>
                <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'tezis2']); ?>
            <?php endif; ?>
        </div> -->
    </div>
<?php endif; ?>

