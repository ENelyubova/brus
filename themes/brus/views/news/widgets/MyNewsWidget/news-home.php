<div class="news-box">
    <?php foreach ($models as $key => $model): ?>
        <?php Yii::app()->controller->renderPartial('//news/news/_item', ['data' => $model]) ?>
    <?php endforeach; ?>
</div>
<div class="news-box-btn">
	<a class="btn btn-all" href="">Показать <strong>все программы</strong></a>
</div>



