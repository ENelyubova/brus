<div>
	<div class="slider-shadow"></div>
	<div class="main-slider">
		<div class="counterGal"></div>
		<div class="slider-info">
			<div class="slider-info__text">
				<label class="header-before"><?=$data->image->name ?></label>
				<h1><?=$data->image->alt ?></h1>
	        	<p><?=$data->image->description ?></p>
	        	<div class="btn-block">
	        		<button class="btn btn-red repeat_captha" data-toggle="modal" data-target="#writeUsModal">Оставить заявку</button>
	        		<?php if (Yii::app()->hasModule('contentblock')) : ?>
		                <?php $this->widget("application.modules.contentblock.widgets.ContentBlockWidget", ['code'=>'price']); ?>
		            <?php endif; ?>
	        	</div>
			</div>
	    </div>
		<?= CHtml::image($data->image->getImageUrl(1920,750), $data->image->alt, ['href' => $data->image->getImageUrl(), 'class' => 'slider-image']); ?>
	</div>
</div>
