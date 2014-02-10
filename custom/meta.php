<div class="my_meta_control">
	<label>キャッチコピー</label>
	<p>
		<?php $mb->the_field('yye_title'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</p>
	
	<label>イベント概要</label>
	<p>
		<?php $mb->the_field('yye_description'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="5"><?php $mb->the_value(); ?></textarea>
	</p>

	<label>会場</label>
	<p>
		<?php $mb->the_field('yye_place'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</p>

	<label>開催日</label>
	<p>
		<?php $mb->the_field('yye_date'); ?>
		<input type="text" class="input_yye_date" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</p>

	<label>開場/開演</label>
	<p>
		<?php $mb->the_field('yye_start'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</p>

	<label>料金</label>
	<p>
		<?php $mb->the_field('yye_price'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
	</p>

	<label>共演</label>
	<p>
		<?php $mb->the_field('yye_actors'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
	</p>

	<label>お問い合わせ</label>
	<p>
		<?php $mb->the_field('yye_contact'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
	</p>

	<label>その他情報</label>
	<p>
		<?php $mb->the_field('yye_etc'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
	</p>

	<label>キャッチ画像</label>
	<?php global $wpalchemy_media_access; ?>
	<?php $mb->the_field('imgurl'); ?>
	<?php $wpalchemy_media_access->setGroupName('nn')->setInsertButtonLabel('追加'); ?>
	<div class="media-box">
		<div class="pre-image">
		<?php if ($mb->get_the_value()): ?>
			<?php echo wp_get_attachment_image($mb->get_the_value()); ?>
		<?php else: ?>
			<img src="<?php echo get_stylesheet_directory_uri() . '/metaboxes/no-image.png' ?>" />
		<?php endif; ?>
			<div class="img-edit">
				<a href="<?php echo $wpalchemy_media_access->getButtonLink(); ?>" class="mediabutton-nn thickbox {label:'追加'}">編集</a>
			</div>
		</div>
		<?php echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
	</div>
   
</div>
<script>
jQuery(document).ready(function(){
	jQuery('.input_yye_date').datepicker({
		dateFormat : 'yy/mm/dd'
	});	
});
</script>