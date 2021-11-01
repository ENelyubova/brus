<div>
	<div class="transit-overlay"></div>
	<div class="item-img">
		<?= CHtml::image($data->image->getImageUrl(570, 460,true), $data->image->alt, ['href' => $data->image->getImageUrl(), 'class' => 'gallery-image']); ?>
		<div class="item-img-abs">
			<?=$data->image->name ?>
		</div>
		<div class="counterTrans"></div>
	</div>
</div>
