<?php
/**
 * Отображение для ./themes/default/views/news/news/news.php:
 *
 * @category YupeView
 * @package  YupeCMS
 * @author   Yupe Team <team@yupe.ru>
 * @license  https://github.com/yupe/yupe/blob/master/LICENSE BSD
 * @link     http://yupe.ru
 *
 * @var $this NewsController
 * @var $model News
 **/
?>
<?php
$this->title = ($model->meta_title) ? $model->meta_title : $model->title;
$this->description = $model->meta_description;
$this->keywords = $model->meta_keywords;
?>

<?php
$this->breadcrumbs = [
    Yii::t('NewsModule.news', 'Пресс-центр') => ['/news/news/index'],
    $model->title
];
?>

<div class="page-txt page-news content-site">
    <?php $this->widget('bootstrap.widgets.TbBreadcrumbs', [
            'links' => $this->breadcrumbs,
    ]); ?>
    <!-- <h2><?= Yii::t('NewsModule.news', 'Пресс-центр') ?></h2> -->
    <div class="news-body">
    	<div class="news-img">
            <img src="<?= $model->getImageUrl(); ?>">
        </div>
    	<div class="news-body__text">
    		<h1><?= CHtml::encode($model->title); ?></h1>
    		<?= $model->full_text; ?>
    	</div>
    </div>
</div>
