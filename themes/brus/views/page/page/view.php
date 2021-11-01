<?php
/* @var $model Page */
/* @var $this PageController */

if ($model->layout) {
    $this->layout = "//layouts/{$model->layout}";
}

$this->title = $model->meta_title ?: $model->title;
$this->breadcrumbs = $this->getBreadCrumbs();
$this->description = $model->meta_description ?: Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = $model->meta_keywords ?: Yii::app()->getModule('yupe')->siteKeyWords;
?>


<div class="page-txt page-site content-site">
	<?php $this->widget(
        'bootstrap.widgets.TbBreadcrumbs',
        [
            'links' => $this->breadcrumbs,
        ]
    );?>

    <h2 class="page-heading"><?= $model->title; ?></h2>
    <?= $model->body; ?>
</div>
