
<?php $this->widget('application.components.FtListView', [
		'id'=> 'news-box'.$categories,
	    'itemView' => '../../news/_item',
	    'dataProvider' => $dataProvider,
	    'itemsCssClass' => 'news-box',
	    'template' => '{items}{pager}',
	    'htmlOptions' => [
	        // "class" => ""
	    ],
	    'pagerCssClass' => 'pagination-box'.$categories,
	    // 'emptyText' => '',
	    // 'emptyTagName' => 'div',
	    'pager' => [
	        'class' => 'application.components.ShowMorePager',
	        'buttonText' => 'Показать <strong>все программы</strong>',
	        'wrapTag' => 'div',
	        'htmlOptions' => [
	            'class' => 'btn btn-all'
	        ],
	        'wrapOptions' => [
	            'class' => 'news-box-btn'
	        ],
	    ]
]); ?>



