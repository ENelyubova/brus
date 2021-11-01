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

<div class="content-site">
    <div class="page-txt page-site">
        <?php $this->widget(
            'bootstrap.widgets.TbBreadcrumbs',
            [
                'links' => $this->breadcrumbs,
            ]
        );?>
        <div class="row">
            <div class="col-sm-12 col-xs-12">
                <h3><?= $model->title; ?></h3>
            </div>
        </div>
    	<div class="row" style="margin-top: 20px">
    		<div class="col-sm-6 col-xs-12">
        		<?= $model->body; ?>
    		</div>
    		<div class="col-sm-6 col-xs-12">
    			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4939.452343749061!2d55.0914515677122!3d51.756330588900646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x417bf0f2ccf77a7d%3A0xb6721977531cde86!2z0YPQuy4g0KfQuNGH0LXRgNC40L3QsCwgMTQsIDEwMSwg0J7RgNC10L3QsdGD0YDQsywg0J7RgNC10L3QsdGD0YDQs9GB0LrQsNGPINC-0LHQuy4sIDQ2MDAwMA!5e0!3m2!1sru!2sru!4v1579846827474!5m2!1sru!2sru" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    		</div>
    	</div>
    </div>
</div>
