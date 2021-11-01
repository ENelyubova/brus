<?php if($pages) : ?>
	<div class="block-flex">
	    <div class="main-text">
	        <div class="main-title"><?= $pages->title; ?></div>
	        <div class="main-body"><?= $pages->body; ?></div>
	        <button class="btn btn-dafault repeat_captha" data-toggle="modal" data-target="#makeOrderModal">Сделать заказ</button>
	    </div>
	    <!-- <img src="<?= $pages->getImageUrl(); ?>" class="image-hover" href="<?= $pages->getImageUrl(); ?>"> -->
	</div>
<?php endif; ?>

