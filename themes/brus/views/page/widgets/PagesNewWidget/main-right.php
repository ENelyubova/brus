<?php if($pages) : ?>
    <div class="main-text">
        <div class="main-title"><?= $pages->title; ?></div>
        <div class="main-body"><?= $pages->body; ?></div>
        <button class="btn btn-dafault repeat_captha" data-toggle="modal" data-target="#makeOrderModal">Сделать заказ</button>
        <div class="label"><span class="icon-hand"></span>Наведите курсор</div>
    </div>
    <img src="<?= $pages->getIconUrl(); ?>" class="image" href="<?= $pages->getIconUrl(); ?>">
    <img src="<?= $pages->getImageUrl(); ?>" class="image-hover" href="<?= $pages->getImageUrl(); ?>">
<?php endif; ?>

