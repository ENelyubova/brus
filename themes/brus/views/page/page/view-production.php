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
<?php $images = $model->photos; ?>
<?php $childParent = $model->getChildParentList(); ?>

<div class="page-txt page-site content-site">
	<?php $this->widget(
        'bootstrap.widgets.TbBreadcrumbs',
        [
            'links' => $this->breadcrumbs,
        ]
    );?>

	<div class="product-inner">
		<div class="product-link">
			<?php if($childParent): ?>
				<?php foreach ($childParent as $item): ?>
					<div class="product-link__item">
						<?= $item; ?>
					</div>
					<?php endforeach; ?>
			<?php endif; ?>
		</div>
		
	    <h2 class="page-heading"><?= $model->title; ?></h2>
	
	    <div class="product-view">
	    	<div class="product-view__images">
	            <div class="gallery-carousel-main">
	    			<?php if($images): ?>
	                    <?php foreach ($images as $key => $image) : ?>
	                        <div>
	                            <img src="<?= $image->getImageUrl(); ?>" class="image-preview" data-fancybox="image" href="<?= $image->getImageUrl(); ?>">
	                        </div>
	                    <?php endforeach; ?>
	            	<?php endif; ?>
	            </div>
	            <div class="gallery-carousel-thumb slick-slider">
	    			<?php if($images): ?>
	                    <?php foreach ($images as $key => $image) : ?>
	                        <div class="gallery-carousel-thumb__item">
	                            <img src="<?= $image->getImageUrl(220, 90); ?>" class="image-preview" href="<?= $image->getImageUrl(); ?>">
	                        </div>
	                    <?php endforeach; ?>
	            	<?php endif; ?>
	            </div>
	    	</div>
	    	<div class="product-view__info">
	    		<?= $model->body; ?>
	    		<div class="product-view__info-price">
	    			Стоимость <div class="price"><?= $model->price; ?></div>
	    		</div>
	    		<div class="product-view__info-btn">
	    			<div class="btn-link item">
						<button class="btn btn-violet" data-toggle="modal" data-target="#callbackModal">Заказать установку</button>
						<span class="icon-arrow-pointing-to-right"></span>
					</div>
    				<a href="<?= $model->getDocumentUrl(); ?>">Документация</a>
	    		</div>
	    	</div>
	    </div>
	    
	    <ul class="myTab">
	    	<?php if($model->character) : ?>
	    		<li><a data-toggle='tab' href="#character">Характеристики</a></li>
	    	<?php endif; ?>
	    	<?php if($model->shema) : ?>
	    		<li><a data-toggle='tab' href="#shema">Схема установки</a></li>
	    	<?php endif; ?>
	    	<?php if($model->sertificate) : ?>
	    		<li><a data-toggle='tab' href="#sertificate">Сертификаты соответствия</a></li>
	    	<?php endif; ?>
	    	<?php if($model->delivery) : ?>
	    		<li><a data-toggle='tab' href="#delivery">Условия доставки</a></li>
	    	<?php endif; ?>
	    </ul>
	    <div class="tab-content">
	    	<?php if($model->character) : ?>
		    	<div class="tab-pane fade" id="character">
		    		<?= $model->character; ?>
		    	</div>
		    <?php endif ?>
	    	<?php if($model->shema) : ?>
		    	<div class="tab-pane fade shema" id="shema">
		    		<?= $model->shema; ?>
		    	</div>
		    <?php endif ?>
	    	<?php if($model->sertificate) : ?>
		    	<div class="tab-pane fade" id="sertificate">
		    		<?= $model->sertificate; ?>
		    	</div>
		    <?php endif ?>
	    	<?php if($model->delivery) : ?>
		    		<div class="tab-pane fade" id="delivery">
		    		<?= $model->delivery; ?>
		    	</div>
		    <?php endif ?>
	    </div>
	</div>
</div>

<?php Yii::app()->getClientScript()->registerScript("product-tab", "
        $('.myTab li').first().addClass('active');
        $('.tab-pane').first().addClass('active in');
        $('.gallery-carousel-main').slick({
            fade: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            arrows: false,
            dots: false,
            speed:600,
            asNavFor: $('.gallery-carousel-thumb'),
            responsive: [
            ]
        });
        $('.gallery-carousel-thumb').slick({
            fade: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            arrows: false,
            dots: false,
            speed:600,
            asNavFor: $('.gallery-carousel-main'),
            focusOnSelect: true,
            responsive: [
            ]
        });
"); ?>
