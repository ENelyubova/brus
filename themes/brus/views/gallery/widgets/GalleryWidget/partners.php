<?php if ($dataProvider->itemCount): ?>
    <?php foreach ($dataProvider->getData() as $data): ?>
        <div class="item ">    
            <?= CHtml::image(
                $data->image->getImageUrl(),
                $data->image->alt,
                [
                    'href' => $data->image->getImageUrl(),
                    'class' => 'gallery-image'
                ]
            ); ?>
        </div>
    <?php endforeach; ?>
<?php endif; ?>