<?php Yii::import('application.modules.zendsearch.ZendSearchModule'); ?>
<?= CHtml::beginForm(['/zendsearch/search/search'], 'get', ['class' => 'form-inline']); ?>
<?= CHtml::textField(
    'q',
    '',
    ['placeholder' => Yii::t('ZendSearchModule.zendsearch', 'Search...'), 'class' => 'form-control']
); ?>

<?= CHtml::endForm(); ?>

<span class="icon-search-3"></span>

