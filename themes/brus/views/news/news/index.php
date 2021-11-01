<?php
$this->title = Yii::t('NewsModule.news', 'Пресс-центр');
$this->breadcrumbs = [Yii::t('NewsModule.news', 'Пресс-центр')];
?>

<div class="page-txt page-news content-site">
	<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', [
            'links' => $this->breadcrumbs,
    ]); ?>
	<h2><?= Yii::t('NewsModule.news', 'Пресс-центр') ?></h2>
	<?php $this->widget(
	    'bootstrap.widgets.TbListView',
	    [
	        'dataProvider' => $dataProvider,
	        'id' => 'news-box',
	        'itemView' => '_item',
	        'summaryText' => '',
	        'template'=>'{items} {pager}',
	        'itemsCssClass' => 'news-box news-page',
	        'ajaxUpdate'=>'true',
	        'pagerCssClass' => 'pagination-box',
	        'pager' => [
	            'header' => '',
	            'lastPageLabel' => '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
	            'firstPageLabel' => '<i class="fa fa-angle-double-left" aria-hidden="true"></i>',
	            'prevPageLabel' => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
	            'nextPageLabel' => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
	            'maxButtonCount' => 5,
	            'htmlOptions' => [
	                'class' => 'pagination'
	            ],
	        ]
	    ]
	); ?>
</div>